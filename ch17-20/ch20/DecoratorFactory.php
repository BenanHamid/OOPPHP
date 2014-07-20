<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DecoratorFactory
 *
 * @author Benoa
 */
class DecoratorFactory {
   private function __construct() {
   }
   
   public static function selectType($type, $obj){
       /*if($type == 'html'){
           return $type = new Decorator($obj);
       }else if($type == 'pdf'){
           return $type = new PDFDecorator($obj);
       }*/
       //VIMP super qk trick 4rez koito dinami4no se suzdava obekt
       //sus imeto na klasa !!!
       $a = ucfirst(strtolower($type)).'Decorator';
           return new $a($obj);
   }
}