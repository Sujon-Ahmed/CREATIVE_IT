# Creative_IT
## Class-01     [Date: 23-12-2021]
### What is PHP?
PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.

### Basic PHP Syntax
A PHP script starts with <?php and ends with ?>:
The default file extension for PHP files is ".php".<br>
<strong>Note:</strong> PHP statements end with a semicolon (;).
PHP Case Sensitivity

### Comments in PHP
A comment in PHP code is a line that is not executed as a part of the program. Its only purpose is to be read by someone who is looking at the code.

Type of Comments <br>
-> Single line Comments <br>
-> Multi line Comments

### PHP Variables
Variables are "containers" for storing information. <br>
In PHP, a variable starts with the $ sign

A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).

<strong>Rules for PHP variables:</strong>
1. A variable starts with the $ sign, followed by the name of the variable
2. A variable name must start with a letter or the underscore character
3. A variable name cannot start with a number
4. A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
5. Variable names are case-sensitive ($age and $AGE are two different variables)

<strong>Remember that PHP variable names are case-sensitive!</strong>

<strong>PHP Variables Scope</strong>
In PHP, variables can be declared anywhere in the script.

The scope of a variable is the part of the script where the variable can be referenced/used.

PHP has three different variable scopes:

1. local
2. global
3. static

### PHP Data Types
Variables can store data of different types, and different data types can do different things

PHP supports the following data types:

1. String
2. Integer
3. Float (floating point numbers - also called double)
4. Boolean
5. Array
6. Object
7. NULL
8. Resource

## Class-02     [28-12-2021]
### PHP String
<strong>strlen()</strong> - Return the Length of a String
<pre>
echo strlen("Hello World");   // return 11
</pre>

<strong>str_word_count()</strong> function counts the number of words in a string.
<pre>
echo str_word_count("Hello World");   // return 2
</pre>

<strong>strrev()</strong> function reverses a string
<pre>
echo strrev("Hello");     // return ollew
</pre>

<strong>strpos()</strong> - Search For a Text Within a String
The PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.

<pre>
echo strpos("hello world", "r");
</pre>

<strong>str_replace() </strong>function replaces some characters with some other characters in a string.

<pre>
$text = "Hello World";
echo str_replace('World', 'Sujon', $text);
</pre>

The <strong>str_ireplace()</strong> function replaces some characters with some other characters in a string.
<pre>
echo str_ireplace("WORLD","Peter","Hello World!");
</pre>
<strong>Note : </strong>The function is case-insensitive.
<strong>Note : </strong>This function is binary-safe.

The <strong>md5</strong> function calculates the MD5 hash of a string.
<pre>
$password = "hello9090";
echo md5($password);
</pre>
<strong>Notes : </strong>The md5() function uses the RSA Data Security, Inc. MD5 Message-Digest Algorithm.

<strong>password_hash() </strong>creates a new password hash using a strong one-way hashing algorithm
<pre>
$password = "hello9090";
echo password_hash($password, PASSWORD_DEFAULT);
echo password_hash($password, PASSWORD_BCRYPT);
</pre>

The <strong>trim()</strong> function removes whitespace and other predefined characters from both sides of a string.
<pre>
$text = "Creative IT";
$text = trim($text);
var_dump($text);
</pre>

The <strong>ltrim()</strong> function removes whitespace or other predefined characters from the left side of a string.
<pre>
$text = "Hello World!";
echo ltrim($text, "Hello");     // return World!
</pre>

The <strong>rtrim()</strong> function removes whitespace or other predefined characters from the right side of a string.
<pre>
$text = "Hello World!";
echo rtrim($text, "World");     // return Hello
</pre>

The <strong>str_repeat()</strong> function repeats a string a specified number of times.
<pre>
echo str_repeat("Sujon",5);     // return Sujon 5 times
</pre>

The <strong>strtoupper()</strong> function converts a string to uppercase.
<pre>
echo strtoupper("hello world");     // return HELLO WORLD
</pre>

The <strong>strtolower()</strong> function converts a string to lowercase.
<pre>
echo strtolower("HELLO WORLD");     // return hello world
</pre>

The <strong>lcfirst()</strong> function converts the first character of a string to lowercase.
<pre>
echo lcfirst("HELLO WORLD");    // return hELLO WORLD
</pre>

