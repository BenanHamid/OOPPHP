<?php

class Decorator{
	private $obj = null;
	
	public function __construct($obj){
		if($obj instanceof iDecorator){
			$this->obj = $obj;
		}
	}
	public function getFormattedOutput(){
		return '<b>'.$this->obj->getData().'<b>';
	}
}