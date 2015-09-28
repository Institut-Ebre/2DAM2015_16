<?php

require "vendor/fzaninotto/faker/src/autoload.php";

class Hello
{
    public $name  = "Liviu";

    public $faker;

    public function __construct() {

        $this-> faker = Faker\Factory::create();

    }

    public function greetings($name = null)
    {
        if ($name != null) {
            echo "Hola $name";
        } else {
            echo "Hola $this->name";
        }
    }


    public function greetings_random()
    {
        echo "Hola " . $this-> faker -> name;
    }
}