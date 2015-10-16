"use strict";
var answer = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65, 13];
var code = []; 

$(document).keyup(function(event){
    code.push(event.keyCode);
    console.log(code);
    if (code.join('|') == answer.join('|')) {
    	$('body').css('background-image', 'url(/img/contra.gif').css('background-size', '100%');
    	alert('You have added 30 lives!');
    	$('#contra').get(0).play();
    }
});