<?php

/**
 * Created by PhpStorm.
 * User: HP Pavilion x360
 * Date: 17/05/2017
 * Time: 12:03 AM
 */
abstract class InstrumentoMusical
{

    //Puede contener metodos abstractos ejemplo
    public abstract function tipoInstrumento();

    //Puede contener metodos concretos

    public function notas(){
        echo "todos los instrumentos producimos notas";
    }

//blek le rat
}