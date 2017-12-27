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

$task = new Task('Learn OOP', 'This is Object Oriented Bootcamp by Jeffrey Way');

$task->complete();

var_dump($task->title);
var_dump($task->description);