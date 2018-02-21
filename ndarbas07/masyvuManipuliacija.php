<?php
$a = [
    ['vardas' => 'Jonas', 'pavarde' => 'Jonaitis', 'akodas' => '32345676789'],
    ['vardas' => 'Petras', 'pavarde' => 'Petraitis', 'akodas' => '32345757689'],
];
$b = [
    ['vardas' => 'Antanas', 'pavarde' => 'Antanaitis', 'akodas' => '39356676789'],
    ['vardas' => 'Povilas', 'pavarde' => 'Povilaitis', 'akodas' => '32345757689'],
];

    echo '<h4>Manipuliacija masyvo elementais</h4>';
    echo 'Išeities masyvai:';
    var_dump($a,$b);

    echo 'Pridėti elementai masyvo gale:';
    foreach ($b as $mas) {
        $a[] = $mas;
    }
    var_dump($a);

    echo 'Išmesti elementai masyvo gale:';
    array_splice( $a, 2);
    var_dump($a);

    echo 'Pridėti elementai masyvo priekyje:';
    foreach ($b as $mas) {
        array_unshift($a, $mas);
    }
    var_dump($a);
?>
