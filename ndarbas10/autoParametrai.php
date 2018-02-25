<?php
class Automobilis
{
    public $marke;
    public $modelis;

    public function __construct($marke, $modelis)
    {
        $this->marke = $marke;
        $this->modelis = $modelis;
    }

    public function autoParam() {
        return $this->marke . ' ' . $this->modelis;
    }
}
