<?php
require_once("06_classElectrodomestico.php");
class lavadora1 extends electrodomestico{  }
    class lavadora2 extends electrodomestico{
    private $cantidad;
    private $precio;

    public function __construct($vrmarca,$vriva,$vrcantidad,$vrprecio)
    {
        parent::__construct($vrmarca,$vriva);
        $this->cantidad=$vrcantidad;
        $this->precio=$vrprecio;
    }
    public function getcantidad(){
        return $this->cantidad;
    }
    public function getprecio(){
        return $this->precio;
    }

    function venta()
    {
        $venta=(($this->cantidad*$this->iva)+$this->cantidad)*$this->precio;
        return$venta;
    }
}
?>