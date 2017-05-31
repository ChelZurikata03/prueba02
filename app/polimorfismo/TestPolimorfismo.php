<?php

/**
 * Created by PhpStorm.
 * User: HP Pavilion x360
 * Date: 16/05/2017
 * Time: 11:43 PM
 */
class TestPolimorfismo
{

    public function index(){
       //Instanciamos
    $maestro=new Maestro();
    $programador = new Programador();
    $maestro->trabajar();
    $programador->trabajar();
    //Polimorfismo muchas formas de de hacer lo mismo
        //las clases que heredan trabajan solo que de diferente forma
        //Mientras un profesor da clases el programador dessarrolla

    }

}