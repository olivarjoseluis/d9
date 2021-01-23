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

    //Detecta si el Scroll es hacia arriba o abajo
    jQuery(function () {
      var lastScrollTop = 0, delta = 1;
      jQuery(window).scroll(function () {
        var nowScrollTop = jQuery(this).scrollTop();
        if (Math.abs(lastScrollTop - nowScrollTop) >= delta) {
          if (nowScrollTop > lastScrollTop) {
            jQuery(".main-header").addClass('scroll-header');
            jQuery("body").addClass('scroll-detected');
            console.log('Scroll abajo');
          } else {
            console.log('Scroll arriba');
            jQuery(".main-header").removeClass('scroll-header');
            jQuery("body").removeClass('scroll-detected');
          }
          lastScrollTop = nowScrollTop;
        }
      });
    });
  });

})(jQuery, Drupal);
