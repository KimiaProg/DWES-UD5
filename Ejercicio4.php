<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1px">
        <tr>
            <th>Nombre de la directiva configurable</th>
            <th>Función</th>
            <th>Valores aceptados</th>
        </tr>
        <tr>
            <td>session.use_cookies</td>
            <td>Por si utilizar cookie o url para pasar las sesiones</td>
            <td>boolean 1-0</td>
        </tr>
        <tr>
            <td>session.use_only_cookies</td>
            <td>Para que el módulo sólo use cookies para almacenar el id de sesión en la parte del cliente. Es para impedir ataques que implican pasar el id de sesión en la URL.</td>
            <td>boolean</td>
        </tr>
        <tr>
            <td>session.save_handler</td>
            <td>Guarda el nombre del gestor que se usa para almacenar y recuperar información asociada con una sesión.</td>
            <td>String</td>
        </tr>
        <tr>
            <td>session.name</td>
            <td>El nombre de la sesión para definir el nombre de cookie, solo son caracteres alfanumérico</td>
            <td>String</td>
        </tr>
        <tr>
            <td>session.auto_start</td>
            <td>Si el módulo de sesión inicia una sesión automáticamente cuando arranque una petició</td>
            <td>boolean 1-0</td>
        </tr>
        <tr>
            <td>session.cookie_lifetime</td>
            <td>El tiempo en segundos que le queda al cookie</td>
            <td>integer</td>
        </tr>
        <tr>
            <td>session.gc_maxlifetime</td>
            <td>el tiempo en segundos después de que la información sea vista como 'basura' y limpiada. La recolección de basura puede suceder durante el inicio de sesiones </td>
            <td>integer</td>
        </tr>
    </table>

</body>

</html>