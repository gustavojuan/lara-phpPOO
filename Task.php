<?php

/**
 * Created by PhpStorm.
 * User: gustavojuan
 * Date: 24/7/16
 * Time: 21:18
 */

class Task {
	public $title;
	public $description;
	public $completed = false;

	public function __construct($title,$description)
	{
		$this->title = $title;
		$this->description = $description;
	}

	public function complete(){
		$this->completed = true;
	}

}

$task = new Task('Learn POO','Make one video task a day during the summer because I love It!');
var_dump($task);
$task->complete();
var_dump($task->completed);

//$task2 = new Task('Learn  1 ToolTip');

//var_dump($task->description);
//var_dump($task2->description);
