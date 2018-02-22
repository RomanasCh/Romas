<?php
    function elemPoros($mas, $u) {

        $l = count($mas);
        for ($j = 0; $j < $l; $j++) {

           $p = 0;
           if ($u) {
                $p =$j;
            }

            for ($i = $p; $i < $l; $i++) {
                if ($i !== $j) {
                    echo $mas[$j] . ' & ' . $mas[$i] . ", "  ;
                }
            }
        }
    }

    $a = ['Jonas', 'Petras', 'Antanas','Povilas'];
    
    echo '<h4>Masyvo elementų unikalių porų radimas</h4>';
    echo 'Išeities masyvas: ' . implode(", ", $a) . '<br><br>';
    echo 'Porų seka: ';
    elemPoros($a, true);
    echo '<br>';
    echo '<h4>Masyvo elementų vsų įmanomų porų radimas</h4>';
    echo 'Porų seka: ';
    elemPoros($a, false);
    echo '<br>';

?>

