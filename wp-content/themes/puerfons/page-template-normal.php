<?php
/*
Template Name: normal page
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

    <div class="pue-section-subheading mt-5 mb-5"> <?php the_title();?></div>
    <?php the_content();?>
</div>

<script type="text/javascript">
var $ = jQuery;
$(function() {
    $('.page-banners').slick({
        dots: true,
        arrows: false,
        pauseOnFocus: false,
        infinite: true,
        speed: 800,
        autoplaySpeed: 5000,
        autoplay: true,
        fade: true,
        cssEase: 'ease-out',
        pauseOnHover: false
    })

})
</script>




<?php

get_footer("puerfons");