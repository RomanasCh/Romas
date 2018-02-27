<?php
require 'Mokinys.php';
$mokiniai = [
    new Mokinys(['lietuviu' => 8, 'matematika' => 9, 'anglu' => 8], '3a', 'Jonas', 'Jonaitis','2000-11-11'),
    new Mokinys(['lietuviu' => 9, 'matematika' => 10, 'anglu' => 10], '2b', 'Ona', 'Onaitė','2000-01-01'),
    new Mokinys(['lietuviu' => 8, 'matematika' => 7, 'anglu' => 9], '2c', 'Antanas', 'Antanaitis','2000-02-17'),
    new Mokinys(['lietuviu' => 9, 'matematika' => 9, 'anglu' => 10], '2b', 'Eglė', 'Eglytė','2000-03-20'),
];

echo '<h4>Turinčių 18m. vidurkiai, mažėjimo tvarka</h4>';

$rezult = [];
foreach ($mokiniai as $mokinys) {
    $rezult[] = [round($mokinys->vidurkis(),2),$mokinys->vardas, $mokinys->pavarde, $mokinys->duokAmziu()];
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
        <?php if ($rz[3] > 17) { ?>
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
    <?php } ?>
    </tbody>
</table>
</body>
</html>
