/**
 * Created by on 20-Sep-17.
 */

jQuery(document).ready(function ($) {

  // post archives list
  $('.post-archives ul .year-archives').click(function(e)
  {
    // return if the event is the propagating event i.e event fired by children
    if (e.target !== this) return;
    $(this).toggleClass('rotate');
    $(this).children('ul').slideToggle();
  });

  $('.post-archives ul .month-archives').click(function(e)
  {
    if (e.target !== this) return;
    $(this).toggleClass('rotate');
    $(this).children('ul').slideToggle();
  });



  // toggling search form
  $('#search-icon').click(function (e)
  {
    $('#secondary-nav').slideUp();
    $('#search-form').slideDown();
  });

  $('#search-form .close-icon').click(function (e)
  {
    $('#secondary-nav').slideDown();
    $('#search-form').slideUp();
  });


  // owl carousel
  $('#home-slider .owl-carousel').owlCarousel({
    items: 1,
    loop: true,
    video:true,
    autoHeight: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 5000,
    smartSpeed: 800,
    nav: true,
    navText: ['', ''],
  });

});
