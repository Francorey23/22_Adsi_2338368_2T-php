<?

class Partidos extends Torneo {

private $Partidosganados;
private $Estado;

public function __construct($vrnombreEquipo,$vrnumeroIntegrantes,$vrPartidosganados, $vrEstado)
{

parent::__construct($vrnombreEquipo,$vrnumeroIntegrantes,$vrPartidosganados, $vrEstado);
$this->Partidosganados=$vrPartidosganados;
$this->Estado=$vrEstado;

}


}

?> 