<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package linesmagazine
 */

get_header(); ?>


<?php if ( have_posts() ) : ?>

  <!--  header section-->
	<?php get_template_part( 'template-parts/content', 'header' ); ?>

  <!-- POSTS -->
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