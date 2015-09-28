<?php
require 'vendor/fzaninotto/faker/src/autoload.php';

class Hello 
{
	
    public function greetings($name) 
    {
        echo "hola ".$name;
    }
}

$hello = new Hello();

$faker = Faker\Factory::create();
$name = $faker->name;

//$hello->greetings($name);

//echo "Hola, me llamo ".$name."!";
