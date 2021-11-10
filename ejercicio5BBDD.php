<?php

function connection(){
    $servidor = "localhost";
    $baseDatos = "pruebaUsuarios";
    $usuario = "root";
    $pass = "root";
    try {
        $con = new PDO("mysql:host=" . $servidor. ";dbname=" . $baseDatos, $usuario, $pass);
        return $con;
    } catch (PDOException $e) {
        echo $e;
    }
}


function insert($nombre,$pass,$cuenta){
    $con=connection();
    $sql = $con->prepare("INSERT into usuarios values(:usuario,:password,:cuenta)");
        $sql->bindParam(":usuario", $nombre);
        $sql->bindParam(":password", $pass);
        $sql->bindParam(":cuenta", $cuenta);
        $sql->execute();
        return $con->lastInsertId();
}
?>