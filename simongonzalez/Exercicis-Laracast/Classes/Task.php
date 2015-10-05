<?php

class Task {
    public $description;

    public $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function completed()
    {
        $this->completed = true;
    }
}

$task = new Task('Learn OOP', 'The teacher bla bla bla...');

$task2 = new Task('Pick up groceries');

var_dump($task->completed);