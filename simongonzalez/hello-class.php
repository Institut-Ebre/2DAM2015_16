<?php

class Hello
{
	public $name = "Pepe";

	public $faker;
	
	public function __construct($faker) {
		$this->faker = $faker;
	}
	
    public function greetings($name = null) {
		if ($name != null){
			 echo "Hola $name";
		} else {
			echo "Hola $this->name";
		}
    }
    
    public function greetings_random() {
			echo "Hola " . $this->faker->name;
		}

	/**
	 * @param string $name
	 * @return Hello
	 * Estas funcions facilita la concatenació d'un objecte que no retorne res.
	 */
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
}


