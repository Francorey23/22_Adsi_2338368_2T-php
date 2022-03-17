<?php
   require_once("01_claseJugador.php");

class voleibol extends Jugador{
 public $puesto_campo;
   

 function __construct($vrnombre, $vrcelular, $vremail, $vrp_campo)
 {
     
 parent::__construct($vrnombre, $vrcelular, $vremail);
 $this->puesto_campo -$vrp_campo;  
 
 }



public function getdatospersona(){
    $arrayJugador=array(
        'nombre:'=>$this->nombre,
        'celular:'=>$this->celular,
        'email:'=>$this->email,
        'puesto_campo:'=>$this->puesto_campo,
        
    );
    return $arrayJugador;
}


}


?>