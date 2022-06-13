<?php
/*
Template Name: ingredients
*/

get_header("puerfons");

?>

<div class="page-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/ingredients-banner-bg.jpg');">
	<div class="page-title">
		<h3>PUERFONS</h3>
		<h1><?php the_title(); ?></h1>
	</div>
</div>
<div class="section">
	<div class="section-wrapper">
		<div class="row">
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
				<div class="ingredients-pic">
					<img src="<?php the_field("image_on_left"); ?>"/>
				</div>			
			</div>
			<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
				<h3 class="section-title">
					<?php the_field("ingredient_title"); ?>
					<?php if(get_field("ingredient_sub_title")){ ?><span>- <?php the_field("ingredient_sub_title"); ?></span><?php } ?>
				</h3>
				<?php the_field("main_content"); ?> 
			</div>
		</div>
	</div>
</div>
<?php if( get_field("section_2_title") || get_field("section_2_content")) {?>
<div class="section bg-gradient">
	<div class="section-wrapper">
		<div class="row">
			<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
				<h3 class="section-title">
					<span><?php the_field("section_2_title"); ?></span>
				</h3>
				<div class="row it-can">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<?php the_field("section_2_content"); ?>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">		
				<div class="ingredients-pic2">
					<img src="<?php the_field("image_on_right"); ?>"/>
				</div>			
			</div>
		</div>
	</div>
</div>
<?php } ?>
<?php if( get_field("more_content") ){ ?>
<div class="section">
	<div class="section-wrapper">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<?php the_field("more_content")?>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<div class="section">
	<div class="section-wrapper">
		<h3 class="related-title">
			<?php if( get_locale() == "zh_TW"){ echo "相關產品"; } else { echo "RELATED PRODUCTS"; }; ?>
		</h3>
		<div class="row product-list row-eq-height">
			<?php 
				$term = get_field("product_category_slug");
				$args = array(
				    'posts_per_page' => 4,
				    'tax_query' => array(
				        'relation' => 'AND',
				        array(
				            'taxonomy' => 'product_cat',
				            'field' => 'id',
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
