<?php


class Hello
{
	public $name = "Pepe";
	
	public $faker;
	
	public function __construct($faker){
		$this->faker = $faker;
	}
	// El nom pot ser opcionall amb el paràmetre null
	public function greetings($name = null) {
		if ($name !=null) {
		echo "Hola $name";
		
		}else {
			echo " Hola $this->name";
		}
	}
	public function greetings_random() {
		 
		echo "Hola " . $this->faker->name;
	}
		
}

