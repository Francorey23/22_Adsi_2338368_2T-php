<?php  

    if (isset($_POST["btn_enviar"])) {
        
        $nombres = $_POST["nombres"];
        $horas_trabajadas = $_POST["horas_trabajadas"];
        $valor_hora = $_POST["valor_hora"];
        $horas_extras = $horas_trabajadas-120;

        if ($horas_trabajadas < 120) {
            $valor_hora_total = $horas_trabajadas*$valor_hora;
            echo "</h2>"."El empleado.. ".$nombres." tiene un pago de: ". $valor_hora_total . "</h2>";
        }elseif ($horas_trabajadas >= 120 AND $horas_trabajadas <= 136) {
            $valor_hora_total = (($valor_hora*120) + ($horas_extras*($valor_hora*2))); 
            echo "<h2>"."El empleado.. ".$nombres." tiene un pago de: ".$valor_hora_total."</h2>";
        }elseif ($horas_trabajadas > 136) {
            $horas_totales = ($horas_trabajadas-136);
            $valor_hora_total = (($valor_hora * 120) + ($valor_hora*2)*16)+($horas_totales*($valor_hora*3)); 
            echo "<h2>"."El empleado.. " . $nombres . " tiene un pago de: " . $valor_hora_total."</h2>";
        }
        


    }

?>