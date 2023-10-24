<?php
include('../config/init.php');
include('../src/data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido al gestor de sistemas planetarios</h1>
    <div>
        <h2>Planetas individuales</h2>
        <?=$planeta->toEdit()?>
    </div>
    <div>
        <h2>Detalle</h2>
        <?=$sp->toSelect($paraMostrarNombre)?>
        <?php if($paraMostrar){
            echo "<p>$paraMostrar</p>";
        }?>
    </div>
    <div>
        <h2>listado</h2>
        <?=$sp->toTable() ?>

    </div>
</body>
</html>