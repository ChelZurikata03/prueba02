<?php

/**
 * Created by PhpStorm.
 * User: HP Pavilion x360
 * Date: 16/05/2017
 * Time: 11:43 PM
 */
class TestEncapsulacion
{

    public function index(){
       //Instanciamos
     $capsulaHija = new CapsulaHija();
     $capsulaHija->accederAlPadre();
     $capsula=new Capsula();
     $capsula->todos();

    }

}