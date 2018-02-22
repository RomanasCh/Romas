<?php
    function kinTipas($var) {
        switch (gettype($var)) {
            case 'integer':
                $p = "sveikas skaičius";
                break;
              case 'double':
                $p = "skaičius su plaukojiančiu kableliu";
                break;
            case 'boolean':
                $p = "loginis skaičius";
                break;
            case 'string':
                $p = "tekstinis kintamasis";
                break;
            case 'array':
                $p = "masyvas";
                break;
            default:
                $p = "nenustatytas tipas";

        }
        return $p;
    }

    $a = [10, 3.14, true, 'namas', [1,2,3], NULL];

    echo '<h4>Kintamųjų tipai</h4>';
    foreach ($a as $v) {
        echo kinTipas($v) . '<br>';
    }

    $b = [1,2,3,4,5,6,7,8,9,10];
    array_rand ( $b, 10);
    var_dump($b);
?>