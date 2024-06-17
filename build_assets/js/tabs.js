$(document).ready(function($) {
    // Initially hide all tab content
    $('.tabs__content__item').hide();

    // Show the first tab content and add active class to the first tab button by default
    $('.tabs__content__item').first().fadeIn(500, 'swing');
    $('.tab-link').first().addClass('active');

    // Tab link click function for main tabs
    $('.tab-link').click(function(e) {
        e.preventDefault();

        // Remove active class from all tab buttons
        $('.tab-link').removeClass('active');

        // Add active class to the current tab button
        $(this).addClass('active');

        // Get the current tab ID
        var currentTab = $(this).data('tab');

        // Hide all tab content
        $('.tabs__content__item').hide();

        // Show the current tab content
        $('#' + currentTab).fadeIn(500, 'swing');
    });
});

$(document).ready(function($) {
    // Initially hide all testimonials tab content
    $('.testimonials__tabs__item').hide();

    // Show the first testimonials tab content and add active class to the first testimonials tab button by default
    $('.testimonials__tabs__item').first().fadeIn(1000);
    $('.testimonials__buttons div').first().addClass('active');

    // Tab link click function for testimonials tabs
    $('.testimonials__buttons div').click(function(e) {
        e.preventDefault();

        // Remove active class from all testimonials tab buttons
        $('.testimonials__buttons div').removeClass('active');

        // Add active class to the current testimonials tab button
        $(this).addClass('active');

        // Get the current testimonials tab ID
        var currentTab = $(this).data('tab');

        // Hide all testimonials tab content
        $('.testimonials__tabs__item').hide();

        // Show the current testimonials tab content
        $('#' + currentTab).fadeIn(500, 'swing');
    });
});



window.onload = function() {
    $(document).ready(function($) {
        // Initially hide all tab content
        $('.other-services__sub__items').hide();
        $('.other-services__sub__items__slider').hide();
        $('.other-services__service div').hide();
    
        // Show the first tab content and add active class to the first tab button by default
        $('.other-services__sub__items').first().show();
        $('.other-services__sub__items__slider').first().addClass('active');
        $('.other-services__service div').first().fadeIn(500, 'swing');
        $('.other-services__sub__buttons button').first().addClass('active');

        // Default to Marketing category and trigger tab click
        var defaultCategoryIndex = 0; // Index of Marketing category
        $('.other-services__sub__buttons button').eq(defaultCategoryIndex).trigger('click');

        // Dropdown functionality
        $('#category-dropdown').on('click', function() {
            $(this).toggleClass('open');
        });

        $('.other-services .dropdown__options__items div').on('click', function() {
            var tabIndex = $(this).data('button');
            var categoryName = $(this).text();
            
            // Update dropdown text
            $('#category-dropdown').html(categoryName + '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none"><path d="M1 1.5L8 8.5L15 1.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>');
        
            // Trigger click event on corresponding tab button
            $('.other-services__sub__buttons button').eq(tabIndex).trigger('click');
        
            // Close dropdown
            $('#category-dropdown').removeClass('open');
            $('.dropdown__options').removeClass('active');
        
            // Initialize the slider for the selected category
            if ($.fn.slick) {
                $('.other-services__sub__items__slider').filter(function() {
                    return $(this).data('tab') === tabIndex;
                }).addClass('active').slick('unslick').slick({
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
                 // Show the SVG chevron
                $('#category-dropdown .dropdown__icon').show();
            } else {
                console.log('Slick slider library not loaded yet.');
                // You can retry initialization or show an error message here
            }
        });
        

        // Tab link click function
        $('.other-services__sub__buttons button').click(function(e) {
            e.preventDefault();
            // Remove active class from all tab buttons
            $('.other-services__sub__buttons button').removeClass('active');
            $('.other-services__sub__items__slider').removeClass('active');
            // Add active class to the current tab button
            $(this).addClass('active');

            // Get the current tab ID
            var currentTab = $(this).data('button');

            // Hide all tab content
            $('.other-services__sub__items').hide();
      
            $('.other-services__service div').hide();

            // Show the current tab content
            $(".other-services__sub__items").filter(function() {
                return $(this).data('tab') === currentTab;
            }).fadeIn(500, 'swing');
            $(".other-services__service div").filter(function() {
                return $(this).data('service') === currentTab;
            }).fadeIn(500, 'swing');

            if ($.fn.slick) {
                $('.other-services__sub__items__slider').filter(function() {
                    return $(this).data('tab') === currentTab;
                }).addClass('active').slick('unslick').slick({
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
            } else {
                console.log('Slick slider library not loaded yet.');
                // You can retry initialization or show an error message here
            }
        });
        $('.other-services__sub__buttons button[data-button="3"]').trigger('click');
    });
};
