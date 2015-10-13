<?php

class Shape {
    protected $length = 4;

    public function getArea()
    {
        return pow($this->length, 2);
    }
}

class Square extends Shape {

}

class Triangle extends Shape {

    protected $base = 4;

    protected $height = 7;

    public function getArea()
    {
        return .5 * $this->base * $this->height;
    }

}

echo (new Triangle)->getArea();