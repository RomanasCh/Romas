<?php

    function skaliarDaugyba($a, $b) {

        $l = count($a);

        if ($l !== count($b)) {
            return NULL;
        }

        $s = 0;

        for ($i =0; $i < $l; $i++) {
//            var_dump($a[$i], $b[$i]);
            $s += $a[$i] * $b[$i];
        }

        return $s;
    }

    $a = [5, 6, 10, 15];
    $b = [8, 5, 3, 25];

    echo '<h4>Vektorių skaliarinė daugyba</h4>';
    echo 'Išeities vektoriai:' . '<br>';
    echo 'A = ' . (implode(", ",$a) . '<br>');
    echo 'B = ' . (implode(", ",$b) . '<br><br>');
    echo 'Rezultatas = ' . skaliarDaugyba($a, $b) . '<br>';

?>

