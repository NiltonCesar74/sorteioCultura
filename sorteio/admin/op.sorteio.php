<?php

  require 'Sorteio.php';

  $sorteio = new Sorteio();
  
  $method = filter_input(INPUT_POST, 'method');

  if($method == 'insert') {
      $numero = filter_input(INPUT_POST, 'numero');
      $categoria = filter_input(INPUT_POST, 'categoria');
      
      if( $numero != "" && $categoria != "") {
        echo $sorteio->populaCategoria($numero, $categoria);
      }
  }
