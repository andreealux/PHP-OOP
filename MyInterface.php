<?php

interface MyInterface
{
    public function method1();

}

interface MyInterface3
{
    public function method3();

}

interface MyInterface2 extends MyInterface, MyInterface3
{
    public function method2();

}

class MyClass implements MyInterface2 {

    public function method1()
    {
        // TODO: Implement method1() method.
    }

    public function method2()
    {
        // TODO: Implement method2() method.
    }

    public function method3()
    {
        // TODO: Implement method3() method.
    }
}

$myClass = new MyClass();