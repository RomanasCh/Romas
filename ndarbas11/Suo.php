<?php

/**
 * Class suo.
 */
require 'Gyvunas.php';

class Suo extends Gyvunas
{
    public $spalva;
    public $lytis;

    public function __construct($spalva, $lytis, $svoris, $ugis)
    {
        parent::__construct($svoris, $ugis);
        $this->spalva = $spalva;
        $this->lytis = $lytis;

    }

    public function getInfo() {
        return $this->spalva . ', ' . $this->lytis . ', ' .$this->pilnasAprasas();
    }
}
