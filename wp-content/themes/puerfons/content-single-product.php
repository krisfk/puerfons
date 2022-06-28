<?php

$lang_code =ICL_LANGUAGE_CODE;

?>
<!-- <div class="product-page pt-xl-4 pt-lg-4 pt-md-0 pt-sm-0 pt-0 "> -->
<div class="product-page pt-0 ">
    <div class="product-top">
        <div
            class="product-title-bg <?php $images = get_field('product_gallery'); if( $images ){ echo "have-gallery"; } else { echo "no-gallery"; }; ?>">
            <div class="product-title-wrapper">

                <div class="row">

                    <div class="col-xl-5">
                        <!-- <div class="col-12 mt-3 mb-3 text-uppercase product-breadcrumb"> -->

                        <div class="product-breadcrumb text-uppercase">
                            <?php

$terms = wp_get_post_terms( get_the_id(), 'product_cat' );
$term  = reset($terms);
echo $term->name.' / '.get_field('main_title').' '.get_field('second_title');
?>
                        </div>
                        <?php 							
							if( $images ): ?>
                        <div class="product-flexslider-wrapper">


                            <?php
            // echo get_the_ID();
            if(get_field('best_seller')=='yes')
            {
?>
                            <div class="best-seller">

                                <div class="d-table w-100 h-100">
                                    <div class="d-table-cell align-middle"> Best <br>
                                        Seller
                                    </div>
                                </div>

                            </div>
                            <?php
            }
          ?>
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



                            <?php
                                if(get_field('product_warning'))
{
								echo '<div class="product-warning">'.get_field('product_warning').'</div>';

}?>


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
                        <h1 class="product-main-title text-left"><?php the_field("main_title"); ?></h1>

                        <?php if(get_field("second_title")){ ?><h3 class="product_second_title">
                            <?php the_field("second_title"); ?></h3><?php } ?>
                        <div class="product-line"></div>
                        <div class="product-quanity">

                            <?php
                        the_field('product_quanity');
                        ?>
                        </div>
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

                        //  echo $post->get_type();
						remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);

						do_action( 'woocommerce_single_product_summary' );
						
						?>

                        <div class="product-line"></div>

                        <?php
						if( have_rows('product_info') ):
							while ( have_rows('product_info') ) : the_row();

							?>
                        <div class="product-info">
                            <a href="javascript:void(0);" class="product-info-title">
                                <?php
							
							echo get_sub_field('product_info_title');
							?>
                                <!-- BENEFITS -->
                            </a>
                            <div class="product-info-content">
                                <?php
								
								echo get_sub_field('product_info_content');
								
								?>
                            </div>
                        </div>
                        <div class="product-line"></div>

                        <?php
						endwhile;
					endif;

							
						?>

                        <div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="product-title-wrapper">
            <div class="row">
                <div class="col-xl-5">
                </div>
                <div class="col-xl-7">
                    <div class="product-main-text">
                        <?php the_field("main_description"); ?>
                    </div>
                </div>
            </div>
        </div> -->
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
						// do_action( 'woocommerce_single_product_summary' );
						?>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="product-page-wrapper product-desc">
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
        </div> -->
    </div>
</div>
<div class="section">
    <div class="section-wrapper">
        <h3 class="related-title text-center">
            <?php if( get_locale() == "zh_TW"){ echo "相關產品"; } else { echo "YOU MAY ALSO LIKE"; }; ?>
        </h3>

        <div class=" product-list  text-center">
            <div class="d-flex justify-content-center">
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
                <!-- col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 -->
                <div class=" mb-3 grey-bg product-div">

                    <?php
            // echo get_the_ID();
            if(get_field('best_seller')=='yes')
            {
?>
                    <div class="best-seller">

                        <div class="d-table w-100 h-100">
                            <div class="d-table-cell align-middle"> Best <br>
                                Seller
                            </div>
                        </div>

                    </div>
                    <?php
            }
          ?>
                    <div class="product-thumbnail"
                        style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');">
                        <a href="<?php the_permalink(); ?>">
                            <!-- <img src="https://staging.puerfons.com/wp-content/themes/puerfons/img/thumbnail-scale.png"> -->
                        </a>
                    </div>
                    <div class="product-name"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></div>
                    <?php $product = wc_get_product(); ?>

                    <?php
                $product_type = $product->get_type();

                if($product_type=='simple')
                {?>


                    <div class="price mt-4">


                        <?php 
                    if($product->sale_price)
                    {
                        ?>
                        <div class="was-price">
                            <?php echo ($lang_code=='en') ?'was' : '原價';?>


                            <?php echo get_woocommerce_currency_symbol(); echo $product->regular_price; ?>
                        </div>

                        <div class="now-price mt-2">
                            <?php echo ($lang_code=='en') ?'now' : '減價';?>

                            <?php echo get_woocommerce_currency_symbol(); echo $product->sale_price; ?>
                        </div>

                        <?php
                    }
                    else{
                        ?>
                        <div class="now-price">
                            <?php echo ($lang_code=='en') ?'price' : '售價';?>
                            <?php echo get_woocommerce_currency_symbol(); echo $product->regular_price; ?>
                        </div>
                        <?php
                    }
                    ?>


                    </div>

                    <?php
                }
                else if($product_type=='variable')
                {

                    $variations = $product->get_available_variations();
                    $was_price=[];
                    $now_price=[];
                    // print_r($variations);
                
                    foreach ($variations as $variation) {
                        $display_regular_price = $variation['display_regular_price'];
                        $display_price = $variation['display_price'];
                        array_push($was_price,$display_regular_price );
                        array_push($now_price,$display_price );
                            }
    
                    ?>

                    <?php
                    if($was_price[0]==$now_price[0] &&$was_price[1]==$now_price[1])
                    {
                        ?>
                    <div class="price mt-4">



                        <div class="now-price mt-2">
                            <?php echo ($lang_code=='en') ?'price' : '售價';?>


                            <?php 
                                echo get_woocommerce_currency_symbol().$now_price[1].'/'.$now_price[0];

                                ?>
                        </div>



                    </div>
                    <?php
                    }
                    else
                    {
                        ?>
                    <div class="price mt-4">


                        <div class="was-price">
                            <?php echo ($lang_code=='en') ?'was' : '原價';?>


                            <?php 
echo $was_price[0].'/'.$was_price[1];
?>
                        </div>

                        <div class="now-price mt-2">
                            <?php echo ($lang_code=='en') ?'now' : '減價';?>


                            <?php 
                        echo get_woocommerce_currency_symbol().$now_price[1].'/'.$now_price[0];

?>
                        </div>



                    </div>
                    <?php
                    }
                    ?>



                    <?php
                }
                ?>


                    <div class="text-center mt-4 shop-now-btn-div">
                        <a href="<?php the_permalink(); ?>"
                            class="shop-now-btn"><?php echo ($lang_code=='en') ?'SHOP NOW' : '產品詳細';?>
                        </a>
                    </div>
                </div>
                <?php endwhile; endif; ?>
            </div>

        </div>
    </div>
