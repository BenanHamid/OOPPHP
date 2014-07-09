<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Animal
 *
 * @author Benoa
 */
class Animal {
    public function __construct() {
        //echo 'pa4avra';
    }
    public function sound(){
        
    }
    public function goToSleep(){
        echo 'sleep<br>';
    }
    //IMP N6 NE MOJE DA PREZAPI6E VE4E TOZI METOD !! CONSTANTA !
    final public function eat(){
        echo 'eat<br>';
    }
}
