<?php

/**
 * Class Radar.
 */
class Radar
{
    private $id;
    public $date;
    public $number;
    public $distance;
    public $time;

    /**
     * Radar constructor.
     *
     * @param         int $id
     * @param DateTime $date
     * @param         string $number
     * @param         int $distance
     * @param         int $time
     */
    public function __construct($id, \DateTime $date, $number, $distance, $time)
    {
        $this->id = $id;
        $this->date = $date;
        $this->number= $number;
        $this->distance = $distance;
        $this->time = $time;
    }

    /**
     * @return double
     */
    public function duokGreiti() {
        if ($this->time > 0) {
            return round(($this->distance * 3.6) / $this->time, 1);
        }

        return 0;
    }

    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }
}
