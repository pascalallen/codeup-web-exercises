// Link to html
<script src="js/external.js"></script>

// read evaluate print loop:
repl;

// declare variable:
var "hello";

// undefined
unassigned varilable without value or type

// to find out type of variable
typeof;

// boolean has 2 values(on or off)
1 or 0;

// logical AND
&&;

// logical or
||;

// logical NOT
!;

// read from right to left for booleans like this:
!!boolean;

// only false number is 0
// any content is true

// modulo gives remainder when doing division
7 % 3 = 1;

// increment
++

// decrement
--

// increments of 2(example)
x += 2;

// use .tofixed() to avoid floating numbers
.tofixed();

// number you pass in the parenthesis is the number it rounds up to

// multi-line strings
var multiLine = "Hello \
World!";

// Special Characters and Escaping
"
\n	New line
\t	Tab
\\	Backslash
\'	Apostrophe or single quote
\"	Double quote
"

// string concatenation
var sayHello = "Hello " + "World";

// Parsing a String into a Number
parseInt("1") + 2; // yields number 3


// functions

.length : property that describes the number of characters in the string.

.indexOf(char) : returns the index of the specified character in the string.

.replace(find, replace) : returns a copy of the string after performing a substitution.

.substring(fromIndex, toIndex) : returns a subset of the original string based on the provided indices.

.toUpperCase() : returns a copy of the string in all upper case.

.toLowerCase() : returns a copy of the string in all lower case.

.trim() : returns a copy of the string with whitespace at the beginning and end removed.

String.fromCharCode(code) : returns a string based on the provided ASCII code.


//Comparison Operators
==	equal to (value)
===	equal to (type and value)
!=	not equal to (value)
!==	not equal to (type and value)
>	greater than
<	less than
>=	greater than or equal to
<=	less than or equal to

// if/else if/else example
if (condition1) {
    // code here gets executed if condition1 evaluates to true
} else if (condition2) {
    // code here gets executed if condition2 evaluates to true
} else {
    // code here gets executed if neither condition1 nor condition2 evaluate to true
}


// TERNARY OPERATOR
var message;
if (success) {
    message = "Operation was successful.";
} else {
    message = "Oops, something went wrong.";
}
// the above if/else can be re-written as:
var message = (success) ? "Operation was successful." : "Oops, something went wrong.";
() ? RUN_IF_TRUE : RUN_IF_FALSE ;


// SWITCH STATEMENT
var whatAmI = "I am a string.";

switch (typeof whatAmI) {
    case "boolean":
        console.log("You are a boolean.");
        break;
    case "number":
        console.log("You are a number.");
        break;
    case "string":
        console.log("You are a string.");
        break;
    case "function":
    case "object":
        console.log("You are an object.");
        break;
    case "undefined":
        console.log("You are undefined.");
        break;
    default:
        console.log("I have no clue.");
}

SAME THING AS THIS:

var whatAmI = "I am a string.";

if (typeof whatAmI === "boolean") {
    console.log("You are a boolean.");
} else if (typeof whatAmI === "number") {
    console.log("You are a number.");
} else if (typeof whatAmI === "string") {
    console.log("You are a string.");
} else if (typeof whatAmI === "function" || typeof whatAmI === "object") {
    console.log("You are an object.");
} else if (typeof whatAmI === "undefined") {
    console.log("You are undefined.");
} else {
    console.log("I have no clue.");
}

// WHILE loop
var i = 10;

while (i < 10) {
    console.log('while loop iteration #' + i);
    i++;
}


// GENERATE A RANDOM NUMBER
Math.floor((Math.random()*15)+1)


// DO WHILE loop
var i = 10;

do {
    console.log('while loop iteration #' + i);
    i++;
} while (i < 10);

// FOR loop
for (var i = 0; i < 10; i++) {
    console.log('for loop iteration #' + i);
}
// or
for (var i = 0, j = 9; i < 10; i++, j--) {
    console.log('for loop iteration #' + i + ', j = ' + j);
}

// BREAKING OUT OF A LOOP
// do not worry about the details of this line
// just know that it generates a random number between 1 and 100
var random = Math.floor((Math.random()*100)+1);

console.log('Random stopping point is: ' + random);

for (var i = 1; i < 100; i++) {

    console.log('Loop counter is: ' + i);

    if (random == i) {

        console.log('We have reached the random stopping point: break!');

        // use the break keyword to exit from the while loop
        break;

        // nothing after the break will get processed
        console.log('You will never see this line.');
    }
}
// continuing to next iteration of loop
for (var i = 1; i < 100; i++) {

    if (i % 2 !== 0) {
        // number isn't even
        // odd numbers aren't as cool
        // skip the rest of the loop and continue with the next iteration
        continue;
    }

    console.log('Here is a lovely even number: ' + i);
}


// FUNCTION EXAMPLE
function isEven(input) {
    var remainder = input % 2;
    if (remainder === 0) {
        return true;
    } else {
        return false;
    }
}

// FUNCTION WITH IF STATEMENT INSIDE TO CHECK EVEN NUMBERS:
for(var i = 0; i <= 100; i++) {
    if(isEven(i)) {
        console.log(i + ' is even');
    }
}


// ALERT and PROMPT EXAMPLES
var response = prompt('What is your name?');

    while (response == ' ' || response == null || response == ''){
        response = prompt('Name required');
    }

    alert('Welcome, ' + response + ', that is my name too!');





    var responsePizza = prompt('Do you like pizza?');

    while (responsePizza != 'yes' && responsePizza != 'no') {
        responsePizza = prompt('Input required');
        responsePizza = responsePizza.toLowerCase();
    }

    if (responsePizza == 'yes') {
        alert('Good! Give me some!');
    } else if (responsePizza == 'no'){
        alert('Go away..');
    } else {
        alert('Enter either \"Yes\" or \"No\"');
    }











