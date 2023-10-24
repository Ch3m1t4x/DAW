<?php
include('Planeta.php');
$planets = [];
if(isset($_POST['nombre_crear'])&&isset($_POST['masa_crear'])&&isset($_POST['diametro_crear'])&&isset($_POST['distancia_crear'])){
    $planets[]=new Planeta ($_POST['nombre_crear'],$_POST['masa_crear'],$_POST['diametro_crear'],$_POST['distancia_crear']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>