<?php
/*
Template Name: contact-us
*/

get_header("puerfons");
$lang_code =ICL_LANGUAGE_CODE;

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

<div class="container mb-5">

    <div class="pue-section-subheading mt-5 mb-5">

        <?php echo ($lang_code=='en') ?'Contact Us' : '聯絡我們';?>

    </div>
    <div><img src="<?php the_field('map_image'); ?>" /></div>


    <div class="row mt-3">

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-3 ">
            <!-- Address: <br>
            Office A, 25/F, 235 Wing Lok Street Trade Centre, 235 Wing Lok Street, Sheung Wan, Hong Kong <br>
            +852 3793 3980 <br> <br>

            Phone: <br>
			+852 3793 3980 -->
            <?php
			echo get_field('contact_info');
			?>

        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12  contact-form">
            <?php if(get_locale()=="zh_TW"){ echo do_shortcode('[contact-form-7 id="1783" title="中文contact form"]'); }else{ echo do_shortcode('[contact-form-7 id="1466" title="english contact form"]'); }?>

        </div>
    </div>

</div>


<?php

get_footer("puerfons");