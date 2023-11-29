<?php

define('FILE_DATA', 'data.csv');


$tarea="";
$prioridad="";
$email="";
$descripcion="";
$errores=[];

if (isset($_POST['enviar'])) {
        

    if (isset($_POST['tarea']) && $_POST['tarea'] != "") {
        $tarea=$_POST['tarea'];
    }else {
        $errores['tarea']="Campo obligatorio";
    }

    if (isset($_POST['prioridad']) && $_POST['prioridad'] != "") {
        $prioridad=$_POST['prioridad'];
    }else {
        $errores['prioridad']="Campo obligatorio";
    } 

    if (isset($_POST['email']) && $_POST['email'] != "") {
        $email=$_POST['email'];
    }

    if (isset($_POST['descripcion']) && $_POST['descripcion']) {
        $descripcion=$_POST['descripcion'];
    }else{
        $errores['descripcion']="Campo obligatorio";
    }

    if(empty($errores)){
        $data = file_get_contents(FILE_DATA);
        $fila = "\n$fumblo; $prioridad; $tipo; ".(($sinPreferencia!="")?"Cuanto antes":$fecha).";$cosas; $tarea";
        $data .= $fila;
        file_put_contents(FILE_DATA, $data);

        header("Location: index.php");
        die(0);
    }
}

if (isset($_POST['volver'])) {
    header("Location: Prueba_formulario.php");
    die(0);
}


print_r($info);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style> 
    body {
        margin-top: 5vh;
        margin-left: 3vw;
    }
    </style>
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Consigue un fumblo</h1>        
    </div>
    <div>
        <form action="" method="post">
            Tarea :
            <input type="text" name="tarea" id="tarea" >
            
            <?php if(isset($errores['tarea'])) { ?>
                <br>
                <span class="error"><?=$errores['tarea']?></span>  
            <?php } ?> 
            
            <br>

            Prioridad : <select name="prioridad" id="prioridad" >
                <option value="">Selecciona un prioridad</option>
                <option value="alta">Alta</option>
                <option value="media">Media</option>
                <option value="baja">Baja</option>
            </select>

            <?php if(isset($errores['prioridad'])) { ?>
                <br>
                <span class="error"><?=$errores['prioridad']?></span>  
            <?php } ?> 
            
            <br>

            Email :
            <input type="text" name="email" id="email" >
            
            <?php if(isset($errores['email'])) { ?>
                <br>
                <span class="error"><?=$errores['email']?></span>  
            <?php } ?> 
            
            <br>

            <p>Descripción:</p>

            <br>

            <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>

            <?php if(isset($errores['descripcion'])) { ?>
                <br>
                <span class="error"><?=$errores['descripcion']?></span>  
            <?php } ?> 

            <br>

            <button type="submit" name="enviar" class="btn btn-info">Conseguir</button>
        </form>
    </div>
</body>
</html>