// case study dropdown
$(document).ready(function() {
    // case studies filter
    $('.archive__case-studies .dropdown__options__items div').click(function(){
        var categorySlug = $(this).attr('value');
        var $container = $('#articles-container');

        // Set the minimum height to prevent collapse
        $container.css('min-height', $container.height() + 'px');

        $container.fadeOut('slow', function() {
            $.ajax({
                type: 'POST',
                url: myAjax.ajaxurl,
                data: {
                    action: 'filter_case_studies',
                    category: categorySlug
                },
                success: function(response) {
                    $container.html(response).fadeIn('fast', function() {
                        // Remove min-height after fade-in complete to adjust to new content
                        $container.css('min-height', '');
                    });
                }
            }); 
        });
    });  

    // blogs filter
    $('.archive__blogs .dropdown__options__items div').click(function(){
        var categorySlug = $(this).attr('value');
        var $container = $('#articles-container'); // Ensure this is your blog container

        $container.css('min-height', $container.height() + 'px');

        $container.fadeOut('slow', function() {
            $.ajax({
                type: 'POST',
                url: myAjax.ajaxurl,
                data: {
                    action: 'filter_blogs', // New action for filtering blogs
                    category: categorySlug
                },
                success: function(response) {
                    $container.html(response).fadeIn('fast', function() {
                        $container.css('min-height', '');
                    });
                }
            });
        });
    });

    // Toggle dropdown options on click of the filter
    $('#category-dropdown').click(function() {
        $('.dropdown__options').toggleClass('active');
    });

    // Handle clicking on an option
    $('.dropdown__options__items div').click(function() {
        var categorySlug = $(this).attr('value'); // Get the category slug from the clicked option
        // Update the dropdown label with the selected category and re-append the SVG
        $('#category-dropdown').html($(this).text() + '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none"><path d="M1 1.5L8 8.5L15 1.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>');
        $('.dropdown__options').removeClass('active'); // Hide dropdown options
    });

    // Optional: Close dropdown when clicking outside
    $(document).click(function(e) {
        var target = e.target;
        if (!$(target).is('#category-dropdown') && !$(target).parents().is('.dropdown')) {
            $('.dropdown__options').removeClass('active');
        }
    });
});


