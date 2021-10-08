<?php 
$consulta= consultarPersona($_GET['id']);

function consultarPersona($id){
    include '../conexion/conexmod.php';
    $sentencia="SELECT * FROM personas WHERE id='".$id."'";
    $resultado=$conexion->query($sentencia) or die ("Error de conexion".mysqli_error($conexion));
    $fila=$resultado->fetch_assoc();
return[
    $fila['id'],
    $fila['nombre'],
    $fila['apellido1'],
    $fila['apellido2'],
    $fila['correo'],
    $fila['contra'],
    $fila['tipo']
];
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Datos</title>
    <link rel="stylesheet" type="text/css" href="estilozzz.css">

    <link rel="stylesheet" href="estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre&family=Orbitron&family=Stick+No+Bills:wght@500&display=swap" rel="stylesheet">

</head>

<body>

<form action="../controlador/controlmod.php" method="GET" class="formulario">
    <div class="lineamod">
    <h1>Actualizar datos</h1>
    <label for="">Id</label>    
    <input type="text" name="id" id="id" class="form-control" value="<?php echo $consulta[0]?>" >

    <label for="">Nombre</label>    
    <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $consulta[1]?>">
    
    <label for="">Primer Apellido</label>    
    <input type="text" name="apellido1" id="apellido1" class="form-control" value="<?php echo $consulta[2]?>">
    
    <label for="">Segundo Apellido</label>    
    <input type="text" name="apellido2" id="apellido2" class="form-control" value="<?php echo $consulta[3]?>">

    <label for="">Correo Electronico</label>    
    <input type="text" name="correo" id="correo" class="form-control" value="<?php echo $consulta[4]?>">

    <label for="">Contraseña</label>    
    <input type="text" name="contra" id="contra" class="form-control" value="<?php echo $consulta[5]?>">
    
    <label for="">Tipo</label>    
    <input type="text" name="tipo" id="tipo" value="<?php echo $consulta[6]?>">

    <input type="submit" name="boton" value="Actualizar Registro" class="btn btn-primary" >
</form>
</div>
    

<a href="indexinsertar.php" class="reg">Registro</a>
<a href="../vista/index.php" class="list">Lista</a>  

</body>
</html>