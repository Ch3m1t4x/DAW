<?php

session_start();

if(isset($_SESSION['acceso']) && $_SESSION['acceso == 1']){
    $quien = 'Usuario registrado';
}else{
    $quien = 'Usuario anonimo';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publica</title>
</head>
<body>
    <h1>Publico</h1>
    <p>Contenido</p>
</body>
</html>