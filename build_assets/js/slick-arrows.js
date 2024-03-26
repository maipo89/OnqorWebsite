$(document).ready(function() {
    // Initialize sliders with a common class
    $('.universal__slider').each(function() {
        // Initialize the slider here, if not already initialized via HTML/PHP
    }).on('init', function(event, slick) {
        // Append next and prev buttons for each slider
        var $slider = $(this);
        var next = $('<div class="my-next arrow-btns"></div>');
        var prev = $('<div class="my-prev arrow-btns"></div>');

        // Assuming the .slick-dots are direct children of the slider container
        $slider.find('.slick-dots').wrap('<div class="slick-dots-container"></div>');
        $slider.find('.slick-dots-container').append(next).prepend(prev);
    });

    // Handle clicks on next/prev buttons in a generic manner
    $(document).on('click', '.my-next', function() {
        $(this).closest('.universal__slider').slick('slickNext');
    });
    $(document).on('click', '.my-prev', function() {
        $(this).closest('.universal__slider').slick('slickPrev');
    });
});
