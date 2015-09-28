<?php

require "vendor/fzaninotto/faker/src/autoload.php";
require "hello.class.php";

$hello = new Hello();

$fake = Faker\Factory::create();

$name = $fake->name;
