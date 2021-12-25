<?php
// echo 'Hello World';
// echo "My first PHP Script!";

// $text = 'PHP';
// echo "I Love $text Programming Language";

/* PHP Case Sensitivity */
/*$color = "red";
echo "My car is " . $color . "<br>";    // ok
echo "My house is " . $Color . "<br>";  // error
echo "My boat is " . $COLOR . "<br>";   // error
echo "My bike is " . $coLor . "<br>";   // error */

// Comments in PHP
// This is single line comments
/* 
    This is 
    Multiline 
    comments
*/

// PHP Variables
// $txt = "Hello World!";
// $x = 5;
// $y = 10.5;
// echo $x + $y;
// echo "<br>";

// $IT = "Creative IT";
// echo "I Love $IT";
// echo "<br>";
// echo "I Like " . $IT . "!";

// PHP Variables Scope
$x = 5; // global scope
function myTest() {
    $x = 10; // local scope
    // using x inside this function will generate an error
    echo "<p>Variables x inside function is $x </p>";
}
myTest();
echo "<p>Variables x outside function is $x </p>";



?>