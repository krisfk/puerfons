<?php get_header("puerfons"); ?>
<div class="news-section">
    <div class="news-section-wrapper">
        <h3 class="section-title">
            <?php $categories = get_the_category(); $category_name = $categories[0]->slug ; echo $categories[0]->name; ?>
        </h3>

        <div class="container">

            <div class="row">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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

                <?php endwhile; endif; ?>

                <div class="text-center w-100">
                    <?php the_posts_pagination(); ?>
                </div>
            </div>
        </div>
        <!-- </div> -->
        <!-- </div> -->
        <style type="text/css">
        header,
        .section-scribe,
        footer {
            /* display: none; */
        }
        </style>


        <?php get_footer("puerfons"); ?>