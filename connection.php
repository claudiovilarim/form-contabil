<?php

ini_set('default_charset', 'UTF-8');
date_default_timezone_set('America/Sao_Paulo');
session_start();

$localhost = "localhost";
$user = "root";
$pass = "";
$db = "contabil";

/*
$localhost = "localhost";
$user = "bea_bode";
$pass = "Votacao@100@";
$db = "bea_bodega";
*/

global $pdo;

try {
  $pdo = new PDO(
    "mysql:host={$localhost};dbname={$db}",
    $user,
    $pass,
    array(
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_PERSISTENT => false,
      PDO::ATTR_EMULATE_PREPARES => false,
      PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    )
  );
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = $pdo->query("SELECT * FROM tb_questions");
} catch (PDOException $e) {
  echo 'Error: ' . $e->getMessage() . "<br/>";
  die();
}
