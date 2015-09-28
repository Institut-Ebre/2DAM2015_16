<?php

require "helloworld_bootstrap.class.php";


$hello = new Hello();

$faker = Faker\Factory::create();
$hello = new Hello($faker);
