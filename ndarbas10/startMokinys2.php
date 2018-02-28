<?php
require 'Mokinys.php';
$mokiniai = [
    new Mokinys(['lietuviu' => 8, 'matematika' => 9, 'anglu' => 8], '3a', 'Jonas', 'Jonaitis'),
    new Mokinys(['lietuviu' => 9, 'matematika' => 10, 'anglu' => 10], '2b', 'Ona', 'Onaitė'),
    new Mokinys(['lietuviu' => 8, 'matematika' => 7, 'anglu' => 9], '2c', 'Antanas', 'Antanaitis'),
    new Mokinys(['lietuviu' => 9, 'matematika' => 9, 'anglu' => 10], '2b', 'Eglė', 'Eglytė'),
];

echo '<h4>Pažymių vidurkiai, mžėjimo tvarka</h4>';

$rezult = [];
foreach ($mokiniai as $mokinys) {
    $rezult[] = [round($mokinys->vidurkis(),2),$mokinys->vardas, $mokinys->pavarde];
}
array_multisort($rezult,SORT_DESC);
?>
<html>
<body>
<table>
    <thead>
        <tr>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>Vidurkis</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($rezult as $rz) { ?>
        <tr>
            <td>
                <?= $rz[1] ?>
            </td>
            <td>
                <?= $rz[2] ?>
            </td>
            <td>
                <?= $rz[0] ?>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>