</div>


<div class="section background-grey-div pb-5 learn-more-a-div">

    <div class="container text-center">
        <div class="pue-section-subheading text-center mt-5">
            <?php
        
        the_post();
        // echo get_field('product_warning');

        ?>



            <?php  echo ($lang_code=='en') ?'Learn more' : '了解更多';?>


        </div>

        <ul class="mt-3">




            <?php

                
                if( have_rows('product_learn_more') ):
                            while ( have_rows('product_learn_more') ) : the_row();
?>
            <li>
                <a href="javascript:void(0);">
                    <?php
                    
                    echo get_sub_field('product_learn_more_title');
               
                    ?>
                </a>
            </li>


            <?php
                        endwhile;
                    endif;
                            
                            
                            ?>


        </ul>

    </div>

</div>


<?php

if( have_rows('product_learn_more') ):
    while ( have_rows('product_learn_more') ) : the_row();

    echo get_sub_field('product_learn_more_content');
endwhile;
endif;?>



<?php

if(get_field('citation'))
{
    ?>
<div class="grey-bg pt-5 pb-5">
    <div class="container">

        <a href="javascript:void(0);" class="d-inline-block citation-a gold-subheading mb-3">
            <?php  echo ($lang_code=='en') ?'Citation' : '引文';?>

        </a>
        <div class="citation-content">
            <?php echo get_field('citation');?>
        </div>


    </div>
</div>
<?php
}
?>


<!----->

<!----->

<!----->


<!---->



<script type="text/javascript">
var $ = jQuery;
$(function() {

    if ($('.variations').size() > 0) {
        $('p.price').fadeOut(0);
    }

    $('.product-info-title').click(function() {
        $('.product-info-title').removeClass('active');
        $(this).toggleClass('active');
        $('.product-info').find('.product-info-content').fadeOut(0);

        if ($(this).hasClass('active')) {
            $(this).closest('.product-info').find('.product-info-content').slideDown(200);

        } else {
            $(this).closest('.product-info').find('.product-info-content').fadeOut(0);

        }
    });

    $('.product-info-title').eq(0).click();

    // $('.learn-more-info').fadeOut(0);
    $('.learn-more-a-div a').click(function() {

        var idx;
        idx = $(this).closest('li').index();

        // $('.learn-more-info').fadeOut(0);
        // $('.learn-more-info').eq(idx).slideDown(1000);
        var to_scroll_top = $('.learn-more-info').eq(idx).offset().top;
        // alert(to_scroll_top);
        $('html,body').animate({
            scrollTop: to_scroll_top
        }, 500);


    });
    $('.citation-content').fadeOut(0);

    $('.citation-a').click(function() {
        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            // $(this).closest('.product-info').find('.product-info-content').slideDown(200);
            $('.citation-content').slideDown(200);
        } else {
            $('.citation-content').fadeOut(0);

            // $(this).closest('.product-info').find('.product-info-content').fadeOut(0);

        }
    })

    $('.flex-control-thumbs li').append('<div class="tri"></div>');

    $('.flex-control-thumbs img').click(function() {
        // alert('1');

        $('.flex-control-thumbs li').removeClass('active');
        $(this).parent('li').addClass('active');

    });

    $(".flex-control-thumbs img").bind("tap", function() {

        $('.flex-control-thumbs li').removeClass('active');
        $(this).parent('li').addClass('active');

    });



    $('.flex-control-thumbs li').click(function() {});


    $('.flex-control-thumbs li').eq(0).addClass('active');
});
</script>

<style type="text/css">
.slick-track {
    display: flex !important;
}

.slick-slide {
    height: inherit !important;
}
</style>