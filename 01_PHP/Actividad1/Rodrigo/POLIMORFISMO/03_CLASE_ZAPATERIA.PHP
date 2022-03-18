<?php

class zapatos{

public $talla;
public $marca;
public $stock;

public function __construct($vrtalla, $vrmarca, $vrstock)
{
    $this->talla=$vrtalla;
    $this->marca=$vrmarca;
    $this->stock=$vrstock;
}

public function getVerinventario(){
    $arrayzapatos= array (
        'talla: '=>$this->talla,
        'marca: '=>$this->marca,
        'stock: '=>$this->stock,
    );
    return $arrayzapatos;
}





}



?>