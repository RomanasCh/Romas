<?php
    function vyrMotPoros($mas) {

        $l = count($mas);
        for ($j = 0; $j < $l; $j++) {

            for ($i = $j; $i < $l; $i++) {
                if ($i !== $j && $mas[$j]['lytis'] !== $mas[$i]['lytis']) {
                    echo $mas[$j]['vardas'] . ' & ' . $mas[$i]['vardas'] . ", <br>"  ;
                }
            }
        }
    }

$zmones = [
    ['vardas' => 'Jonas', 'lytis' => 'V'],
    ['vardas' => 'Ona', 'lytis' => 'M'],
    ['vardas' => 'Petras', 'lytis' => 'V'],
    ['vardas' => 'Marytė', 'lytis' => 'M'],
    ['vardas' => 'Eglė', 'lytis' => 'M']
];  
    echo '<h4>Skirtingų lyčių porų radimas</h4>';
    echo 'Išeities masyvas: ';
    foreach ($zmones as $mas) {
        echo implode(" - ", $mas) . ', ';
    }

    echo '<br><br>';
    echo 'Porų seka: <br>';
    vyrMotPoros($zmones);
    echo '<br>';

?>
