<?php
require 'vendor/fzaninotto/faker/src/autoload.php';

class Hello 
{
	
    public function greetings($name = null) 
    {
		if ($name != null) { echo "hola ".$name; }
		else { echo "No tengo nombre! D="; }
    }
}

$hello = new Hello();

$faker = Faker\Factory::create();
$name = $faker->name;

//$hello->greetings($name);

//echo "Hola, me llamo ".$name."!";
