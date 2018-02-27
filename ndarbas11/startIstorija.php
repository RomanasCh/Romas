<?php
require 'Ivykis.php';
$istorija = [
    new Ivykis('3W Kaunas', new \DateTime('2017-12-04')),
    new Ivykis('PHP Kaunas', new \DateTime('2008-02-07')),
    new Ivykis('PHP Kaunas', new \DateTime('2018-01-14')),
    new Ivykis('PHP Kaunas', new \DateTime('2018-01-27')),
    new Ivykis('PHP Kaunas', new \DateTime('2018-02-26')),
];
echo '<h4>Įvykių istorija</h4>';
?>
<html>
<body>
<table>
    <thead>
        <tr>
            <th>Įvykis</th>
            <th>Laiko tarpas, dienos</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($istorija as $ivykis) { ?>
            <tr>
                <td>
                    <?= $ivykis->pavadinimas ?>
                </td>
                <td>
                    <?= $ivykis->duokDienuSkaic()->format('%r%a') ?>
                </td>
            </tr>
       <?php } ?>
    </tbody>
</table>
</body>
</html>
