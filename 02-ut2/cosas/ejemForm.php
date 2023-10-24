
<?php
    $error=false;
    $info = isset($_GET['info'])?$texto=$_GET['info']:$error=true;
    echo $texto;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?$info?></h1>
    <form action="ejemForm.php" method="get">
        <input type="text" name="info"/>
        <input type="submit" value="Analiza"/>
    <form>
</body>
</html>