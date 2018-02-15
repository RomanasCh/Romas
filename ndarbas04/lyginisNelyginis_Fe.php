<?php
/* Lyginio, nelyginio radimas (foreach)*/
    $a = [[3,4,6,4],[5,6,2,1],[1,4,7,4]];

    echo '<h4>Lyginio, nelyginio radimas su <code><em>foreach()</em></code></h4>';
    echo 'Dvimatis masyvas pries modifikacijos : ' . '<br>';
    foreach ($a as $mas) {
        echo(implode(", ", $mas) . '<br>');
    }
    echo  '<br>';

    foreach ($a as &$mas) {
        foreach ($mas as &$var) {

            if ($var % 2 !== 0 ) {
                $var++;
            }
            else {
                $var--;
            }
        }
    }

    unset($var);

    echo 'Dvimatis masyvas po modifikacijos : ' . '<br>';
    foreach ($a as $mas) {
        echo(implode(", ", $mas) . '<br>');
    }
    echo  '<br>';

?>