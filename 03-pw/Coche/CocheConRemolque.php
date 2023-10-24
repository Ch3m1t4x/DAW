<?php

final class CocheConRemolque extends Coche
{
    private $capacidadRemoque;

    function __construct(string $matricula, string $marca, string $carga, string $capacidadRemoque)
    {
        parent::__construct($matricula,$marca,$carga);
        $this->capacidadRemoque = $capacidadRemoque;
    }

    function getCapacidad(string $name)
    {
        return $this->capacidadRemoque;
    }

    function setCapacidad(string $capacidadRemoque)
    {
        $this->capacidadRemoque = $capacidadRemoque;
    }

    function Mostrar()
    {
        return "Coche: $this->matricula, $this->marca con una carga: $this->carga y remolque de $this->capacidadRemoque";
    }

}


?>