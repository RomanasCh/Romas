<?php
    $mas = [-10,0,2,9,-5];

    echo '<h4>Masyvo rikiavimas mažėjimo tvarka</h4>';

    echo 'Išeities masyvas: ' . '<code><em>' . implode(', ',$mas) .  '</em></code>' . '<br>' . '<br>';
    echo 'Masyvas mažėjimo tvarka: ';
    while (count($mas) > 0) {
        $mx = max($mas);
        $id = array_search($mx, $mas, true);
        if ($id === false) {
            echo 'klaida:<br>';
            break;
        }
        echo $mx . ', ';
        array_splice($mas, $id, 1);
    }
    echo '<br>'
?>

