<?php

class A{
    public $var1 = 10;
    public function hello(){
        echo "Hello from class A";
    }
}

trait TraitA{
    public function hello(){
        echo "Hello from trait A " . parent::hello();
    }
}

class B extends A{
    use TraitA;
}

$a = new B();
$a ->hello(); //TraitA hello method overrides class A hello method