<?php

define('FILE_NAME', 'store.json');

if (file_exists(FILE_NAME)) {
    $datos = file_get_contents(FILE_NAME);
    $lista_peliculas = json_decode($datos, true);
    $vistas = separar_vistas($lista_peliculas);
    $sinver = separar_sinver($lista_peliculas);
} else {
    $vistas = [];
    $sinver = [];
    $lista_peliculas = [];
} 

function persistencia(array $info)
{
    $datos = json_encode($info);
    file_put_contents(FILE_NAME, $datos);
}

if (isset($_POST['titulo']) && isset($_POST['valoracion'])) {
    $titulo = $_POST['titulo'];
    $valoracion = $_POST['valoracion'];
    $peli['Titulo'] = $titulo;
    $peli['Valoracion'] = $valoracion;
    persistencia($peli);
}

function separar_vistas(array $info): array
{
    $pelis_vistas = [];
    foreach ($info as $peli) {
        $titulo = $peli['Titulo'];
        $valor = $peli['Valoracion'];
        intval($valor);
        if ($valor > 0) {
            $pelis_vistas['Titulo'] = $titulo;
            $pelis_vistas['Valoracion'] = $valor;
        }
    }
    print_r($pelis_vistas);
    return $pelis_vistas;
}
function separar_sinver(array $info): array
{
    $pelis_sinver = [];
    foreach ($info as $peli) {
        $titulo = $peli['Titulo'];
        $valor = $peli['Valoracion'];
        intval($valor);
        if ($valor == 0) {
            $pelis_sinver['Titulo'] = $titulo;
            $pelis_sinver['Valoracion'] = $valor;
        }

    }
    print_r($pelis_sinver);
    return $pelis_sinver;
}

?>