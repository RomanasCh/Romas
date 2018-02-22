<?php
require 'zmogausAmzius.php';
require 'duomenysZm..php';

    echo '<h4>Asmens amžius</h4>';
    foreach ($zmones as $mas) {
        echo $mas['vardas'] . ' - ' . zmogAmzius($mas) . ' m. <br>';
    }

?>
