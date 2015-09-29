<?php

require_once 'vendor/fzaninotto/faker/src/autoload.php';
require "objectes1.php";

$hello =new Hello();

$faker = Faker\Factory::create();
$hello= new Hello($faker);
