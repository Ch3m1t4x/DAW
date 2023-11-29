<?php

session_start(); // Se manda cookie y si hay ya carga la sesión.

if(isset($_POST['secreto']) && $_POST['secreto'] == '1234'){
    $_SESSION['acceso'] = 1;
    header("Location: privada.php");
}else {
    $_SESSION['acceso'] = 0;
    unset($_SESSION['acceso']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth</title>
</head>
<body>
    <h1>Auth</h1>
    <form action="auth.php" method="post">
        <input type="text" name="nombre" id="nombre">
        <input type="text" name="pass" id="pass">
        <input type="submit" value="enviar">
    </form>
    <p><?=$cont?></p>
</body>
</html>