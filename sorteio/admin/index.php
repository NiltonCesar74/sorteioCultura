<?php
  include 'Sorteio.php';
  $sorteio = new Sorteio();
  $categorias = $sorteio->getCategoria();


  function categoriaAlias ($categoria) {
    $cat = str_replace(['tb_', '_'], ' ', $categoria);
    return trim(mb_strtoupper($cat));
  }

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale:1.0">
    <meta name="author" content="Raphael Moraes">
    <title>SECMA - SETINGS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      .main {
        width: 500px;
        margin-top: 10%;
      }
    </style>
  </head>
  <body>
    <div class="container d-flex align-items-center justify-content-center ">
      <div class="card main  ">
        <div class="card-header">
          GERENCIAMENTO DO SORTEIO
        </div>
        <div class="card-body">
          <form action="op.sorteio.php" method="post">
            <input type="hidden" name="method" value="insert">
            <div class="row">
              <div class="form-group col-sm-12">
                <label for="qt">Incritos</label>
                <input type="number" name="numero" class="form-control" placeholder="Total de Inscritos" required/>
              </div>
            </div>
            <div class="row">
          <div class="form-group col-sm-12">
            <label for="categoria">Categoria</label>
            <select class="form-control" name="categoria" id="categoria">
              <?php foreach ($categorias as $cat):?>
              <option value="<?=$cat[0]?>"><?=categoriaAlias($cat[0])?></option>
            <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="row">
            <div class="col-md-5">
              <button type="submit" class="btn btn-primary">PREENCHER</button>
            </div>
        </div>
      </form>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
