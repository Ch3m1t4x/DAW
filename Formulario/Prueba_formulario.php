<?php

define('FILE_DATA', 'data.csv');

$msg = "";
if(isset($_GET['msg'])) {
    $msg = $_GET['msg'];
}

$nombre="";
$fumblo="";
$altura="";
$tipo="";
$fecha="";
$sinPreferencia="";
$cosas="";
$errores=[];

if (isset($_POST['enviar'])) {
        
    $info['color']=$_POST['color'];

    if (isset($_POST['nombre']) && $_POST['nombre'] != "") {
        $nombre=$_POST['nombre'];
    }else {
        $errores['nombre']="Campo obligatorio";
    }

    if (isset($_POST['fumblo']) && $_POST['fumblo'] != "") {
        $fumblo=$_POST['fumblo'];
    }else {
        $errores['fumblo']="Campo obligatorio";
    }

    if (isset($_POST['altura']) && $_POST['altura'] != "") {
        $altura=$_POST['altura'];
    }else {
        $errores['altura']="Campo obligatorio";
    }
    
    if (isset($_POST['tipo'])) {
        $tipo=$_POST['tipo'];
    }else {
        $errores['tipo']="Campo obligatorio";
    }

    if(isset($_POST['fecha']) && $_POST['fecha'] != ""){
        $fecha=$_POST['fecha'];
        $hoy = new DateTime("now");
        if($hoy > new DateTime($fecha)){
            $errores['dia'] = "Selecciona un dia posterior al dia de hoy";
        }
    }

    if (isset($_POST['sinPreferencia']) && $_POST['sinPreferencia'] != "") {
        $sinPreferencia=$_POST['sinPreferencia'];
    }

    if(($fecha=="" && $sinPreferencia=="") || ($fecha!="" && $sinPreferencia!="")){
        $errores['fecha']="Debe elegir una fecha o seleccionar cuanto antes";
    }
    

    if (isset($_POST['cosas'])) {
        $cosas=$_POST['cosas'];
    }

    if(empty($errores)){
        $data = file_get_contents(FILE_DATA);
        $fila = "\n$fumblo; $altura; $tipo; ".(($sinPreferencia!="")?"Cuanto antes":$fecha).";$cosas; $nombre";
        $data .= $fila;
        file_put_contents(FILE_DATA, $data);

        header("Location: Prueba_formulario.php?msg=Guardado con exito");
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
        h1.success {
            color: green;
        }

        body{
            padding-left: 40%;
        }

        span.error {
            color: red;
            font-size: 0.8em;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php if ($msg!="") { 
        echo "<h1 class='success'>$msg</h1>";?>
        <form action="" method="post">
            <button type="submit" name="volver">Volver a conseguir un fumblo</button>
        </form>
    <?php }else{?>

    <div>
        <h1>Consigue un fumblo</h1>        
    </div>
    <div>
        <form action="" method="post">
            Nombre :
            <input type="text" name="nombre" id="nombre" >
            
            <?php if(isset($errores['nombre'])) { ?>
                <br>
                <span class="error"><?=$errores['nombre']?></span>  
            <?php } ?> 
            
            <br>
            
            Nombre del fumblo :
            <input type="text" name="fumblo" id="fumblo" >
            
            <?php if(isset($errores['fumblo'])) { ?>
                <br>
                <span class="error"><?=$errores['fumblo']?></span>  
            <?php } ?> 
            
            <br>

            Altura : <select name="altura" id="altura" >
                <option value="">Selecciona un altura</option>
                <option value="10cm">10 cm</option>
                <option value="15cm">15cm</option>
                <option value="20cm">20cm</option>
            </select>

            <?php if(isset($errores['altura'])) { ?>
                <br>
                <span class="error"><?=$errores['altura']?></span>  
            <?php } ?> 
            
            <br>
            
            Color : <input type="color" name="color" id="color" >
            
            <br>
            
            Tipo :
            <input type="radio" id="samurai" name="tipo" value="samurai" />
            <label for="samurai">Samurai</label>
    
            <input type="radio" id="monstruoso" name="tipo" value="monstruoso" />
            <label for="monstruoso">Monstruoso</label>
    
            <input type="radio" id="luchador" name="tipo" value="luchador" />
            <label for="luchador">Luchador</label>

            <?php if(isset($errores['tipo'])) { ?>
                <br>
                <span class="error"><?=$errores['tipo']?></span>  
            <?php } ?> 
            
            <br>

            Día a recibir (Elegir una opcion):
            <?php if(isset($errores['fecha'])) { ?>
                <br>
                <span class="error"><?=$errores['fecha']?></span>  
            <?php } ?> 
            <br>
            Cuanto antes<input type="checkbox" name="sinPreferencia" id="sinPreferencia">
            <br>
            Elegir día :
            <input type="date" name="fecha" id="fecha">

            <?php if(isset($errores['dia'])) { ?>
                <br>
                <span class="error"><?=$errores['dia']?></span>  
            <?php } ?> 

            <br>

            <p>Datos a tener en cuenta:</p>

            <br>

            <textarea name="cosas" id="cosas" cols="30" rows="10"></textarea>

            <br>

            <button type="submit" name="enviar" class="btn btn-info">Conseguir</button>
        </form>
    </div>
    <?php } ?>
</body>
</html>