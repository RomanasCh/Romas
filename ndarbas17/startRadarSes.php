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
 * @param object $db
 * @param int $id
 * @param array $autoMas
 *
 * @return bool
 */
function rowExist($db, $id, &$autoMas) {
    $aDB = $db->prepare('SELECT * FROM radars WHERE id=:id');
    $aDB->bindParam(':id', $id, PDO::PARAM_INT);
    $aDB->execute();

    foreach($aDB->fetchAll(PDO::FETCH_NAMED) as $row) {
        $autoMas = [$row['id'], $row['date'], $row['number'], $row['distance'], $row['time']];
    }
    return count($autoMas) > 0;
}
