<?php
class Persona{
    private $id;
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $correo;
    private $contra;
    private $tipo;
    

function __construct($id, $nombre, $apellido1, $apellido2, $correo, $contra, $tipo){
    $this->id=$id;
    $this->nombre=$nombre;
    $this->apellido1=$apellido1;
    $this->apellido2=$apellido2;
    $this->correo=$correo;
    $this->contra=$contra;
    $this->tipo=$tipo;
}
//funciones get
function getId(){
    return $this->id;
}

function getNombre() {
    return $this->nombre;
}

function getApellido1(){
    return $this->apellido1;
}

function getApellido2(){
    return $this->apellido2;
}

function getCorreo(){
    return $this->correo;
}

function getContra(){
    return $this->contra;
}

function getTipo(){
    return $this->tipo;
}

//funciones set
function setId($id){
    $this->id=$id;
}

function setNombre($nombre){
    $this->nombre=$nombre;
}

function setApellido1($apellido1){
    $this->apellido1=$apellido1;
}

function setApellido2($apellido2){
    $this->apellido2=$apellido2;
}

function setCorreo($correo){
    $this->correo=$correo;
}

function setContra($contra){
    $this->contra=$contra;
}

function setTipo($tipo){
    $this->tipo=$tipo;
}


}