<?php

require "vendor/fzaninotto/faker/src/autoload.php";

$faker = Faker\Factory::create();

$name = $faker->name;

//echo "Hello $name\n";
