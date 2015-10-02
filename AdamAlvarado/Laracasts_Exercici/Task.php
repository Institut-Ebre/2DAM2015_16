<?php

/**
 * Created by PhpStorm.
 * User: adam
 * Date: 30/09/15
 * Time: 12:01
 */


class Task {
    public $tittle;
    public $description;
    public $completed = false;

    public function  __construct($tittle, $description){
        $this->tittle = $tittle;
        $this->description = $description;
    }

    public function complete() {
        $this->completed = true;
    }

}

$task = new Task('Learn OPP', 'This is a description');
$task->complete();

var_dump($task->tittle);
var_dump($task->description);
var_dump($task->completed);