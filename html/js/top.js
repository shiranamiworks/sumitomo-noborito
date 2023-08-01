jQuery(document).ready(function($) {

    // SP用 MVスライド
    $('.top-mv__slide').slick({
        infinite: true,
        dots: true,
        arrows: false,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
    });

    // バナースライド
    $('.banner-slide').slick({
        infinite: true,
        dots: false,
        arrows: true,
        speed: 1000,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1,
                    dots: true
                }
            }
        ]
    });
})