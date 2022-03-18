<?php

class zapatos{ 

    public  int $Talla;
    public  string $Marca;
    public  int $Stock;

//constructor 

public function __construct($vrTalla,$vrMarca,$vrStock){
    $this->Talla=$vrTalla;
    $this->Marca=$vrMarca;
    $this->Stock=$vrStock;
} 
public function getTalla(){ 
   return $this->Talla;
} 
public function getMarca(){ 
    return $this->Marca;
 }
 public function getStock(){ 
    return $this->Stock;
 }


//metodos
public function getVerInventario()
{ 
    $arrayVerInventario = array(
        'talla: '=> $this -> Talla,
        'Marca: '=> $this -> Marca,
        'stock: '=> $this ->Stock,
    );
    return $arrayVerInventario;
    
} 
  }
?>