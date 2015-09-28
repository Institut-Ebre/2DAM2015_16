<?php 



//Creació d'un objecte
class Hello
{
	public $name = "Pepe";
	
	public $faker;
	
	public function __construct($faker){
		
		$this->faker = $faker;
		
	}
	
	
    // Declaració d'un mètode
    public function greettings($name = null) {
		if ($name != null) {
			echo "Hello, $name";
		} else {
			echo "Hello, $this->name";
		}
    }
    
     public function greettings_random() {
		 echo "Hello, " . $this->faker->name;
    }
}
