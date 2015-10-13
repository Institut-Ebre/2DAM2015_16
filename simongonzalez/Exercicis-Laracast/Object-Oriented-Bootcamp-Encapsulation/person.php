<?php

class Person {

    public $name;

    public $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age * 365;
    }

   c function setAge($age)
    {
        if($age < 10){
            throw new Exception("Person is not old enough.");
        }
        $this->age = $age;
    }

}

$jhon = new Person("John Doe");

$jhon->setAge(30);

var_dump(&$jhon->setAge());