<?php
    include('data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica3</title>
</head>
<body>
    <div id="ciclos">
        <h1>ciclos formativos</h1>
        <ul>
            <?php 
                foreach($ciclos as $ciclos){
                    echo"<li>${ciclo['nombre']}: <a href='${ciclo['enlace']}'>${ciclo['desc']}</a></li>";
                }
            ?>
        </ul>
    </div>
</body>
</html>