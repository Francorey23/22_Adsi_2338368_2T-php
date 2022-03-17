<?php
   require_once("01_claseJugador.php");

class Futbol extends Jugador{

   

 function __construct($vrnombre, $vrcelular, $vremail, $vrestatura,$vredad)
 {
     
 parent::__construct($vrnombre, $vrcelular, $vremail);
 $this->estatura-$vrestatura;  
 $this->edad-$vredad;  
 
 }



public function getestatura(){
    $this->estatura;

}
public function getdatospersona(){
    $arrayJugador=array(
        'nombre:'=>$this->nombre,
        'celular:'=>$this->celular,
        'email:'=>$this->email,
        'estatura:'=>$this->estatura,
        'edad:'=>$this->edad,
    );
    return $arrayJugador;
}


}


?>