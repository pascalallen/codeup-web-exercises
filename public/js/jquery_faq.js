$(document).ready(function() {
    $('#answers').click(function(event) {
        event.preventDefault();
        $('.invisible').toggleClass('visible');
    });
});

$(document).ready(function() {
	$('ul').each(function(){
		$(this).children('li').first().css('font-weight', 'bold');
	});
	$('li').click(function(event) {
        event.preventDefault();
        $(this).parent().toggleClass('invisible');
    });
});