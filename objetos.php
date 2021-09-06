<?php 

include ('biblioteca.php');
class Material extends Biblioteca{
    private $tMaterial;
    private $codigo;
    private $autor;
    private $titulo;
    private $años;
    private $status;


function __construct($materiales, $personas,$tMaterial, $codigo, $autor, $titulo, $años, $status){
    parent::__construct($materiales, $personas);
    $this->tMaterial=$tMaterial;
    $this->codigo=$codigo;
    $this->autor=$autor;
    $this->titulo=$titulo;
    $this->años=$años;
    $this->status=$status;
}
//FUNCIONES SET
function settMaterial($tMaterial){
    $this->tMaterial=$tMaterial;
}

function setCodigo($codigo){
    $this->codigo=$codigo;
}

function setAutor($autor){
    $this->autor=$autor;
}

function setTitulo($titulo){
    $this->titulo=$titulo;
}

function setAños($años){
    $this->años=$años;
}

function setStatus($status){
    $this->status=$status;
}
//FUNCIONES GET
function gettMaterial(){
    return $this->tMaterial;
}

function getCodigo(){
    return $this->codigo;
}

function getAutor(){
    return $this->autor;
}

function getTitulo(){
    return $this->titulo;
}

function getAños(){
    return $this->años;
}

function getStatus(){
    return $this->status;
}
}

class Libro extends Material{
    private $editorial;     

    function __construct($editorial, $materiales, $personas, $tMaterial, $codigo, $autor, $titulo, $años, $status){
        parent::__construct($editorial, $materiales, $personas,$tMaterial, $codigo, $autor, $titulo, $años, $status);
        $this->editorial=$editorial;
    }

    function setEditorial($editorial){
        $this->editorial=$editorial;
    }
    function getEditorial(){
        return $this->editorial;
    }
}

class Revista extends Material{
    private $formato;

    function __construct($formato,$materiales, $personas, $tMaterial, $codigo, $autor, $titulo, $años, $status){
        parent::__construct($formato,$materiales, $personas,$tMaterial, $codigo, $autor, $titulo, $años, $status);
        $this->formato=$formato;
    }

    function setFormato($formato){
        $this->formato=$formato;
    }

    function getFormato(){
        return $this->formato;
    }
}



$ob=new Libro("Editorial Mesa Azul","Numero de material 1", "Personas 2", "Hoja de palma", 2142329, "Jeremi Zapata", "Hablandole a la luna", 2021, "Activo");
$ob=new Revista("Formato 50 Paginas", "Numero de material 2", "Personas 3", "Hoja de palma", 2142329, "Jeremi Zapata", "Hablandole a la luna", 2021, "Activo");
 
echo $ob->gettMaterial();
echo "<br>";
echo $ob->getCodigo();
echo "<br>";
echo $ob->getAutor();
echo "<br>";
echo $ob->getTitulo();
echo "<br>";
echo $ob->getAños();
echo "<br>";
echo $ob->getStatus();
echo "<br>";
echo $ob->getFormato();
?>