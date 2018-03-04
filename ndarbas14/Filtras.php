<?php

/**
 * Class Filtras.
 */
class Filtras
{
    /**
     * @var string
     */
    private $filtroReiksme;

    /**
     * Filtras constructor.
     *
     * @param string $reiksme
     */
    public function __construct($reiksme)
    {
        $this->setFiltroReiksme($reiksme);
    }

    /**
     * @param string $seka
     *
     * @return bool
     */
    public function filtruokLauka($seka) {
        if (strlen($this->filtroReiksme) > 0) {
            return preg_match ($this->filtroReiksme, $seka) === 1;
        }
        return true;
    }

    /**
     * @return string
     */
    public function getFiltroReiksme()
    {
        return $this->filtroReiksme;
    }

    /**
     * @param string $reiksme
     */
    public function setFiltroReiksme($reiksme)
    {
        if (strlen($reiksme)  > 0){
            $this->filtroReiksme = '/' . strtoupper(strval($reiksme)) . '/';
        }
        else {
            $this->filtroReiksme = '';
        }
    }
}
