<?php
    $frutas = ["Manzana", "Plátano", "Naranja", "Uva"];
    $precios = [1.2, 0.8, 1.0, 2.5];
function tabla (array $productos, array $precios):string{
    $html="<table>";
    $html.="<tr><th>Producto</th><th>Precio</th></tr>";
    foreach ($productos as $k => $p) {
        $html.="<tr><td>$p</td><td>$precios[$k]</td></tr>";
    }
    $html.="</table>";
    return $html;  
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
    <?=tabla($frutas, $precios)?>
</body>
</html>
