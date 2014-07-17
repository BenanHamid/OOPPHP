<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Decorator
 *
 * @author Benoa
 */
class HtmlDecorator {
    private $obj = null;
    
    public function __construct($obj) {
        //VIMP proverqvam dali e to4no ot toq tip koito mi trq !!
        //moje i imeto na klasa implementiral toq interface !
        if($obj instanceof iDecorator){
            $this->obj = $obj;
        }else {
            //LEARNED ne ba4ka taka dobre exception-a !
            //throw new Exception('wrong data type');
        }
    }
    public function getFormattedOutput(){
        return '<b>'.$this->obj->getData().'<b>';
    }
}
