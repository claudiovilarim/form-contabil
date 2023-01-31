<?php

class Quest
{
  public function save($p1q1quest1,$p1q2quest1,$p2q1quest1,$p2q1quest2,$p2q1quest3,$p2q1quest4,$p2q2quest1,$p2q2quest2,$p2q2quest3,$p2q2quest4,$p2q2quest5,$p2q2quest6,$p2q2quest7,$p2q2quest8,$p2q3quest0,$p2q3quest1,$p2q3quest2,$p2q3quest3,$p2q3quest4,$p2q3quest5,$p2q3quest6,$p2q3quest7,$p2q3quest8,$p2q3quest9,$p2q3quest10,$p2q3quest11,$p2q3quest12,$p2q3quest13item1,$p2q3quest14item1,$p2q3quest15item1,$p2q3quest16item1,$p2q4quest0,$p2q4quest1,$p2q4quest2,$p2q4quest3,$p2q4quest4,$p2q4quest5,$p2q4quest6,$p2q4quest7,$p2q4quest8,$p2q4quest9,$p2q4quest10,$p2q4quest11,$p2q4quest12,$p2q4quest13item1,$p2q4quest14item1,$p2q4quest15item1,$p2q4quest16item1,$genero,$idade,$tempoContabil,$tempoEmpresa,$posicao,$porteEmpresa,$niveisHierarquicos,$titulacaoConcluida,$estadoAtuacao)
  {
    global $pdo;

    $sql = "INSERT INTO tb_questions (p1q1quest1,p1q2quest1,p2q1quest1,p2q1quest2,p2q1quest3,p2q1quest4,p2q2quest1,p2q2quest2,p2q2quest3,p2q2quest4,p2q2quest5,p2q2quest6,p2q2quest7,p2q2quest8,p2q3quest0,p2q3quest1,p2q3quest2,p2q3quest3,p2q3quest4,p2q3quest5,p2q3quest6,p2q3quest7,p2q3quest8,p2q3quest9,p2q3quest10,p2q3quest11,p2q3quest12,p2q3quest13item1,p2q3quest14item1,p2q3quest15item1,p2q3quest16item1,p2q4quest0,p2q4quest1,p2q4quest2,p2q4quest3,p2q4quest4,p2q4quest5,p2q4quest6,p2q4quest7,p2q4quest8,p2q4quest9,p2q4quest10,p2q4quest11,p2q4quest12,p2q4quest13item1,p2q4quest14item1,p2q4quest15item1,p2q4quest16item1,genero,idade,tempoContabil,tempoEmpresa,posicao,porteEmpresa,niveisHierarquicos,titulacaoConcluida,estadoAtuacao) 
    VALUES (:p1q1quest1,:p1q2quest1,:p2q1quest1,:p2q1quest2,:p2q1quest3,:p2q1quest4,:p2q2quest1,:p2q2quest2,:p2q2quest3,:p2q2quest4,:p2q2quest5,:p2q2quest6,:p2q2quest7,:p2q2quest8,:p2q3quest0,:p2q3quest1,:p2q3quest2,:p2q3quest3,:p2q3quest4,:p2q3quest5,:p2q3quest6,:p2q3quest7,:p2q3quest8,:p2q3quest9,:p2q3quest10,:p2q3quest11,:p2q3quest12,:p2q3quest13item1,:p2q3quest14item1,:p2q3quest15item1,:p2q3quest16item1,:p2q4quest0,:p2q4quest1,:p2q4quest2,:p2q4quest3,:p2q4quest4,:p2q4quest5,:p2q4quest6,:p2q4quest7,:p2q4quest8,:p2q4quest9,:p2q4quest10,:p2q4quest11,:p2q4quest12,:p2q4quest13item1,:p2q4quest14item1,:p2q4quest15item1,:p2q4quest16item1,:genero,:idade,:tempoContabil,:tempoEmpresa,:posicao,:porteEmpresa,:niveisHierarquicos,:titulacaoConcluida,:estadoAtuacao)";
    
    $sql = $pdo->prepare($sql);
    
    $sql->bindValue("p1q1quest1", $p1q1quest1);
    $sql->bindValue("p1q2quest1", $p1q2quest1);
    $sql->bindValue("p1q1quest1", $p1q1quest1);
    $sql->bindValue("p1q2quest1", $p1q2quest1);
    $sql->bindValue("p2q1quest1", $p2q1quest1);
    $sql->bindValue("p2q1quest2", $p2q1quest2);
    $sql->bindValue("p2q1quest3", $p2q1quest3);
    $sql->bindValue("p2q1quest4", $p2q1quest4);
    $sql->bindValue("p2q2quest1", $p2q2quest1);
    $sql->bindValue("p2q2quest2", $p2q2quest2);
    $sql->bindValue("p2q2quest3", $p2q2quest3);
    $sql->bindValue("p2q2quest4", $p2q2quest4);
    $sql->bindValue("p2q2quest5", $p2q2quest5);
    $sql->bindValue("p2q2quest6", $p2q2quest6);
    $sql->bindValue("p2q2quest7", $p2q2quest7);
    $sql->bindValue("p2q2quest8", $p2q2quest8);
    $sql->bindValue("p2q3quest0", $p2q3quest0);
    $sql->bindValue("p2q3quest1", $p2q3quest1);
    $sql->bindValue("p2q3quest2", $p2q3quest2);
    $sql->bindValue("p2q3quest3", $p2q3quest3);
    $sql->bindValue("p2q3quest4", $p2q3quest4);
    $sql->bindValue("p2q3quest5", $p2q3quest5);
    $sql->bindValue("p2q3quest6", $p2q3quest6);
    $sql->bindValue("p2q3quest7", $p2q3quest7);
    $sql->bindValue("p2q3quest8", $p2q3quest8);
    $sql->bindValue("p2q3quest9", $p2q3quest9);
    $sql->bindValue("p2q3quest10", $p2q3quest10);
    $sql->bindValue("p2q3quest11", $p2q3quest11);
    $sql->bindValue("p2q3quest12", $p2q3quest12);
    $sql->bindValue("p2q3quest13item1", $p2q3quest13item1);
    $sql->bindValue("p2q3quest14item1", $p2q3quest14item1);
    $sql->bindValue("p2q3quest15item1", $p2q3quest15item1);
    $sql->bindValue("p2q3quest16item1", $p2q3quest16item1);
    $sql->bindValue("p2q4quest0", $p2q4quest0);
    $sql->bindValue("p2q4quest1", $p2q4quest1);
    $sql->bindValue("p2q4quest2", $p2q4quest2);
    $sql->bindValue("p2q4quest3", $p2q4quest3);
    $sql->bindValue("p2q4quest4", $p2q4quest4);
    $sql->bindValue("p2q4quest5", $p2q4quest5);
    $sql->bindValue("p2q4quest6", $p2q4quest6);
    $sql->bindValue("p2q4quest7", $p2q4quest7);
    $sql->bindValue("p2q4quest8", $p2q4quest8);
    $sql->bindValue("p2q4quest9", $p2q4quest9);
    $sql->bindValue("p2q4quest10", $p2q4quest10);
    $sql->bindValue("p2q4quest11", $p2q4quest11);
    $sql->bindValue("p2q4quest12", $p2q4quest12);
    $sql->bindValue("p2q4quest13item1", $p2q4quest13item1);
    $sql->bindValue("p2q4quest14item1", $p2q4quest14item1);
    $sql->bindValue("p2q4quest15item1", $p2q4quest15item1);
    $sql->bindValue("p2q4quest16item1", $p2q4quest16item1);
    $sql->bindValue("genero", $genero);
    $sql->bindValue("idade", $idade);
    $sql->bindValue("tempoContabil", $tempoContabil);
    $sql->bindValue("tempoEmpresa", $tempoEmpresa);
    $sql->bindValue("posicao", $posicao);
    $sql->bindValue("porteEmpresa", $porteEmpresa);
    $sql->bindValue("niveisHierarquicos", $niveisHierarquicos);
    $sql->bindValue("titulacaoConcluida", $titulacaoConcluida);
    $sql->bindValue("estadoAtuacao", $estadoAtuacao);
    $sql->execute();
  }
}
