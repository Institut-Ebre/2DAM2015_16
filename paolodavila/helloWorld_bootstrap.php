<?php 

require "vendor/fzaninotto/faker/src/autoload.php";

//Creació d'un objecte
class Hello
{
    // Declaració d'un mètode
    public function greettings($name) {
        echo "Hello, $name";
    }
}

$hello = new Hello();

$faker = Faker\Factory::create();

$name = $faker->name;
