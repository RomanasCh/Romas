<?php
    /* MAX stulpeliu sumos radimas dvimaciame masyve */
    $a = [[3,4,6,4],[5,6,2,1],[1,4,7,4]];
    $il1 = count($a);
    $s = [];

    $max = 0;

    for($i=0; $i < $il1; $i++)
    {
        $il2 = count($a[$i]);

        for ($j=0; $j < $il2; $j++)
        {
            if ($i===0){
                $s[$j] = $a[$i][$j];
            }
            else{
                $s[$j] += $a[$i][$j];
            }

        }
    }
    echo '<h4>MAX stulpelių sumos radimas dvimačiame masyve</h4>';
    echo ('Stulpeliu sumos: ' . implode(", ",$s) . '<br>');
    echo ('MAX stulpeliu suma: ' . max($s));
    $s = NULL;
    $a = NULL;

?>