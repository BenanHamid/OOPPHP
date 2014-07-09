<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Human
 *
 * @author Benoa
 */
//IMP ako ne go includ-na ne go namira posle !!!
include 'Animal.php';
class Human extends Animal{
    /*public $name;
    //IMP tuka se nasledqva i konstruktora !!!
    /*public function __construct($_name) {
        //IMP taka se vika construct na roditelq !!
        //parent::__construct();
        $this->goToSleep();
    }*/
    public function __construct() {
            echo 'Human construct';
    }
    public function drive(){
        echo 'drive<br>';
    }
    public function talk(){
        echo 'talk<br>';
    }
    protected function fart(){
        echo 'pruc';
    }
}
