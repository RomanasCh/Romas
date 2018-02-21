<?php
    function elemPoros($mas) {

        $l = count($mas);
        for ($j = 0; $j < $l; $j++) {
            for ($i = $j; $i < $l; $i++) {
                if ($i !== $j) {
                    echo $mas[$j] . ' & ' . $mas[$i] . ", "  ;
                }
            }
        }
    }

    $a = ['Jonas', 'Petras', 'Antanas','Povilas'];
    
    echo '<h4>Masyvo elementų unikalių porų radimas</h4>';
    echo 'Porų seka: ';
    elemPoros($a);
    echo '<br>';
?>

