$(document).ready(function () {
    // Function to get query parameters from the URL
    function getQueryParameter(name) {
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        return results ? decodeURIComponent(results[1]) || null : null;
    }

    // case studies filter
    function loadCaseStudies(categorySlug) {
        var $container = $('#articles-container');
        var $article = $('.article');

        // Set the minimum height to prevent collapse
        $container.css('min-height', $container.height() + 'px');

        $container.fadeOut('slow', function () {
            $.ajax({
                type: 'POST',
                url: myAjax.ajaxurl,
                data: {
                    action: 'filter_case_studies',
                    category: categorySlug
                },
                success: function (response) {
                    $article.css('opacity', '1');
                    $container.html(response).fadeIn('fast', function () {
                        // Remove min-height after fade-in complete to adjust to new content
                        $container.css('min-height', '');
                    });
                }
            });
        });
    }

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
            success: function (response) {
                $container.html(response); // Directly set the new content

                // Attach click event to pagination buttons and update the URL on page change
                $('.pagination .page').click(function () {
                    var newPage = $(this).data('page');
                    var newUrl = '/blogs?category=' + categorySlug + '&page=' + newPage;

                    history.pushState(null, '', newUrl); // Update URL without reloading the page
                    loadBlogs(categorySlug, newPage); // Load the selected page
                });
            }
        });
    }

    // Update URL and load case studies when a filter is selected
    $('.archive__case-studies .dropdown__options__items div').click(function () {
        var categorySlug = $(this).attr('value');
        var newUrl = '/case-studies?category=' + categorySlug;

        history.pushState(null, '', newUrl); // Update URL without reloading the page
        loadCaseStudies(categorySlug);
        updateDropdownText(categorySlug); // Update the text of #category-dropdown
        $('.dropdown__options').removeClass('active'); // Close the dropdown
    });

    // Update URL and load blogs when a filter is selected
    $('.archive__blogs .dropdown__options__items div').click(function () {
        var categorySlug = $(this).attr('value');
        var newUrl = '/blogs?category=' + categorySlug + '&page=1';

        history.pushState(null, '', newUrl); // Update URL without reloading the page
        loadBlogs(categorySlug, 1);
        updateDropdownText(categorySlug); // Update the text of #category-dropdown
        $('.dropdown__options').removeClass('active'); // Close the dropdown
    });

    // Update dropdown text based on selected category
    function updateDropdownText(categorySlug) {
        var selectedOption = $('.dropdown__options__items div[value="' + categorySlug + '"]').text();
        
        // Update the dropdown label with the selected category and re-append the SVG
        $('#category-dropdown').html(
            selectedOption +
            '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none"><path d="M1 1.5L8 8.5L15 1.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'
        );
    }

    // Initial page load logic for case studies and blogs
    var currentPage = getQueryParameter('page') || 1; // Default to page 1 if not provided
    var caseStudyCategory = getQueryParameter('category') || 'all'; // Default to 'all' if no category
    var blogCategory = getQueryParameter('category') || 'all';

    // If we are on the case studies page
    if ($('.archive__case-studies').length) {
        loadCaseStudies(caseStudyCategory); // Apply filter on page load based on URL
        updateDropdownText(caseStudyCategory); // Update #category-dropdown text based on URL
    }

    // If we are on the blogs page
    if ($('.archive__blogs').length) {
        loadBlogs(blogCategory, currentPage); // Apply filter on page load based on URL
        updateDropdownText(blogCategory); // Update #category-dropdown text based on URL
    }

    // Toggle dropdown options on click of the filter
    $('#category-dropdown').click(function () {
        $(this).next('.dropdown__options').toggleClass('active');
    });

    // Optional: Close dropdown when clicking outside
    $(document).click(function (e) {
        var target = e.target;
        if (!$(target).is('#category-dropdown') && !$(target).parents().is('.dropdown')) {
            $('.dropdown__options').removeClass('active');
        }
    });

    // Legal dropdown logic
    $('.legal .dropdown__options__items div').click(function () {
        var categorySlug = $(this).attr('value'); // Get the category slug from the clicked option

        // Update the dropdown label with the selected category and re-append the SVG
        $('#category-dropdown').html(
            $(this).text() +
            '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none"><path d="M1 1.5L8 8.5L15 1.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'
        );

        $('.dropdown__options').removeClass('active'); // Hide dropdown options

        // Change the URL to navigate to the selected category
        if (categorySlug === 'all') {
            window.location.href = '/legal'; // Navigate to /legal
        } else {
            window.location.href = '/legal/' + categorySlug; // Navigate to the child page
        }
    });
});
