<?php
require_once 'Radar.php';
require_once 'startRadarSes.php';
require_once 'dbRadarEdit.php';

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
     <div class="container mb-4 pb-4">
       <section>
        <h2>Duomenų rikiavimas pagal greitį</h2>
        <div class="row"> <!--  row 1 -->
  
         <form class="row" id="form1" method="post">
            <label class="textin" for="data">Data: </label>
            <input type="text" class="form-control" id="data" name="data" placeholder="pvz.: 2018-01-7 15:00" value="<?= isset($autoM) ? getMasElement($autoM,'date') : '' ?>">
            <br>
            <label class="textin" for="numeris">Numeris: </label>
            <input type="text" class="form-control" id="numeris" name="numeris" placeholder="pvz.: ABC123" value="<?= isset($autoM) ? getMasElement($autoM,'number') : '' ?>">
            <br>
            <label class="textin" for="atstumas">Atstumas: </label>
            <input type="text" class="form-control" id="atstumas" name="atstumas" placeholder="pvz.: 10000" value="<?= isset($autoM) ? getMasElement($autoM, 'distance') : '' ?>">
            <br>
            <label class="textin" for="laikas">Laikas:</label>
            <input type="text" class="form-control" id="laikas" name="laikas" placeholder="pvz.: 2000" value="<?= isset($autoM) ? getMasElement($autoM, 'time') : '' ?>">
            <br>
            <input type="hidden" name="id" value="<?= isset($_GET['edit']) ? $_GET['edit'] : ''?>">
            <button type="submit" class="btn btn-secondary" form="form1">Pridėti</button>
         </form>
        </div>  <!--  row 1 -->
        <div class="row"> <!--  row 2 -->
         <form class="row" id="form2" method="get">
            <label class="textin" for="filtras">Filtras:</label>
            <input type="text" class="form-control" id="filtras" name="filtras" placeholder="pvz.: ABC" value="<?= isset($_GET['filtras']) ? $_GET['filtras'] : '' ?>">
            <br>
            <button type="submit" class="btn btn-secondary" form="form2">Filtras</button>
         </form>
            <div class="row ml-5 pl-5">
            <form class="row ml-5 pl-5" id="form3" method="get">
                <label class="date" for="dStart">Data nuo:</label>
                <input type="date" class="form-control"  id="dStart" name="dStart" placeholder="2017-06-01" value="<?= isset($_GET['filtras']) ? $_GET['filtras'] : '' ?>">
                <label class="textin" for="dEnd">Data iki:</label>
                <input type="date" class="form-control" id="dEnd" name="dEnd" placeholder="2017-06-30" value="<?= isset($_GET['filtras']) ? $_GET['filtras'] : '' ?>">
                <br>
                <button type="submit" class="btn btn-secondary" form="form3">Skaičiuoti</button>
            </form>
            </div>
        </div> <!--  row 2 -->
        <div class="row mt-5"> <!--  row 3 -->
            <a class= "btn btn-secondary" href="MaxGreitis.php?auto=1">Max Greičiai</a>
        </div> <!--  row 3 -->

        <div class="row"> <!--  row 4 -->
            <nav>
                <ul class="pagination pagination-sm mt-3">
                   <li class="page-item"><a  class="page-link bg-secondary text-white" href="http://localhost/03_paskaita_20180212/<?= isset($_GET['filtras']) ? '?filtras=' . $_GET['filtras'] . '&' : '?' ?>page=<?=  prevPage($page) ?>">&laquo;</a></li>
                   <li class="page-item "><a  class="page-link bg-secondary text-white" href="http://localhost/03_paskaita_20180212/<?= isset($_GET['filtras']) ? '?filtras=' . $_GET['filtras'] . '&' : '?' ?>page=<?=  nextPage($limit, count($duomenys), $page) ?>">&raquo;</a></li>
                </ul>
            </nav>

              <table class="table table-sm table-bordered table-striped table-hover ">
              <thead>
                <tr>
                  <th>Data</th>
                  <th>Numeris</th>
                  <th>Atstumas</th>
                  <th>Laikas</th>
                  <th>Greitis</th>
                  <th>Veiksmas</th>
                 </tr>
               </thead>
               <tbody>
               <?php foreach ($duomenys as $irasas) { ?>
                   <tr>
                    <td><?= $irasas->date->format('Y-M-d') ?></td>
                    <td><?=  $irasas->number ?></td>
                    <td><?= $irasas->distance ?></td>
                    <td><?=  $irasas->time ?></td>
                    <td><?= $irasas->duokGreiti() ?></td>
                    <form class="row">
                        <td scope="row">
                            <input type="hidden" name="page" value="<?= $page ?>">
                            <input type="hidden" name="filtras" value="<?= isset($_GET['filtras']) ? $_GET['filtras'] : '' ?>">
                            <button type=“submit" class= "btn btn-danger" name="delete" value="<?=$irasas->getId() ?>" >Delete</button>
                            <button type=“submit" class= "btn btn-secondary" name="edit" value="<?=$irasas->getId() ?>" >Edit</button>
                        </td>
                    </form>
                   </tr>
               <?php } ?>
                </tbody>
            </table>
        </div>  <!--  row 4 -->
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
