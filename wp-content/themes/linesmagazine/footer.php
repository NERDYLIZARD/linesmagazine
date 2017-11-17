<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package linesmagazine
 */

?>

	</div><!-- #content -->

  <footer id="main-footer" class="flex flex-column">
    <p class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Magazine.</a></p>
    <div class="social-icons">
      <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
    </div>

    <div class="footer-meta-link">
      <a href="<?php echo get_page_link( 138 ); ?>">About</a>
      <a href="<?php echo get_page_link( 142 ); ?>">Contact us</a>
    </div>
    <p class="copyright">&copy <?php echo date('Y'); ?> All Rights Reserved.</p>
  </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
