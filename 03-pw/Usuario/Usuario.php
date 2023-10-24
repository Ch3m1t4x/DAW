<?php

class User{
    public $nombre;
    private const NUM_PROMOCION = 6;

    function getRachaPromocion():int{
        return static::NUM_PROMOCION;
    }

    /*function geTipo():string{
        return __CLASS__;
    }*/

    function __toString():string{
        return "Soy ".get_class($this).": $this->nombre y necesito {$this->getRachaPromocion()} partidos seguidos";
    }
}


class UserPremium extends User{  
    const NUM_PROMOCION = 3;
}

$j = new User();
$j->nombre = "Paco";
echo $j."\n";

$j = new UserPremium();
$j->nombre = "Laura";
echo $j."\n";
?>