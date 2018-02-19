<?php
    $array = [
                [11, 6],
        11 =>   [1, 4, 10, 50],
        55 =>   [1, 4, 50],
        -5 =>   [1, -6, 3],
                [11, 6]
    ];

    echo '<h4>Masyvo key analizė</h4>';


    foreach ($array as $k =>$mas) {

        $s = 0;
        foreach ($mas as $val) {
            $s += $val;

            $mes = ' - Key`us ne lygus masyvo elemtų sumai: ';
            if ($k === $s) {
                $mes = ' - Key`us lygus masyvo elemtų sumai: ';
            }

        }
        echo $k . $mes . $s . '<br>';

    }

?>

