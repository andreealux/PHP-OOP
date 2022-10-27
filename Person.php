<?php

class Person
{
    public $name;
    protected $age;
    private $phone;

    /**
     * @param $name
     * @param $age
     * @param $phone
     */
    public function __construct($name, $age, $phone)
    {
        $this->name = $name;
        $this->age = $age;
        $this->phone = $phone;
    }

    public function hello(){
        return "Hello from person";
    }

    final public function getAge(){ //can not be overridden in any child class
        return $this->age;
    }
}

class Employee extends Person{
    private $salary;

    public function __construct($name, $age, $phone, $salary)
    {
        parent::__construct($name, $age, $phone);
        $this->salary = $salary;
    }

    public function hello()
    {
        return "I am an employee: $this->name";
    }


}

class Student extends Person{
    public $studentNo;

    /**
     * @param $studentNo
     */
    public function __construct($name, $age, $phone, $studentNo)
    {
        parent::__construct($name, $age, $phone);
        $this->studentNo = $studentNo;
    }

    public function hello()
    {
        return "Hello, I am student: $this->name. with NO: $this->studentNo";
    }


}

$employee = new Employee("John", 27, '123456', 2000);
$student = new Student("John", 27, '123456', '12486578');
echo $employee->hello() . '<br>';
echo $student->hello();