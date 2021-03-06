<?php

/**
 * Class Ivykis.
 */
class Ivykis
{
    /** @var  */
    public $pavadinimas;
    public $data;

    /**
     * @param string $pavadinimas
     * @param DateTime $dateTime
     */
    public function __construct($pavadinimas, \DateTime $dateTime)
    {
        $this->pavadinimas = $pavadinimas;
        $this->data = $dateTime;
    }

    /**
     * @return string
     */
    public function duokDienuSkaic() {

        return $this->data->diff(new \DateTime())->format('%r%a');
    }

}
