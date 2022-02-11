<?php

    class Cliente{


        //Atributos public, private, protected, static
        // Abstracción - Encapsulamiento

        protected $strNombre;
        private $strEmail;
        public $intEdad;
        private $intclave;
        protected $fechaRegistro; 
        static $strEstado = "Activado";


        //Metodos

        function __construct($nombre, $email, $edad){
            $this->strNombre        = $nombre;
            $this->strEmail         = $email;
            $this->intEdad          = $edad;
            $this->intclave         = rand();
            $this->fechaRegistro    = date('Y-m-d');
        }

        public function getNombre(){
            return $this->strNombre;
        }

        public function getEmail()
        {
            return $this->strEmail;
        }

        public function getEdad()
        {
            return $this->intEdad;
        }

        public function setNombre($nombre){
            $this->strNombre = $nombre;
        }

        public function getDatosPersonales(){
            //Variable
            $datos = "
            <h2> DATOS DE USUARIO </H2>
            Nombre: {$this->strNombre}<br>
            Email: {$this->strEmail}<br>
            Edad: {$this->intEdad}<br>
            Contraseña: {$this->intclave}<br>
            Fecha: {$this->fechaRegistro}<br>
            ";
            return $datos;
        }
    }

?>