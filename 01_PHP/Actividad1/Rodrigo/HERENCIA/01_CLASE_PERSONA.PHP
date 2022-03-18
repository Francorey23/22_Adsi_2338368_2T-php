<?php

class persona{

    public $nombre;
    public $edad;


    public function __construct($vrnombre, $vredad)
    {
        $this->nombre = $vrnombre;
        $this->edad = $vredad;
    }

    public function getpersona(){
        $arraypersona= array (
            'nombre: '=>$this->nombre,
            'edad: '=>$this->edad,

        );
        return $arraypersona;
    }

    












}










?>