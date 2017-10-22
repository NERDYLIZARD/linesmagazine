<?php

	$action = home_url( '/' );

	// if search on category will result only in that category
	// else e.g 404, home, magazine will result global search
//	if (is_category())
//		$action = get_category_link( get_queried_object() );

?>

<form id="search-form" action="<?php echo $action; ?>" method="get">
	<span class="close-icon"><i class="fa fa-times fa-lg fa-light"></i></span>
	<input type="text" name="s" id="search" placeholder="Search" value="<?php the_search_query(); ?>" />

<!--	post type-->
	<input type="hidden" value="post" name="post_type" id="post_type" />
</form>