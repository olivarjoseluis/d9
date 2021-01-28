import 'popper.js';
import 'bootstrap';

(function () {

  'use strict';

  jQuery(document).ready(function () {
    //Inicialización de slider principal
    jQuery('.primary-slider.owl-carousel').owlCarousel({
      loop: true,
      nav: true,
      items: 1,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      animateOut: 'fadeOut'
    });

    //Detecta scrool en top 0 
    jQuery(function () {
      jQuery(window).scroll(function () {
        if (!jQuery(this).scrollTop() <= 0) {
          jQuery(".main-header").addClass('scroll-header');
          jQuery("body").addClass('scroll-detected');
        } else {
          jQuery(".main-header").removeClass('scroll-header');
          jQuery("body").removeClass('scroll-detected');
        }
      });
    });
  });

})(jQuery, Drupal);
