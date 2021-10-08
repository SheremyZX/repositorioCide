<?php 
interface DaoPersona{
    public function registrar(Persona $a);
    public function modificar(Persona $a);
    public function eliminar(Persona $a);
    //public function buscar($campo,$dato);
    public function listar();
}
?>