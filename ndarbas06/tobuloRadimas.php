<?php
    function dalikliuRadimas($s) {
        $dal =[];
        for ($i = 1; $i < $s; $i++) {
            if ($s % $i === 0) {
                    $dal[] = $i;

            }
        }
        return $dal;
    }

    function tobulaSkaicius($s) {

        $dal = dalikliuRadimas($s);
          return  array_sum($dal) === $s;
    }

    echo '<h4>Tobulo skaičiaus radimas iki 1000</h4>';

    echo 'Tobulų skaičių eilė: ';
    for ($i = 1; $i < 1001; $i++) {
        if (tobulaSkaicius($i)) {
            echo $i . ', ';
        }
    }

    echo '<br>';
?>
