<?php

require_once 'vendor/fzaninotto/faker/src/autoload.php';


class hello
{	
	public $name="Pepe";

	public $faker;

	public function __construct($faker){
		$this->faker = $faker;
	}
	
	public function greathings($name=null){
		if ($name!=null){
			echo "Hola $name";
			}
		else {
			echo "No tengo nombre";
		}
	}
	
	public function greathings_random(){
	echo "hola " . $this->faker->name;	
	}

}
