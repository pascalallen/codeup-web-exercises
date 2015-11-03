<!-- PHP NOTES -->

browser cannot read php. server reads php and parses out html to browser.

REPL = read, evaluate, print, loop

'$': declare a variable in PHP.

<!-- 'echo': print. ex: -->
php > $answer = 5 + 4;
php > echo $answer;
9

<!-- data types: -->
boolean
integer
float (floating-point number, aka double)
string
array
object
resource
NULL

<!-- var_dump(): outputs variable info. ex: -->
php > $codeup_rocks = true;
php > var_dump($codeup_rocks);
bool(true)

$number = 1;
<!-- how to change variables types -->
$someVar = (bool) $number;
<!-- how to dump cast -->
var_dump((bool) $someVar);

<!-- Concat. strings: -->
php > $firstName = 'John';
php > $lastName = 'Doe';
php > echo $firstName . ' ' . $lastName;
John Doe

<!-- New line "character" -->
\n

<!-- Horizontal tab "character" -->
\t

<!-- PHP END OF LINE -->
PHP_EOL

<!-- EXAMPLE(NEW LINE AND HORIZONTAL TAB): -->
php > echo "Joe Blow\n123 Cherry Tree Ln\nSomewhere, CA\t90210";
Joe Blow
123 Cherry Tree Ln
Somewhere, CA    90210

<!-- STRING INTERPOLATION -->
php > echo "{$firstName}_{$lastName}";
Joe_Blow

<!-- HEREDOC (MULTIPLE LINES) -->
$limerick = <<<POEM
<<< >There was a young man of Japan
<<< >Whose limericks never would scan.
<<< >When asked why this was,
<<< >He replied "It's because
<<< >I always try to fit as many syllables into the last line as ever I possibly can.
<<< >POEM;

<!-- CONSTANTS -->
define('SIDES_OF_DICE', 6);
echo SIDES_OF_DICE;  <!-- outputs 6 -->

<!-- MATH RANDOM -->
mt_rand(int $min, int $max);

<!-- EXAMPLE FOR RANDOM -->
define ('SIDES_OF_DICE', 6);
$roll = mt_rand(1, SIDES_OF_DICE);

<!-- TOP OF PHP FILE -->
<?php

// ARRAY
$name = array('Joe', 'Blow');
// or
$name = [];

// INDEX CALLS IN ARRAYS
$name[1];

// ASSOCIATIVE ARRAYS (to redefine indexes)
$name = array('first' => 'John', 'last' => 'Doe');

// MULTIDIMENSIONAL ARRAYS
$user = array('name' => array('first' => 'John', 'last' => 'Doe'));

// "&" is used to reference
$anotherNumber = &$someNumber;
// (to link $anotherNumber to $someNumber)

// COMPARISON OPERATORS
$a == $b	
Equal true if $a is equal to $b after type juggling.
`$a === $b`	
Identical true if $a is equal to $b, and they are of the same type.
$a != $b	
Not equal true if $a is not equal to $b after type juggling.
$a <> $b	
Not equal true if $a is not equal to $b after type juggling.
`$a !== $b`	
Not identical true if $a is not equal to $b, or they are not of the same type.
$a < $b	
Less than true if $a is strictly less than $b.
$a > $b	
Greater than true if $a is strictly greater than $b.
$a <= $b	
Less than or equal to true if $a is less than or equal to $b.
$a >= $b	
Greater than or equal to true if $a is greater than or equal to $b.

// Incrementing/Decrementing Operators
++$a Pre-increment Increments $a by one, then returns $a.
$a++ Post-increment Returns $a, then increments $a by one.
--$a Pre-decrement Decrements $a by one, then returns $a.
$a-- Post-decrement Returns $a, then decrements $a by one.

// INTERPOLATE
""

// LOGICAL OPERATORS
`$a and $b`	And	true if both `$a` and `$b` are true.
`$a or $b`	Or	true if either `$a` or `$b` is true.
`$a xor $b`	Exclusive Or	true if either `$a` or `$b` is true, but not **both**.
`!$a`	Not	true if `$a` is not true.
`$a && $b`	And	true if both `$a` and `$b` are true.
`$a || $b`	Or	true if either `$a` or `$b` is true.




















