<?php

class Car2
{
    public $color = 'red';
    private $weight = 2000;
    static public $availableColors =['red', 'green', 'blue', 'white'];
    static $counter = 0;
    public $myCounter = 0;

    public function __construct(){
        $this->myCounter++;
//        Car2::$counter++;
        self::$counter++;

    }

    public static function getAvailableColors(){
        return self::$availableColors;
    }
}

$myCar = new Car2();
echo Car2::$counter.' '.$myCar->myCounter . PHP_EOL . '<br>';
//$myCar->color;
//Car2::$availableColors;
$myCar = new Car2();
echo Car2::$counter.' '.$myCar->myCounter . PHP_EOL;
Car2::getAvailableColors();
