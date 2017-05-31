<?php

/**
 * Created by PhpStorm.
 * User: HP Pavilion x360
 * Date: 16/05/2017
 * Time: 11:43 PM
 */
class TestClaseAbstracta
{

    public function index(){
       //Instanciamos
    $percursion= new Percusion();
    $saxofon = new Saxofon();

     $percursion->notas();
     $percursion->tipoInstrumento();
        echo "<br>";
        $saxofon->notas();
        $saxofon->tipoInstrumento();
        echo "<br>";
    }

}