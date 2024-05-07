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

    // featured blogs slider
    $('.archive__blogs__hero__slider').slick({
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

    // text triple slider
    $('.text-triple-image__slider').slick({
        infinite: true,
        slidesToScroll: 1,
        centerMode: true,
        dots: true,
        infinite: true,
        arrows: false,
        cssEase: 'linear',
    }); 

    // list image slider
    $('.list-image__list__slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        dots: true,
        arrows: false,
        cssEase: 'linear',
    }); 

    // related projects slider
    $('.related-projects__slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        dots: true,
        arrows: false,
        infinite: false,
        cssEase: 'linear',
        initialSlide: 1
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

    //  hero case study slider
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

$(document).ready(function() {
    // Initialize the slider
    $('.archive__case-studies__header__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        autoplaySpeed: 4000,
        centerMode: true,
        autoplay: true,
        loop: true,
        dots: true,
        fade: true,
        infinite: true,
        cssEase: 'linear'
    });

    // Update background image on page load
    updateHeaderBackground();

    // Update background image on slide change
    $('.archive__case-studies__header__slider').on('afterChange', function(event, slick, currentSlide){
        updateHeaderBackground();
    });
});

function updateHeaderBackground() {
    // Get the cover image URL of the currently active slide
    var coverImageUrl = $('.slick-current .case-study-thumbnail').data('cover-image');
    // Set the background image of archive__case-studies__header
    $('.archive__case-studies__header').css('background-image', 'url(' + coverImageUrl + ')');
}