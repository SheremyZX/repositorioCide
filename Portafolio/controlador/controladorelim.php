<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vista/estilos.css">
    <title>modificar</title>
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