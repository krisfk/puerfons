<?php get_header("puerfons"); ?>
<div class="custom-section">
	<div class="custom-section-wrapper">
            <?php if ( have_posts() ) : ?>
                <?php if(get_locale() == "zh_TW") :?>
                <h3 class="section-title"><?php printf( __( '搜尋結果: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
                <?php else: ?>
                <h3 class="section-title"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
                <?php endif; ?>    
                

                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                	<hr/>
                    <a href="<?php the_permalink();?>">
						<?php the_title(); ?><br/>                    		
                    	<?php the_excerpt(); ?>
                    </a>

                <?php endwhile; ?>


            <?php else : ?>
                <?php if(get_locale() == "zh_TW") :?>
                    <h3>找不到相關結果。</h3>
                <?php else: ?>
                    <h3>Not found.</h3>
                <?php endif; ?>  

            <?php endif; ?>

	</div>
</div>
<?php get_footer("puerfons"); ?>