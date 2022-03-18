<?php

require_once("02claseUsuario.php");
class Cliente extends Empleado{
    private $puesto;

    public function __construct($vrnombre, $vrcelular, $vrcargo, $vrsueldo, $vraux_transporte)
    {
        parent::__construct($vrnombre, $vrcelular, $vrcargo, $vrsueldo, $vraux_transporte);
        $this->aux_transporte=$vraux_transporte;
   
    }
    public function getaux_transporte(){
        return $this->aux_transpote;
    }









}


?>

