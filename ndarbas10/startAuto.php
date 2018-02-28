<?php
/**
 * Created by PhpStorm.
 * User: romas
 * Date: 2018-02-25
 * Time: 15:34
 */
require 'autoParametrai.php';
$masina = new Automobilis('Audi', 'A6');
echo '<h4>Objektai</h4>';
echo 'Sukurtas objektas: '  . $masina->autoParam();
