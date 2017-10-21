<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>

<section id="home-slider">

  <div class="owl-carousel owl-theme">
    <?php
      $home_slides = new WP_Query([
        'post_type' => 'home_slide'
      ]);

      if ( $home_slides->have_posts() ) : ?>

      <?php
        while ( $home_slides->have_posts() ) :
          $home_slides->the_post();
          $slide_type = get_field('slide_type', get_the_ID());
          $slide_link = get_field('slide_link', get_the_ID());
      ?>
        <?php
          if ($slide_type == 'image') :
            $slide_image = get_field('slide_image', get_the_ID());
            ?>
            <div class="item">
              <a href="<?php echo $slide_link?>">
                <div class="image-wrapper image-feature">
                  <img src="<?php echo $slide_image?>" alt="">
                </div>
              </a>
            </div>
<!--       video type  -->
        <?php else: ?>
            <div class="item-video">
              <a class="owl-video" href="<?php echo $slide_link?>"></a>
            </div>
        <?php endif; ?>

      <?php endwhile; wp_reset_postdata(); ?>

    <?php endif; ?><!--    if has_posts-->

  </div><!--  .owl-carousel-->
</section><!--#home-slider-->


<!--popular posts-->
<section id="popular-post" class="pt-12 pb-12">
  <div class="container">

    <header class="secondary-header">
      <div class="row justify-content-center">
        <div class="col-auto">
          <h2>Popular</h2>
        </div>
      </div>
    </header>

    <div class="row row-card">
    <?php
      $popular_posts = pvc_get_most_viewed_posts([
        'post_type'       => 'post',
        'posts_per_page'  => 6,
        'date_query'      => [
          'column'  => 'post_date',
          'after'   => '- 60 days'
        ]
      ]);

	    foreach ($popular_posts as $post) : setup_postdata($post); ?>

		    <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

	    <?php endforeach;	wp_reset_postdata();?>

    </div><!--    .row-->
  </div><!--    .container-->
</section><!--#popular-post-->


<!-- Category Lists-->




<?php
get_footer();
