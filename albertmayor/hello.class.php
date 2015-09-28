<?php

class Hello
{
    public $name ="Albert";

    public function greetings($name = null)
    {
        if ($name != null) {
            echo "Hola $name";
        } else {
            echo "Hola $this->name";
        }
    }
}