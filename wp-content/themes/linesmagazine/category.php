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

  <!-- POSTS by Category -->
  <?php
    $category = get_queried_object();

    global $wpdb;

    $sub_categories = $wpdb->get_results(
      $wpdb->prepare("
        SELECT * FROM $wpdb->terms
        INNER JOIN $wpdb->term_taxonomy 
        ON $wpdb->term_taxonomy.term_id=$wpdb->terms.term_id
        WHERE parent = %d
        ORDER BY term_modified_by_assigning_post DESC 
      ", $category->term_id)
    );
//  	echo '<pre>' . var_export($sub_categories, true) . '</pre>';
  ?>

  <?php foreach($sub_categories as $sub_category) : ?>

    <section class="primary-category pt-12 pb-12 border-bottom">
      <div class="container">

        <header class="secondary-header">
          <div class="row justify-content-between align-items-center">
            <div class="col-auto">
              <h2><a href="<?php echo esc_url(get_category_link($sub_category->term_id)) ?>"><?php echo $sub_category->name?></a></h2>
            </div>
            <div class="col-auto">
              <a href="<?php echo esc_url(get_category_link($sub_category->term_id)) ?>" class="button button-small">See all</a>
            </div>
          </div>
        </header>

        <div class="row row-card">
          <?php
          /* Start the Loop */
          $posts = get_posts([
            'posts_per_page'  => 3,
            'category'        => $sub_category->term_id,
          ]);
  //        echo '<pre>' . var_export($posts, true) . '</pre>';

          foreach ($posts as $post) : setup_postdata($post); ?>

            <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

          <?php endforeach;
          wp_reset_postdata();?>


        </div><!--   .row-->
      </div><!--  .container-->
    </section><!--  .primary-category-->

  <?php endforeach; ?>

<?php
  else :
	  get_template_part( 'template-parts/content', 'none' );
endif; ?>

<?php

get_footer();