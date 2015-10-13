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

    public function setAge($age)
    {
        if($age < 10){
            throw new Exception("Person is not old enough.");
        }
        $this->age = $age;
    }

}

$jhon = new Person("John Doe");

$jhon->setAge(30);

$jhon->age = 8;

var_dump($jhon->getAge());