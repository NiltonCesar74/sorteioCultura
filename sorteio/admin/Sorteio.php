<?php

include 'Database.php';

class Sorteio
{
  private $con;
  
  public function __construct()
  {
    $this->con = Database::getInstance();
  }

  public function getCategoria()
  {
    $sql = "SHOW tables";
    $query = $this->con->query($sql);
    return $query->fetchAll(PDO::FETCH_NUM);
  }

  public function populaCategoria($numero , $categoria)
  {
    try {
      //Zera a categoria selecionada
      $del = "delete from {$categoria} where id > 0";
      $del_stmt = $this->con->query($del);
      //Popula o banco de dados
      for ($i = 1; $i <= $numero; $i++) {
        $sql = "INSERT INTO $categoria (numeros) VALUES(?)";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(1, $i);
        $stmt->execute(); 
    }
    return "<script>alert('".$categoria." - Populado com sucesso!');history.go(-1);</script>";
      
    } catch (\Exception $e) {
      die($e->getMessage());
    }
  }
}
