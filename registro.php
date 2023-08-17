<?php

require 'database.php';

$mensaje = "";

//agregar la informacion BD
if(!empty($_POST['email']) && !empty($_POST['password'])){
    $sql = "INSERT INTO usuarios (email, password) VALUES (:email, :password)";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    //validamos registro
    if($stmt->execute()){
        $mensaje = "El usuario se ha registrado correctamente";
    }else{
        $mensaje = "Lo sentimos no se hay registro en proceso";
    }

}

    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidos al app El Bagre</title>
    <link rel="stylesheet" href="assets/estilos.css">
</head>
<body>
    <?php require 'partials/header.php' ?>
    
    <?php if(!empty($mensaje)): ?>
        <p><?= $mensaje?></p>
    <?php endif; ?>
    
    <h1>Registrarse</h1>
    <form action="registro.php" method="post">
        <input type="text" class="input" name="email" placeholder="Ingrese su correo">
        <input type="password" class="input" name="password" placeholder="Ingrese su contraseña">
        <input type="submit" class="boton" value="Enviar">
    </form>
    
</body>
</html>