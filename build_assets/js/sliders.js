$(document).ready(function() {
 // Slider for other-services-js
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
        initialSlide: 1,
        responsive: [
            {
            breakpoint: 580,
            settings: {
                    slidesToShow: 1,
                }
            },
        ]
    }); 

    // other services slider
    $('.other-services__sub__items__slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        cssEase: 'linear',
        infinite: false,
        loop: true,
        arrows: false,
        responsive: [
            {
            breakpoint: 430,
            settings: {
                    slidesToShow: 1,
                }
            },
            {
            breakpoint: 768,
            settings: { 
                    slidesToShow: 2,
                }
            },
        ]
    }); 

    // other services if more than 4
    $('.other-services__sub__items--slider').each(function() {
        $(this).slick({
            slidesToShow: 4, // Adjust the number of slides shown per view as needed
            slidesToScroll: 1,
            autoplay: true, // Optional autoplay
            autoplaySpeed: 3000, // Optional autoplay speed
            arrows: false,
            infinite: false,
            dots: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
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

    //  testimonials
     $('.testimonials__tabs__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        dots: true,
        infinite: true,
        arrows: false,
        cssEase: 'linear',
    });

    // video gallery
    $('.video-gallery__slider').slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        centerMode: true,
        fade: true,
        cssEase: 'linear',
    });

    // video gallery 
    $('.video-gallery__buttons').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        focusOnSelect: true,
        cssEase: 'linear',
        dots: true,
        responsive: [
            {
            breakpoint: 768,
            settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });
    $('.video-gallery__buttons').on('afterChange', function(event, slick, currentSlide) {
        $('.video-gallery__slider').slick('slickGoTo', currentSlide);
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
    $('.archive__case-studies__header .bg-image').css('background-image', 'url(' + coverImageUrl + ')');
}

// Slider Clients

$(window).on('load', function() {
    let animation;

    const recalculateSlider = function() {

        const $wrapper = $('.clients__wrapper');
        const $inner = $('.clients__inner');
        const $items = $('.clients__image');

        let wrapWidth = 0;
        let viewWidth = 0;

        // Stop any previous animation before recalculating
        if (animation) {
            animation.kill();  // Stop the previous animation
        }

        // Check if wrapper exists before accessing its width
        if ($wrapper.length > 0) {
            viewWidth = $wrapper.width();
        }

        // Get total wrap width and duplicate items for seamless scrolling
        $items.each(function() {
            const $item = $(this);
            const width = $item.outerWidth(true); // Use outerWidth to include padding/margin
            wrapWidth += width; // Increment wrapWidth by item width
        });

        // Duplicate the items inside the inner container to make the loop seamless
        $inner.append($inner.html());

        // Animate the entire inner container
        animation = gsap.to($inner, {
            duration: 60,
            x: `-=${wrapWidth}`,  // Move items to the left by wrapWidth
            ease: 'none',
            repeat: -1,           // Infinite repeat
            paused: false,
            modifiers: {
                x: function(x) {
                    return parseFloat(x) % wrapWidth + 'px';  // Calculate continuous scroll
                }
            }
        });
    };

    // Recalculate the slider dimensions and animation
    recalculateSlider();
});