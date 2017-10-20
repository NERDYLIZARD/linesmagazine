<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>

<section id="home-slider">

  <div class="owl-carousel owl-theme">

    <div class="item-video">
      <a class="owl-video" href="https://www.youtube.com/watch?v=8TpcBDJZsJA"></a>
    </div>

    <div class="item">
      <a href="#">
        <div class="image-wrapper image-feature">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/flynn-doherty-196576 (1).jpg'?>" alt="">
        </div>
      </a>
    </div>
    <div class="item">
      <a href="#">
        <div class="image-wrapper image-feature">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/hans-vivek-249071.jpg'?>" alt="">
        </div>
      </a>
    </div>
  </div>

</section>


<?php
get_footer();
