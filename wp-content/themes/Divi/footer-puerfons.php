<div class="section-scribe">
	<div class="section-wrapper">
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<?php
					$lang = 1551;
					if( get_locale() == "zh_TW" ){ $lang = 1720; }
					the_field("subscription_content",$lang);
				?>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<?php if( get_locale() == "zh_TW" ){ echo do_shortcode("[sibwp_form id=2]"); } else { echo do_shortcode("[sibwp_form id=1]"); }?>
			</div>
		</div>
	</div>
</div>
<footer>
	<div class="footer-top">
		<div class="footer-wrapper">
			<div class="row">
				<?php

					if( have_rows('footer_widget', $lang) ):

					    // Loop through rows.
					    while ( have_rows('footer_widget', $lang)) : the_row();
							?>
								<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
									<?php the_sub_field('widget_content', $lang); ?>
						    	</div>
					    	<?php
					    endwhile;

					endif;
				?>
			</div>
		</div>
	</div>	
	<div class="footer-bottom">
		<div class="footer-wrapper">
			<div class="copyright">
				Copyright 2020. Health Elite Club Ltd. All Rights Reserved.
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
