<?php

function masRikiuokGreiti ($a, $b){
    return ($a->duokGreiti() < $b->duokGreiti()) ? 1 : -1;
}

/**
 * @param int $limit
 * @param int $row
 * @param int $page
 *
 * @return int
 */
function nextPage($limit, $row, $page) {
    if ($row === $limit) {
        return ++$page;
    }
    return $page;
}

/**
 * @param int $page
 *
 * @return int
 */
function prevPage($page) {
    if ($page > 1) {
        return --$page;
    }
    return $page;
}
