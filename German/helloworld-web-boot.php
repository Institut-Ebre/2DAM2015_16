<?php

require "hello.class.php";
require "vendor/fzaninotto/faker/src/autoload.php";

$hello = new Hello();
$faker = Faker\Factory::create();
$hello->faker = $faker;
