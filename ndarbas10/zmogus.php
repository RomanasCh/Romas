<?php
/**
 * Created by PhpStorm.
 * User: romas
 * Date: 2018-02-22
 * Time: 20:07
 */
class Zmogus
{
    public $vardas;
    public $pavarde;

    public function __construct($vardas, $pavarde)
    {
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
    }

    public function pilnasVardas() {
        return $this->vardas . ' ' . $this->pavarde;
    }
}
