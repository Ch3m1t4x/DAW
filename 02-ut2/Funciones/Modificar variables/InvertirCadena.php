<?php
function DarVuelta(String &$cad){
    $cad=strrev($cad);
}
$Cadena="Hola mundo";
DarVuelta($Cadena);
echo $Cadena;
echo "<br>".strrev($Cadena);
?>