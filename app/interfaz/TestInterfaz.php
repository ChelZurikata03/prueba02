<?php

/**
 * Created by PhpStorm.
 * User: HP Pavilion x360
 * Date: 16/05/2017
 * Time: 11:43 PM
 */
class TestInterfaz
{

    public function index(){
       //Instanciamos
     $avion = new Avion();
     $pajaro = new Pajaro();
     $avion->volar();
     echo "<br>";
     $pajaro->volar();

    }

}