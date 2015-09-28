<?php

class Hello
{
	public $name = "Pepe";
	
	public function greetings($name = null){
		if ($name !=null) {
			echo "Hola $name";
		} else {
			echo "Hola $this->name";
		}
	}

}


