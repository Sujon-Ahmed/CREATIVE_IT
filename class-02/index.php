<?php

class Car {
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
echo $myCar->message();