<?php
require 'Mokinys.php';
    $mokiniai = [
        new Mokinys(['lietuviu'=>8, 'matematika' =>9, 'anglu' =>8], '3a','Jonas', 'Jonaitis'),
        new Mokinys(['lietuviu'=>9, 'matematika' =>10, 'anglu' =>10], '2b','Ona', 'Onaitė'),
    ];

    echo '<h4>Objektai, paveldėjimas</h4>';
    foreach ($mokiniai as $mokinys) {
        echo $mokinys->vardas . ' - vidurkis: ' . round($mokinys->vidurkis(), 2) . '<br>';
    }
