<?php
require 'zmogus.php';
$zmog = [
    new zmogus('Antanas','Antanaitis') ,
    new zmogus('Jonas','Jonaitis'),
    new zmogus('Povilas', 'Povilaitis'),
];
//    echo $zmog[0]->pilnasVardas();
?>
<html>
    <body>
        <table>
            <thead><tr><th>Pilnas Vardas</th></tr></thead>
            <tbody>
                <?php foreach ($zmog as $mas) { ?>
                    <tr>
                        <td>
                            <?= $mas->pilnasVardas() ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>
