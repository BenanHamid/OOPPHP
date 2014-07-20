<?php
/*
*Това е главният клас който коли който беси. И може да съществува само 1 път в цялата заяква се прави сингълтон !!
*
*/

/**
*@author Benan
*
*/
namespace myFramework;
class App{
	private static $_instance = null;
	
	private function __construct(){
	
	}
	//VIMP чрез това ще се стартира App !
	public function run(){
		echo 'ok';
	}
	/**
	*
	*@return type \myFramework\App
	*@description връща инстанция на App от тоя неймспейс и чрез този коментар карам нетбийнс да прави аутокомплийт
	*на моите класове !
	*/
	public static function getInstance(){
		if(self::$_instance == null){
			self::$_instance = new \myFramework\App();
		}
		return self::$_instance;
	}

}