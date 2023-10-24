<?php
class Coche
{
    private $matricula;
    private $marca;
    private $carga;

    function __construct(string $matricula, string $marca, string $carga)
    {
        $this->matricula = $matricula;
        $this->marca = $marca;
        $this->carga = $carga;
    }
    function Mostrar()
    {
        return "Coche: $this->matricula, $this->marca, con carga: $this->carga\n";
    }

    function setMatricula(string $matricula)
    {
        $this->matricula = $matricula;
    }

    function setMarca(string $marca)
    {
        $this->marca = $marca;
    }

    function setCarga(string $carga)
    {
        $this->carga = $carga;
    }

    function getMatricula(): string
    {
        return $this->matricula;
    }

    function getMarca()
    {
        return $this->marca;
    }

    function getCarga()
    {
        return $this->carga;
    }
}
?>