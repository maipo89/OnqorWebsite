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
});
