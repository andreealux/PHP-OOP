<?php

class Person
{
    public $name;
    private $phone;

    /**
     * @param $name
     * @param $phone
     */
    public function __construct($name, $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
    }

// __sleep() is called when you serialize() an object and __wakeup() after you unserialize() it
    public function __sleep(){
        unset($this->phone);
        return ['name'];
    }

    public function __wakeup(){
        echo "I am waking up";
    }

}

$p = new Person("Jane", '123456');

$serialized = serialize($p);
$newPerson = unserialize($serialized);
echo '<pre>';
var_dump($newPerson);
echo '</pre>';