<?php
    function arNieko($a) {
        if ($a === NULL) {
            return true;
        }
        return false;
    }

    $q = [NULL, 0, 1234, '1234'];

    echo '<h4>Kintamųjų analizė</h4>';
    foreach ($q as $mas) {

        if (arNieko($mas)) {
            echo '.... - Tuščias<br>';
        }
        else {
            echo  $mas . ' - Netuščias<br>';
        }
    }
?>
