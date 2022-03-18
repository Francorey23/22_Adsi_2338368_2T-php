<?php
require_once("01claseLibro.php");
class Revista extends Libro{
   
        protected $Edicion;
        protected $Paginas;
    
        function __construct($vrcodigo,$vrtitulo,$vrautor,$vredicion,$vrpaginas)
        {
            parent::__construct($vrcodigo,$vrtitulo,$vrautor);
            $this->Edicion=$vredicion;
            $this->Paginas=$vrpaginas;
        }
        public function getedicion(){
            return $this->Edicion;
        }public function setedicion($edicion){
            return $this->Edicion=$edicion;
        }
        public function getpaginas(){
            return $this->paginas;
        }public function setpaginas($paginas){
            return $this->paginas=$paginas;
        }
}      
?>