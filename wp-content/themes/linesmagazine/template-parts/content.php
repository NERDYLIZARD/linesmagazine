<?php
/**
 * Template part for displaying posts (list of post excerpt)
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package linesmagazine
 */

?>

<div class="card shadow-box">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div id="post-preview">

	    <?php if (has_post_thumbnail()) : ?>
      <a href="<?php the_permalink() ?>">
        <div class="image-wrapper">
          <?php
//            the_post_thumbnail();
//            $post_thumbnail_id = get_post_thumbnail_id();
//            $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
            ?>
<!--            <img src="--><?php //echo $post_thumbnail_url ?><!--" alt="">-->
            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
        </div>
      </a>
  	  <?php endif; ?>

      <div class="post-info">
        <?php $category = get_the_category()[0] ?>
        <a class="post-category" href="<?php get_category_link($category->cat_ID) ?>"><?php echo $category->cat_name ?></a>
        <p class="post-author-prefix"><?php the_author_posts_link(); ?></p>
        <?php the_title( '<h2 class="post-title" lang="lo"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
        <p class="post-excerpt" lang="lo"><?php echo get_the_excerpt(); ?></p>
      </div>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->
</div>