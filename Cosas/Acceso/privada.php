
<?php
session_start();

if(!isset($_SESSION['acceso']) || $_SESSION['acceso != 1']){
    header('Location: auth.php');
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privada</title>
</head>
<body>
    <h1>Privada</h1>
    <p>Contenido secreto</p>
    <p><?=$cont?></p>
</body>
</html>