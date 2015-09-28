<?php
require "vendor/fzaninotto/faker/src/autoload.php";

class Hello
{
	public $name = "Pepe";
	
    public function greetings($name = null) {
		if ($name !=null){
			echo "hello $name";
		}else {
		 echo "$hola $this->name";
		}
    }
}
