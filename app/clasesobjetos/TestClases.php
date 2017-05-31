<?php

/**
 * Created by PhpStorm.
 * User: HP Pavilion x360
 * Date: 16/05/2017
 * Time: 11:43 PM
 */
class TestClases
{

    public function index(){
       //Instanciamos
        $gelatinaRoja=new Gelatina();
        $gelatinaVerde=new Gelatina();
        echo $gelatinaRoja->getColor("roja");
        echo $gelatinaRoja->getColor("verde");

    }

}