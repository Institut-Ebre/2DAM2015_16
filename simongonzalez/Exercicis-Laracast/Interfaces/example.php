<?php

interface Animal {
    public function comunicate();
}

class Dog implements Animal {

    public function comunicate()
    {
        return "bark";
    }
}

class Cat implements Animal {

    public function comunicate()
    {
        return "meow";
    }
}