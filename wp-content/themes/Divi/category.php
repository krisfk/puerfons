<?php get_header("puerfons"); ?>
<div class="news-section">
	<div class="news-section-wrapper">
		<h3 class="section-title">
			<?php $categories = get_the_category(); $category_name = $categories[0]->slug ; echo $categories[0]->name; ?>
		</h3>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
			<a href="<?php the_permalink(); ?>">		
				<div class="news-thumbnail">
					<?php the_post_thumbnail("large"); ?>
				</div>
				<div class="news-title"><?php the_title(); ?></div>
				<div class="news-meta">By <?php the_author_posts_link(); ?> | <?php the_time('F jS, Y'); ?> | <?php the_category(', '); ?></div>
				<div class="excerpt"><?php the_excerpt(); ?></div>	
			</a>		
		<?php endwhile; endif; ?>
		<?php the_posts_pagination(); ?>
	</div>
</div>
<?php get_footer("puerfons"); ?>