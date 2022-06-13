<?php
/*
Template Name: contact-us
*/

get_header("puerfons");

?>

<div class="page-banners">

    <?php


if( have_rows('banners') ):
    while ( have_rows('banners') ) : the_row();
    
    $img_url = wp_get_attachment_url(get_sub_field('banner_image'));
    
    
    ?>

    <div>
        <img src="<?php echo $img_url;?>" alt="">
    </div>
    <?php
endwhile;
endif;
    ?>

</div>

<div class="container">

    <div class="pue-section-subheading mt-5 mb-5">Contact Us</div>
    <div><img src="<?php the_field('map_image'); ?>" /></div>


    <div class="row">

        <div class="col-6">
            Address: <br>
            Office A, 25/F, 235 Wing Lok Street Trade Centre, 235 Wing Lok Street, Sheung Wan, Hong Kong <br>
            +852 3793 3980 <br> <br>

            Phone: <br>
            +852 3793 3980
        </div>
        <div class="col-6 contact-form">
            <?php if(get_locale()=="zh_TW"){ echo do_shortcode('[contact-form-7 id="1783" title="中文contact form"]'); }else{ echo do_shortcode('[contact-form-7 id="1466" title="english contact form"]'); }?>

        </div>
    </div>

</div>

<!-- <div class="page-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/contact-banner-bg.jpg');">
	<div class="page-title">
		<h3>PUERFONS</h3>
		<h1><?php the_title(); ?></h1>
	</div>
</div> -->



<div class="section">
    <div class="section-wrapper">
        <div class="map"><img src="<?php the_field('map_image'); ?>" /></div>
        <div class="row">
            <?php

			// Check value exists.
			if( have_rows('contact_info_box') ):

			    // Loop through rows.
			    while ( have_rows('contact_info_box') ) : the_row();

			        ?>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="contact-box">
                    <?php the_sub_field("content"); ?>
                </div>
            </div>
            <?php

			    // End loop.
			    endwhile;

			endif;
			?>

        </div>
        <hr />
        <?php if(get_locale()=="zh_TW"){ echo do_shortcode('[contact-form-7 id="1783" title="中文contact form"]'); }else{ echo do_shortcode('[contact-form-7 id="1466" title="english contact form"]'); }?>

    </div>
</div>

<?php

get_footer("puerfons");