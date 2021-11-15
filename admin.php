<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    if ($_SESSION["perfil"] == "admin") {
        echo "Eres el jefe supremo";
    }elseif($_SESSION["perfil"] == "usuario"){
        header("Location: usuario.php");
    } else {
        header("Location: ejercicio7.php");
    }
    ?>
    <a href="cierraSesion.php">Cierra Sesion</a>
</body>

</html>