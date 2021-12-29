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
*   The ltrim() function removes whitespace or other predefined characters from the left side of a string.
*/
$text = "Hello World";
echo $text."<br>";
echo ltrim($text, "Hello");