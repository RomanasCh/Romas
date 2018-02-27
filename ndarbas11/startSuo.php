<?php
require 'Suo.php';

$sunys = [
    new Suo('rudas', 'V', 15, 35),
    new Suo('juodas', 'M', 24, 50),
];

echo '<h4>Objektas šuo</h4>';

foreach ($sunys as $suo) {
    echo 'Šuo: ' . $suo->getInfo() . '<br>';
}
