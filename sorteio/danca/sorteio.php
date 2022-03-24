<?php
  require '../admin/Database.php';
  
  $con = Database::getInstance();

  $sqlNum = "SELECT numeros from tb_danca where sorteado != 1 order by RAND() limit 1";
  $nroRes = $con->query($sqlNum);
  $nro = $nroRes->fetch(PDO::FETCH_OBJ);

  $sql = "UPDATE tb_danca SET `sorteado` =  1, data = NOW() where `numeros` = ? ";
  $stmt = $con->prepare($sql);
  $stmt->bindParam(1, $nro->numeros);
  $stmt->execute();

  if (!$stmt->execute()) {
      echo "error";
      die;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <style media="screen">
    h1{
      font-size: 150pt;
      text-align: center;
    }
    img{

    }
    </style>
  </head>
  <body>

      <div class="center">
        <img src="balls.svg" width="200" id="img">
      </div>

      <h1 style="visibility:hidden" id="h1"><?=(empty($nro->numeros))? 'FIM':$nro->numeros?></h1><br/>
      <script type="text/javascript">
        function loadImg(){
          var img = document.getElementById("img");
          var hh = document.getElementById("h1");
          setTimeout(function(){
            img.style.display = "none";
            hh.style.visibility = "visible";
          }, 3000);
        }
        window.onload = loadImg();
      </script>
  </body>
</html>
