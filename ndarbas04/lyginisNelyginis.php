<?php
/* Lyginio, nelyginio radimas */
    $a = [[3,4,6,4],[5,6,2,1],[1,4,7,4]];
    $il1 = count($a);

    echo '<h4>Lyginio, nelyginio radimas</h4>';
    echo 'Dvimatis masyvas pries modifikacijos : ' . '<br>';
    for($i=0; $i < $il1; $i++)
        echo (implode(", ",$a[$i]) . '<br>');
    echo  '<br>';

    for($i=0; $i < $il1; $i++)
    {
        $il2 = count($a[$i]);

        for ($j=0; $j < $il2; $j++)
        {
            if ($a[$i][$j] % 2 !== 0 ) {
                $a[$i][$j]++;
            }
            else {
                $a[$i][$j]--;
            }

        }


    }

    echo 'Dvimatis masyvas po modifikacijos : ' . '<br>';
    for($i=0; $i < $il1; $i++)
        echo (implode(", ",$a[$i]) . '<br>');
    echo  '<br>';

?>

