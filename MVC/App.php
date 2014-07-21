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
include_once 'Loader.php';

class App{
	private static $_instance = null;
	//VIMP регистрирам нашия метод за аутолоад в конструктора !
	private function __construct(){
		//VIMP по този начин framwework-a ще бачка навсякъде dirname(__FILE__).DIRECTORY_SEPARATOR ! !
		\myFramework\Loader::registerNamespace('myFramework'.DIRECTORY_SEPARATOR, dirname(__FILE__).DIRECTORY_SEPARATOR);
		\myFramework\Loader::registerAutoLoad();
	}
	//VIMP чрез това ще се стартира App !
	public function run(){
		//echo 'ok';
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