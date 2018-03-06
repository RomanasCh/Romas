<?php
require_once 'Radar.php';
require_once 'Filtras.php';
require_once 'startRadarSes.php';

$filtr = new Filtras(isset($_GET['filtras']) ? $_GET['filtras'] : '');

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 10;
$offset = ($page-1) * $limit;
$dbh = new PDO('mysql:host=localhost;dbname=auto', 'root', '');
$duomenys=[];

foreach($dbh->query("SELECT * , distance/time*3.6 AS speed from radars ORDER BY speed DESC LIMIT $limit OFFSET $offset")->fetchAll(PDO::FETCH_NAMED) as $row) {
    $duomenys[] = new Radar(new \DateTime($row['date']), $row['number'], $row['distance'], $row['time']);
}

usort($duomenys, 'masRikiuokGreiti');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Namu darbas Nr 14">
    <meta name="author" content="">
    <title>Namu darbas Nr 14</title>
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous" rel="stylesheet">
    <link href="./css/Namudarbas_13.css" rel="stylesheet">
  </head>
  <body>
    <main role="main">
     <div class="container">
       <section>
        <h2>Duomenų rikiavimas pagal greitį</h2>
        <div class="row"> <!--  row 1 -->
  
         <form class="row" id="form1" method="post">
            <label class="textin" for="data">Data: </label>
            <input type="text" class="form-control" id="data" name="data" placeholder="pvz.: 2018-01-7 15:00">
            <br>
            <label class="textin" for="numeris">Numeris: </label>
            <input type="text" class="form-control" id="numeris" name="numeris" placeholder="pvz.: ABC123">
            <br>
            <label class="textin" for="atstumas">Atstumas: </label>
            <input type="text" class="form-control" id="atstumas" name="atstumas" placeholder="pvz.: 10000">
            <br>
            <label class="textin" for="laikas">Laikas:</label>
            <input type="text" class="form-control" id="laikas" name="laikas" placeholder="pvz.: 2000">
            <br>
            <button type="submit" class="btn btn-secondary" form="form1">Pridėti</button>
         </form>
        </div>  <!--  row 1 -->
        <div class="row"> <!--  row 2 -->
         <form class="row" id="form2" method="get">
            <label class="textin" for="filtras">Filtras:</label>
            <input type="text" class="form-control" id="filtras" name="filtras" placeholder="pvz.: ABC">
            <br>
            <button type="submit" class="btn btn-secondary" form="form2">Filtras</button>
         </form>
        </div> <!--  row 2 -->
           <div class="row"> <!--  row 3 -->
            <nav >
                <ul class="pagination pagination-sm mt-3">
                   <li class="page-item"><a  class="page-link bg-secondary text-white" href="http://localhost/03_paskaita_20180212/?page=1">&laquo;</a></li>
                   <li class="page-item "><a  class="page-link bg-secondary text-white" href="http://localhost/03_paskaita_20180212/?page=2">&raquo;</a></li>
                </ul>
            </nav>

               <table class="table table-sm table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>Data</th>
                  <th>Numeris</th>
                  <th>Atstumas</th>
                  <th>Laikas</th>
                  <th>Greitis</th>
                 </tr>
               </thead>
               <tbody>
               <?php foreach ($duomenys as $irasas) { ?>
                   <?php if ($filtr->filtruokLauka($irasas->number)) { ?>
                   <tr>
                    <td><?= $irasas->date->format('Y-M-d') ?></td>
                    <td><?=  $irasas->number ?></td>
                    <td><?= $irasas->distance ?></td>
                    <td><?=  $irasas->time ?></td>
                    <td><?= $irasas->duokGreiti() ?></td>
                  </tr>
                  <?php } ?>
               <?php } ?>
                </tbody>
            </table>   
          </div>  <!--  row 3 -->
        </section>
        <footer>
          <div id="mess01"></div>
        </footer>
     </div>  <!-- container -->
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
