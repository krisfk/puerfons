<?php get_header("puerfons"); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="news-section">
	<div class="news-section-wrapper">
		<div class="news-title"><?php the_title(); ?></div>
		<div class="news-meta">By <?php the_author_posts_link(); ?> | <?php the_time('F jS, Y'); ?> | <?php the_category(', '); ?></div>
		<div class="news-content"><?php the_content(); ?></div>
	</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer("puerfons"); ?>
