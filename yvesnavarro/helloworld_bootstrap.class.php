<?php

require "vendor/fzaninotto/faker/src/autoload.php";

class Hello
{	
	
	public $name = "Pepe";
	
	public $faker;
	
	public function __construct($faker){
			$this->faker = $faker;
	}
	
	public function greetings($name = null){//$name pot estar buit	
		if($name != null){//Si arriba sense valor a la variable...
			echo "Hola $name";//Saludes a $name (Pepe segons la variable publica)
		}else{ //Si no, saludes al valor que t'ha arribat (que ve de faker)
			echo "Hola $this->name";
		}
		
	}
	
	public function greetings_random(){
		echo "Hola ". $this->faker->name;
	}
	
}

