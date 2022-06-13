<?php get_header("puerfons"); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="page-banners">

    <!-- <div>
        <img src="https://staging.puerfons.com/wp-content/uploads/sites/9/2020/11/health-hub-banner-txt.jpg" alt="">
    </div> -->

    <!-- </div class="single-news-container"> -->

    <div class="container">

        <div class="pue-section-subheading mt-5 mb-5"><?php the_title(); ?></div>

        <div class="single-news-container">
            <div class="news-meta">By <?php the_author_posts_link(); ?> | <?php the_time('F jS, Y'); ?> |
                <?php the_category(', '); ?></div>
            <div class="news-content"><?php the_content(); ?></div>
        </div>
    </div>
    <!-- 
<div class="news-section">

    <div class="news-section-wrapper">
        <div class="news-title"><?php the_title(); ?></div>
        <div class="news-meta">By <?php the_author_posts_link(); ?> | <?php the_time('F jS, Y'); ?> |
            <?php the_category(', '); ?></div>
        <div class="news-content"><?php the_content(); ?></div>
    </div>
</div> -->
    <?php endwhile; endif; ?>
    <?php get_footer("puerfons"); ?>