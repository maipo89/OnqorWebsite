$(document).ready(function() {
    // blocks js
    // SliderClients
    $('.slider-clients__slider').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: false,
        centerMode: true,  
        dots: false,
        autoplay: true,
        infinite: true,
        autoplaySpeed: 0,
        speed: 10000,
        cssEase: 'linear',
        rtl: true,
        draggable: false,
        // variableWidth: true,
        responsive: [
            {
            breakpoint: 500,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,

                }
            },
            {
            breakpoint: 750,
            settings: { 
                slidesToShow: 3,
                slidesToScroll: 1,

                }
            },
            {
            breakpoint: 1350,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
                }
            },
        ]
    });
    // featured casestudy slider
    $('.archive__case-studies__header__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        centerMode: true,
        dots: true,
        infinite: true,
        cssEase: 'linear',
    }); 
 
    // photgraphy mobile slider 
    $('.photography__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        dots: true,
        infinite: true, 
        arrows: false,
        cssEase: 'linear',
    }); 

    // photgraphy mobile slider
    $('.text-triple-image__slider').slick({
        infinite: true,
        slidesToScroll: 1,
        centerMode: true,
        dots: true,
        infinite: true,
        arrows: false,
        cssEase: 'linear',
    }); 

    // related projects slider
    $('.related-projects__slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        dots: true,
        infinite: true,
        arrows: false,
        cssEase: 'linear',
    }); 

     //  branding layout two slider
    $('.layout-two__mobile__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        dots: true,
        infinite: true,
        arrows: false,
        cssEase: 'linear',
    });

    //  branding layout three slider
     $('.layout-three__mobile__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        dots: true,
        infinite: true,
        arrows: false,
        cssEase: 'linear',
    });

    //  branding layout three slider
     $('.hero-case-studies__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        dots: true,
        infinite: true,
        arrows: false,
        cssEase: 'linear',
    });
});

