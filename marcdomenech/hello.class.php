<?php

require "vendor/fzaninotto/faker/src/autoload.php";

class Hello
{
	public $faker;

	public function __construct(){
		$this->faker = Faker\Factory::create();
	}

	public $name = "Pepe";

    public function greetings($name) {
    	//si el nom mel donen funcionarà amb el nom aleatori
    	if($name != null){
        	echo "Hola $name";
        //si no mel passen agafarè el que tinc a l'atribut	
    	}else{
    		echo "Hola $this->name";
    	}
    }
    public function greetings_random() {
    	echo "Hola " . $this->faker->name;
    }
}