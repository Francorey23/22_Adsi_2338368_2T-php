<?php
class Electrodomestico{
    public $marca;
    static $iva=0.10;   

    function __construct($vrmarca)
    {
     $this->marca=$vrmarca;
    }

}
?>