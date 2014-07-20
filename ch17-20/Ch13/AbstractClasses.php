<?php

//VIMP abstract-nite klasove ne mogat da budat instancirani !!!
//trqbva da se nasledqvat !!
 abstract class AbstractClasses {
	//private $test;
	public function play(){
		echo 'play<br>';
	}
	//VIMP ako imam daje 1 abstracten metod celiq klas stava abstracten !!!
	//i trqbva da se promeni I MOGAT DA SE POLZVAT KATO SE NASLEDEQT 
	//TRQBVA DA IM SE napi6at i metodite kato Interface !!!
	abstract public function getInfo();
 } 