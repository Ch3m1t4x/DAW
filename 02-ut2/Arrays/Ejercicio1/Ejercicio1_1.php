<?php
    $frutas = ["Manzana", "Plátano", "Naranja", "Uva"];
function lista (array $info, string $tipo='ol'):string{
    $html = "<$tipo>";
    foreach ($info as $i) {
        $html.= "<li>$i</li>";
    }
    $html.="</$tipo>";
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
    <?=lista($frutas,"ul")?>
</body>
</html>