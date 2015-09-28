<?php

require "vendor/fzaninotto/faker/src/autoload.php";

class Hello
{
    public $name = "Albert";

    public function __construct($faker){

        $this->faker = Faker\Factory::create();

    }

    public function greetings($name = null)
    {
        if ($name != null) {
            echo "Hola $name";
        } else {
            echo "Hola $this->name";
        }
    }

    public function greetings_random($name = null)
    {
        echo "Hola ". $this->faker->name;
    }
}