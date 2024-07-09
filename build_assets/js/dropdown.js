// case study dropdown
$(document).ready(function() {
    // case studies filter
    $('.archive__case-studies .dropdown__options__items div').click(function(){
        var categorySlug = $(this).attr('value');
        var $container = $('#articles-container');
        var $article = $('.article');

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
                    $article.css('opacity', '1')
                    $container.html(response).fadeIn('fast', function() {
                        // Remove min-height after fade-in complete to adjust to new content
                        $container.css('min-height', '');
                    });
                }
            }); 
        });
    });  

    // blogs filter
    function loadBlogs(categorySlug, page) {
        var $container = $('.archive__blogs #articles-container'); // Ensure this is your blog container

        $.ajax({
            type: 'POST',
            url: myAjax.ajaxurl,
            data: {
                action: 'filter_blogs', // New action for filtering blogs
                category: categorySlug,
                page: page
            },
            success: function(response) {
                $container.html(response); // Directly set the new content
 
                // Attach click event to pagination buttons
                $('.pagination .page').click(function() {
                    var newPage = $(this).data('page');
                    loadBlogs(categorySlug, newPage);
                });
            }
        });
    }

    $('.archive__blogs .dropdown__options__items div').click(function(){
        var categorySlug = $(this).attr('value');
        loadBlogs(categorySlug, 1);
    });

    // Initial load for blogs
    if ($('.archive__blogs').length) {
        loadBlogs('all', 1);
    }

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


// legal dropdown 
$(document).ready(function() {
    // Handle clicking on an option
    $('.legal .dropdown__options__items div').click(function() {
        var categorySlug = $(this).attr('value'); // Get the category slug from the clicked option
        // Update the dropdown label with the selected category and re-append the SVG
        $('.legal #category-dropdown').html($(this).text() + '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none"><path d="M1 1.5L8 8.5L15 1.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>');
        $('.legal .dropdown__options').removeClass('active'); // Hide dropdown options

        // Change the URL to navigate to the selected category
        if (categorySlug === 'all') {
            window.location.href = '/legal'; // Navigate to /legal
        } else {
            window.location.href = '/legal/' + categorySlug; // Navigate to the child page
        }
    });

});





