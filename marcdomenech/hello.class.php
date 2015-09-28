<?php
class Hello
{
	public $name = "Pepe";

    public function greetings($name = null) {
    	//si el nom mel donen funcionarà amb el nom aleatori
    	if($name != null){
        	echo "Hola $name";
        //si no mel passen agafarè el que tinc a l'atribut	
    	}else{
    		echo "Hola $this->name";
    	}
    }
}