<?php 

class deportivos extends zapatos{

    public string $descripcion;
    public int $precio;
    public int $cantidad;
    //constructor 

public function __construct($vrTalla,$vrMarca,$vrStock,$vrdescripcion,$vrprecio,$vrcantidad){ 
     
    parent::__construct($vrTalla,$vrMarca,$vrStock);
    $this->descripcion = $vrdescripcion;
    $this->precio = $vrprecio;
    $this->cantidad = $vrcantidad;
    $this->Stock=$vrStock;
} 
public function getDescripcion(){ 
   return $this->descripcion;
} 
public function getPrecio(){ 
    return $this->precio;
 }
 public function getCantidad(){ 
    return $this->cantidad;
 } 
 public function getVerInventario(){ 
 if ($this->cantidad > $this->Stock ){
     $this->cantidad > $this->stock;
    echo "la venta no se puede realizar";
 {
      $arrayDatos = array(
'descripcion: '=> $this -> descripcion,
    'Precio: '=> $this -> precio,
    'Cantidad: '=> $this ->cantidad, 
);
return $arrayDatos;

}  

    } 
     } 
      }

?>