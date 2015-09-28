<?php
require "vendor/fzaninotto/faker/src/autoload.php";

require "hello_class.php";


$hello = new Hello();


$faker = Faker\Factory::create();
$hello->name = $faker->name;



