<?php
namespace myFramework;

//VIMP с този файнал казвам че не може да се наследява класа !
 final class Loader{
	private static $_namespaces = array();
	private function __construct(){
	
	}
	//VIMP с този файнал казвам че не може да се оверврайтне
	/*public final function s(){
		
	}*/
	//VIMP задължително е да е static public !
	public static function registerAutoLoad(){
		//VIMP приема обект или функция ! в случая този масив е обект !
		//VIMP само 1 параметър взема и то е масив от 2 елемента в нашия случай !
		//първият елемент е обект от нашия клас може да е също $this !
		//вторият елемент вика метода autoload !
		//За да работи обаче тря да се викне поне веднъж някъде и най-доброто място за това
		//е в APP класа защото с него почва програмата !
		//VIMP ВСИЧКО КОЕТО ОЧАКВА CALLBACK FUNCTION МОЖЕ ДА ВЗЕМЕ ИЛИ ФУНКЦИЯ ИЛИ ОБЕКТ !
		//когато ще е обект предаваме масив от 2 елемента първият който е обект от класа а другият метода
		//който ще виакаме !
		spl_autoload_register(array('\myFramework\Loader', 'autoload'));
	}
	//VIMP задължително е да е static public !
	public static function autoload($class){
		//echo $class;
		self::loadClass($class);
	}
	public static function loadClass($class){
		//VIMP имам цял стринг с целия път към директорията(файла)
		//var_dump($class) = myFramework\FSS;!!!
		foreach(self::$_namespaces as $k=>$v){
			//Търся в $class, защото там имам повече глупости а не само неймспейса или само пътя !
			//трябва да се намира в началото този неймспейс, защото ако е на друго място е друг неймспейс !
			if(strpos($class, $k) === 0){
				
				echo $k.'<br>';
				echo $v.'<br>';
			}
		}
	}
	//VIMP 	регистрираме неймспейсовете !
	public static function registerNamespace($namespace, $path){
		$namespace = trim($namespace);
		if(strlen($namespace) > 0){
			//VIMP гледаме дали въобще има път (0 или null ще върне false !)
			if(!$path){
				throw new \Exception('Invalid path '.$path);
			}
			//VIMP realpath не връща грешка при NULL !!! и за това правя проверката горе и долу;
			//връща грешка само когато файла го няма ! обаче ако го е имало файла и после го изтрия пак
			//ще върне истина защото кешира !
			$_path = realpath($path);
			if($_path && is_dir($_path) && is_readable($_path)){
				self::$_namespaces[$namespace] = $_path.DIRECTORY_SEPARATOR;
			}else{
				throw new \Exception('Path not readable '.$path);
			}
		}else{
			throw new \Exception('Invalid namespace '.$namespace);
		}
	}
}