<?php

class Car1
{
    private $color = 'red';
    private $weight;
    private $year;
    private $availableColors =['red', 'green', 'blue', 'white'];

    /**
     * @param string $color
     * @param $weight
     */
    public function __construct($color, $weight)
    {
        $this->color = $color;
        $this->weight = $weight;
    }

    public function __destruct(){
        echo "I am destroyed".$this->color.PHP_EOL;
    }

    public function setYear($year){
        $this->year = $year;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setColor($color)
    {
        if(in_array($color, $this->availableColors)){
            $this->color = $color;
        }
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
}

//$myCar = new Car1();
//$myCar->setColor('white');
//echo $myCar->getColor() . '<br>';
//
//$myCar->setYear(2010);
//echo $myCar->getYear() . '<br>';


//$car = new Car1();
//$car2 = $car;
//$car->setColor('green');
//
//echo '<pre>';
//var_dump($car2);
//echo '</pre>';

//$car2 = clone $car;
//$car2->setColor('green');
//echo '<pre>';
//var_dump($car);
//echo '</pre>';

$myCar = new Car1('green', 2500);
$myCar2 = new Car1('white', 1800);
echo $myCar->getColor().PHP_EOL;
echo $myCar2->getColor().PHP_EOL;

unset($myCar); //manually destroy an object
sleep(2);