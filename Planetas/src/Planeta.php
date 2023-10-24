<?php

class Planeta
{
    public $nombre;
    public $masa;
    public $diametro;
    public $distancia;

    function __construct(string $nombre='', string $masa='0', string $diametro='0', string $distancia='0')
    {
        $this->nombre = $nombre;
        $this->masa = $masa;
        $this->diametro = $diametro;
        $this->distancia = $distancia;
    }

    function __toString()
    {
        return "$this->nombre tiene una masa de $this->masa kg, $this->diametro km de diametro y hay $this->distancia km de distancia con el sol";
    }
    public function toEtiqueta($tag = 'span', $container = 'div'): string
    {
        $html='';
        $html.= "<$container>";
        $html.= "<$tag>Nombre:" . $this->nombre . "</$tag>";
        $html.= "<$tag>Masa:" . $this->masa . "</$tag>";
        $html.= "<$tag>Diametro:" . $this->diametro . "</$tag>";
        $html.= "<$tag>Distancia al sol: " . $this->distancia . "</$tag>";
        $html.= "</$container>";
        return $html;
    }

    /*public static function crear()
    {
        echo "<form action='' method='post'>";
        echo "Nombre: <input type='text' name='nombre_crear'>";
        echo "<br>";
        echo "Masa: <input type='number' name='masa_crear'>";
        echo "<br>";
        echo "Diametro: <input type='number' name='diametro_crear'>";
        echo "<br>";
        echo "Distancia al sol: <input type='number' name='distancia_crear'>";
        echo "<br>";
        echo "<input type='submit' value='Crear'>";
    }

    public function editar()
    {
        echo "<form action='' method='post'>";
        echo "Nombre: <input type='text' name='nombre' value= '$this->nombre'>";
        echo "<br>";
        echo "Masa: <input type='number' name='masa' value= '$this->masa'>";
        echo "<br>";
        echo "Diametro: <input type='number' name='diametro' value= '$this->diametro'>";
        echo "<br>";
        echo "Distancia al sol: <input type='number' name='distancia' value='$this->distancia'>";
        echo "<br>";
        echo "<input type='submit' value='Editar'>";
    }

    public function mostrarTabla(): void
    {
        $tag = 'tr';
        $minitag = 'td';
        echo "<table>";
        echo "<$tag>" .
            "<$minitag> Nombre:</$minitag>"
            . "<$minitag>" . $this->nombre . "</$minitag>"
            . "</$tag>";

        echo "<$tag>" .
            "<$minitag> Masa:</$minitag>"
            . "<$minitag>" . $this->masa . "</$minitag>"
            . "</$tag>";

        echo "<$tag>" .
            "<$minitag> Diametro:</$minitag>"
            . "<$minitag>" . $this->diametro . "</$minitag>"
            . "</$tag>";

        echo "<$tag>" .
            "<$minitag> Distancia al sol:</$minitag>"
            . "<$minitag>" . $this->distancia . "</$minitag>"
            . "</$tag>";

        echo "</table>";
    }*/

    //Esto ahora mismo no se porque es
    function toOption(string $selected = ''): string{
        $sel =($this->nombre ==$selected)?" selected":"";
        return "<option value='$this->nombre' $sel>$this->nombre</option>";
    }

    function toFila():string{
        return "<tr><td><a href='?nombre=$this->nombre'>$this->nombre</a></td><td>$this->distancia</td><td>$this->diametro</td><td>$this->masa</td></tr>";
    }

    function toEdit():string{
        return "<form action='' method='post'>
            <input type='text' name='nombre' value='$this->nombre'><br>
            <input type='text' name='distancia' value='$this->distancia'><br>
            <input type='text' name='diametro' value='$this->diametro'><br>
            <input type='text' name='masa' value='$this->masa'><br>
            <input type='submit' name='guardar' value='Guardar'>
        </form>";
    }
}

?>