<?php
    function dalikliuRadimas($s) {
        $dal[] = NULL;
        for ($i = 1; $i < $s; $i++) {
            if ($s % $i === 0) {
                if ($dal[0] === NULL) {
                    $dal[0] = $i;
                }
                else {
                    $dal[] = $i;
                }
            }
        }
        return $dal;
    }

    function tobulaSkaicius($s) {

        $dal = dalikliuRadimas($s);
        if (array_sum($dal) === $s) {
          return $dal;
        }
        else {
            return NULL;
        }
    }

    echo '<h4>Tobulo skaičiaus radimas iki 1000</h4>';

    echo 'Tobulų skaičių eilė: ';
    for ($i = 1; $i < 1001; $i++) {
        if (count(tobulaSkaicius($i)) > 0) {
            echo $i . ', ';
        }
    }

    echo '<br>';
?>
