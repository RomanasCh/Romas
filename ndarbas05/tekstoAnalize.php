<?php
    $vardas = 'Mindaugas'; // suskaiciuoti balses

    echo '<h4>Balsių paieška tekste. v.1 naudojant <code><em>array_intersect()</em></code></h4>';

    echo 'Išeities tekstas: ' . '<code><em>' . $vardas .  '</em></code>' . '<br>' . '<br>';
    $vMas = str_split(strtoupper($vardas));
    $vow = ['A','E','I','O','U'];
    $result = array_intersect($vMas, $vow);

    echo 'Rastos - ' . count($result) . ' balsės: ' . '<br>' . '<br>';

    foreach ($result as $k => $val) {
        echo 'Balsės pozicija: ' . $k . ', balsė: ' . $val . '.' . '<br>';
    }

    echo '<br><br>';
    echo '<h4>Balsių paieška tekste. v.2 naudojant <code><em>substr_count()</em></code></h4>';

    $c = 0;
    foreach ($vow as $val) {
        $c += substr_count(strtoupper($vardas), $val);
    }
    echo 'Balsiu tekste: ' . $c .'<br>';
?>
