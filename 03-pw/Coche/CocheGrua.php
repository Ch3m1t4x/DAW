<?php

class CocheGrua extends Coche
{
    private $cocheCargado;

    function __construct(string $matricula, string $marca, string $carga, object $cocheCargado=NULL)
    {
        parent::__construct($matricula, $marca, $carga);
        $this->cocheCargado = $cocheCargado;
    }

    function cargar(object $coche)
    {
        $this->cocheCargado = $coche;
    }

    function descargar()
    {
        $this->cocheCargado = NULL;
    }

    function Mostrar()
    {
        $cadena = '';
        if ($this->cocheCargado) {
            $coche = $this->cocheCargado;
            $cadena = "Coche: $this->matricula, $this->marca con carga: $this->carga";
            $cadena .= "<br>";
            $cadena .= "Lleva Coche: $coche->matricula, $coche->marca con carga: $coche->carga";
        } else {
            $cadena = "Coche: $this->matricula, $this->marca con carga: $this->carga";
            $cadena .= "<br>";
            $cadena .= "No lleva ningún coche";
        }

        return $cadena;
    }
}
?>