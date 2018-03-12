<?php

$sqFiltr = getElemExist('filtras') ? '%' . $_GET['filtras'] . '%' : '%';

$page = getPage();
$limit = 10;
$offset = ($page-1) * $limit;
$dbh = new PDO('mysql:host=localhost;dbname=auto', 'root', '');

if (isset($_POST['data'], $_POST['numeris'], $_POST['atstumas'], $_POST['laikas']) && strlen($_POST['data']) > 0) {

    if (!getElemExist('edit')) {
        $autoDB = $dbh->prepare('INSERT INTO radars (date, number, distance, time)
                  VALUES (:date, :number, :distance, :time)');
        echo '<br>!! Add !!<br>';
    }
    else {
        $autoDB = $dbh->prepare('UPDATE radars SET date = :date, 
                  number = :number, distance = :distance, time = :time WHERE id= :id');
        $autoDB->bindParam(':id', $_POST['id']);

        $_GET['edit'] = null;
        echo '<br>!! Edit !!<br>';
    }

    $autoDB->bindParam(':date', $_POST['data']);
    $autoDB->bindParam(':number', $_POST['numeris']);
    $autoDB->bindParam(':distance', $_POST['atstumas']);
    $autoDB->bindParam(':time', $_POST['laikas']);
    $autoDB->execute();

    $_POST['id'] = null;
    if (isset($autoM)) {
        unset($autoM);
    }

    header('Location: ' . extractLink('edit'));
    die('Error');
 }

if (getElemExist('edit') || getElemExist('delete') ) {

        $idd = intval (getElemExist('edit') ? $_GET['edit'] : $_GET['delete'],10);

        if ( count($autoM = getRow($dbh, $idd)) > 0) {

            if (isset($_GET['delete'])) {
                $autoDB = $dbh->prepare('DELETE FROM radars WHERE id=:id');
                $autoDB->bindParam(':id',$idd, PDO::PARAM_INT);
                $autoDB->execute();

                $_GET['delete'] = null;
                $idd = null;
                unset($autoM);
            }
        }
}

$autoDB = $dbh->prepare('SELECT * , distance/time*3.6 AS speed
                  FROM radars WHERE number LIKE :sqFiltr
                  ORDER BY speed DESC LIMIT :limit OFFSET :offset');
$autoDB->bindParam(':sqFiltr', $sqFiltr, PDO::PARAM_STR);
$autoDB->bindParam(':limit', $limit, PDO::PARAM_INT);
$autoDB->bindParam(':offset', $offset, PDO::PARAM_INT);
$autoDB->execute();

$duomenys=[];

foreach($autoDB->fetchAll(PDO::FETCH_NAMED) as $row) {
    $duomenys[] = new Radar($row['id'], new \DateTime($row['date']), $row['number'], $row['distance'], $row['time']);
}

usort($duomenys, 'masRikiuokGreiti');
