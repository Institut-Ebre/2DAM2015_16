<?php

require "vendor/fzaninotto/faker/src/autoload.php";
require"hello.class.php";

$faker = Faker\Factory::create();
$hello = new Hello($faker);
