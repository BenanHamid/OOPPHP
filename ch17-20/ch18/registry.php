<?php

//VIMP registry v nai-4istiq si vid !
/*
class Registry{
	private static $data = array();
	
	private function __construct(){
	
	}
	public static function setData($key, $value){
		self::$data[$key] = $value;
	}
	public static function getData($key){
		return self::$data[$key];
	}
}*/

//VIMP registry ot tipa na Codeigniter !
class Registry{
    private $data = array();
    
    public function __set($name, $value){
        $this->data[$name] = $value;
    }
    public function __get($name) {
        return $this->data[$name];
    }
}