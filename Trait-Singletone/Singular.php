<?php
include("Trait.php");

class Singular
{
    use singletone;
}

$user1 = Singular::singleton();
$user1->cosa = 'No soy un singleton Singular';
$user2 = Singular::singleton();
$user2->cosa = 'Soy un singleton Singular';

echo $user1->cosa. " - ".$user2->cosa."\n";
?>