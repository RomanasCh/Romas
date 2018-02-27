<?php
/**
 * Created by PhpStorm.
 * User: romas
 * Date: 2018-02-22
 * Time: 20:34
 */
require 'Trimestras.php';

class Mokinys extends Trimestras
{
    public $lygis;
    public function __construct($trimestras, $lygis ,$vardas, $pavarde)
    {
        parent::__construct($trimestras);

        $this->lygis = $lygis;
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
    }
    public function vidurkis() {
        $rez = 0;
        foreach ($this->trimestras as $pazym) {
            $rez += $pazym;
        }
        return $rez / count($this->trimestras);}
}
