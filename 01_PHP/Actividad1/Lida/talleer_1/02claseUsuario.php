<?php
require_once("01claseEmpleado.php");

class Usuario extends Empleado{

    public $nombre;
    public $celular;


    
    public function __construct($vrnombre, $vrcelular, $vrcargo, $vrsueldo, $vraux_transporte){ 
        parent::__construct($vrnombre,$vrcelular, $vrcargo, $vrsueldo, $vraux_transporte);
        $this->nombre = $vrnombre;
        $this->celular = $vrcelular;
    }
}
?>    
