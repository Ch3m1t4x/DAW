<?php

    function esPar($enteros){
        
        $pares=array();
        foreach ($enteros as $key =>$numeros){
            if($numeros%2==0){
                $pares[$key]=true;
            }
        }
        foreach ($pares as $key => $value) {
            echo $key.$value;
        }
        
        return $pares;
    }

    function devolucion ( callable $funcion, $array){
        $visual=$funcion($array);
        foreach ($visual as $key=> $value) {
            if($value==true){
                echo $array[$key]+"\n";
            }
        }

    }
    $nums=array(1,2,3,4,5,6,7,8,9,10,11,12,13);
    $par="esPar";
    devolucion($par,$nums);

    //ha hecho la funcion de pares simplemente poniendo:
    // function par($v): bool{return $v%2==0}

?>