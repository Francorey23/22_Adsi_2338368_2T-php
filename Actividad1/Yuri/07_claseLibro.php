<?php 

class Libro {
     
    /*Atributos*/
    public int $codigo;
    public String $titulo;
    public String $autor;
    
     
    /*Constructores*/
     
    public function __construct($vrcodigo,$vrtitulo,$vrautor){ 

        $this->codigo=$vrcodigo; 
        $this->titulo=$vrtitulo; 
        $this->autor=$vrautor; 
    
    } 
     //atributo public
    
        public function getCodigo(){
            return $this->codigo;
        } 
        public function getTitulo(){
            return $this->titulo;
        } 
        public function getAutor(){
            return $this->autor;    
       } 
       public function getDato()
       { 
          $arrayDato = array(
               'Codigo: '=> $this -> codigo,
               'Titulo: '=> $this -> titulo,
               'Autor: '=> $this ->autor,
           );
           return $arrayDato;
           
       }   
    }



    require_once("07_claseLibro.php");
    
    class revista extends Libro{ 
           
        public $edicion;
        public int $numPaginas;
    
        //asignar los atributos
        public function __construct($vrcodigo,$vrtitulo,$vrautor,$vredicion,$vrnumPaginas){
    
            
            parent::__construct($vrcodigo,$vrtitulo,$vrautor,$vrnumPaginas);
            $this->edicion = $vredicion;
            $this->numPaginas = $vrnumPaginas;
    
        } 
        
    
        public function getEdicion(){
            return $this->edicion;
        }
    
        public function setEdicion($vredicion){
            $this->edicion = $vredicion;
        }
    
       public function getDatos()
       { 
        $arrayDatos = array(
            'Codigo: '=> $this -> codigo,
            'Titulo: '=> $this -> titulo,
            'Autor: '=> $this ->autor,
        );
        return $arrayDatos;
        
    }   
           } 
           ?>
    
