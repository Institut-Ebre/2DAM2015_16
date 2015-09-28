<?php

require "vendor/fzaninotto/faker/src/autoload.php";
require"hello.class.php";

$hello = new Hello($faker);
$faker = Faker\Factory::create();
