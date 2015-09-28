<?php

require "helloclass.php";
require "vendor/fzaninotto/faker/src/autoload.php"; 

$faker = Faker\Factory::create();
$hello = new Hello($faker);
