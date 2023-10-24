<?php
function sumador(&$acumular=0, $enteros){
    foreach($enteros as $numeros){
        $acumular+=$numeros;
    }
}
$acumulador;
$numericos= array(1,2,3,4,5,6,7);
sumador($acumulador,$numericos);
echo $acumulador;
?>