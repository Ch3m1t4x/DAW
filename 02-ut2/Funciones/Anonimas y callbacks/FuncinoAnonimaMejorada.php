
<?php

    function aplicarOperacion($operacion,$num1,$num2){
        $operacion($num1,$num2);
    }

    $multiplicar=function ($num1, $num2){
        echo $num1*$num2;
    };

    $sumar=function ($num1, $num2){
        echo $num1+$num2;
    };
    
    $restar=function ($num1, $num2){
        echo $num1-$num2;
    };


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $callback="aplicarOperacion"?> 
    <p>El resultado de la multiplicación es: </p> <?php $callback($multiplicar,4,3)?>
    <p>El resultado de la sumar es: </p><?php $callback($sumar,4,3)?>
    <p>El resultado de la restar es: </p><?php $callback($restar,4,3)?>
</body>
</html>