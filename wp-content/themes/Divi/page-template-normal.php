<?php
/*
Template Name: normal page
*/

get_header("puerfons");

?>
<div class="custom-section">
	<div class="custom-section-wrapper">
		<h3 class="section-title">
			<?php the_title(); ?>
		</h3>
		<?php the_content(); ?>
	</div>
</div>



<?php

get_footer("puerfons");
