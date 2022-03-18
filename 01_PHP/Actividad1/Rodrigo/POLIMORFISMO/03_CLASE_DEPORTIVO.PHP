<?php

require_once("03_CLASE_ZAPATERIA.PHP");

class deportivo extends zapatos{

public $descripcion;
public $precio;
public $cantidad;


function __construct($vrtalla, $vrmarca, $vrstock, $vrdescripcion, $vrprecio, $vrcantidad)
{
    parent::__construct($vrtalla, $vrmarca, $vrstock, $vrdescripcion, $vrprecio, $vrcantidad);
    $this->descripcion=$vrdescripcion;
    $this->precio=$vrprecio;
    $this->cantidad=$vrcantidad;
}

function getVerinventario()
{
    if ($this->cantidad>$this->stock) {
        $venta="Si se puede realizar la venta";
    }
}

}




?>