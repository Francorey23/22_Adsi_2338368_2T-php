<?php

require_once("03_CLASE_LIBRO.PHP");

    class revista extends libro{

        public $edicion;
        public $paginas;

        function __construct($vrcodigo, $vrtitulo, $vrautor, $vredicion, $vrpaginas)
        {
            parent::__construct($vrcodigo, $vrtitulo, $vrautor, $vredicion, $vrpaginas);

            $this->codigo=$vrcodigo;
            $this->titulo=$vrtitulo;
            $this->autor=$vrautor;
            $this->edicion=$vredicion;
            $this->paginas=$vrpaginas;

        }

        public function getedicion(){
        return $this->edicion;
        }
        public function setedicion($vredicion){
         $this->edicion=$vredicion;
        }

        public function getpaginas(){
            return $this->paginas;
            }
            public function setpaginas($vrpaginas){
                $this->paginas=$vrpaginas;
               }






    }


















?>