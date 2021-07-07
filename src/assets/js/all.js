$(document).ready(function(){
    $(".hero_slider").slick({
        dots: true,
        infinite: true,
        arrows: false,
        centerMode: true,
        centerPadding: '30px',
        slidesToShow: 1.04,
        responsive: [
            {
              breakpoint: 751,
              settings: {
                slidesToShow: 1,
                centerMode: false,
                centerPadding: '50px',
                infinite: true,
                dots: true
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
});
