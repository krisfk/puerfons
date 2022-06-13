<form action="/" method="get">
	<?php if(get_locale() == "zh_TW") :?>
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="搜尋" /><?php else: ?>
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search" />
 	<?php endif; ?>
    <div class="btn-close"></div>
</form>