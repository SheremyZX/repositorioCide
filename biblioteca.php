<?php 
class Biblioteca{
    protected $materiales='';
    protected $personas=0;
    
    function __construct($materiales,$personas){
    $this->materiales=$materiales;
    $this->personas=$personas;
    }
    
     function datos(){
         return 'Cantidad de materiales: '.$this->materiales. 'cantidad de personas: '.$this->personas;
     }
    
    }

?>