"use strict";
var answer = "38,38,40,40,37,39,37,39,66,65,13";
var code = [];
var buzzer = $('#contra')[0];  

$(document).keyup(function(event){
    code.push(event.keyCode);
    console.log(code);
    if (code == answer) {
    	$('body').css('background-image', 'url(/img/metalgear.jpg').css('background-repeat', 'no-repeat');
    	alert('You have added 30 lives!');
    	$('#contra').get(0).play();
    }
});