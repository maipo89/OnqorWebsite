jQuery(document).ready(function($) {
    // Initially hide all tab content
    $('.tabs__content__item').hide();

    // Show the first tab content and add active class to the first tab button by default
    $('.tabs__content__item').first().show();
    $('.tab-link').first().addClass('active');

    // Tab link click function
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
        $('#' + currentTab).show();
    });
});


jQuery(document).ready(function($) {
    // Initially hide all tab content
    $('.testimonials__tabs__item').hide();

    // Show the first tab content and add active class to the first tab button by default
    $('.testimonials__tabs__item').first().show();
    $('.testimonials__buttons div').first().addClass('active');

    // Tab link click function
    $('.testimonials__buttons div').click(function(e) {
        e.preventDefault();

        // Remove active class from all tab buttons
        $('.testimonials__buttons div').removeClass('active');

        // Add active class to the current tab button
        $(this).addClass('active');

        // Get the current tab ID
        var currentTab = $(this).data('tab');

        // Hide all tab content
        $('.testimonials__tabs__item').hide();

        // Show the current tab content
        $('#' + currentTab).show();
    });
});
