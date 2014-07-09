<?php
	//LEARNED imeto na klasa da e kato imeto na faila
	// v 1 file samo 1 klas ! za po-dobro podrejdane !!!
	class Animal{
		//IMP ako 6te e private mu slagai 1 dolna 4erta na imeto na promenlivata !
		//private $_sound = 'meow';
		public $name;
        //IMP i da go ima i da go nqma pak ba4ka 6toto se pravi dinami4no !
        //VIMP TIKAM DANNITE V TOQ MASIV s imeto na tehnite promenlivi i
        //stoinost - tqhnata stoinost !
		private $data = array();
        //VIMP static
        static private $age = 19;
        
        public function __construct() {
            echo 'animal construct';
        }
		
		//IMP s toq metod kazvam kakvo da se pravi s oniq  dinami4no suzdadeni
		//promenlivi; moga da gi proverqvam i togava da gi pusna !; ili ako ne pi6e
		//ni6to v __set to nito 1 ot tqh nqma da se izpulni !
		//raboti samo s dinami4no suzdadeni promenlivi !!!!
		public function __set($name, $value){
			//echo $name.'<br>'.$value.'<br>';
			//IMP po tozi na4in zadavam klu4 imeto na promenlivata ! i stoinost 
			//ravna na stoinostta na promenlivata !!!
			//oba4e ne mi dava da go 4eta i polzvam __GET !
			$this->data[$name] = $value;
            /*echo $name.'<br>';
            print_r($value).'<br>';*/
		}
		//IMP TOVA E OSNOVOTA NA 6ABLONA REGISTRY NAU4I GO !!!
		//IMP !! GET I SET ba4kata samo za nedefinirani svoistva !(suzdadeni
		//dinami6no) !!!!!!!!!!!!!!!!!!!!!!
		
		public function __GET($name){
			//LEARNED imeto na promenlivata !
			//echo $name;
            //VIMP vikam gi tiq stoinosti ot masiva s klu4 imeto na promenlivata
            // !!!!!!!!!!!!!!!!!!!!!
            //print_r($name).'<br>';
			return $this->data[$name];
            
		}
		//IMP kogato se opitvame da viknem nedefiniran METOD !
		//IMP RAZLIKATA E 4E AKO SVOISTVOTO GO NQMA TO SE ZUZDAVA OBA4E
		//AKO GO NQMA METODA DAVA FATAL ERROR !
		public function __CALL($name, $arguments){
			echo $name.'<br>';
			//print_r($arguments).'<br>';
		}
		
		public function sound($sound){
			echo $sound.'<br>';
		}
		public function sayB(){
			echo 'bb';
		}
        //IMP STATIC !
        //Tuk ne moga da polzvam $this-> !!! Za6toto tova ne pravi obekt !!!
        static public function validateName(){
            echo 'validate<br>';
        }
        //VIMP self ne moga sus $this-> trqbva sus self::!! !!!
        static public function setAge($age){
            self::$age = $age;
        }
        public function getAge(){
            return self::$age;
        }
	}
	
	//IMP ne slagai ZATVARQ6T TAG NAKRAQ; 
	//ne pi6i takiva echo-ta mehota vutre; nedei pravi obekti tuka da gi vika6 !
	//ne polzvai proceduren kod !!!!
	//IMP Nikoga NEDEI DA PI6E6 JS HTML I RAZNI GLUPOSTI TUKA !
	/*$meow = new Animal();
	//var_dump($meow);
	$meow->sound('rarr');
	$meow->sayB();*/