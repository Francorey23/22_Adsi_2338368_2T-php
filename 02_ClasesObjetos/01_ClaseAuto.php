
<?php

class Vehiculo
{
    //Atributos
    protected $placa;
    private $marca;
    public $modelo;
    public $kilometraje;
    public $velocidad;
    public $tiempo;

    // velocidad 70 km tiempo 30m Cual es la distancia recorrida??
    //public $fecha_registro = date('Y-m-d');
    
    //Constructor

    public function __construct($vrplaca, $vrmarca, $vrmodelo, $vrkilometraje, $vrvelocidad, $vrtiempo)
    {
        $this->placa = $vrplaca;
        $this->marca = $vrmarca;
        $this->modelo = $vrmodelo;
        $this->kilometraje = $vrkilometraje;
        $this->fecha_registro = date('Y-m-d');
        $this->velocidad = $vrvelocidad;
        $this->tiempo = $vrtiempo;
    }

    public function getVehiculo()
    {
        $arrayVehiculo = array(
            'Placa: ' => $this->placa,
            'Marca: ' => $this->marca,
            'Fecha registro:' => $this->fecha_registro,

        );
        return $arrayVehiculo;
    }

    public function calculo_distancia(){
        $vr_distancia = $this->velocidad*$this->tiempo;
        return $vr_distancia;

    }

    //metodos getters y setters

    //getter mostrar la informacion del atributo marca
    public function getMarca(){
        return $this->marca;
    }
    //setter asignar la informacion al atributo marca
    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getPlaca(){
        return $this->placa;
    }

    public function setPlaca($placa){
        $this->placa = $placa;
    }

}






?>