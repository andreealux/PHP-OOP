<?php

interface MyInterface1
{
    const MY_CONSTANT = 1;
    public function method1();
    public function method2();
}

abstract class MyClass implements MyInterface1{
    public function method2()
    {

    }
}

class MyClass2 extends MyClass{

    public function method1()
    {
        // TODO: Implement method1() method.
    }
}
echo MyInterface1::MY_CONSTANT;
$myClass = new MyClass2();