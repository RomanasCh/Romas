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

/**
 * @return int
 */
function getPage() {
    if (!getElemExist('filtras')) {
        return (int) isset($_GET['page']) ? $_GET['page']  : 1;
    }
    return 1;
}

/**
 * @param object $db
 * @param int $id
 *
 * @return array
 */
function getRow($db, $id) {
    $aDB = $db->prepare('SELECT * FROM radars WHERE id=:id');
    $aDB->bindParam(':id', $id, PDO::PARAM_INT);
    $aDB->execute();

    return $aDB->fetch(PDO::FETCH_NAMED);
}

/**
 * @param string $key
 *
 * @return bool
 */
function getElemExist($key) {

    if (isset($_GET[$key])) {
        return  (strlen(trim($_GET[$key])) > 0);
    }
    return false;
}

/**
 * @param array $mas
 * @param string $key
 *
 * @return string
 */
function getMasElement($mas, $key) {

    if (isset($mas[$key])) {
        return $mas[$key];
    }

    return '';
}

/**
 * @param string $command
 *
 * @return bool|string
 */
function extractLink($command) {

    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $pos = strpos($actual_link, $command);

    if ($pos !== false) {
        $actual_link = substr("$actual_link", 0, $pos-1);
    }

    return $actual_link;
}
