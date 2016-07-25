<?php

/**
 * Created by PhpStorm.
 * User: gustavojuan
 * Date: 25/7/16
 * Time: 18:25
 */
class Person {
	private $name;
	private $age;


	public function __construct($name)
	{
		$this->name = $name;
	}
	public function setAge($age)
	{
		if ($age < 18){
			throw new Exception("Person is not old enough.");
		}
		$this->age = $age;
	}

	public function getAge() {
		return $this->age * 365;
	}
}

$john = new Person('John Doe');
$john->setAge(18);




//$john->age++;

var_dump($john->getAge());
$john->age = 30;
