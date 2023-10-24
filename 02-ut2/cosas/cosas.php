<?php

function esPar($num)
{
    return $num%2==0;
}

echo esPar(2);
echo "<br>";
echo esPar(3)?"Sí":"No";
echo "<br>";

function saluda(string $nombre= "mundo!"): void {
    echo "Hola $nombre!";
}

saluda("Chema");
echo "<br>";
saluda();
echo "<br>";
?>