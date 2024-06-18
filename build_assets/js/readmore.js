$(document).ready(function() {
    $('.read-more').click(function() {
        var $container = $(this).closest('.cap-height');
        var $wizywig = $container.find('.wizywig');
        
        $container.toggleClass('expanded');

        if ($container.hasClass('expanded')) {
            var wizywigHeight = $wizywig.prop('scrollHeight');
            $wizywig.css('max-height', wizywigHeight + 'px'); // Expand to full height
            $(this).text('Show less');
        } else {
            $wizywig.css('max-height', ''); // Reset max-height to collapse
            $(this).text('Read more');
        }
    });
});
