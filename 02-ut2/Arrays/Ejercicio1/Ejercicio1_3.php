<?php
    $frutas = ["Manzana", "Plátano", "Naranja", "Uva"];
    $precios = [1.2, 0.8, 1.0, 2.5];
    $zip=array_map(null,$frutas,$precios);

    function lista3(array $info):string{
        $html.=array_reduce($info, function($ante,$poste){
            return $ante . "<tr><td>$poste[0]</td><td>$poste[1]</td>";
        },"<table><tr><th>Frutas</th><th>Precios</th></tr>");
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
    <?=lista3($zip)?>
</body>
</html>