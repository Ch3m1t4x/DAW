<?php 
    $alumnos = [
        ["nombre" => "Juan", "edad" => 20, "curso" => "Matemáticas"],
        ["nombre" => "Ana", "edad" => 19, "curso" => "Historia"],
        ["nombre" => "Carlos", "edad" => 21, "curso" => "Inglés"],
    ];
    function menor($menor ,$alumnos){
        $nombre="";
        if(!isset($menor)){
            return $alumnos;
        }if($alumnos['edad']<$menor['edad']){
            return $alumnos;
        }if($alumnos['edad']>$menor['edad']){
            return $menor;
        }
    }
    $callback='menor';
    function encontrar(array $info,$callback):string{
        $html=array_reduce($info,$callback);
        return "Nombre: ".$html['nombre']."<br>"."Edad: ".$html['edad'];
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
    <?=encontrar($alumnos,$callback)?>
</body>
</html>