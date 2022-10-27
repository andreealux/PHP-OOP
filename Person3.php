<?php

class Person3
{
    public $name;
    private $phone;

    static $counter = 0;

    /**
     * @param $name
     * @param $phone
     */
    public function __construct($name, $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
        self::$counter++;
    }

    public function __clone(){
        self::$counter++;
    }

    public function __wakeup()
    {
        self::$counter++;
    }

}

$p = new Person3("Jane", '123456');

$newPerson = clone $p;
$newPerson2 = unserialize(serialize($p));
echo '<pre>';
var_dump($p, $newPerson, $newPerson2);
echo '</pre>';
echo Person3::$counter;