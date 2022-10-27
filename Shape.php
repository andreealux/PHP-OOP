<?php

abstract class Shape
{
    public $color;

    abstract public function getArea(): float;

    /**
     * @param $color
     */
    public function __construct($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

}

class Triangle extends Shape{


    public function getArea(): float
    {
        // TODO: Implement getArea() method.
    }
}

class Circle extends Shape{

    public $radius;

    public function __construct($color, $radius)
    {
        parent::__construct($color);
        $this->radius =$radius;
    }


    public function getArea(): float
    {
        return $this->radius * $this->radius * 3.14;
    }
}

class Rectangle extends Shape{

    public $width;
    public $length;

    public function __construct($color, $width, $length)
    {
        parent::__construct($color);
        $this->width = $width;
        $this->length = $length;
    }


    public function getArea(): float
    {
        return $this->width * $this->length;
    }
}
$t = new Triangle("red");
$r = new Rectangle("red", 10, 5);
$c = new Circle("red", 10);
echo "Rectangle Area: " . $r->getArea() . '<br>';
echo "Circle Area: " . $c->getArea();