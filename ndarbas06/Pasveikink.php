<?php
    function vardasPavarde($mas) {
         return $mas['vardas'] . ' ' . $mas['pavarde'];
    }

    function paSveikink($mas) {
        foreach ($mas as $m) {

            echo 'Sveikas ' . vardasPavarde($m) . '!' . '<br>';
        }
    }

    $duomenys = [
        ['vardas' => 'Jonas', 'pavarde' => 'Jonaitis', 'pastas' => 'Jonas.Jonaitis@mail.com'],
        ['vardas' => 'Petras', 'pavarde' => 'Petraitis', 'pastas' => 'Petras.Petraitis@mail.com'],
    ];

    echo '<h4>Pasveikinimas</h4>';

    paSveikink($duomenys);
?>

