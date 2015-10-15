// <!-- JQUERY NOTES -->

// <!-- CDN TAG  -->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

// <!-- DOWNLOADED TAG -->
<script src="/js/jquery.js"></script>

// <!-- METHOD CHAINING -->
// <!-- TO GET THE CONTENTS OF THE HTML ELEMENT AND ASSIGNED TO VARIABLE -->
$(document).ready(function() {
            var contents = $('#para1').html();
            alert(contents);
});

// CSS METHOD IN JQUERY
$(_selected_element_).css(propertyName, value);
// ANOTHER EXAMPLE:
$(document).ready(function() {
    $('.important').css('background-color', '#FF0');
});

// PUT CODE INSIDE OF THIS:
$(document).ready(function() {
"use strict";
	// CODE HERE
	// CODE HERE
	// CODE HERE
});

// ELEMENT SELECTOR EXAMPLE:
$('p').css('font-size', '32px');

// MULTIPLE ELEMENT SELECTOR EXAMPLE:
$('h1, p, li').css('background-color', '#FFFF00');

// ALL SELECTOR EXAMPLE:
$('*').css('border', '1px solid #F00');