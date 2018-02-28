<?php
require 'Radar.php';

$duomenys = [
    new Radar(new \DateTime('2017-12-04 10:12'), 'ABC123', 10230, 900),
    new Radar(new \DateTime('2018-01-20 20:12'), 'QBC123', 50230, 4500),
    new Radar(new \DateTime('2017-11-14 12:02'), 'ZBC123', 100230, 9000),
    new Radar(new \DateTime('2018-02-17 10:12'), 'FBC123', 200230, 18000),
];

function masRikiuokLaika ($a, $b){
    return ($a->date->getTimestamp() < $b->date->getTimestamp()) ? -1 : 1;
}
function masRikiuokGreiti ($a, $b){
    return ($a->duokGreiti() < $b->duokGreiti()) ? 1 : -1;
}

usort($duomenys, 'masRikiuokGreiti');
echo '<h4>Duomenų rikiavimas pagal greitį</h4>';
foreach ($duomenys as $irasas) {
    echo $irasas->date->format('Y-M-D') . ', ' . $irasas->number . ', ' . $irasas->distance . ', ' . $irasas->time . ', ' . $irasas->duokGreiti() . '<br>';
}
