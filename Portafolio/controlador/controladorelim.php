<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link rel="stylesheet" type="text/css" href="estilos/estilozzz.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre&family=Orbitron&family=Stick+No+Bills:wght@500&display=swap" rel="stylesheet">
    
    <link rel="shortcut icon" href="imagenes/jz.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php 
require('../vista/index.php');
$dao=new DaoPersonaImpl();
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $a=$id;
    $dao->eliminar($a);

}

?>
</body>
</html>