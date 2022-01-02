<?php
// PHP Array
/* $cars = array('BMW', 'Ferrari', 'TOYOTA');
echo "I Like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "."; */

// count array list
/* $colors = array('red', 'green', 'blue', 'orange', 'yellow');
echo count($colors); */

// Associative Array with foreach loop
$info = array('Sujon' => 22, 'Riman' => 21);
foreach($info as $name => $age) {
    echo "$name is $age years old. <br>";
}
