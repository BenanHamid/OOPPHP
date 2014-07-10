<?php

class Registry{
	private static $data = null;
	
	private function __construct(){
	
	}
	public static function setData($key, $value){
		self::$data[$key] = $value;
	}
	public static function getData($key){
		return self::$data[$key];
	}
}