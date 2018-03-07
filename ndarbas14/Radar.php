<?php

/**
 * Class Radar.
 */
class Radar
{
    public $date;
    public $number;
    public $distance;
    public $time;

    /**
     * Radar constructor.
     *
     * @param DateTime $date
     * @param int      $number
     * @param int      $distance
     * @param int      $time
     */
    public function __construct( \DateTime $date, $number, $distance, $time)
    {
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
}
