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


function getUser($nombre){
    $con=connection();
    $sql=$con->prepare("SELECT * from usuarios where usuario=:usuario");
    $sql->bindParam(":usuario",$nombre);
    $sql->execute();
    $retorno= $sql->fetch(PDO::FETCH_ASSOC);
    $con="";
    return $retorno;
}
?>