<?php
require "vendor/fzaninotto/faker/src/autoload.php";
require "hello.class.php";
$hello = new Hello($name);
$faker = Faker\Factory::create();
$hello->name = $facker->name;
