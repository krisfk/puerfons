<?php
/*
Template Name: FAQs
*/
get_header("puerfons");

?>
<div class="custom-section">
	<div class="custom-section-wrapper">
		<h3 class="section-title">
			<?php the_title(); ?>
		</h3>
		<div class="row">
			<div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
				<div class="faq-menu">
				<?php

					$i=1;

					// Check value exists.
					if( have_rows('section') ):

					    // Loop through rows.
					    while ( have_rows('section') ) : the_row();

					    	?>
					    	<a href="#section-<?php echo $i; $i++;?>"><?php the_sub_field("section_title"); ?></a>
					    	<?php

					    endwhile;

					endif;

				?>
				</div>
			</div>
			<div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-12">
				<?php

					$i=1;

					// Check value exists.
					if( have_rows('section') ):

					    // Loop through rows.
					    while ( have_rows('section') ) : the_row();

					    	?>
					    	<div id="section-<?php echo $i; $i++;?>">

					    		<h3><?php the_sub_field("section_title"); ?></h3>

					    		<?php the_sub_field("section_content"); ?>
					    		
					    	</div>
					    	<?php

					    endwhile;

					endif;

				?>		
			</div>
		</div>
		<?php

			// Check value exists.
			if( have_rows('section') ):

			    // Loop through rows.
			    while ( have_rows('section') ) : the_row();



			    endwhile;

			endif;

		?>
	</div>
</div>



<?php

get_footer("puerfons");
