<?php

require "vendor/fzaninotto/faker/src/autoload.php";
require "helloworld_bootstrap.class.php";


$hello = new Hello();

$faker = Faker\Factory::create();

$hello->name = $faker->name;
