<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package linesmagazine
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <!--feature area-->
  <section class="feature-area">

    <!--feature image-->
	  <?php if (has_post_thumbnail()) : ?>
      <section class="feature-image image-wrapper image-feature">
        <?php the_post_thumbnail(); ?>
      </section>
    <?php endif; ?>

    <!--title & post meta-->
    <div class="post-info">
      <div class="date-wrapper">
        <time class="date">
          <?php
            $year  = get_the_time('Y');
            $month = get_the_time('m');
            $day   = get_the_time('d');
          ?>
          <span class="month"><a href="<?php echo get_month_link($year, $month); ?>"><?php echo get_the_time('F') ?></a></span>
          <span class="day"><a href="<?php echo get_day_link($year, $month, $day); ?>"><?php echo $day ?></a></span>
          <span class="year"><a href="<?php echo get_year_link($year); ?>"><?php echo $year ?></a></span>
        </time>
      </div>

    </div>
  </section>

  <section id="post-body">
    <div class="container">
      <div class="row">
        <main id="content" class="col">
          <!--content-->
          <h2 class="post-title"><?php the_title() ?></h2>

          <?php
            $category = get_the_category()[0];
            $parent_category = get_category($category->category_parent);
          ?>
          <p class="breadcrumb mb-12">
            <a href="<?php echo esc_url(get_category_link($parent_category->term_id)) ?>" class="post-category">
              <?php echo $parent_category->cat_name ?></a>
            <span class="pr-2 pl-2">&rarr;</span>
            <a href="<?php echo esc_url(get_category_link($category->term_id)) ?>" class="post-category">
              <?php echo $category->cat_name ?></a>
          </p>

<!--      content-body-->
          <article class="post-content">
            <?php the_content() ?>
          </article>


<!--          recent posts -->


        </main>
      </div><!--      row-->
    </div>
  </section><!--  #post-body-->



</article><!-- #post-<?php the_ID(); ?> -->