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
    
    <h1>Iniciar sesión</h1>
    <form action="login.php" method="post">
        <input type="text" class="input" name="email" placeholder="Ingrese su correo">
        <input type="password" class="input" name="password" placeholder="Ingrese su contraseña">
        <input type="submit" class="boton" value="Enviar">
    </form>
    
</body>
</html>