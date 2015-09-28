<?php
require "vendor/fzaninotto/faker/src/autoload.php";

class Hello
{
	public $name = "Pepe";
	
	public $faker;
	
	public function __construct($faker) {
		$this->faker = Faker\Factory::create();
	}

    public function greetings($name = null) {
		if ($name !=null){
			echo "hello $name";
		}else {
		 echo "Hola $this->name";
		}
    }
	public function greetings_random() {
		echo "Hola" . $this->faker->name;
	}    
}
