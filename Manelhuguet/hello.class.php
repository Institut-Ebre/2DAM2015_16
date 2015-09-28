<?php
require "vendor/fzaninotto/faker/src/autoload.php";

class Hello
{
	public $name="Pepe";
	
	public $faker;
	public function __construct($faker){
		$this->faker = $faker;
		}
	
	public function greetings($name = null){
		//Si li passem algun nom, el saluda si no li passem cap paràmetre saluda a Pepe
		if ($name!=null){
			echo "Hola $name";
		}else{
			echo "Hola $this->name";
		}
	}
	
	public function greetings_random(){
			echo "Hola" . $this->faker->name;
	}
	
}
