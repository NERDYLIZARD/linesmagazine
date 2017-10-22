<?php
/**
 * Template part for displaying results in search pages
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
						<?php the_post_thumbnail() ?>
          </div>
        </a>
			<?php endif; ?>

      <div class="post-info">
				<?php $category = get_the_category()[0] ?>
        <a class="post-category" href="<?php echo get_category_link($category->cat_ID) ?>"><?php echo $category->cat_name ?></a>
        <p class="post-author-prefix"><?php the_author_posts_link(); ?></p>
				<?php the_title( '<h2 class="post-title" lang="lo"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
        <p class="post-excerpt" lang="lo"><?php echo get_the_excerpt(); ?></p>
      </div>
    </div>

  </article><!-- #post-<?php the_ID(); ?> -->
</div><!--  card-->
