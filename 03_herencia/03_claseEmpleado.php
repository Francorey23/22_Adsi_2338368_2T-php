<?php
    require_once("01_clasePersona.php");

    class Empleado extends Cliente{

        private $puesto;

        public function __construct($vrcedula, $vrnombre, $vredad, $vrcredito, $vrpuesto)
        {
            // parent:: Llevo los datos al constructor de la clase persona
            parent::__construct($vrcedula, $vrnombre, $vredad, $vrcredito);
            $this->puesto = $vrpuesto;
        }
    }

?>