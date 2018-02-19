<?php
    $vardas = 'Mindaugas'; // suskaiciuoti balses

    echo '<h4>Balsių paieška tekste</h4>';

    echo 'Išeities tekstas: ' . '<code><em>' . $vardas .  '</em></code>' . '<br>' . '<br>';
    $vMas = str_split(strtoupper($vardas));
    $vow = ['A','E','I','O','U'];
    $result = array_intersect($vMas, $vow);

    echo 'Rastos - ' . count($result) . ' balsės: ' . '<br>' . '<br>';

    foreach ($result as $k => $val) {
        echo 'Balsės pozicija: ' . $k . ', balsė: ' . $val . '.' . '<br>';
    }

?>
