<?php
$sqFiltr = isset($_GET['filtras']) ? '%' . $_GET['filtras'] . '%' : '%';

$page = !isset($_GET['filtras']) ? intval (isset($_GET['page']) ? $_GET['page'] : 1) : 1;
$limit = 10;
$offset = ($page-1) * $limit;
$dbh = new PDO('mysql:host=localhost;dbname=auto', 'root', '');

if ($_SERVER['REQUEST_METHOD'] =='POST') {
    if (isset($_POST['data'], $_POST['numeris'], $_POST['atstumas'], $_POST['laikas']) && strlen($_POST['data']) > 0) {

        if (!isset($_POST['id'])) {
            $autoDB = $dbh->prepare('INSERT INTO radars (date, number, distance, time)
                  VALUES (:date, :number, :distance, :time)');

        }
        else {
            $autoDB = $dbh->prepare('UPDATE radars SET date = :date, 
                  number = :number, distance = :distance, time = :time WHERE id= :id');
            $autoDB->bindParam(':id', $_POST['id']);
        }

        $autoDB->bindParam(':date', $_POST['data']);
        $autoDB->bindParam(':number', $_POST['numeris']);
        $autoDB->bindParam(':distance', $_POST['atstumas']);
        $autoDB->bindParam(':time', $_POST['laikas']);
        $autoDB->execute();
    }
}

if (isset($_GET['edit']) || isset($_GET['delete']) ) {

    $idd = isset($_GET['edit']) ? intval($_GET['edit']) : intval($_GET['delete']);

    if (($yRa = rowExist($dbh, $idd,$autoM))) {
        if (isset($_GET['delete'])) {
            $autoDB = $dbh->prepare('DELETE FROM radars WHERE id=:id');
            $autoDB->bindParam(':id',$idd, PDO::PARAM_INT);
            $autoDB->execute();
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
