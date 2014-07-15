<?php

class User{
	private $name = 'ivo';
	private $age = 15;
	
	public function getAge(){
		return $this->age;
	}
	public function getName(){
		return $this->name;
	}
	public function setName($name){
		$this->name = $name;
	}
	public function setAge($age){
		$this->age = $age;
	}
}