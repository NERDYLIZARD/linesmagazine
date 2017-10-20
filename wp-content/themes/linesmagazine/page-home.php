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


<?php
get_footer();
