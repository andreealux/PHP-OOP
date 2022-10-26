<?php

class Person1
{
    public $name = "Jane";
    private $phone = 123456;

//    public function __construct()
//    {
//        echo "__construct is called" . PHP_EOL;
//    }
//
//    public function __destruct(){
//        echo "__destruct is called" . PHP_EOL;
//    }

//    public function __toString(){
//        return "Name: $this->name. Phone: $this->phone";
//    }
//
//    public function __get($propName){
//        if($propName === 'username'){
//            return $this->name;
//        }
//        return "Property \"$propName\" does not exist";
//    }

//public function __set($propName, $value){
//    throw new Exception("Property does not exist");
//}

//    public function __call($name, $arguments){ //handels non existing method calls
////        var_dump($name, $arguments);
//
//        if($name === 'getMobilePhone'){
//            return $this->getPhone();
//        }else if($name === 'setMobilePhone'){
//            $this->setPhone($arguments[0]);
////            call_user_func_array([$this, 'setPhone'], $arguments[0]);
//        }
//    }

    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param int $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

//    public static function __callStatic($name, $argumens){
//        echo "\"$name\" static method was called";
//    }

//    public function __invoke(){
//        return "Object was called as a function";
//    }


}
$p = new Person1();
//echo $p;
//echo $p->username;
//$p->username = 'Marry';
//echo $p->getMobilePhone() . '<br>';
//$p->setMobilePhone('1111111');
//echo $p->getMobilePhone();

//var_dump(is_callable($p));
//
//echo $p();
$serialized = serialize($p);
$newPerson = unserialize($serialized);

//echo '<pre>';
//$array = (array) $newPerson;
//var_dump($array);
//echo '</pre>';