<?php
require "vendor/fzaninotto/faker/src/autoload.php";

require "hello_class.php";


$faker = Faker\Factory::create();
$hello = new Hello($faker);



