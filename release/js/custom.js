"use strict";

$(document).ready(function () {
  $(".hero_slider").slick({
    dots: true,
    infinite: true,
    arrows: false,
    autoplay: true,
    centerMode: true,
    centerPadding: '30px',
    slidesToShow: 1.04,
    responsive: [{
      breakpoint: 751,
      settings: {
        slidesToShow: 1,
        centerMode: false,
        centerPadding: '50px',
        infinite: true,
        dots: true
      }
    } // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
    ]
  });
  $(".img_slider").slick({
    dots: true,
    infinite: true,
    arrows: false,
    autoplay: true,
    slidesToShow: 1
  }); // 画面幅が375pxより小さい場合、viewportを再設定
  // $( window ).on( 'load', function() {
  // 	var w = $( window ).width();
  // 	if( w <= 450 ) {
  // 		$( 'meta[name=viewport]' ).attr( 'content', 'width=480' );
  // 	} else {
  // 		$( 'meta[name=viewport]' ).attr( 'content', 'width=device-width' );
  // 	}
  // }); 
});
$(function () {
  $('a[href*=#]:not([href=#])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      console.log(target);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top(),
          behavior: 'smooth'
        }, 1000);
        return false;
      }
    }
  });
});