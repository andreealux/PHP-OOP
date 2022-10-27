<?php

trait MyTrait {
    public $a = 10;

    public function fly(){
        echo "I am flying";
    }
}

trait EngineTrait{
    public function hello(){
        echo "I have an engine";
    }
}

class Plain{
    use MyTrait, EngineTrait;
}

class Helicopter{
    use MyTrait, EngineTrait;
}

class Car{
    use EngineTrait;
}

$plain = new Plain();
$helicopter = new Helicopter();
$plain->fly();
$helicopter->fly();