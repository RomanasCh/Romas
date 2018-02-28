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

    public function __construct( \DateTime $date, $number, $distance, $time)
    {
        $this->date = $date;
        $this->number= $number;
        $this->distance = $distance;
        $this->time = $time;

    }
}
