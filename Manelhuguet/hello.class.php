<?php

class Hello
{
	public $name="Pepe";
	
	public function greetings($name = null){
		//Si li passem algun nom, el saluda si no li passem cap paràmetre saluda a Pepe
		if ($name!=null){
			echo "Hola $name";
		}else{
			echo "Hola $this->name";
		}
	}
}
