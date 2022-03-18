<?php

class libro{

    public $codigo;
    public $titulo;
    public $autor;

    public function __construct($vrcodigo, $vrtitulo, $vrautor)
    {
        $this->codigo=$vrcodigo;
        $this->titulo=$vrtitulo;
        $this->autor=$vrautor;

    }

    public function getlibro(){
        $arraylibro= array (

            'codigo: '=>$this->codigo,
            'titulo: '=>$this->titulo,
            'autor: '=>$this->autor,
        );
        return $arraylibro;
    }


    public function getcodigo(){
        return $this->codigo;
    }

    public function gettitulo(){
        return $this->titulo;
    }

    public function getautor(){
        return $this->autor;
    }













}








?>