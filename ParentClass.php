<?php

class ParentClass
{
    public $property1 = '1';
    protected $property2 = '2';
    private $property3 = '3';
    protected const MY_CONSTANT = "MY_CONSTANT";

    /**
     * @return string
     */
    public function getProperty2()
    {
        return $this->property2;
    }

    public function printText($text){
        echo $text;
    }

}

class ChildClass extends ParentClass{
    public $property1 = '11';
    protected $property2 = '22';

    /**
     * @return string
     */
    public function getProperty2()
    {
        $result = parent::getProperty2();
        return "something ".$result;
    }

    public function printText($text){
        echo $text;
    }

    public static function getConstant(){
        return self::MY_CONSTANT;
    }


}

$obj = new ChildClass();
echo $obj->property1 . '<br>';
echo $obj->getProperty2(). '<br>';
echo ChildClass::getConstant();