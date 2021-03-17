/*--------------------------------------------------
Project:        Integer
Version:        1.0
Primary use:    Integer | Gym & Fitness Responsive HTML5 Template
Author:         Company Name
-----------------------------------------------------

    JS INDEX
    ================================================
    * preloader js
    * scroll to top js
    * sticky menu js
    * toggle search
    * navigation mobile menu
    * programs-slider-one
    * blog one slider
    * Isotop And Masonry
    * magnific popup
    * counter
    * Team Slider-two
    * testimonial slider js
    * partner slider js
    * service 3 slider js
    * service 4 slider js
    * class slider js
    * social sharing
    * box mouse-enter hover
    * Google map
    ================================================*/

(function ($) {
  "use strict";

  var $main_window = $(window);

  /*====================================
  preloader js
  ======================================*/
  $main_window.on("load", function () {
    $(".preloader").fadeOut("slow");
  });

  /*====================================
  scroll to top js
  ======================================*/
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 250) {
      $("#c-scroll").fadeIn(200);
    } else {
      $("#c-scroll").fadeOut(200);
    }
  });
  $("#c-scroll").on("click", function () {
    $("html, body").animate({
        scrollTop: 0
      },
      "slow"
    );
    return false;
  });

  /*====================================
     sticky menu js
  ======================================*/

  $main_window.on('scroll', function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 200) {
      $(".affix").addClass("sticky-menu");
    } else {
      $(".affix").removeClass("sticky-menu");
    }
  });



  /*====================================
  toggle search
  ======================================*/
  $('.menu-search a').on("click", function () {
    $('.menu-search-form').toggleClass('s-active');
  });


  /*====================================
      navigation mobile menu
  ======================================*/

  function mainmenu() {
    $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
      if (!$(this).next().hasClass('show')) {
        $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
      }
      var $subMenu = $(this).next(".dropdown-menu");
      $subMenu.toggleClass('show');

      return false;
    });
  }
  mainmenu();
  
   /*================================================
              Start Testimonilas
=================================================*/

$(function () {
    'use strict';
    $(".testimonials-content").owlCarousel({
        items: 1,
        loop: true,
        dots:false,
        autoplay: true
    });
});


  /*====================================
    Isotop And Masonry
  ======================================*/
  if ($(".masonary-wrap").length > 0) {
    $main_window.on('load', function () {
      var $grid = $('.masonary-wrap').isotope({
        itemSelector: '.mas-item',
        percentPosition: true,
        masonry: {
          columnWidth: '.mas-item'
        }
      });
      $('.sorting').on('click', '.filter-btn', function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({
          filter: filterValue
        });
      });
      $('.sorting li').on('click', function (event) {
        $(".filter-btn").removeClass('active');
        $(this).addClass('active');
        event.preventDefault();
      });
    });
  }

function accesstechbit() {
$( document ).on( 'keydown', function( e ) {
    if ( $( window ).width() > 992 ) {
        return;
    }
    var activeElement = document.activeElement;
    var menuItems = $( '#nav-content .menu-item > a' );
    var firstEl = $( '.menu-toggle' );
    var lastEl = menuItems[ menuItems.length - 1 ];
    var tabKey = event.keyCode === 9;
    var shiftKey = event.shiftKey;
    if ( ! shiftKey && tabKey && lastEl === activeElement ) {
        event.preventDefault();
        firstEl.focus();
    }
} );
}
accesstechbit();


  // Porfolio isotope and filter
  $(window).on('load', function() {
    var portfolioIsotope = $('.portfolio-container').isotope({
      itemSelector: '.portfolio-item',
      layoutMode: 'fitRows'
    });

    $('#portfolio-flters li').on('click', function() {
      $("#portfolio-flters li").removeClass('filter-active');
      $(this).addClass('filter-active');

      portfolioIsotope.isotope({
        filter: $(this).data('filter')
      });
    });

    // Initiate venobox (lightbox feature used in portofilo)
    $(document).ready(function() {
      $('.venobox').venobox();
    });
  });

})(jQuery);


