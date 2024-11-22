<?php
echo "my website <br>"; 

$myName = 'Adline';

var_dump ($myName);

$yearsofExpirence = 5;

echo "<br>";

var_dump($yearsofExpirence);

$height = 6.1;

echo "<br>";

var_dump($height);

$isMale = true;

echo "<br>";

// array
$fullName = array ("Adline", "Chi", "Chi");
echo "<br>";
var_dump($fullName);
echo "<br>";
echo $fullName [1];

echo "<br>";

echo "my first name is $fullName[0]
and my surname is $fullName[1]";

// 28/10/2024
// NULL
$nothing = null;

echo "<br>";

var_dump ($nothing);

// constant
define("pi", 3.142);
echo "<br>";
var_dump(pi);

const gravityAcceleration = 10;

echo "<br>";

var_dump (gravityAcceleration);
echo "<br>";
//31/10/2024
//operators
//arithematic operators
$x = 10;
$y = 5;
echo $x + $y;
echo "<br>";

echo $x - $y;
echo "<br>";

echo $x * $y;
echo "<br>";

echo $x / $y;
echo "<br>";

echo $x % $y;
echo "<br>";

echo $x ** $y;
echo "<br>";

//increment and decrement operators
echo $x++;

echo $x;

echo "<br>";

$x--;

echo $x; 

// Assignment operators

$a = 100;
$b = 50;

// addition Assignment
$a +=$b;
echo "<br>";
echo $a;

// subtraction Assignment
echo "<br>";
echo $a;



// logical operators
// example of logical operators are: AND(&&), OR (||), XOR
echo "<br>";
if ($a== 100 && $b ==50) {
    echo "we are good to go.";
}
echo "<br>";
if ($a== 100 || $b ==50) {
     echo "we are good to go.";
}
echo "<br>";
if ($a== 100 xor $b ==50) {
    echo "we are good to go.";
}
echo "<br>";
if (!($a== 101)) {
    echo "we are good to go.";
}

// 7/11/2024

// PHP Contional Statements
// There are four notable contional Statements in PHP viz

// If Statment

// If... else statment

// if... elseif... else statement

// Switch statement


// IF STATEMENT
// ____________________________

// The if statement is one of the most important statements in PHP

// Example:
// ____________________________
echo "<br>";
if (7>3) {
    echo "Have a good day";
}

echo "<br>";
// variable declaration
$my_name = "ella";

$present_time = date (format: "H:i");

echo "<br>";

echo "present_time: $present_time <br>";





if ($present_time >= 00.00 && $present_time < 12.00) {
echo "<h3> Good Morning, $my_name!  </h3>";
}

elseif ($present_time >= 12.00 && $present_time <= 16.00) {
echo "<h3> Good Afternoon, $my_name!  </h3>";
}
elseif ($present_time >= 16.00 && $present_time <= 23.59) {
echo "<h3> Good Night, $my_name! </h3>";
}

else {
    echo "<h3> Hello, $my_name! </h3>";

}


// Switch Statement
// ____________________

$today = date (format: "D");
echo "Today is: $today <br>";

// 8/11/2024
switch ($today) {
    case "Mon":;
        echo "Hello everbody, It's Monday. Have a great week!";
        break;
    case "Tue":;
        echo "Hello everbody, It's Tuesday. Do have a splendid week!";
        break;
    case "Wednesday":;
        echo "Hello everbody, It's Wednesday. Do have a wonderful week!";
        break;
    case "Thu":;
        echo "Hello everbody, It's Thu. Do have a miraclous week!";
        break;
    case "Fri":;
        echo "Hello everbody, It's Fri. Do have a Blessed week!";
        break;
    case "Sat":;
        echo "Hello everbody, It's Sat. Do have a fabulous week!";
        break;
    case "Sun":;
        echo "Hello everbody, It's Sun. Do have a glorious week!";
        break;
    default:
        echo "Sorry, this is not a day in the week!";
        break;
        
}

echo "<br>";


// 11/11/2024
// Php loops

/* $numbers = 1;

echo $numbers."<br>";

$numbers++;

echo $numbers."<br>";

$numbers++;

echo $numbers."<br>"; */

//while loops

/*$numbers = 1;
while ($numbers <= 10) {
    echo $numbers."<br>";
    $numbers++;
} */

// do while loop
/*$numbers = 11;
do {
    echo $numbers."<br>";
    $numbers++;
} while ($numbers <= 10) */

// create an app that print number 1 to 100, print fizz for
// multiples of 3, and buzz for multiple of 5, print fizzbuzz
//for multiple of 15.
// for loop
for ($numbers = 1; $numbers <= 100; $numbers++) {
    if($numbers % 15 == 0) {
        echo "fizzbuzz <br>";
    } elseif ($numbers % 5 == 0) {
        echo "buzz <br>";
    } elseif($numbers % 3 == 0) {
        echo "fizz <br>";
    } else {
        echo $numbers."<br>";
    }
    
}

// for each

/*$cars = array("BMW", "lexus", "ferarri", "roseroxy");
echo "i love $cars [0] <br>";
echo "i love $cars [1] <br>";
echo "i love $cars [2] <br>";
echo "i love $cars [3] <br>"; */

$cars = array("BMW", "lexus", "ferarri", "roseroxy");

foreach ($cars as $car) {
    echo "i love $car <br>";
}


// 15/11/2024
// Arrays
$domesticAnimals = array('Dog', 'Cat', 'Horse', 'Goat', 'Cow');
$cities = ['Asaba', 'Warri', 'Ughelli', 'Sapele', 'Agbor'];

echo '<br>' . $domesticAnimals[0] . '<br>';

// indexed array
// associative array
// multi-dimensional array

// count
echo count($domesticAnimals) . '<br>';

// array_push
array_push($cities, 'Abraka', 'Effurun', 'Patani', 'Ozoro');

var_dump($cities);

$cities[2] = 'Ogwashi-uku';

echo '<br>';

var_dump($cities);

// associative array
$phone = ['brand'=>'iphone', 'model'=>'14 pro', 'color'=>'white', 'ROM'=>256];

echo '<br>';

var_dump($phone);

$phone['model'] = '15 pro';

echo '<br>';

var_dump($phone);

/*//www.github.com/elvincedik/backend-project.git*/

// 18/11/2024
// function

function greetMe() {
    echo "<br> goodafternoon";
}

greetMe();





?> 