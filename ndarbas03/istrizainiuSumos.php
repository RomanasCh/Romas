<?php
    $a = [[3,4,6,4],[5,6,2,1],[1,4,7,4],[0,9,7,5]];
    $il = count($a);

    echo '<h4>Įstrižainių sumų radimas dvimačiame masyve</h4>';

    echo 'Dvimatis masyvas: ' . '<br>';
    for($i=0; $i < $il; $i++)
        echo (implode(", ",$a[$i]) . '<br>');
    echo  '<br>';

for ($i = 0, $s = 0; $i < $il; $i++) {
        $s += $a[$i][$i];

        if ($i === $il-1)
            echo 'Pirma suma: ' . $s . '<br>';
    }

    for ($i = $il-1, $j = 0, $s = 0; $i > -1; $i--, $j++) {
        $s += $a[$i][$j];

        if ($i === 0)
            echo 'Antra suma: ' . $s;
    }

    $a = NULL;
    $il = NULL;

?>