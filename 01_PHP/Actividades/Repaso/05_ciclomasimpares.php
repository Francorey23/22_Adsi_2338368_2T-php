<?php 

     //1,2,3,4,5..30
     //impares 1,3,5,7..29

     $i = 0;

     while ($i < 30) {
         echo $i++,".<php_eql>";
         // echo $i;
          echo "</br>";
          if ($i%2!=0) {
               echo $i."|";
               //echo "</br>";
          }
     }



?>