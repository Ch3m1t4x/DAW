<?php

$info=[];
$errores=[];

if (isset($_POST['enviar'])) {
    
    $info['altura']=$_POST['altura'];
    $info['color']=$_POST['color'];

    if (isset($_POST['nombre']) && $_POST['nombre'] != "") {
        $info['nombre']=$_POST['nombre'];
    }else {
        $errores['nombre']="Campo obligatorio";
    }


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
        /* * {
            margin-bottom: 10px;
        } */

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
    <div class="titulo">
        <h1>Consigue un fumblo</h1>        
    </div>
    <div class="formulario">
        <form action="" method="post">
            Nombre:
            <input type="text" name="nombre" id="nombre" >
            
            <?php if(isset($errores['nombre'])) { ?>
                <br>
                <span class="error"><?=$errores['nombre']?></span>  
            <?php } ?> 

            
            <br>
            
            Altura: <select name="altura" id="altura" >
                <option value="10cm">10 cm</option>
                <option value="15cm">15cm</option>
                <option value="20cm">20cm</option>
            </select>
            
            <br>
            
            Color: <input type="color" name="color" id="color" >
            
            <br>
            
            Tipo:
            <input type="radio" id="padre" name="padre" value="padre" />
            <label for="padre">Padre</label>
    
            <input type="radio" id="joven" name="joven" value="joven" />
            <label for="joven">Joven</label>
    
            <input type="radio" id="bebe" name="bebe" value="bebe" checked/>
            <label for="bebe">Bebé</label>
            
            <br>

            <p>Día a recibir (Elegir una opcion):</p>
            Cuanto antes<input type="checkbox" name="sinPreferencia" id="sinPreferencia">
            <br>
            Elegir día:
            <input type="date" name="fecha" id="fecha">

            <br>

            <p>Datos a tener en cuenta:</p>

            <br>

            <textarea name="cosas" id="cosas" cols="30" rows="10"></textarea>

            <br>

            <button type="submit" name="enviar" class="btn btn-info">Conseguir</button>
        </form>
    </div>
</body>
</html>