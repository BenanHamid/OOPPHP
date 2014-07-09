<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyPlugin
 *
 * @author Benoa
 */
include 'iPluginInterface.php';
//VIMP very cool stuff :D
class MyPlugin /*extends Animal*/ implements iPluginInterface2 {
    private $hui = 'golqm';
    public function play($stream) {
        $this->hui = $stream;
    }

    public function stop() {
        return $this->hui;
    }

    public function pause() {
        echo ' laino';
    }

}
