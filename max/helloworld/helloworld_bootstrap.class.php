<?php
require 'vendor/fzaninotto/faker/src/autoload.php';
require 'hello.class.php';

$hello = new Hello();

$faker = Faker\Factory::create();
$name = $faker->name;

$hello->name = $name;
