<?php
require_once 'startRadarSes.php';

$sqFiltr = getElemExist('filtras') ? '%' . $_GET['filtras'] . '%' : '%';
initPagination ($page, $limit, $offset);

$dbh = new PDO('mysql:host=localhost;dbname=auto', 'root', '');
if (getElemExist('dStart') && getElemExist('dEnd') ) {
    $autoDB = $dbh->prepare('SELECT number, COUNT(*) AS kiekis, ROUND(MAX(distance/time*3.6)) AS max_greitis,
      ROUND(MIN(distance/time*3.6)) AS min_greitis, ROUND(AVG(distance/time*3.6)) AS avg_greitis
      FROM radars WHERE date BETWEEN :dStart AND :dEnd
      GROUP BY number ORDER BY max_greitis DESC LIMIT :limit OFFSET :offset');

    $autoDB->bindParam(':dStart', $_GET['dStart']);
    $autoDB->bindParam(':dEnd', $_GET['dEnd']);
    $autoDB->bindParam(':limit', $limit, PDO::PARAM_INT);
    $autoDB->bindParam(':offset', $offset, PDO::PARAM_INT);
    $autoDB->execute();
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Namu darbas Nr 17">
    <meta name="author" content="">
    <title>Namu darbas Nr 17</title>
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous" rel="stylesheet">
    <link href="./css/Namudarbas_13.css" rel="stylesheet">
  </head>
  <body>
    <main role="main">
     <div class="container">
       <section>
        <h2>Pažeidimai už laikotarpį</h2>
           <div class="row mt-3"> <!--  row 3 -->
               <a class= "btn btn-secondary" href="http://localhost/03_paskaita_20180212/index.php">Grįžti atgal</a>
           </div> <!--  row 3 -->

           <div class="row"> <!--  row 1 -->
               <nav>
                   <ul class="pagination pagination-sm mt-3">
                       <li class="page-item"><a  class="page-link bg-secondary text-white" href="http://localhost/03_paskaita_20180212/uzLaikotarpi.php?dStart=<?= $_GET['dStart'] ?>&dEnd=<?= $_GET['dEnd'] ?>&page=<?= prevPage($page) ?>">&laquo;</a></li>
                       <li class="page-item"><a  class="page-link bg-secondary text-white" href="http://localhost/03_paskaita_20180212/uzLaikotarpi.php?dStart=<?= $_GET['dStart'] ?>&dEnd=<?= $_GET['dEnd'] ?>&page=<?= nextPage($limit, $autoDB->rowCount(), $page) ?>">&raquo;</a></li>
                   </ul>
               </nav>

               <table class="table table-sm table-bordered table-striped table-hover">
                   <thead>
                   <tr>
                       <th>Numeris</th>
                       <th>Įrašų kiekis</th>
                       <th>Max Greitis</th>
                       <th>Min Greitis</th>
                       <th>Vidutinis Greitis</th>

                   </tr>
                   </thead>
                   <tbody>
                   <?php foreach ($autoDB->fetchAll(PDO::FETCH_NAMED)  as $irasas) { ?>
                       <tr>
                           <td><?=  $irasas['number'] ?></td>
                           <td><?= $irasas['kiekis'] ?></td>
                           <td><?=  $irasas['max_greitis'] ?></td>
                           <td><?=  $irasas['min_greitis'] ?></td>
                           <td><?=  $irasas['avg_greitis'] ?></td>
                       </tr>
                   <?php } ?>
                   </tbody>
               </table>
           </div>  <!--  row 1 -->
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

