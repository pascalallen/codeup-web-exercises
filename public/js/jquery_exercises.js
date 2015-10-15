$(document).ready(function() {
"use strict";
	alert( 'The DOM has finished loading!' );
    var contents = $('.para1').html();
    alert(contents);
    $('.codeup').css('border', '5px solid red');
    $('li').css('font-size', '25px');
    $('p, li').css('background-color', '#FFFF00');
    $('.title').click(function() {
                $(this).css('background-color', '#FFFF00');
    });
    $('p').dblclick(function() {
                $(this).css('font-size', '18px');
    });
    $('li').hover(
        function() {
            $(this).css('background-color', '#FF0');
        },
        function() {
            $(this).css('background-color', '#FFF');
        }
    );
});
