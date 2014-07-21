<?php

class Decorator{
	private $obj = null;

	public function __construct($obj){
		$this->obj = $obj;
	}
	public function getFormattedData(){
		echo '<b>';
		return $this->obj->validate();
	
	}
}