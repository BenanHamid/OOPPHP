<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Car
 *
 * @author Benoa
 */
class Car {
    private $carModel="lada";
    public function __construct($model){
        //$this->carModel=$model;
        //IMP po tozi na4in ograni4avam kvo da se dopuska kato parametri !
        //tuka znam kakvo e $model 6toto kat go pravq obekta
        //$a = new Car('audi'(tova e $model));
        if($model=='audi'){
            //IMP kato gi vikam metodite pak s $this-> !!!!
            $this->setModel($model);
            //LEARNED 1 i su6to ne6to pravqt; q s metod q vutre v constructora !
            //$this->carModel=$model = $this->setModel($model)
        }
        //IMP ne moga da imam return tuka !!!!
        //return true !!! ne stava !!!
    }
    /*public function __construct(){
        
    }*/
    
    private function setModel($a){
        $this->carModel = $a;
    }
    public function getModel(){
        return $this->carModel;
    }
    
    /*public function __destruct() {
        echo 'destruct';
    }*/
}
