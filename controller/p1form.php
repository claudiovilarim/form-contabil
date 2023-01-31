<?php

session_start();

if (isset($_POST['p1q1quest1']) && isset($_POST['p1q2quest1'])) {
  $_SESSION['p1q1quest1'] = $_POST['p1q1quest1'];
  $_SESSION['p1q2quest1'] = $_POST['p1q2quest1'];
  
  /*
  echo "<pre>";
  var_dump($_SESSION);
  echo "</pre>";
  
  */
  header("location: ../view/p2.php");
} else{
  header("location: ../view/p1.php");
}

