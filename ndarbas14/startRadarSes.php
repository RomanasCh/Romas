<?php

function masRikiuokGreiti ($a, $b){
    return ($a->duokGreiti() < $b->duokGreiti()) ? 1 : -1;
}
