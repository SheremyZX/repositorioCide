<?php
include 'animales.php';

class ave extends Animal implements Locomocion{
    public $pico;
    public $patas;

    function __construct($nombre, $clase, $pico, $patas){
        parent::__construct($nombre, $clase)
        $this->pico=$pico;
        $this->patas=$patas;
    }
    function movimiento($mov){
        echo $this->nombre. 'Vuela y se mueve por sus patas';
        $this->patas;
    }
    function emitirSonido($sonido){
        echo $this->nombre.'hace'.$sonido;
    }
}

class pez extends Animal implements Locomocion{
    public $familia;
    public $habitad;

    function __construct($nombre, $clase, $familia, $habitad){
        parent::__construct($nombre, $clase)
        $this->familia=$familia;
        $this->habitad=$habitad;
    }
    function movimiento(){
        echo 'movimiento caracteristico de los peces de la familia'.$this->familia;
    }
    function emitirSonido(){}
}

$tiburon =new pez("Tiburon", "pez", "cartilaginoso", "oceano");
$paloma =new ave("Paloma", "ave", "delgado", "anisodactila");

$tiburon->movimiento();
$paloma->movimiento();
$paloma->emitirSonido('gorjeo');

interface Locomocion{
    public function movimiento();
    public function emitirSonido($sonido);

}


?>