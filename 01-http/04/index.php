<?php
include('data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verde</title>
</head>
<body>
    <?php
        for($i=1;$i<=25;$i++){
            $color = mt_rand(0,255);
            $colores[$i]=sprintf("#00%02X00", $color);
        }
        asort($colores);
    ?>
    <?php foreach($colores as $hexa):?>
        <div style="background-color:<?=$hexa?>; withd:auto; height: 30px"></div>
    <?php endforeach;?>    
</body>
</html>