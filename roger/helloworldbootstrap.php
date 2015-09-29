<?php
require "vendor/fzaninotto/faker/src/autoload.php";

require "helloclass.php";

$faker = Faker\Factory::create(); 
$hello = new Hello($faker);
