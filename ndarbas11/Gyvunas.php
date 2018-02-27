<?php

/**
 * Class Gyvunas.
 */
class Gyvunas
{
    public $svoris;
    public $ugis;

    /**
     * Gyvunas constructor.
     *
     * @param int $svoris
     * @param int $ugis
     */
    public function __construct($svoris, $ugis)
    {
            $this->svoris = $svoris;
            $this->ugis = $ugis;
    }

    /**
     * @return string
     */
    public function pilnasAprasas() {
        return $this->svoris .', ' .$this->ugis;
    }
}
