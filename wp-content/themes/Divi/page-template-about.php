<?php
/*
Template Name: about-us
*/

get_header("puerfons");

?>
<div class="page-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/about-banner-bg.jpg');">
	<div class="page-title">
		<h3>PUERFONS</h3>
		<h1><?php the_title(); ?></h1>
	</div>
</div>
<div id="brand" class="section">
	<div class="section-wrapper">
		<h3 class="section-title">
			<?php the_field("section1title"); ?>
		</h3>
		<?php the_field("section1content"); ?>
	</div>
</div>
<div id="aging" class="section bg-gradient">
	<div class="section-wrapper">
		<h3 class="section-title">
			<?php the_field("section2title"); ?>
		</h3>
		<?php the_field("section2content"); ?>
		<div class="row justify-content-center about-box">			
			<?php
				// Check value exists.
				if( have_rows('section2icon') ):

				    // Loop through rows.
				    while ( have_rows('section2icon') ) : the_row();

					?>
						<div class=" col-xl-2 col-lg-2 col-md-2 col-sm-4 col-6 ">
							<div class="img-box"><img src="<?php the_sub_field("img"); ?>"/></div>
							<?php the_sub_field("icon_description"); ?>
						</div>
					<?php
				    // End loop.
				    endwhile;

				endif;

			?>
		</div>
	</div>
</div>
<div id="team" class="section bg-hr">
	<div class="section-wrapper">
		<h3 class="section-title">
			<?php the_field("section3title"); ?>
		</h3>
		<?php the_field("section3content"); ?>
		<div class="row justify-content-center about-box scientist-box">			
			<?php

				$i=0;
				// Check value exists.
				if( have_rows('section3scientist') ):

				    // Loop through rows.
				    while ( have_rows('section3scientist') ) : the_row();

					?>
						<div class=" col-xl-2 col-lg-2 col-md-2 col-sm-4 col-4 ">
							<div class="img-box  <?php if( $i == 0 ){ echo "active"; } $i++; ?>"><img src="<?php the_sub_field("img"); ?>"/></div>
						</div>
					<?php
				    // End loop.
				    endwhile;

				endif;

			?>
		</div>
		<div class="scientist-content">
			<?php

				$i=0;
				// Check value exists.
				if( have_rows('section3scientist') ):

				    // Loop through rows.
				    while ( have_rows('section3scientist') ) : the_row();

					?>
				        <div class="scientist-profile <?php if( $i == 0 ){ echo "active"; } $i++; ?>">
							<h2><?php the_sub_field("scientist_name"); ?></h2>
							<?php the_sub_field("profile"); ?>
						</div>
					<?php
				    // End loop.
				    endwhile;

				endif;

			?>
		</div>
	</div>
</div>
<div id="support" class="section">
	<div class="section-wrapper">
		<h3 class="section-title">
			<?php the_field("section4title"); ?>
		</h3>
		<div class="flexslider">
			<ul class="slides">
				<?php

					// Check value exists.
					if( have_rows('section4supporter') ):

					    // Loop through rows.
					    while ( have_rows('section4supporter') ) : the_row();

						?>
							<li>
								<div class="row">
									<div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
										<img src="<?php the_sub_field('img'); ?>" >
									</div>
									<div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-12">
										<div class="supporter-box">
											<div class="supporter-msg">
												<?php the_sub_field('msg'); ?>
											</div>
											<div class="supporter-person"><?php the_sub_field('name'); ?></div>
											<div class="supporter-title"><?php the_sub_field('supporter_title'); ?></div>
										</div>
									</div>
								</div>
							</li>
						<?php
					    // End loop.
					    endwhile;

					endif;

				?>
			</ul>
		</div>
		<h3 class="section-title">
			<span><?php the_field("section4other_title"); ?></span>
		</h3>
		<div class="row other-support justify-content-center">
			<?php

				// Check value exists.
				if( have_rows('section4other') ):

				    // Loop through rows.
				    while ( have_rows('section4other') ) : the_row();

					?>
				        <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
							<div class="img-box">
								<img src="<?php the_sub_field('img'); ?>" />
								<?php the_sub_field('name'); ?>
							</div>
						</div>	
					<?php
				    // End loop.
				    endwhile;

				endif;

			?>
		</div>
	</div>
</div>
<?php

get_footer("puerfons");
