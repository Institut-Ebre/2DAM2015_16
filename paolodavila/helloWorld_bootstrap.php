<?php 

require "vendor/fzaninotto/faker/src/autoload.php";
require "helloClass.php";

$faker = Faker\Factory::create();

$hello = new Hello($faker);

//$hello->name = $faker->name;
