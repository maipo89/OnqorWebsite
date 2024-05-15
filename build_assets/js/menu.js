$(document).ready(function(){
	$('#hamburger').click(function(){
		$(this).toggleClass('open');
	});

    $('#hamburger').click(function() {
        $('.menu').toggleClass('open');
    });
    
    // open sub menu
    $('li.menu-item-has-children').click(function(){
		$(this).toggleClass('open');
	});

    var serviceColor = "<?php echo $page_color; ?>";
    $('li.dot > a').each(function() {
        $(this).append('<span class="dot-span">.</span>');
        $(this).append('<span class="arrow"></span>');
    });
    $('.dot-span').css('color', serviceColor);
    $('.arrow').each(function() {
        var svg = $(this).find('svg'); // Find the SVG element
        var serviceColor = "<?php echo $page_color; ?>"; // Get the service color from PHP
        var updatedSVG = svg.html().replace('STROKE_COLOR', serviceColor); // Replace the placeholder with the service color
        svg.html(updatedSVG); // Update the SVG markup
    });
});
  