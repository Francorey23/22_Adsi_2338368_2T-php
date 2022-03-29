<?php 

$undia = "+ 1 day";
class Netflix{

public $Titulo;
public $Año_creacion;
public $Alquilada;
protected $Fecha_devolucion;



function __construct($vrtitulo,$vrAño_creacion,$vrAlquilada){

$this->Titulo = $vrtitulo;
$this->Año_creacion = $vrAño_creacion;
$this->Alquilada = $vrAlquilada;
$this->Fecha_actual = date("j-m-Y");
if ($this->Alquilada == "si") {
    $this->Fecha_devolucion = date("j-m-Y",strtotime("+  2 day"));
   
      
}

}
public function getTitulo(){
    return $this->Titulo;
}
public function setTitulo($vrTitulo){
    $this->Titulo=$vrTitulo;
}

public function getAño(){
    return $this->año;
}
public function setAño($vraño){
    $this->Titulo=$vraño;
    
}

public function getAlquilada(){
    return $this->alquilada;
}
public function setAlquilada($vrAlquilada){
    $this->Titulo=$vrAlquilada;
}




public function setValor(){
$fecha_devolucion  = new DateTime($this->Fecha_devolucion);
$fecha_actual = new DateTime($this->Fecha_actual);


$intvl = $fecha_devolucion->diff($fecha_actual);

 $intvl->d; 
echo "\n";
if ($this->Alquilada == "no") {
    echo"la pelicula esta disponible ";
}
elseif ($this->Alquilada== "si" and $intvl->d <=5) {
    echo$intvl->d." dias de alquiler";
    echo"<br><br>";
    echo"el valor del alquiler es: $".number_format($intvl->d * 4000,-2,",",".");
}
elseif ($intvl->d >=6) {
    echo$intvl->d." dias de alquiler";
    echo"<br><br>";
    echo "el tiempo limite de alquiler son maximo 5 dias, se exedio el tiempo ";
} 
    
  

    
   
} 

   
}


























    

?>