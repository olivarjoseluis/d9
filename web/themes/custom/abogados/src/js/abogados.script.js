import 'popper.js';
import 'bootstrap';

(function () {

  'use strict';

  Drupal.behaviors.helloWorld = {
    attach: function (context) {
      console.log('Hello World');
    }
  };

 /*Drupal.behaviors.primaryslider = {
    attach: function (context) {
      jQuery('.primary-slider.owl-carousel').owlCarousel({
        loop: true,
        nav: true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true
      })
    }
  };*/
  jQuery(document).ready(function () {
    jQuery('.primary-slider.owl-carousel').owlCarousel({
      loop: true,
      nav: true,
      items: 1,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      animateOut: 'fadeOut'
    });
  });

})(jQuery, Drupal);
