<?php

   function kSuma($mas) {
       $s = 0;
       foreach ($mas as $v) {
           if ($v % 2 > 0) {
               break;
           }
           $s += $v;
       }
       return $s;
   }
    $a = [4,2,2,0,1,2,3];


    echo 'Rezultatas = ' . kSuma($a);
?>