<?php

    function ismeskIrasus($m, $f) {
        foreach ($m as $k => $mas) {

            if ($k[0] === $f) {
                unset($m[$k]);
            }
        }

        return $m;
    }
$b = [

    '49001010123' => [
        'vardas' => 'Jonas',
        'pavarde' => 'Jonaitis',
        'gdata' => '1990-01-01'
    ],

    '37502055584' => [
        'vardas' => 'Petras',
        'pavarde' => 'Petraitis',
        'gdata' => '1985-02-05'
    ],

    '32345757689' => [
        'vardas' => 'Antanas',
        'pavarde' => 'Antanaitis',
        'gdata' => '1985-02-05'
    ],
    '39356676700' => [
        'vardas' => 'Povilas',
        'pavarde' => 'Povilaitis',
        'gdata' => '1985-02-05'
    ],

];
    echo '<h4>Masyvo elementų išmetimas</h4>';
    echo 'Išeities masyvas:';
    var_dump($b);
    $b = ismeskIrasus($b, '3');
    echo 'Masyvas po elementų išmetimo:';
    var_dump($b);

?>
