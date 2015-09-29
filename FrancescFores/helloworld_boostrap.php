<?php
require "vendor/fzaninotto/faker/src/autoload.php";
require "hello.class.php";


//creem un objecte
$faker = Faker\Factory::create();
$hello = new Hello($faker);


