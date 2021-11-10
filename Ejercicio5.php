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
    include_once "ejercicio5BBDD.php";

    if(count($_POST)>0){
        $nombre= $_POST["nombre"];
        $pass=$_POST["pass"];
        $cuenta=$_POST["cuenta"];
        insert($nombre,password_hash($pass,PASSWORD_DEFAULT),$cuenta);
    }
    ?>

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <input type="text" name="nombre">
        <input type="password" name="pass">
        <input type="number" name="cuenta">
        <input type="submit" value="Registrar" >
    </form>
</body>

</html>