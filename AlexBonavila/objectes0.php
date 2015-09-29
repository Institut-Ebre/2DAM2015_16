<?php

require_once 'vendor/fzaninotto/faker/src/autoload.php';


class hello
{
	public function greathings($name){
		echo "Hola $name";
	}
}

$hello = new Hello();


$faker = Faker\Factory::create();
$name = $faker->name;

