<?php

class peluqueria{

    public $id;
    public $nombre;
    public $direccion;
    public $telefono;
    public $hora_inicio;
    public $hora_cierre;
    public $valor_corte;
    public $servicio;


    public function __construct($vrid, $vrnombre, $vrdireccion, $vrtelefono, $vrhora_inicio, $vrhora_cierre, $vrvalor_corte, $vrservicio)
    {
        $this->id=$vrid;
        $this->nombre=$vrnombre;
        $this->direccion=$vrdireccion;
        $this->telefono=$vrtelefono;
        $this->hora_inicio=$vrhora_inicio;
        $this->hora_cierre=$vrhora_cierre;
        $this->valor_corte=$vrvalor_corte;
        $this->servicio=$vrservicio;

    }

    public function getpeluqueria(){
        $arraypeluqueria= array (
            'id: '=>$this->id,
            'id: '=>$this->nombre,
            'id: '=>$this->direccion,
            'id: '=>$this->telefono,
            'id: '=>$this->hora_inicio,
            'id: '=>$this->hora_cierre,
            'id: '=>$this->valor_corte,
            'id: '=>$this->servicio,

        );
        return $arraypeluqueria;
    }
    public function getagendarcita(){
        $arrayagendarcita = array(
            'servicio: '=>$this->servicio,
            'valor corte: '=>$this->valor_corte,

        );
        $arrayagendarcita;
    }

    public function getservicio(){
        return $this->servicio;
    }
    public function setservicio($vrservicio){
        $this->servicio=$vrservicio;

    }
    public function getvalor_corte(){
        return $this->valor_corte;
    }
    public function setvalor_corte($vrvalor_corte){
        $this->valor_corte=$vrvalor_corte;

    }






}










?>