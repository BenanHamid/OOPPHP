<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of iPluginInterface
 *
 * @author Benoa
 */
interface iPluginInterface {

    public function play($stream);

    public function stop();
}
//VIMP moje da extendvat drugi interface-i ama mn rqdko 6e mi trq !
interface iPluginInterface2 extends iPluginInterface{

    public function pause();
}
