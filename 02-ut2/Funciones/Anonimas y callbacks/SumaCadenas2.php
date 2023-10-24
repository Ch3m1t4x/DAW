<?php
function acumul(&$acumular=0, mixed ...$vals){
    foreach($vals as $cosas){
        $acumular+=$cosas;
    }
}
$acumulador;
acumul($acumulador,1,2,3,4,5);
echo $acumulador;
?>