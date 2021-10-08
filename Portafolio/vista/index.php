<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista De Datos</title>
    <link rel="stylesheet" type="text/css" href="estilozzz.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre&family=Orbitron&family=Stick+No+Bills:wght@500&display=swap" rel="stylesheet">

</head>
<body>
<div class="divmod">
    <table class="table">
            <center><caption>LISTADO DE PERSONAS</caption><center>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO1</th>
                    <th>APELLIDO2</th>
                    <th>CORREO</th>
                    <th>CONTRASEÑA</th>
                    <th>TIPO</th>
                </tr>

            </thead>
            <tbody>
            <tr>
            <?php
            require('../controlador/controladorlistar.php');
                foreach ($Persona as $key) {
                    echo "<tr><td>". $key->getId() . "</td>";
                    echo "<td>". $key->getNombre() . "</td>";
                    echo "<td>". $key->getApellido1() . "</td>";
                    echo "<td>". $key->getApellido2() . "</td>";
                    echo "<td>". $key->getCorreo() . "</td>";  
                    echo "<td>". $key->getContra() . "</td>";    
                    echo "<td>". $key->getTipo() . "</tr>"; 
                    echo "<td><a href='indexmod.php?id=".$key->getid()."'>Actualizar</a></td>";
                    echo "<td><a href='../controlador/controladorelim.php?id=".$key->getid()."'>Eliminar</a></td>  </tr>";      
                }?>
            </tr>    
            </tbody>
    </table>
    </div>
 
</body>
</html>