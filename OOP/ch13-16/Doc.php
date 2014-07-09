<?php
/*
* Opisanie na dokumenta, licenz i tnt
*
*
*/

//VIMP ne e slu4aino 4e sa 2 zvezdi ! /** !!! za da raboti s PHPDOC
//avto generira dokumentaciq !
/**
*Description of the document !
*
*@author Benan
*/
include 'SuperMan.php';
class Documentation extends SuperMan{
	/*public function __construct(){
		echo 'docum<br>';
	}*/
    
    //VIMP Ako e public zaduljitelno !! moje i za promenlivi !
    // ako sa private, protected bez mn obqsneniq, nakrati4ko !
    /**
     * This is a dummy method.
     * @param String $a name of the user
     * @param Int $b age of the user
     * @return boolean Is it a he or she 
     * 
     */
	public function testMe($a, $b){
        
        return true;
    }
    
}