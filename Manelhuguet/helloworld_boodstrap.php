<?php

	require "hello.class.php";
	require "vendor/fzaninotto/faker/src/autoload.php";
	
	$faker = Faker\Factory::create();
	$hello = new Hello($faker);
//Al definir les variables ho fem amb ($) davant, al utilitzarles, cal recordar de no possar el $.
