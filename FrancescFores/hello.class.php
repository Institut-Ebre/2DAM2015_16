<?php

class Hello
{
	public $name = "Pepe";
	public $faker;

	public function __construct($faker){
			$this->faker = $faker;
	}
	
    public function greetings($name = null) {
		if($name != null){
			echo "Hola $name";
		}else{
			echo "Hola $this->name";
		}
		        
    }
    public function greetings_random() {
		echo "Hola" . $this->faker->name;
		        
    }

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}
}
?>

