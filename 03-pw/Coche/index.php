<?php
include('Choche.php');
include('ChocheConRemolque.php');
include('ChocheGrua.php');

$BMW = new Coche('1000','BMW','30');
$Renault = new CocheConRemolque('1001','Renault','30','200');
$Porche = new Coche('1002','Porche','40');
$Ford = new CocheGrua('1003','Ford','20');
$Ford->cargar($Porche);
$Nissan = new CocheConRemolque('1005','Nissan','22','250');
$Kia = new CocheGrua('1007','Kia','30');
$Kia->cargar($Nissan);
$Cochecitos=[$BMW,$Renault,$Ford,$Kia];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?=array_walk($Cochecitos,function($item){
            echo $item->Mostrar();
            echo '\n';
        });?>
    </div>
</body>
</html>