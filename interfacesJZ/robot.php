<?php

include 'animales.php';

class robot implements Locomocion{
    public $tipo;
    function __constructor($tipo){
        $this->tipo=$tipo;
    }
    function emitirSonido($sonido){
        echo 'Los robots tipo'.$this->tipo.'emiten sonido de'.$sonido;
    }
    function movimiento(){
        echo 'Su movimiento es propio de los robots'.$this->tipo;
    }
}

$gigantedehierro= new Robot('androide');
$gigantedehierro->emitirSonido('Sonido al caminar');
$gigantedehierro->movimiento();













?>