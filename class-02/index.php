<?php
// Object in PHP
/* class Car {
    public $color;
    public $model;

    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }

    public function message() {
        return "My Car is ". $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car('Black', 'BMW');
echo $myCar->message();
echo "<br>";
$myCar = new Car('Red', 'TOYOTA');
echo $myCar->message(); */

// PHP String
// ? Variables
// $text = "Hello World";
// $place = "World";
// $change = "Sujon";

// ? strlen() function
/*
* strlen() function returns the length of a string
*/
// echo strlen($text);

// ? str_word_count() function
/*
* str_word_count() function counts the number of words in a string
*/
// echo str_word_count($text);

// ? str_rev() function
/*
* strrev() function reverses a string
*/
// echo strrev($text);

// ? str_pos() function 
/* 
* strpos() function - Search For a Text Within a String
*/
// echo strpos($text, "r");

// ? str_replace() function
/* 
* str_replace() function replaces some characters with some other characters in a string.
*/
// echo str_replace('World','Sujon', $text);
// echo str_replace($place, $change, $text);


// ? str_ireplace() function
/* 
* The str_ireplace() function replaces some characters with some other characters in a string.
*/
// echo str_ireplace("WORLD","Peter", "Hello World!");

// ? md5() function 
/* 
* md5() function calculates the MD5 hash of a string.
*/
/* $password = "hello9090";
echo md5($password);
echo "<br>"; */

// ? password_hash() function
/* 
* password_hash() function is best cause it's changeable every times.
*/
/* $pass = "hello9090";
echo password_hash($pass, PASSWORD_DEFAULT);
echo "<br>";
echo password_hash($pass, PASSWORD_BCRYPT); */

// ? trim() function
/*
* trim() function removes whitespace and other predefined characters from both sides of a string.
*/
/* $text = "    Creative IT     ";
echo $text = trim($text);
echo "<br>";
var_dump($text);
 */

// ? ltrim() function
/* 
* The ltrim() function removes whitespace or other predefined characters from the left side of a string.
*/
/* $text = "Hello World";
echo $text."<br>";
echo ltrim($text, "Hello");
 */

//  ? rtrim() function
/* 
* The rtrim() function removes whitespace or other predefined characters from the right side of a string.
*/
/* $text = "Hello World";
echo $text."<br>";
echo rtrim($text, "World"); */

// ? str_repeat() function
/* 
* The str_repeat() function repeats a string a specified number of times.
*/
// echo str_repeat("Sujon <br>",5); // repeat Sujon 5 times

// ? strtoupper() function
/*  
* converts a string to uppercase. 
*/
// echo strtoupper("hello world");

// ? strtolower() 
/* 
* converts a string to lowercase 
*/
// echo strtolower("HELLO WORLD");

// ? lcfirst() function
/* 
* converts the first character of a string to lowercase 
*/
// echo lcfirst("Hello World");

// ? ucfirst() function
/* 
* converts the first character of a string to uppercase 
*/
// echo ucfirst("hello world");

// ? ucwords() function
/* 
* converts the first character of each word in a string to uppercase 
*/
// echo ucwords("hello world");

// ? substr() function
/* 
* substr() function is a part of string
*/
// $message = "This is simple message for you!";
// echo substr($message,0,20)."...";

// ? PHP Math
// * pi() function 
//echo (pi());     // return 3.1415926535898

// * min() and max() function
//echo (min(10,20,30,40,50)); // returns 10
//echo (max(10,20,30,40,50)); // returns 50

// * abs() function
//echo (abs(-6.7));   // return 6.7

// * sqrt() function
//echo (sqrt(64));    // returns 8

// * round() function
// echo (round(5.5));   // returns 6

// * rand() function
// echo (rand(1,10));

// ? PHP Constants
// * with case-sensitive
// define("GREETING", "This Constants message case-sensitive");
// echo GREETING;

// * with case-insensitive
// define("GREETING", "This Constants message case-insensitive", true);
// echo greeting;

// * PHP Constants Array
/* define("cars",[
    "BMW",
    "TOYOTA",
    "Ferrari"
]); 
echo cars[0]; */

// * Constants are global
/* define("GREETING", "This is global Constants");
function myFun() {
    echo GREETING;
    echo "<br>";
}
myFun();
myFun(); */

// ? PHP Function
// declare a function
function writeMsg() {
    echo "Hello World!";
}
// call the function
writeMsg();










