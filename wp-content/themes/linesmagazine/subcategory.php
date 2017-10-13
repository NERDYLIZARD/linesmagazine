<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package linesmagazine
 */

get_header(); ?>

<?php
if ( have_posts() ) : ?>

  <?php
    $category = get_the_category()[0];
    $category_feature_image = get_field('category_feature_image', $category->taxonomy . '_' . $category->term_id );

    // provide class and background image according to availability of feature image
    $category_header_class = 'category-header ';
    $category_header_class .= $category_feature_image ? 'image-feature overlay-dark' : 'no-feature-image';

    $category_feature_image_style = $category_feature_image ? "background-image: url('$category_feature_image');" : '';
  ?>

  <section class="<?php echo $category_header_class?>"
            style="<?php echo $category_feature_image_style?>">
    <?php the_archive_title( '<h1 class="primary-title">', '</h1>' ); ?>

<!--    if child-->
    <?php
      // get parent category's name & link
      $parent_category_id = $category->parent;
      $parent_category_name = get_cat_name($parent_category_id);
      $parent_category_link = get_category_link($parent_category_id);
    ?>
    <p class="secondary-title"><a href="<?php echo $parent_category_link ?>"><?php echo $parent_category_name; ?></a></p>

  </section>



  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row row-card">

      <?php
      /* Start the Loop */
      while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', get_post_format() );

      endwhile; ?>

      </div><!--          .row-->
    </div><!--        .container-->
  </section>



<?php
  else :
    get_template_part( 'template-parts/content', 'none' );
  endif; ?>

<?php

get_footer();