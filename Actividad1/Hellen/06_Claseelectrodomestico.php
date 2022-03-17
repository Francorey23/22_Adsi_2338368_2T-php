<?php


class Electrodomestico{
    public $Marca;
    static $IVA= 0.19;   

    function __construct ($vrMarca)
    {
     $this->Marca=$vrMarca;
     Electrodomestico::$IVA = $vrIVA;
    }


}
?>