$(document).ready(function(){
	$('#hamburger').click(function(){
		$(this).toggleClass('open');
	});

    $('#hamburger').click(function() {
        $('.menu').toggleClass('open');
    });
    
    // open sub menu
    function toggleSubMenu() {
        if ($(window).width() > 1400) {
            $('li.menu-item-has-children').hover(function(){
                $(this).toggleClass('open');
            });
        } else {
            $('li.menu-item-has-children').click(function(){
                $(this).toggleClass('open');
            });
        }
    }

    toggleSubMenu();

    $(window).resize(function() {
        toggleSubMenu();
    });


    // colored dots
    var serviceColor = "<?php echo $page_color; ?>";  
    $('li.dot > a').each(function() {
        $(this).append('<span class="dot-span">.</span>');  // Add a dot span
        var svgCode = '<svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none"><path d="M0.999999 4L11 4M11 4L7.73077 1M11 4L7.73077 7" stroke="white" stroke-linecap="round" stroke-linejoin="round"/></svg>';
        $(this).append('<span class="arrow">' + svgCode + '</span>');
    });
    
    // Optionally change the color of the dot spans
    $('.dot-span').css('color', serviceColor);
    $('.arrow svg path').css('stroke', serviceColor);
});
  