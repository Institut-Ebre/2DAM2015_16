<?php

class Hello 
{
	public $name = 'Sin nombre D=';
	public $faker;
	
	public function __construct($faker)
	{
		$this->faker = $faker;
	}

    public function greetings($name = null) 
    {
		if ($name != null) { echo "hola ".$name; }
		else { echo "No tengo nombre! D="; }
    }
    
    public function greetings_random()
    {
		echo "Hola " . $this->faker->name;
	}
	
}
