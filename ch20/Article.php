<?php
/**
 //VIMP
 * Този клас взема, проверява и записва данни от някъде.
 * супер неправилно е да го карам да прави други неща, които не тря да прави !!!
 *
 * @author Benoa
 */
include 'iDecorator.php';
class Article implements iDecorator{
    
    public function getData(){
        return 'getdata';
    }
}
