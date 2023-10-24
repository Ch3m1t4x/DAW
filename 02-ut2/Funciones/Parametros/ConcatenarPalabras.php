<?php
//definicion
function magia(string $clave,string ...$cosas): string{
    $acchtml="";
    foreach($cosas as $k => $c){
        $acchtml.=$c;
        if($k != count($cosas)-1){
            $acchtml.=$clave;
        }
        
    }
    return $acchtml;
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
    <?=magia(" Pito ","Mundo","que","tal")?>
</body>
</html>