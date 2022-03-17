<?php
class electrodomestico{
    public $marca;
    public const iva=0.19;   

    function __construct($vriva,$vrmarca)
    {
        $this->iva=$vriva;
        $this->marca=$vrmarca;
    }
}
?>