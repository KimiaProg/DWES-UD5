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
    include_once "ejercicio7BBDD.php";
    $comprobacion = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        session_start();
        $nombre = $_POST["nombre"];
        $pass = $_POST["pass"];
        $datosUsu = getUser($nombre);

        if ($datosUsu != '') {
            if (password_verify($pass, $datosUsu["password"])) {
                $comprobacion = "Password correcto";
                $_SESSION["perfil"] = $datosUsu["perfil"];
                if ($_SESSION["perfil"] == "admin") {
                    header("Location: admin.php");
                } elseif ($_SESSION["perfil"] == "usuario") {
                    header("Location: usuario.php");
                }
            } else {
                $comprobacion = "Password no correcto";
            }
        }
    }
    ?>

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <input type="text" name="nombre">
        <input type="password" name="pass">

        <input type="submit" value="Registrar">
    </form>
    <h2><?php echo $comprobacion ?></h2>

</body>

</html>