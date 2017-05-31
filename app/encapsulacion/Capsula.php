<?php

/**
 * Created by PhpStorm.
 * User: HP Pavilion x360
 * Date: 16/05/2017
 * Time: 11:57 PM
 */
class Capsula
{

    private function nadie(){
        echo "Nadie puede ver esta funcion mas que yo";
    }

    public function todos(){
        echo "todo el mundo puede ver esta funcion";
    }

    protected function soloMisHijos(){
        echo "solo mis hijos pueden ver esta funcion";
    }


}