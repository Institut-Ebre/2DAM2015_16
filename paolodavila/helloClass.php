<?php 

//Creació d'un objecte
class Hello
{
	public $name = "Pepe";
	
    // Declaració d'un mètode
    public function greettings($name = null) {
		if ($name != null) {
			echo "Hello, $name";
		} else {
			echo "Hello, $this->name";
		}
    }
}
