<?php

   function masTeigPrieky($mas) {
       $len = count($mas) -1;
       $shift = 0;
       foreach (array_reverse($mas) as $key=> $val) {
           if ($val <= 0) {
               continue;
           }
           $t = $val;
           unset($mas[$len-$key+$shift]);
           array_unshift($mas, $t);
           $shift++;
       }
        return $mas;
   }

    $a = [4,-2,5,2,0,10,-1,2,-8,3];

    echo '<h4>Masyvo elementu grupavimas</h4>';
    echo 'Pradinis masyvas = ' . implode(", ", $a) . '<br>';
    $a = masTeigPrieky($a);
    echo 'Perdarytas masyvas = ' . implode(", ", $a);
?>

