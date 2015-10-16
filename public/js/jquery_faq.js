$(document).ready(function() {
    $('#answers').click(function(event) {
        event.preventDefault();
        $('.invisible').toggleClass('visible');
    });
});