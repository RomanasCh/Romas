<?php
    $a = [1,2,3,4,5,6,7,8,9,10];
    $il1 = count($a);

    echo '<h4>Faktorialo skaičiavimas</h4>';
    foreach ($a as &$val) {

        $f = 1;

        echo 'Skaičiaus: ' . $val;
        do {
            $f *=  $val--;
        } while($val !== 0);

        echo ' faktorialas = ' . $f . '<br>';
    }
?>
