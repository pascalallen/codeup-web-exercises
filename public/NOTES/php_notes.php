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

// WHILE LOOP
$test = 5;
while ($test <= 15){
	echo "$test" . PHP_EOL;
	$test++;
}

// DO-WHILE LOOP
$a = 1;
do {
    echo "\$a is equal to {$a}\n";
    $a++;
} while ($a <= 5);


// I/O STREAMS
// Write the output
// Notice the space after the ?
fwrite(STDOUT, 'What is your first name? ');
// Get the input from user
$firstName = trim(fgets(STDIN));
// Output the user's name
fwrite(STDOUT, "Hello $firstName\n");

// PHP CLI arguments
// COUNTER
$argc;
// VALUE
$argv;

// FOREACH
$numbers = ['zero', 'one', 'two', 'three', 'four', 'five'];
foreach ($numbers as $value) {
    echo "\$number has a value of {$value}\n";
}

// FOREACH WITH KEYS
$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);
foreach ($books as $title => $book) {
	echo "Book's title is {$title}\n";
    foreach ($book as $key => $value) {
        echo "Book's $key is $value\n";
    }
}

// BREAK AND CONTINUE IN PHP
// break
for ($i = 1; $i <= 100; $i++) {
    echo $i . "\n";
    if ($i == 5) {
        break;
    }
}
// continue
for ($i = 1; $i <= 10; $i++) {
    echo $i . "\n";
    if ($i % 2 == 0) {
        continue;
    }
    echo "^ that is an odd number.\n";
}
// nested loops using break
$numbers = array(1, 2, 3, 4, 5);
// Loop 1
foreach ($numbers as $key => $value) {
    echo "{$value}\n";
    // Loop 2
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 2) {
            echo "{$i}\n";
            break 2;
        }
    }
}
echo "done!\n";

// SWITCH CASE IN PHP
$value = 'Hello!';

switch (gettype($value)) {
    case 'integer':
        echo '$value is an integer';
        break;
    case 'float':
        echo '$value is a float';
        break;
    case 'boolean':
        echo '$value is a boolean';
        break;
    case 'array':
        echo '$value is an array';
        break;
    case 'null':
        echo '$value is null';
        break;
    case 'string':
        echo '$value is a string';
        break;
}

// FUNCTION SYNTAX IN PHP
function add($a, $b)
{
    return $a + $b;
}

// PHP manual's function reference page
http://www.php.net/manual/en/funcref.php

// PHP manual's variable functions page
http://www.php.net/manual/en/ref.var.php

// ARRAY SORTING FUNCTIONS
asort() sorts by value. maintains key association. sorts low to high.
arsort() sorts by value. maintains key association. sorts high to low.
krsort() sorts by key. maintains key association. sorts high to low.
ksort() sorts by key. maintains key association. sorts low to high.
sort() sorts by value. sorts low to high.
rsort() sorts by value. sorts high to low.
shuffle( sorts by value. sorts at random.

// SEARCHING THROUGH ARRAYS
mixed array_search ( 
    mixed $needle , 
    array $haystack [, bool $strict = false ] 
    )

// Pushing, Popping, and Shifting
array_push() = Push one or more elements onto the end of array;
array_pop() = Pop the element off the end of array;
array_shift() = Shift an element off the beginning of array;
array_unshift() = Prepend one or more elements to the beginning of an array;

// Exploding and Imploding
$physicistsArray = explode(', ', $physicistsString);
$physicistsString = implode('|', $physicistsArray);

// Using PHP to Read Files
fopen() — Opens a file (or URL), returns a file pointer
fread() — Reads a file to a specific length(bytes) using a file pointers
filesize() — Returns the size of a given file in bytes.
fclose() — Closes a handle to an open file pointer.

// PHP WITH HTML
<?php

$favoriteFoods = ['Brownies', 'Pound Cake', 'Doughnuts'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Codeup!</title>
</head>
<body>
    <h1>My Favorite Foods</h1>
    <ol>
    <?php foreach ($favoriteFoods as $favoriteFood) { ?>
        <li><?php echo $favoriteFood; ?></li>
    <?php } ?>
    </ol>
</body>
</html>

<!-- REQUEST AND QUERY STRINGS -->
codeup.dev/hello_world.php?hello=pascal
|                         |            |
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
        REQUEST            QUERY STRING

<!-- POST php example -->
<?php
var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<head>
    <title>POST Example</title>
</head>
<body>
    <form method="POST">
        <label>Name</label>
        <input type="text" name="name"><br>
        <label>Number</label>
        <input type="text" name="number"><br>
        <input type="submit">
    </form>
</body>
</html>

<!-- NULL COALESCING -->
isset($_POST['name']) ? $_POST['name'] : "";

<!-- PROTECT AGAINST ATTACKS -->
<?= strip_tags(htmlspecialchars($message)) ?>

<!-- SANITIZE DATA BEFORE DISPLAYED -->
htmlspecialchars() — Convert special characters to HTML entities
htmlentities() — Convert all applicable characters to HTML entities
strip_tags() — Strip HTML and PHP tags from a string

<!-- Sessions with PHP -->
Sessions allow you to track a client along with 
some associated data by storing an id for the client 
on the server side.

<?php
// start the session (or resume an existing one)
// this function must be called before trying to set of get any session data!
session_start();
// get the current session id
$sessionId = session_id();
// initialize view count variable
$viewCount = 0;
// check to see if we are resetting the counter
// or if we have a view count being tracked in the session
if (!empty($_POST['reset'])) {
    // end the current session
    endSession();
    // reload this page
    header('Location: session-example.php');
    exit();
} elseif (!empty($_SESSION['VIEW_COUNT'])) {
    // we found one, use it instead of the default
    $viewCount = $_SESSION['VIEW_COUNT'];
}
// increment the counter
$viewCount++;
// store the new value to the session
$_SESSION['VIEW_COUNT'] = $viewCount;
// code for this function came directly from PHP docs:
// http://php.net/session_destroy
function endSession()
{
    // Unset all of the session variables.
    $_SESSION = array();
    // If it's desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    // Finally, destroy the session.
    session_destroy();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Session Example</title>
</head>
<body>
    Session Id: <?php echo $sessionId; ?><br>
    View Count: <?php echo $viewCount; ?><br>
    <form method="POST">
        <input type="hidden" name="reset" value="reset">
        <input type="submit" value="Reset Counter">
    </form>
</body>
</html>
<!-- OBJECTS/CLASS IN PHP -->
<?php
$person = new stdClass();

$person->firstName = 'Johnny';
$person->lastName  = 'Appleseed';
$person->fruit     = array('Pink Lady', 'Gala', 'Fuji');

<!-- SAME THING -->
class Person
{
    public $firstName;
    public $lastName;
    public $fruit = array();
}

$john = new Person();

$john->firstName = 'Johnny';
$john->lastName  = 'Appleseed';
$john->fruit     = array('Braeburn', 'Golden Delicious', 'Honeycrisp');

<!-- CONSTRUCTOR -->
class Person
{
    public $firstName;
    public $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
    }
}







