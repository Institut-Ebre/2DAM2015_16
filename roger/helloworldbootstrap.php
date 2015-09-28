<?php
require "vendor/fzaninotto/faker/src/autoload.php";

require "helloclass.php";

$hello = new Hello();

$faker = Faker\Factory::create();
$name = $faker->name;
//echo "hello $name \n";

