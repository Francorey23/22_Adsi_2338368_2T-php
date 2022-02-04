<?php

    /*Digitar los nombres completos en imput
      en un segundo input solicitar un numero
      si es 1 convertir los nombres a mayusculas
      si es 2 convertir los nombres a minuscula
      si es 3 convertir los nombres a Tipo oracion *
      */

    if(isser($_post["btn_enviar"])) {   
        $nombres = $_post["nombres"];
        $nombres = $_post["numero"];

        #procedimiento
        switch ($numero) {    
            case 1:
               
                $nombre  = strtoupper($nombre);
                echo $nombre;
                break;

            case2: 
                $nombre  = strtoupper($nombre);
                echo $nombre;
                break;

            case3: 
                $nombre  = ucfirst($nombre);
                echo $nombre;
                break;

                case4: 
                    $nombre =ucwords($nombre);
                    echo $nombre;
                    break;    