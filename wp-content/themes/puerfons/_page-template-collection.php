<?php
/*
Template Name: product collection page
*/

get_header("puerfons");

?>

<div class="page-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/products-banner-bg.jpg');">
	<div class="page-title">
		<h3>PUERFONS</h3>
		<h1><?php the_title(); ?></h1>
	</div>
</div>
<div class="section">
	<div class="section-wrapper">		
		<div class="row product-list row-eq-height">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<?php the_content(); ?>
			</div>
			<?php 
				$term = get_field("product_category_slug");
				$args = array(
				    'posts_per_page' => 4,
				    'tax_query' => array(
				        'relation' => 'AND',
				        array(
				            'taxonomy' => 'product_cat',
				            'field' => 'slug',
				            'terms' => $term,
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
					<div class="product-thumbnail" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/thumbnail-scale.png">
						</a>
					</div>
					<div class="product-name"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></div>
					<?php $product = wc_get_product(); ?>					
					<div class="price"><span class="ori-price"><?php echo get_woocommerce_currency_symbol(); echo $product->regular_price; ?></span><span><?php echo get_woocommerce_currency_symbol(); echo $product->sale_price; ?></span></div>
				</div>
		    <?php endwhile; endif; ?>
		</div>
	</div>
</div>
<?php

get_footer("puerfons");
