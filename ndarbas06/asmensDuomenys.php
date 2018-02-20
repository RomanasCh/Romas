<?php
    function asmensDuomenys($mas) {
        foreach ($mas as $m) {
            foreach ($m as $k => $v) {
               echo '<em>' . ucfirst(strtolower($k)) . '</em>' . ': ' . $v . ', ';
            }
            echo '<br>';
        }
    }
    $duomenys = [
        ['vardas' => 'Jonas', 'pavarde' => 'Jonaitis', 'pastas' => 'Jonas.Jonaitis@mail.com'],
        ['vardas' => 'Petras', 'pavarde' => 'Petraitis', 'pastas' => 'Petras.Petraitis@mail.com'],
    ];

    echo '<h4>Asmens duomenys</h4>';
    asmensDuomenys($duomenys);
?>
