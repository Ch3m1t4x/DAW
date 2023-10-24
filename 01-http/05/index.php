<?php
    include("data.php");
    $numcol=5;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="0,5" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epilepsia</title>
</head>
<body>
    <?php
        for($i=1;$i<=$numcol;$i++){
            $red = mt_rand(0,255);
            $green = mt_rand(0,255);
            $blue = mt_rand(0,255);
            $colores[$i]=sprintf("#%02X%02X%02X", $red,$green,$blue);
        }
        
    ?>
    <?php foreach($colores as $hexa):?>
        <div style="background-color:<?=$hexa?>; withd:auto; height: 150px"></div>
    <?php endforeach;?>
</body>
</html>