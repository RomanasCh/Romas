<?php

function masRikiuokLaika ($a, $b){
    return ($a->date->getTimestamp() < $b->date->getTimestamp()) ? -1 : 1;
}
function masRikiuokGreiti ($a, $b){
    return ($a->duokGreiti() < $b->duokGreiti()) ? 1 : -1;
}
