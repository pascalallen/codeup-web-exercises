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


// SELF INVOKING FUNCTION(PROTECTED)
// (DEFINES AND CALLS A FUNCTION IN ONE STEP)
// CAN PROTECT YOUR SCRIPT(ONLY PROTECTS YOUR SCRIPT)
(function(){
 // do {
    // 
 // } while();
})();


// ARRAYS
''.length // couting arrays
''.splice(1, 2) // '1' is index in array and '2' is how many
''.pop() // takes from end
''.shift() // takes from beginning
''.splice(colors.indexOf('') +1, 0, '', '') //placing with splice
''.reverse() // reverses the array
''.sort() // alphabatize


// array example
var names = ['Ringo', 'Paul', 'George', 'John'];
// to console.log array
console.log(names);
// using a for loop and function to log all names
for(var i = 0; i < names.length; i++) {
    sayHello(names[i]);
}
function sayHi(name) {
    return 'Hello, ' + name;
}
// iterating a for-each loop in an ARRAY
// declare and initialize array
var shapes = ['square', 'rectangle', 'circle', 'triangle'];
// loop through the array and log the values
shapes.forEach(function (element, index, array) {
    // element is the shape name
    // index is the iterator
    // array is the shapes array itself
    console.log('The shape at index ' + index + ' is: ' + element);
});
// example of for-each loop iteration
names.forEach(function (element, index, array) {
    console.log('The name at index ' + index + ' is ' element);

});

// MATH
Math.random(); Math.floor(Math.random() * (max - min + 1) + min);
Math.round(); Math.round(20.49);  // 20
Math.floor(); Math.floor( 45.95); //  45
Math.ceil(); Math.ceil(.95);   // 1
Math.pow(); Math.pow(2, 16); // 65536 (2^16)
Math.sqrt(); Math.sqrt(9);  // 3
Math.E; 
Math.PI;


// LOCATING AND RETRIEVING HTML ELEMENTS IN DOM
document.getElementById();
<button id="btnToClick">Click Me</button>
<script>
    "use strict";
    (function() {
        var btnToClick = document.getElementById('btnToClick');
        console.log(btnToClick);
    })();
</script>

document.getElementsByClassName();
// AND
document.getElementsByTagName();
<h1>List One</h1>
<ul>
    <li class="odd list-one-item">List 1, Item 1</li>
    <li class="even list-one-item">List 1, Item 2</li>
</ul>
<h1>List Two</h1>
<ul>
    <li class="odd list-two-item">List 2, Item 1</li>
    <li class="even list-two-item">List 2, Item 2</li>
</ul>
<script>
    "use strict";
    (function() {
        var evenElements = document.getElementsByClassName('even');
        console.log(evenElements[0]);
        for (var i = 0; i < evenElements.length; i++) {
            console.log(evenElements[i]);
        }
        var listItems = document.getElementsByTagName('li');
        console.log(listItems[0]);
        for (var i = 0; i < listItems.length; i++) {
            console.log(listItems[i]);
        }
    })();
</script>

// DIRECT ACCESS TO FORM INPUTS (DOM)
<form name="login">
    <div>
        <label for="username">Username</label>
        <input id="username" name="username" type="text">
    </div>
    <div>
        <label for="password">Password</label>
        <input id="password" name="password" type="password">
    </div>
    <div>
        <input type="submit">
    </div>
</form>
<script>
    "use strict";
    (function() {
        var usernameInput = document.forms.login.username;t
        console.log(usernameInput.value);
    })();
</script>

// ACCESSING OR MODIFYING INNER HTML AND TEXT
<h1 id="main-heading">Hello World!</h1>
<div id="main-section">
    <p>Paragraph 1</p>
    <p>Paragraph 2</p>
</div>
<script>
    "use strict";
    (function() {
        // Get the main heading h1 by id
        var mainHeading = document.getElementById('main-heading');
        console.log(mainHeading.innerHTML); // Prints Hello World!
        // Assign a new value to the inner HTML of the main heading
        mainHeading.innerHTML = "Hello Codeup!";
        console.log(mainHeading.innerHTML); // Prints Hello Codeup!
        // Get the main section div by id
        var mainSection = document.getElementById('main-section');
        console.log(mainSection.innerHTML);
        // Prints
        // <p>Paragraph 1</p>
        // <p>Paragraph 2</p>
    })();
</script>

// ACCESSING OR MODIFYING ATTRIBUTES
<a href="http://www.yahoo.com" id="search-link">Web Search</a>
<script>
    "use strict";
    (function() {
        // Get the search link anchor by id
        var searchLink = document.getElementById("search-link");
        // Does an element have an attribute?
        console.log(searchLink.hasAttribute("href")); // Prints true
        console.log(searchLink.hasAttribute("class")); // Prints false
        // Get an attribute value
        console.log(searchLink.getAttribute("href")); // Prints "http://www.yahoo.com"
        // Add or modify an attribute
        searchLink.setAttribute("class", "btn btn-default");
        // Adds the attribute class and sets it to "btn btn-default"
        searchLink.setAttribute("href", "http://google.com");
        // Changes the href attribute to "http://google.com"
        // Remove an attribute
        searchLink.removeAttribute("class"); // Remove the class attribute
    })();
</script>

// ACCESSING OR MODIFYING STYLES
<!DOCTYPE html>
<html>
<head>
    <title>Sample Page</title>
</head>
<body>
    <script>
        "use strict";
        (function() {
            // Get the body element (notice we need to use index 0 of the array!)
            var bodyElement = document.getElementsByTagName('body')[0];
            // Change the body font color
            bodyElement.style.color = '#444'; // Dark grey
            bodyElement.style['background-color'] = "#fefefe"; // Very light grey
            // We had to use [] syntax since the property name has a dash
            bodyElement.style.fontFamily = "Helvetica, Verdana, Sans-Serif";
            // Replace dashes with camelCaps to use standard . syntax
        })();
    </script>
</body>
</html>

// ADDING AND REMOVING ELEMENTS
createElement()
removeChild()
appendChild()
replaceChild()

// REGISTER AN EVENT LISTENER IN DOM 
var listener = function (event) {
             alert('You clicked the button!');
             };
// ADD EVENT LISTENER TO btn1
var btn1 = document.getElementById('btn1');
document.getElementById('btn1').addEventListener('click', listener, false);

var remover = function (event) {
            // remove event listener from btn1
            btn1.removeEventListener('click', listener, false);
            console.log('Event listener removed.');
            }
// ADD EVENT LISTENER TO btn2
var btn2 = document.getElementById('btn2');
btn2.addEventListener('click', remover, false);



















