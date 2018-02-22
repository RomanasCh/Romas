<?php

   function masTeig($mas) {
       $l = count($mas);
       $l--;
       $i = 0;
       foreach (array_reverse($mas) as $k=> $v) {
//           var_dump($k,$mas[$l-$k+$i], $v);
           if ($v <= 0) {
               continue;
           }
           $t = $v;
           unset($mas[$l-$k+$i]);
           array_unshift($mas, $t);
           $i++;
       }
        return $mas;
   }

    $a = [4,-2,5,2,0,10,-1,2,-8,3];

    echo '<h4>Masyvo elementu grupavimas</h4>';
    echo 'Pradinis masyvas = ' . implode(", ", $a) . '<br>';
    $a = masTeig($a);
    echo 'Perdarytas masyvas = ' . implode(", ", $a);
?>

