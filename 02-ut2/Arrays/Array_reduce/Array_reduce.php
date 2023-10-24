<?php
    $frutas = ["Manzana", "Plátano", "Naranja", "Uva"];
    $precios = [1.2, 0.8, 1.0, 2.5];
function lista(array $info):string{
    $html.=array_reduce($info, function($ante,$poste){
        return $ante . "<li>$poste</li>";
    },"<ol>");
    $html.="</ol>";
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
    <?=lista($frutas)?>
</body>
</html>