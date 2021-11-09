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
    echo $_SESSION["nombre"];
    echo $_SESSION["Edad"];
    unset($_SESSION["nombre"]);
    print_r($_SESSION);
    session_unset();
    print_r($_SESSION);
    session_destroy();
    print_r($_SESSION);
    ?>
</body>
</html>