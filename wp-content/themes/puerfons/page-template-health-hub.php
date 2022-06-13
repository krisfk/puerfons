<?php
/*
Template Name: health hub page
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

<div class="container">

    <div class="pue-section-subheading mt-5 mb-5">

        <?php echo get_the_title();?>
        <?php //echo ($lang_code=='en') ?'HEALTH HUB' : '健康會';?>

    </div>



    <?php 
				$cat_id = get_field("post_category");
                $args=array(
                    'cat' => $cat_id,
                    'paged' => get_query_var('paged') ? get_query_var('paged') : 1 
                );              
             
				$the_query = new WP_Query( $args );
            ?>
    <div class="row">
        <?php 
    
    if ( $the_query->have_posts() ) {  while ( $the_query->have_posts() ) { 
        
        $the_query->the_post();
        
?>
        <div class="col-6">
            <a href="<?php the_permalink(); ?>" target="_parent">
                <div class="news-thumbnail">
                    <?php the_post_thumbnail("large"); ?>
                </div>



                <div class="news-title mt-3 mb-3"><?php the_title(); ?></div>
                <div class="news-meta mt-3 mb-3">By <?php the_author_posts_link(); ?> |
                    <?php the_time('F jS, Y'); ?> |
                    <?php the_category(', '); ?></div>
                <div class="excerpt"><?php the_excerpt(); ?></div>
            </a>
        </div>
        <?php    
    }}?>
    </div>

    <!-- <div class="news-section-wrapper"> -->
    <div class="nav-links justify-content-center mt-3">
        <?php 

    $big = 999999999; // need an unlikely integer
    echo paginate_links( array(
    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $the_query->max_num_pages
    ) );

    wp_reset_postdata();
    // echo ($lang_code=='en') ?'<iframe id="iframe1" class="w-100" src="https://staging.puerfons.com/category/health-hub-zh/?lang=zh-hant" frameborder="0"></iframe>' : '<iframe id="iframe1" class="w-100" src="https://staging.puerfons.com/category/health-hub/?lang=zh-hant" frameborder="0"></iframe>';
    ?>
    </div>
    <!-- </div> -->



</div>

<!-- <div class="custom-section">
    <div class="custom-section-wrapper">
        <h3 class="section-title">
            <?php //the_title(); ?>
        </h3>
        <?php //the_content(); ?>
    </div>
</div> -->
<script type="text/javascript">
var $ = jQuery;


function autoResize() {
    $('#iframe1').height($('#iframe1').contents().height());
    $('#iframe2').height($('#iframe2').contents().height());
}

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

    $('#iframe1').load(function() {
        $(this).height($(this).contents().height());
        $(this).width($(this).contents().width());
    });

    $('#iframe2').load(function() {
        $(this).height($(this).contents().height());
        $(this).width($(this).contents().width());
    });




})
</script>




<?php

get_footer("puerfons");