The <strong>ucfirst()</strong> function converts the first character of a string to uppercase.
<pre>
echo ucfirst("hello world");    // Hello world
</pre>

The <strong>ucwords()</strong> function converts the first character of each word in a string to uppercase 
<pre>
echo ucwords("hello world");    // Hello World
</pre>

The <strong>substr()</strong> function returns a part of a string.
<pre>
$text = "Hello World";
echo substr($text,1);   // return ello World
</pre>
substr($string,start,length);
<b>return ello World cause, start 1 index</b>

### PHP Math
The <b>pi()</b> function returns the value of PI:
<pre>
echo (pi());    //returns 3.1415926535898
</pre>

The <b>min()</b> and <b>max()</b> functions can be used to find the lowest or highest value in a list of arguments:
<pre>
echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo(max(0, 150, 30, 20, -8, -200));  // returns 150
</pre>

The <b>abs()</b> function returns the absolute (positive) value of a number:
<pre>
echo (abs(-6.7));   // returns 6.7
</pre>

The <b>sqrt()</b> function returns the square root of a number:
<pre>
echo (sqrt(64));    // return 8
</pre>

The <b>round()</b> function rounds a floating-point number to its nearest integer:
<pre>
echo (round(5.5));  // returns 6 cause .5 to round() return next number Ex:- 3.4 -> 3, 4.5-> 5 etc.
</pre>

The <b>rand()</b> function generates a random number:
<pre>
echo (rand(1,10)); // return 1-10 any number
</pre>

### PHP Constants
A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

A valid constant name starts with a letter or underscore (no $ sign before the constant name).

<b>Note:</b> Unlike variables, constants are automatically global across the entire script.

To create a constant, use the define() function.

<i>define(name, value, case-insensitive)</i>

Parameters:

✔ name: Specifies the name of the constant
✔ value: Specifies the value of the constant
✔ case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false

Example: Create a constant with a case-sensitive name:
<pre>
define("GREETING", "Welcome to home page");
echo GREETING;
</pre>

Example: Create a constant with a case-insensitive name:
<pre>
define("GREETING", "Welcome to home page", true);
echo greeting;
</pre>

PHP constants array:
<pre>
define("cars",[
    "BMW",
    "TOYOTA",
    "Ferrari"
]); 
echo cars[0];
</pre>

PHP global Constants:
<pre>
define("GREETING", "This is global Constants");
function myFun() {
    echo GREETING;
    echo "<br>";
}
myFun();
myFun();
</pre>

### PHP Operators
Operators are used to perform operations on variables and values.

<b>Note : </b> Open class-02/operators-img folder then you can see all operators table chart. <br>

▶   Arithmetic Operators <br>
▶   Assignment Operators <br>
▶   Comparison Operators <br>
▶   Increment/Decrement Operators <br>
▶   Logical Operators <br>
▶   String Operators <br>
▶   Array Operators <br>
▶   Conditional Assignment Operators

### PHP Function
The real power of PHP comes from its functions.
PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.

Type of Function- <br>
1. Built-in Function <br>
PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task. <br>
2. User Defined Function  <br>
Besides the built-in PHP functions, it is possible to create your own functions. <br>

🟢 A function is a block of statements that can be used repeatedly in a program. <br>
🟢 A function will not execute automatically when a page loads. <br>
🟢 A function will be executed by a call to the function.

## Class-03     [30-12-2021]
### PHP Loops
Often when you write code, you want the same block of code to run over and over again a certain number of times. So, instead of adding several almost equal code-lines in a script, we can use loops. 

Loops are used to execute the same block of code again and again, as long as a certain condition is true.

In PHP, we have the following loop types:

◼ <code>while</code> - loops through a block of code as long as the specified condition is true <br>
<pre>
<code>
$i = 0;
while($i <= 10) {
    echo $i."<br>";
    $i++;
}
</code>
</pre>
◼ <code>do...while</code> - loops through a block of code once, and then repeats the loop as long as the specified condition is true <br>
<pre>
<code>
$i = 1;
do{
    echo "The Number is $i <br>";
    $i++;
}while($i <= 5);
</code>
</pre>
◼ <code>for</code> - loops through a block of code a specified number of times <br>
◼ <code>foreach</code> - loops through a block of code for each element in an array <br>


