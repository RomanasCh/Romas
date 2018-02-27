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
    public function __construct($trimestras, $lygis ,$vardas, $pavarde, $gimimoData)
    {
        parent::__construct($trimestras);

        $this->lygis = $lygis;
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
        $this->gimimoData = $gimimoData;
    }

    public function vidurkis() {
        $rez = 0;
        foreach ($this->trimestras as $pazym) {
            $rez += $pazym;
        }
        return $rez / count($this->trimestras);
    }

    public function duokAmziu() {
        $dabar = new \DateTime();
        return (int)$dabar->diff(new \DateTime($this->gimimoData))->format('%Y');
    }
}
