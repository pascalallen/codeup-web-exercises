$(document).ready(function() {
"use strict";
	alert( 'The DOM has finished loading!' );
    var contents = $('.para1').html();
    alert(contents);
    $('.codeup').css('border', '5px solid red');
    $('li').css('font-size', '20px');
    $('h1, p, li').css('background-color', '#FFFF00');
});
