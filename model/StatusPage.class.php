<?php

class StatusPage
{
  public function verifyStatus()
  {
    global $pdo;

    $sql = "SELECT * FROM tb_statusPage WHERE id = 1";
    $sql = $pdo->prepare($sql);
    $sql->execute();

    if ($sql->rowCount() > 0) {
      $statusAtual = $sql->fetchAll(PDO::FETCH_ASSOC);
      return $statusAtual;
    } else {
      return array();
    }
  }

  public function updateStatus($num)
  {
    $newNumber = $num+1;

    if ($num > 4){
      $newNumber = 1;
    }

    global $pdo;
    
    $sql = "UPDATE tb_statusPage SET cod = $newNumber WHERE id = 1";
    $sql = $pdo->prepare($sql);
    $sql->execute();
    
    
  }
}
