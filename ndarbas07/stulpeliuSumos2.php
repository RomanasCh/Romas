<?php

    function stulpSumos($mas) {
        $s = [];
        $mx = 0;
        foreach ($mas as $m) {
            $l = max(array_keys($m));
            if ($l > $mx) {
                $mx = $l;
            }
        }

        $mx++;
        for ($i = 0; $i < $mx; $i++) {
            $s[] = array_sum(array_column($mas, $i));
        }
        return $s;
    }

    $a = [
        [1, 3, 4],
        [2, 5],
        [2 => 3, 5 => 8],
        [1, 1, 5 => 1]];

    echo '<h4>Daugiamačio masyvo stulpelių sumų skaičiavimas</h4>';
    echo 'Išeities masyvas: ';
    var_dump($a);
    $sum = stulpSumos($a);
    echo 'Stulpelių sumų seka: ' . implode(", ",$sum) . '<br>';
    echo 'Didžiausia suma = ' . max($sum) . '<br>';

?>

