<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Singleton
 *
 * @author Benoa
 */
class Singleton {
    private static $instance = null;
    private $work;
    
    private function __construct() {
        
    }
    
    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
    public function getTest(){
        return $this->work;
    }
    public function setTest($a){
        $this->work = $a;
    }
    
}
