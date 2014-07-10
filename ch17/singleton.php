<?php

class Singleton{
	private static $instance = null;
	///private $health, $ammo;
	private static $health, $ammo;
	//VIMP my baby :D ne ba4ka dobre taka !
	/*private $plStats = array(
		'hp'=>array(),
		'ammo'=>array()
	);*/
	private static $plStats = array();
	
	private function __construct(){
	
	}
	
	public static function getInstance(){
		if(self::$instance == null){
			self::$instance = new Singleton();
		}
		return self::$instance;
	}
	
	/*public function getPlayerStats(){
		return array('hp'=>$this->health, 'ammo'=>$this->ammo);
	}*/
	/*public function getPlayerStats(){
		return $this->health;
	}
	public function setPlayerStats($hp, $ammo){
		$this->health = $hp;
		$this->ammo = $ammo;
	}*/
	
	/*public function __set($name, $value){
		$this->plStats[$name] = $value;
	}
	public function __get($name){
		return $this->plStats[$name];
	}*/
	
	/*public function getPlayerStats(){
		return $this->plStats;
	}
	
	public function setPlayerStats($hp, $ammo){
		$this->health = $hp;
		$this->ammo = $ammo;
		
		$this->plStats['hp'] = $this->health;
		$this->plStats['ammo'] = $this->ammo;
	}*/
	
	public static function getPlayerStats(){
		return self::$plStats;
	}
	
	public static function setPlayerStats($hp, $ammo){
		self::$health = $hp;
		self::$ammo = $ammo;
		
		self::$plStats['hp'] = self::$health;
		self::$plStats['ammo'] = self::$ammo;
	}
}