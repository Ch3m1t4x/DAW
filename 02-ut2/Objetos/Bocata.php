<?php

class Bocata {
    public $nombre;
    public $tamaño;
    public $tipoPan;
    public $ingredientes;

    function __construct($n="",$t="",$tp="",$i=""){
        $this->nombre = $n;
        $this->tamaño = $t;
        $this->tipoPan = $tp;
        $this->ingredientes = $i;
    }
    function mostrar(string $container='div', string $tag='p'):void{
        echo "<$container>";
        echo "<$tag>$this->nombre</$tag>";
        echo "<$tag>$this->tamaño</$tag>";
        echo "<$tag>$this->tipoPan</$tag>";
        foreach($this->ingredientes as $i){
            echo "<$tag>$i</$tag>";
        }
        echo "</$container>";
    }

    function save(string $fileName, bool $json = true): void{
        file_put_contents(
            $fileName,
            ($json)?json_encode($this):serialize($this)
        );
    }

    function load(string $fileName, bool $json = true): void{
        $content = file_get_contents($fileName);
        $bocataTmp = null;
        if($json){
            $bocataTmp = json_decode($content);
        }else{
            $bocataTmp = unserialize($content);
        }
        $this->nombre = $bocataTmp->nombre;
        $this->tamano = $bocataTmp->tamano;
        $this->tipoPan = $bocataTmp->tipoPan;
        $this->ingredientes = $bocataTmp->ingredientes;
    }
}

?>