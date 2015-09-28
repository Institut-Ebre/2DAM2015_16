<?php

require "vendor/fzaninotto/faker/src/autoload.php";

class Hello
{
	public $name = "Pepe";
	
    public function greetings($name) {
		if ($name != null){
			 echo "Hola $name";
		} else {
			echo "Hola $this->name";
		}
    }
}


