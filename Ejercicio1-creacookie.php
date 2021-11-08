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
    $nombre="Kimia Ehsani";
    $edad="23";
    $horas3 = time()+3*3600000;
    var_export( setcookie("Nombre",$nombre,$horas3));
    var_export( setcookie("Edad",$edad,$horas3));
    ?>
</body>
</html>