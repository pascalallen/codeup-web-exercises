"use strict";



// ignore these lines for now
// just know that the variable 'color' will end up 
// with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 
'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*
	colors.length)];

var favorite = 'red'; // TODO: change this to your 
// favorite color from the list

// TODO: Create a block of if/else statements to check 
// for every color except indigo and violet.
// TODO: When a color is encountered log a message 
// that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// TODO: Have a final else that will catch indigo and 
// violet.
// TODO: In the else, log: I do not know anything by 
// that color.

// TODO: Using the ternary operator, conditionally 
// log a statement that
//       says whether the random color matches your 
// favorite color.


console.log('random color chosen is ' + color);
console.log('my favorite color is ' + favorite);

if (color == 'red') {
	console.log("Red is the color of my hair.");
} else if (color == 'orange') {
	console.log("orange is also the color of my hair");
} else if (color == 'yellow') {
	console.log("is the color of yellow snow");
} else if (color == 'green') {
	console.log("green is the color of my eyes")
} else if (color == 'blue') {
	console.log("blue is the color of the sky")
} else {
	console.log("i don't know anything about that color")
}















