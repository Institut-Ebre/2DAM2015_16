<?php
require 'vendor/fzaninotto/faker/src/autoload.php';
require 'hello.class.php';



$faker = Faker\Factory::create();
$name = $faker->name;

$hello = new Hello($faker);
$hello->name = $name;
