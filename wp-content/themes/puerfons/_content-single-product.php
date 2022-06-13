<div class="product-page"
    style="background-image: url('<?php echo get_template_directory_uri();?>/img/product-bg.png');">
    <div class="product-top">
        <div
            class="product-title-bg <?php $images = get_field('product_gallery'); if( $images ){ echo "have-gallery"; } else { echo "no-gallery"; }; ?>">
            <div class="product-title-wrapper">
                <div class="row">
                    <div class="col-xl-5">
                        <?php 							
							if( $images ): ?>
                        <div class="product-flexslider-wrapper">
                            <div class="product-flexslider">
                                <ul class="slides">
                                    <?php foreach( $images as $image ): ?>
                                    <li data-thumb="<?php echo esc_url($image['sizes']['thumbnail']); ?>">
                                        <img src="<?php echo esc_url($image['url']); ?>"
                                            alt="<?php echo esc_attr($image['alt']); ?>" />
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <?php 
							else: 
								?>
                        <div class="product-img">
                            <?php
								the_post_thumbnail( 'large' ); 
							?>
                        </div>
                        <?php
							endif; 
						?>

                    </div>
                    <div class="col-xl-7">
                        <h1><?php the_field("main_title"); ?></h1>
                        <?php if(get_field("second_title")){ ?><h3><?php the_field("second_title"); ?></h3><?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-title-wrapper">
            <div class="row">
                <div class="col-xl-5">
                </div>
                <div class="col-xl-7">
                    <div class="product-main-text">
                        <?php the_field("main_description"); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-page-wrapper other-product-info">
            <div class="row">
                <div class="col-xl-5">

                </div>
                <div class="col-xl-7">
                    <div class="summary entry-summary">
                        <?php
						/**
						 * Hook: woocommerce_single_product_summary.
						 *
						 * @hooked woocommerce_template_single_title - 5
						 * @hooked woocommerce_template_single_rating - 10
						 * @hooked woocommerce_template_single_price - 10
						 * @hooked woocommerce_template_single_excerpt - 20
						 * @hooked woocommerce_template_single_add_to_cart - 30
						 * @hooked woocommerce_template_single_meta - 40
						 * @hooked woocommerce_template_single_sharing - 50
						 * @hooked WC_Structured_Data::generate_product_data() - 60
						 */
						do_action( 'woocommerce_single_product_summary' );
						?>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-page-wrapper product-desc">
            <div class="row">
                <div class="col-xl-5">
                    <div class="scroll-menu">
                        <h3><?php if(get_locale()=="zh_TW"){ echo "了解更多 :"; }else{ echo "LEARN MORE :"; } ?></h3>
                        <ul>
                            <?php

							// Check value exists.
							if( have_rows('content_module') ):
								$i=1;
							    // Loop through rows.
							    while ( have_rows('content_module') ) : the_row();

							    	?><li class="<?php if($i == 1){ echo "active"; } ?>"><a
                                    href="#scroll<?php echo $i; $i++?>"><?php the_sub_field("title"); ?></a></li><?php

							    // End loop.
							    endwhile;

							endif;
							?>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7">
                    <?php

						// Check value exists.
						if( have_rows('content_module') ):
							$i=1;
						    // Loop through rows.
						    while ( have_rows('content_module') ) : the_row();

						    	?>
                    <div id="scroll<?php echo $i; ?>"
                        class="hidden-content-box <?php if($i == 1){ echo "active"; } $i++; ?>">
                        <h3><?php the_sub_field("title"); ?></h3>
                        <?php the_sub_field("content"); ?>
                    </div>
                    <?php

						    // End loop.
						    endwhile;

						endif;
					?>
                </div>
            </div>
            <hr />
        </div>
    </div>
</div>
<div class="section">
    <div class="section-wrapper">
        <h3 class="related-title">
            <?php if( get_locale() == "zh_TW"){ echo "相關產品"; } else { echo "RELATED PRODUCTS"; }; ?>
        </h3>

        <div class="row product-list row-eq-height">

            <?php 
			get_field('show_related_product');
				$args = array(
				    'posts_per_page' => 4,
				    'post__not_in' => array( $post->ID ),
				    'tax_query' => array(
				        'relation' => 'AND',
				        array(
				            'taxonomy' => 'product_cat',
				            'field' => 'id',
				            'terms' => get_field('show_related_product'),
				            'orderby'   => 'meta_value'
				        )
				    ),

				    'post_type' => 'product',
				    'orderby' => 'meta_value_num',
				    'order' => 'ASC'
				);
				$the_query = new WP_Query( $args );
			?>
            <?php if ( $the_query->have_posts() ) :  while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                <div class="product-thumbnail"
                    style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/thumbnail-scale.png">
                    </a>
                </div>
                <div class="product-name"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></div>
                <?php $product = wc_get_product(); ?>
                <div class="price"><span
                        class="ori-price"><?php echo get_woocommerce_currency_symbol(); echo $product->regular_price; ?></span><span><?php echo get_woocommerce_currency_symbol(); echo $product->sale_price; ?></span>
                </div>
            </div>
            <?php endwhile; endif; ?>

        </div>
    </div>
</div>