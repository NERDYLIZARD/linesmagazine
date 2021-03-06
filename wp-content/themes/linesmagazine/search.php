<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package linesmagazine
 */

get_header(); ?>

<?php
if ( have_posts() ) : ?>

  <section class="primary-header no-feature-image">
    <h1 class="primary-title">
      <?php printf( esc_html__( 'Search: %s', 'linesmagazine' ), '<span>' . get_search_query() . '</span>' ); ?>
    </h1>
  </section>

  <section class="posts border-bottom">
    <div class="container">
      <div class="row row-card">

      <?php
  /* Start the Loop */
      while ( have_posts() ) : the_post();

    /**
     * Run the loop for the search to output the results.
     * If you want to overload this in a child theme then include a file
     * called content-search.php and that will be used instead.
     */
      get_template_part( 'template-parts/content', 'search' );

  endwhile; ?>

      </div><!-- .row-->
      <!--   pagination-->
      <?php get_template_part( 'template-parts/content', 'pagination' ); ?>

    </div><!--        .container-->
  </section>



<?php
else :

  get_template_part( 'template-parts/content', 'none' );

endif; ?>


<?php
get_footer();
