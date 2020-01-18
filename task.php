<?php

class Task {

    public $title;

    public $description;

    public $completed = false;

    public function __construct($title, $description) {

        $this->title = $title;

        $this->description = $description;
    }

    public function complete() {

        $this->completed = true;

    }
}

$task = new Task('OOP', 'Learn OOP via argument');

$task2 = new Task('Go to bank', 'Need to open new account');

$task->complete();

var_dump($task2->description);


// var_dump($task2->description);


