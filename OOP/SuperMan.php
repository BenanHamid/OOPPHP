<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SuperMan
 *
 * @author Benoa
 */
include 'Human.php';
class SuperMan extends Human{
    //LEARNED owerwriting !!!
    /*public function eat() {
        echo 'dont eat';
    }*/
    public function __construct() {
        //parent::__construct();
        echo 'SuperMan construct';
    }
    private function showFace(){
        echo 'show face';
    }
    public function doAction(){
        $this->fart();
    }
}
/*IMP
protected dava pravo da vikam razni metodi v nasledenite klasove !!!
 * private ne pozvolqva tova !
 */
