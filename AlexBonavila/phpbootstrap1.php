<?php
require_once 'vendor/fzaninotto/faker/src/autoload.php';//aixi obrim el recurs
$faker = Faker\Factory::create();//instalciem un objecte
$name = $faker->name;//agafen un nom de l'objecte i el copiem a una variable
?>
