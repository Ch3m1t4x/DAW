<?php
include("Trait.php");

class Unico
{
    public $descripcion;
    use singletone;
}

$user1 = Unico::singleton();
$user1->cosa = 'No soy un singleton Unico';
$user1->descripcion = 'Esta es mi descripcion de no singletone';
$user2 = Unico::singleton();
$user2->cosa = 'Soy un singleton Unico';
$user2->descripcion = 'Esta es mi descripcion de singletone';

echo $user1->cosa." ; ".$user1->descripcion. " - ".$user2->cosa." ; ".$user2->descripcion."\n";
?>