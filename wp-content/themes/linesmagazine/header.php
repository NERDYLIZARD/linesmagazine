<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package linesmagazine
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
  <!--	<a class="skip-link screen-reader-text" href="#content">--><?php //esc_html_e( 'Skip to content', 'linesmagazine' ); ?><!--</a>-->

  <!---->

  <section id="primary-header">
    <nav id="secondary-nav" class="flex flex-wrap justify-content-between">
      <div>
        <span id="search-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
      </div>
      <div>
      <span id="cart">
        <a href="#">
          <span class="badge">8</span>
          <i class="fa fa-shopping-cart fa-flip-horizontal" aria-hidden="true"></i>
        </a>
      </span>
        <!--dropdown-->
        <span id="user-management" class="dropdown">
        <i class="fa fa-user dropdown-menu" aria-hidden="true"></i>
        <ul class="dropdown-list">
          <a href="#" class="dropdown-item">Profile</a>
          <a href="#" class="dropdown-item">Account</a>
          <a href="#" class="dropdown-item">Orders</a>
          <div class="separator"></div>
          <a href="#" class="dropdown-item">Sign Out</a>
        </ul>
      </span>
      </div>
    </nav><!--secondary-nav-->

    <form id="search-form">
      <span class="close-icon"><i class="fa fa-times fa-lg fa-light"></i></span>
      <input type="text" placeholder="Search">
    </form>

    <p class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Magazines.</a></p>

	  <?php
      wp_nav_menu( array(
        'theme_location'  => 'primary-menu',
        'container'       => 'nav',
        'container_class' => 'primary-nav',
        'menu_class' => 'primary-menu',
      ) );
	  ?>

    <!--    <nav id="primary-nav">-->
    <!--      <ul class="primary-menu">-->
    <!--        <li><a href="#">Menu A</a></li>-->
    <!--        <li><a href="#">Menu B</a></li>-->
    <!--        <li><a href="#">Menu C</a></li>-->
    <!--        <li><a href="#">Menu D</a></li>-->
    <!--      </ul>-->
    <!--    </nav>-->

  </section>  <!--#primary-header-->


  <div id="content" class="site-content">