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
  <section class="primary-header no-feature-image">
    <?php the_archive_title( '<h1 class="primary-title">', '</h1>' ); ?>
  </section>

  <section class="posts border-bottom">
    <div class="container">
      <div class="row row-card">

        <?php
        /* Start the Loop */
        while ( have_posts() ) : the_post();

          get_template_part( 'template-parts/content', get_post_format() );

        endwhile; ?>

      </div><!--          .row-->

<!--      pagination-->
      <?php get_template_part( 'template-parts/content', 'pagination' ); ?>


    </div><!--        .container-->
  </section>



<?php
else :

  get_template_part( 'template-parts/content', 'none' );

endif; ?>

<?php
get_footer();
