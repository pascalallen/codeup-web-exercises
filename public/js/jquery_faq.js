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
	$('#toggle1').click(function() {
        $('#1').toggle();
    });
    $('#toggle2').click(function() {
        $('#2').toggle();
    });
    $('#toggle3').click(function() {
        $('#3').toggle();
    });
});