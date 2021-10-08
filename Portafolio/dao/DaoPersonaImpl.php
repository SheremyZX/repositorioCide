<?php
include('daoPersona.php');
include ('../conexion/conexion.php');
include ('../modelo/persona.php');

class DaoPersonaImpl extends Conexion implements DaoPersona{

    public function registrar(Persona $a){ 
        try {
            if ($this->getCnx()!=null) {
                $id=$a->getId();
                $nombre=$a->getNombre();
                $apellido1=$a->getApellido1();
                $apellido2=$a->getApellido2();
                $correo=$a->getCorreo();
                $contra=$a->getContra();
                $tipo=$a->getTipo();
                $sql="INSERT into personas values(?,?,?,?,?,?,?)";
                $stmt=$this->getCnx()->prepare($sql);
                $stmt->execute([$id,$nombre,$apellido1,$apellido2,$correo,$contra,$tipo]);
            } else {
                echo $this->getCnx().'Es nulo <br>';
            }
        } catch (PDOException $p) {
            echo $p->getMessage()."Error, No se pudo Registrar";
        }
    }
                       
        
    public function modificar(Persona $a){        
            $id=$a->getId();
            $nombre=$a->getNombre();
            $apellido1=$a->getApellido1();
            $apellido2=$a->getApellido2();
            $correo=$a->getCorreo();
            $contra=$a->getContra();
            $tipo=$a->getTipo();
            $sql="UPDATE personas
            SET Nombre ='$nombre', Apellido1 ='$apellido1', Apellido2 = '$apellido2', correo = '$correo', contra = '$contra'
            WHERE Id ='$id'";
            $stmt=$this->getCnx()->prepare($sql);
            $stmt->execute();       
    }

    public function eliminar($a){        
        $id=$_GET['id'];
        $stmt=$this->getCnx()->prepare("DELETE from personas where id=$id");
        $stmt->execute();        
    }
//public function listar();
public function listar(){
    $lista = null;
    try{    
        $stmt = $this->getCnx()->prepare("SELECT * from personas");
        $lista = array();
        $stmt->execute();
        foreach ($stmt as $key ) {           
            $a = new Persona(null,null,null,null,null,null,null);
            $a->setId($key['id']);
            $a->setNombre($key['nombre']);
            $a->setApellido1($key['apellido1']);
            $a->setApellido2($key['apellido2']);
            $a->setCorreo($key['correo']);
            $a->setContra($key['contra']);
            $a->setTipo($key['tipo']);
            array_push($lista,$a);            
        }        
        //$this->getCnx()->close();
    }catch(PDOException $e){
        $e->getMessage().'error en listar de DaoPersonaImpl';
    } 
        return $lista;       
    }       
    //public function buscar($campo,$dato);
    
}
?>