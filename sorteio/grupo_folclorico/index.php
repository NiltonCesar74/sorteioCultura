<?php
  require '../admin/Database.php';

  $con = Database::getInstance();
  $sqlNum = "SELECT numeros, date_format(data, '%H:%i') as datas from tb_grupo_folclorico where sorteado = 1 order by data ASC";
  $nroRes = $con->query($sqlNum);
  $nro = $nroRes->fetchAll(PDO::FETCH_OBJ);
  $i = 1;
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>GRUPO FOLCLÓRICO</title>
    <link rel="stylesheet" href="style.css">
    <style media="screen">
    h1{
      font-size: 150pt;
      text-align: center;
    }
    h3{
      font-weight: bold;
      color:rgb(178,26,27);
      font-size: 15pt;
      text-align: center;
    }
    body{
      background-color: #f2f2f2;
    }
    button{
      font-weight: bold;
      font-size: 15pt;
      background-color:rgb(178,26,27) !important;
    }
    iframe{
      height: 290px;
      border:none;
      overflow-y: hidden;
      display: none;
    }
    #hh{
      font-weight: bold;
      margin: 0 auto;
    }
    h2{
      font-size: 52pt;
    }
    .collection{
      position: absolute;
      right: 10px;
    }
    .collection li{
      width: 200px;
      height: 45px;
    }

    </style>
  </head>
  <body>
      <div class="row">
        <div class="center">
          <img src="logo.png" class="center-align" width="550">
        </div>
        <h3>SECRETARIA DE MOBILIDADE URBANA</h3>
      </div>
      <div class="row">
        <h2 id="hh" style="center">SORTEIO</h2>
      </div>
      <iframe id="ifr" width="" height="" frameborder="0" scrolling="no"></iframe>
      <div class="row">
        <button type="button" onclick="redir()" class="btn btn-large" name="button">SORTEAR</button>
        <button type="button" class="btn btn-large" onclick="location.reload(true)" name="button">ZERAR</button>
      </div>

      <ul class="collection with-header ">
        <li class="collection-header transparent">
          <h6 style="font-weight:bold; text-align:center">SORTEADOS (<?=count($nro)?>)</h6>
        </li>
        <?php foreach ($nro as $list): ?>
          <li class="collection-item transparent">
            <div class="row">
              <div class="col m3 l3">
                <span class="left"><?=$i?>&ordm;</span>
              </div>
              <div class="col m9 l9">
                <span style="font-weight:bold;" class="text-left">
                  <?=$list->numeros?>
                </span>
              </div>
            </div>
         </li>
        <?php $i++; endforeach; ?>
      </ul>
  </body>
  <script type="text/javascript">
    function redir(){
      var hh = document.getElementById('hh');
      var ifr = document.getElementById('ifr');
      ifr.src = 'sorteio.php';
      ifr.style.display = "block";
      hh.style.display = "none";
    }
  </script>
</html>
