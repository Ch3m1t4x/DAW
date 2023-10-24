<?php
/*if(file_exists(FILE_NAME)){
    $planetas = json_decode(
        file_get_contents(FILE_NAME)
    );
}else{
    $planetas=[];
}*/

$sp = new  SistemaSolar();
if(file_exists(FILE_NAME)){
    $sp->load();
}
//logica de apliacion
$planeta = new Planeta();

if($_POST['guardar']){
    $planetaAinsertar = new Planeta(
                    $_POST['nombre'],
                    $_POST['distancia'],
                    $_POST['diametro'],
                    $_POST['masa']
                );
    /*if($sp->contains($planetaAinsertar->nombre)){
        $sp->update($planetaAinsertar->nombre, $planetaAinsertar);
    }else{
        $sp->add($planetaAinsertar);
    }*/
    $sp->add($planetaAinsertar);
}

$paraMostrar = NULL;
$paraMostrarNombre='';
if(isset($_POST['mostrar'])){
    $paraMostrar = $sp->detail($_POST['mostrar']);
    if(!is_string($paraMostrar)){
        $paraMostrarNombre = $paraMostrar->nombre;
    }
}
//NULL, "No encontrado", un planeta
// $paraMostrarNombre el nombre o ''

if(isset($_GET['nombre'])){
    $p = $sp->detail($_GET['nombre']);
    if(!is_string($p)){
        $planeta = new planeta(
            $p->nombre,
            $p->distancia,
            $p->diametro,
            $p->masa
        );
    }
}

$sp->save();
?>