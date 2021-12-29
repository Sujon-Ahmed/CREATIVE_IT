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

