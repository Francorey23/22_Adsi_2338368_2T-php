<?php
        //1,2,3,4...100
        //sumar los multiplos de 3 = 3,6,9,..99
        $suma = 0;
        $id =0;
        do { 
            echo $id;
            echo "<br>";
            if ($id%5==0) {
                $suma = $suma + $id;
            }
            $id++;
         } while ($id <= 20);

        echo "La suma es: ".$suma;

       

  ?>