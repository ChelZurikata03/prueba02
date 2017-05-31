<?php

/**
 * Created by PhpStorm.
 * User: HP Pavilion x360
 * Date: 16/05/2017
 * Time: 11:59 PM
 */
class CapsulaHija extends Capsula
{

    public function accederAlPadre(){
        $this->soloMisHijos();
    }

}