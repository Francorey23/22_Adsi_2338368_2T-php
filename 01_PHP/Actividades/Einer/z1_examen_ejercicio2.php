<?php

    print("LIQUIDACION ")."<P>";
    $nombre = $_REQUEST["nombre"];
    $cargo = $_REQUEST["cargo"];
    $horas = $_REQUEST["horas"];

    echo " NOMBRE: ".$nombre."<p>";
    echo " CARGO: ".$cargo."<p>";

    $horas_extra = $horas - 160;
    if( $horas <= 160){
        echo 'usted no tiene horas extra';
        }
        else {
            if($horas > 160)
            
            echo 'É : ' . $horas_extra . 'es Mayor';
        }
        
      
      

    
   
    print("<P>");
    print("<P>");
    echo '<a href="http://localhost/ADSI2338368%20DAYANA_EINER/z1_formulario_ejercicio2.php"><input type="submit" name="btn_VOLVER" value="VOLVER"></a>';
    print("<P>");
    echo '<a href="http://localhost/ADSI2338368%20DAYANA_EINER/MENU.php"><input type="submit" name="btn_MENU" value="MENU"></a>';

?>