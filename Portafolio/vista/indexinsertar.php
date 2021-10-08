<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Datos</title>
    <link rel="stylesheet" type="text/css" href="estilozzz.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre&family=Orbitron&family=Stick+No+Bills:wght@500&display=swap" rel="stylesheet">

</head>
<body>
    <div class="wrap">
    <form action="../controlador/controladorregistro.php", method="GET">

    <label for="">Id</label>    
    <input type="text" name="id" id="id" class="form-control">

    <label for="">Nombre</label>    
    <input type="text" name="nombre" id="nombre" class="form-control">
    
    <label for="">Primer Apellido</label>    
    <input type="text" name="apellido1" id="apellido1" class="form-control" placeholder="No puede ser nulo">
    
    <label for="">Segundo Apellido</label>    
    <input type="text" name="apellido2" id="apellido2" class="form-control">
    
    <label for="">Correo Electronico</label>    
    <input type="text" name="correo" id="correo">

    <label for="">Contraseña</label>    
    <input type="text" name="contra" id="contra" class="form-control">

    <label for="">Tipo</label>    
    <input type="text" name="tipo" id="tipo" class="form-control">

    <input type="submit" name="boton" id="boton" value="Insertar Registro" class="btn btn-primary">
    </form>
    </div>     
</body>
</html>