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

    <div class="post">

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
        <p class="post-category"><?php the_category(', ') ?></p>
        <p class="post-author-prefix"><a href="#"><?php the_author(); ?></a></p>
        <?php the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
        <p class="post-excerpt"><?php echo get_the_excerpt(); ?></p>
      </div>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->
</div>