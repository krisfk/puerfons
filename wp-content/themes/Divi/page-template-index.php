<?php
/*
Template Name: index page
*/

get_header("puerfons");
?>
<?php if(get_field('coupons_msg')){ ?><div class="coupon-msg"><?php the_field('coupons_msg'); ?></div><?php }?>
<div class="index-banner">
	<?php

	// Check value exists.
	if( have_rows('banner') ):

	    // Loop through rows.
	    while ( have_rows('banner') ) : the_row();

	        ?>
	        	<div class="index-banner-wrapper">
					<div class="index-banner-bg" style="background-image:url('<?php the_sub_field('bg'); ?>');">
					</div>
					<div class="index-banner-content-box">
						<?php if(get_sub_field('product_image')){ ?><img src="<?php the_sub_field('product_image'); ?>" /><?php } ?>
						<div class="big-text">
							<h1><span><?php the_sub_field('text_1'); ?></span></h1>
							<h3><span><?php the_sub_field('text_2'); ?></span></h3>
						</div>
						<?php if(get_sub_field('text_3')){ ?><span><?php the_sub_field('text_3'); ?></span><?php } ?>
						<?php if(get_sub_field('button')){ ?><a class="btn" href="<?php the_sub_field('button_link'); ?>">
							<?php the_sub_field('button'); ?>
						</a>
						<?php } ?>
					</div>	
				</div>
	        <?php
	    // End loop.
	    endwhile;

	endif;
	?>
	
</div>
<?php wp_footer(); ?>
</body>
</html>