<?php
require 'vidurkis.php';

    $a = [5, 6, 10, 15];
    $b = [8, 5, 3, 25];

    echo '<h4>Vidurkio skaičiavimas</h4>';
    echo 'Išeities masyvas A: ' . '<code><em>' . implode(', ', $a) .  '</em></code><br>';
    echo 'Išeities masyvas B: ' . '<code><em>' . implode(', ', $b) .  '</em></code><br><br>';
    echo 'Vidurkių skirtumas = ' . (vidurkis($a) - vidurkis($b)) . '<br>';
?>