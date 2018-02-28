<?php
    function vyrTikMotGrupe($mas) {

        $l = count($mas);
        $z = [[],[]];

        foreach ($mas as $zmog) {

            if ($zmog['lytis'] !== 'V') {
                $z[0][] = $zmog['vardas'];
            }
            else {
                $z[1][] = $zmog['vardas'];

            }
        }

        return $z;
    }

$zmones = [
    ['vardas' => 'Jonas', 'lytis' => 'V'],
    ['vardas' => 'Ona', 'lytis' => 'M'],
    ['vardas' => 'Petras', 'lytis' => 'V'],
    ['vardas' => 'Marytė', 'lytis' => 'M'],
    ['vardas' => 'Eglė', 'lytis' => 'M']
];  
    echo '<h4>Skirtingų lyčių grupių radimas</h4>';
    echo 'Išeities masyvas: ';
    foreach ($zmones as $mas) {
        echo implode(" - ", $mas) . ', ';
    }
    echo '<br><br>';
    echo 'Grupių seka: <br>';
    $grup = vyrTikMotGrupe($zmones);
    foreach ($grup[0] as $mot) {
        echo $mot . ' & ';
    }
    echo '<br>';
    foreach ($grup[1] as $vyr) {
        echo $vyr . ' & ';
    }
    echo '<br>';

?>
