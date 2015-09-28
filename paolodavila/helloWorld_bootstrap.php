<?php 

require "vendor/fzaninotto/faker/src/autoload.php";

require "helloClass.php";

$hello = new Hello();

$faker = Faker\Factory::create();

$name = $faker->name;
