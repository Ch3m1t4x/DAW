<?php
//definicion
function magia(string $etiqueta, mixed...$cosas): string{
    $acchtml="";
    foreach($cosas as $c){
        $acchtml.="<$etiqueta>$c</$etiqueta>";
    }
    return $acchtml;
}
    function crear(...$parametro) {
        $etiqueta=$parametro[0];
        unset($parametro[0]);
        foreach($parametro as $n ){
            echo"<".$etiqueta.">";
            echo $n;
            echo "</".$etiqueta.">";
            echo "<br>";
        }
        
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
    <?=crear("li","Hola mundo","Que tal","Como va")?>
    <?=magia("span","pera","platano","coco")?>
</body>
</html>