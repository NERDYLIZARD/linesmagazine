<?php
$category = get_queried_object();
$category_feature_image = get_field('category_feature_image', $category->taxonomy . '_' . $category->term_id );

// provide class and background image according to availability of feature image
$category_header_class = 'primary-header ';
$category_header_class .= $category_feature_image ? 'image-feature-background overlay-dark' : 'no-feature-image';

$category_feature_image_style = $category_feature_image ? "background-image: url('$category_feature_image');" : '';
?>

<section class="<?php echo $category_header_class?>"
         style="<?php echo $category_feature_image_style?>">
	<?php the_archive_title( '<h1 class="primary-title">', '</h1>' ); ?>

	<!--    if child-->
	<?php if ( 0 < $category->parent ) :

		$parent_category_id = $category->parent;
		$parent_category_name = get_cat_name($parent_category_id);
		$parent_category_link = get_category_link($parent_category_id); ?>
		<p class="secondary-title"><a href="<?php echo $parent_category_link ?>"><?php echo $parent_category_name; ?></a></p>

	<?php endif; ?>

</section>