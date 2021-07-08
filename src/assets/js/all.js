$(document).ready(function(){
  $(".img_slider").slick({
     mobileFirst: true,
    variableHeight: true,
    variableWidth: true,
    dots: true,
    infinite: true,
    arrows: false,
    centerMode: true,
    centerPadding: '60px',
    autoplay: true,
    slidesToShow: 1
  });
});