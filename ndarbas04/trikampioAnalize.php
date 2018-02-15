<?php
/* Trikampio analize */
    $a = [[3,4,5],[2,10,8],[5,6,5],[5,5,5]];

    echo '<h4>Trikampio analizė</h4>';

    foreach ($a as $mas) {

        $zinia = ' - Tai ne trikampis';
        $tipas = '';
        $plotas = '';

        if ( ($mas[0]+$mas[1] > $mas[2]) && ($mas[1]+$mas[2] > $mas[0]) && ($mas[0]+$mas[2] > $mas[1]) ) {

           $zinia = ' - Tai yra trikampis, ';
           $tipas = 'įvairiakraštis';
           $p =  ($mas[0] + $mas[1] + $mas[2]) / 2;
           $s = sqrt((float)($p * ($p - $mas[0]) * ($p - $mas[1]) * ($p - $mas[2])));
           $plotas = ' Plotas = ' .  $s;

           if (($mas[0] === $mas[1]) && ($mas[0] === $mas[2])) {
               $tipas = 'lygiakraštis';
           }
           elseif (($mas[0] === $mas[1]) || ($mas[0] === $mas[2]) || ($mas[1] === $mas[2])) {
               $tipas = 'lygiašonis';
           }
       }

       echo (implode(", ", $mas) . $zinia . $tipas . '.' . $plotas . '.'  . '<br>');

    }

?>

