<?php
/**
 * Created by PhpStorm.
 * User: romas
 * Date: 2018-02-22
 * Time: 20:34
 */
require 'zmogus.php';

class Mokinys extends Zmogus
{
    public $trimestras;
    public $lygis;
    public function __construct($trimestras, $lygis ,$vardas, $pavarde)
    {
        parent::__construct($vardas, $pavarde);
        $this->lygis = $lygis;
        $this->trimestras = $trimestras;
    }
    public function vidurkis() {
        $rez = 0;
        foreach ($this->trimestras as $pazym) {
            $rez += $pazym;
        }
        return $rez /= count($this->trimestras);}
}
