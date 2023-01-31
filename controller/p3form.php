<?php

require_once '../connection.php';
require '../model/Quest.class.php';

$quest = new Quest();
if (
  isset($_POST['genero'])
  && isset($_POST['idade'])
  && isset($_POST['tempoContabil'])
  && isset($_POST['tempoEmpresa'])
  && isset($_POST['posicao'])
  && isset($_POST['porteEmpresa'])
  && isset($_POST['niveisHierarquicos'])
  && isset($_POST['titulacaoConcluida'])
  && isset($_POST['estadoAtuacao'])
) {
  $_SESSION['genero'] = $_POST['genero'];
  $_SESSION['idade'] = $_POST['idade'];
  $_SESSION['tempoContabil'] = $_POST['tempoContabil'];
  $_SESSION['tempoEmpresa'] = $_POST['tempoEmpresa'];
  $_SESSION['posicao'] = $_POST['posicao'];
  $_SESSION['porteEmpresa'] = $_POST['porteEmpresa'];
  $_SESSION['niveisHierarquicos'] = $_POST['niveisHierarquicos'];
  $_SESSION['titulacaoConcluida'] = $_POST['titulacaoConcluida'];
  $_SESSION['estadoAtuacao'] = $_POST['estadoAtuacao'];

  $quest->save(
    $_SESSION['p1q1quest1'],
    $_SESSION['p1q2quest1'],
    $_SESSION['p2q1quest1'],
    $_SESSION['p2q1quest2'],
    $_SESSION['p2q1quest3'],
    $_SESSION['p2q1quest4'],
    $_SESSION['p2q2quest1'],
    $_SESSION['p2q2quest2'],
    $_SESSION['p2q2quest3'],
    $_SESSION['p2q2quest4'],
    $_SESSION['p2q2quest5'],
    $_SESSION['p2q2quest6'],
    $_SESSION['p2q2quest7'],
    $_SESSION['p2q2quest8'],
    $_SESSION['p2q3quest0'],
    $_SESSION['p2q3quest1'],
    $_SESSION['p2q3quest2'],
    $_SESSION['p2q3quest3'],
    $_SESSION['p2q3quest4'],
    $_SESSION['p2q3quest5'],
    $_SESSION['p2q3quest6'],
    $_SESSION['p2q3quest7'],
    $_SESSION['p2q3quest8'],
    $_SESSION['p2q3quest9'],
    $_SESSION['p2q3quest10'],
    $_SESSION['p2q3quest11'],
    $_SESSION['p2q3quest12'],
    $_SESSION['p2q3quest13item1'],
    $_SESSION['p2q3quest14item1'],
    $_SESSION['p2q3quest15item1'],
    $_SESSION['p2q3quest16item1'],
    $_SESSION['p2q4quest0'],
    $_SESSION['p2q4quest1'],
    $_SESSION['p2q4quest2'],
    $_SESSION['p2q4quest3'],
    $_SESSION['p2q4quest4'],
    $_SESSION['p2q4quest5'],
    $_SESSION['p2q4quest6'],
    $_SESSION['p2q4quest7'],
    $_SESSION['p2q4quest8'],
    $_SESSION['p2q4quest9'],
    $_SESSION['p2q4quest10'],
    $_SESSION['p2q4quest11'],
    $_SESSION['p2q4quest12'],
    $_SESSION['p2q4quest13item1'],
    $_SESSION['p2q4quest14item1'],
    $_SESSION['p2q4quest15item1'],
    $_SESSION['p2q4quest16item1'],
    $_SESSION['genero'],
    $_SESSION['idade'],
    $_SESSION['tempoContabil'],
    $_SESSION['tempoEmpresa'],
    $_SESSION['posicao'],
    $_SESSION['porteEmpresa'],
    $_SESSION['niveisHierarquicos'],
    $_SESSION['titulacaoConcluida'],
    $_SESSION['estadoAtuacao']
  );

  header("location: ../view/obrigado.php");
  

  /*
  echo "<pre>";
  var_dump($_SESSION);
  echo "</pre>";
  */
} else {
  header("location: ../view/p1.php");
}
