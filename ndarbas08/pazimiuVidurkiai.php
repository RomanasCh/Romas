<?php
function PazymiuVidurkiai($mas)
{
    $rez = [[], []];
    foreach ($mas as $mokin) {
        $pv = [];

        foreach ($mokin as $dalykai) {
            if (is_array($dalykai)) {
                foreach ($dalykai as $pazim) {
                    $pv[] = array_sum($pazim) / count($pazim);
                }
                $rez[0][] = $mokin['vardas'];
                $rez[1][] = round(array_sum($pv) / count($pv), 2);
            }
        }
    }
    return $rez;
}

$mokininiai = [
    ['vardas' => 'Jonas', 'pazymiai' => [
        'lietuviu' => [4, 8, 6, 7], 'anglu' => [6, 7, 8], 'matematika' => [3, 5, 4]]],
    ['vardas' => 'Ona', 'pazymiai' => [
        'lietuviu' => [10, 9, 10], 'anglu' => [9, 8, 10], 'matematika' => [10, 10, 9, 9]]],
];
echo '<h4>Mokinių pažymių vidurkių skaičiavimas ir geriausio radimas</h4>';
$rz = PazymiuVidurkiai($mokininiai);
echo 'Geriausias vidurkis: ' . ($mmx = max($rz[1])) . ', mokinio: ' . $rz[0][array_search($mmx, $rz[1])];


