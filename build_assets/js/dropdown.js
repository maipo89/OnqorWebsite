$(document).ready(function () {
    // Function to get query parameters from the URL
    function getQueryParameter(name) {
        var params = new URLSearchParams(window.location.search);
        return params.get(name);
    }

    // Function to get blog category from URL path
    function getBlogCategoryFromPath() {
        var path = window.location.pathname;
        var pathParts = path.split('/');

        // If the URL is '/blog/', return 'all' (default category)
        if (path === '/blog/' || path === '/blog') {
            return 'all'; // Default to 'all' when no category is specified
        }

        if (pathParts.length >= 3 && pathParts[1] === 'blog') {
            return pathParts[2]; // Return the category from the path (e.g., 'advertising')
        }

        return 'all'; // Default to 'all' if no category is found
    }

    // Get the current page from the query parameter or default to 1 if no page parameter is present
    var currentPage = getQueryParameter('page') || 1;
    var caseStudyCategory = getQueryParameter('category') || 'all';
    var blogCategory = getBlogCategoryFromPath(); // Get blog category from the URL path

    // Update dropdown text based on selected category
    function updateDropdownText(categorySlug) {
        var selectedOption = $('.dropdown__options__items div[value="' + categorySlug + '"]').text();

        // Update the dropdown label with the selected category and re-append the SVG
        $('#category-dropdown').html(
            selectedOption +
            '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none"><path d="M1 1.5L8 8.5L15 1.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'
        );
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
                        $container.css('min-height', ''); // Reset min-height after fade-in
                    });
                    console.log('Case studies loaded for category: ' + categorySlug);
                },
                error: function (xhr, status, error) {
                    console.error('Error loading case studies: ', error);
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
                action: 'filter_blogs', // Action for filtering blogs
                category: categorySlug,
                page: page
            },
            success: function (response) {
                console.log('Blogs loaded for category: ' + categorySlug + ', page: ' + page);
                $container.html(response); // Set the new content

                // Attach click event to pagination buttons and update the URL on page change
                $('.pagination .page').click(function () {
                    var newPage = $(this).data('page');
                    var newUrl = categorySlug === 'all'
                        ? (newPage === 1 ? '/blog/' : '/blog/?page=' + newPage)
                        : (newPage === 1 ? '/blog/' + categorySlug + '/' : '/blog/' + categorySlug + '/?page=' + newPage);

                    console.log('Navigating to: ', newUrl);  // Debugging
                    history.pushState(null, '', newUrl); // Update URL without reloading the page
                    loadBlogs(categorySlug, newPage); // Load the selected page
                });
            },
            error: function (xhr, status, error) {
                console.error('Error loading blogs: ', error);
            }
        });
    }

    // On page load logic for case studies and blogs
    if ($('.archive__case-studies').length) {
        console.log('Case studies page detected.');
        loadCaseStudies(caseStudyCategory); // Apply filter on page load based on URL
        updateDropdownText(caseStudyCategory); // Update the dropdown text
    }

    // Handle blog page loading logic
    if ($('.archive__blogs').length) {
        console.log('Blog page detected with category: ' + blogCategory);

        // If on /blog/ and the page parameter is explicitly 1, we remove it
        if (window.location.pathname === '/blog/' || window.location.pathname === '/blog') {
            if (getQueryParameter('page') == 1) {
                history.replaceState(null, '', '/blog/'); // Remove ?page=1 from the URL
            }
        }

        // If the page is greater than 1, do not redirect, allow normal page behavior
        if (getQueryParameter('page') > 1) {
            loadBlogs(blogCategory, currentPage); // Apply the correct page logic for page > 1
        } else {
            loadBlogs(blogCategory, currentPage); // Apply the correct page logic for page = 1
        }

        updateDropdownText(blogCategory); // Update the dropdown text
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
        var newUrl = categorySlug === 'all'
            ? '/blog/'
            : '/blog/' + categorySlug + '/';

        history.pushState(null, '', newUrl); // Update URL without reloading the page
        loadBlogs(categorySlug, 1);
        updateDropdownText(categorySlug); // Update the text of #category-dropdown
        $('.dropdown__options').removeClass('active'); // Close the dropdown
    });

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
        var categorySlug = $(this).attr('value');

        $('#category-dropdown').html(
            $(this).text() +
            '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none"><path d="M1 1.5L8 8.5L15 1.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'
        );

        $('.dropdown__options').removeClass('active'); // Hide dropdown options

        // Navigate to the selected category page
        if (categorySlug === 'all') {
            window.location.href = '/legal';
        } else {
            window.location.href = '/legal/' + categorySlug;
        }
    });
});
