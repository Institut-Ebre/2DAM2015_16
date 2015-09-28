<?php

class Hello 
{
	public $name = 'Sin nombre D=';
	
    public function greetings($name = null) 
    {
		if ($name != null) { echo "hola ".$name; }
		else { echo "No tengo nombre! D="; }
    }
}
?>
