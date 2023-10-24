<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piramide</title>
</head>
<body>
<?php
	function imprimirPiramideSimetrica($numFilas) {
        for ($i = 1; $i <= $numFilas; $i++) {
            for($j=1; $j<=$i; $j++){
                echo"*";
            }
        }
    }

$numFilas = 8;


?>
<h1 style="aling-items:center;">.<?=imprimirPiramideSimetrica($numFilas)?></h1>
</body>
</html>