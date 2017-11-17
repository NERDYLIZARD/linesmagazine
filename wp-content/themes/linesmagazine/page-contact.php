<?php
/**
 * Template Name: Contact Page
 */

get_header(); ?>

<!-- Map -->
<section id="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d236212.96441322097!2d73.03299773678786!3d22.322360101694752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc8ab91a3ddab%3A0xac39d3bfe1473fb8!2sVadodara%2C+Gujarat!5e0!3m2!1sen!2sin!4v1510900730794" width="1600" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>

<!-- Contact -->
<section id="contact" class="border-bottom">
  <div class="container">
    <div class="row justify-content-center">
      <col-auto>
        <h2>Get In Touch.</h2>
      </col-auto>
    </div>

    <div class="row justify-content-between align-items-center">

      <!-- Contact -->
      <div class="col-md-6">
        <ul class="contact-info">
          <li class="address">
            lorem-yibsum Rd.,<br>
            lorem Village,
            ipsumer District,<br>
            Vientiane Capital, Lao PDR
          </li>
          <li class="phone">
            <i class="fa fa-phone" aria-hidden="true"></i>
            +123-456-7890
          </li>
          <li class="email">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <a href="mailto:magazine.magazine@hotmail.com">magazine.magazine@hotmail.com</a>
          </li>
          <li class="facebook">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <a href="#">www.facebook.com/magazine</a>
          </li>
          <li class="instagram">
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <a href="#">www.instagram.com/magazine</a>
          </li>
        </ul>
      </div>

      <!-- Contact Form -->
      <div class="col-md-6">

        <form action="">

          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name *">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email *">
          </div>
          <div class="form-group">
            <input type="subject" class="form-control" id="subject" name="subject" placeholder="Subject">
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" cols="30" rows="10" placeholder="Message *"></textarea>
          </div>
          <button class="button button-small button-highlight" type="submit">Send</button>

        </form>
      </div>
    </div>

  </div>
</section>

<?php
get_footer();
