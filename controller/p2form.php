<?php

session_start();

if (
  isset($_POST['p2q1quest1'])
  && isset($_POST['p2q1quest2'])
  && isset($_POST['p2q1quest3'])
  && isset($_POST['p2q1quest4'])
  && isset($_POST['p2q2quest1'])
  && isset($_POST['p2q2quest2'])
  && isset($_POST['p2q2quest3'])
  && isset($_POST['p2q2quest4'])
  && isset($_POST['p2q2quest5'])
  && isset($_POST['p2q2quest6'])
  && isset($_POST['p2q2quest7'])
  && isset($_POST['p2q2quest8'])
  && isset($_POST['p2q3quest0'])
  && isset($_POST['p2q3quest1'])
  && isset($_POST['p2q3quest2'])
  && isset($_POST['p2q3quest3'])
  && isset($_POST['p2q3quest4'])
  && isset($_POST['p2q3quest5'])
  && isset($_POST['p2q3quest6'])
  && isset($_POST['p2q3quest7'])
  && isset($_POST['p2q3quest8'])
  && isset($_POST['p2q3quest9'])
  && isset($_POST['p2q3quest10'])
  && isset($_POST['p2q3quest11'])
  && isset($_POST['p2q3quest12'])
  && isset($_POST['p2q3quest13item1'])
  && isset($_POST['p2q3quest14item1'])
  && isset($_POST['p2q3quest15item1'])
  && isset($_POST['p2q3quest16item1'])
  && isset($_POST['p2q4quest0'])
  && isset($_POST['p2q4quest1'])
  && isset($_POST['p2q4quest2'])
  && isset($_POST['p2q4quest3'])
  && isset($_POST['p2q4quest4'])
  && isset($_POST['p2q4quest5'])
  && isset($_POST['p2q4quest6'])
  && isset($_POST['p2q4quest7'])
  && isset($_POST['p2q4quest8'])
  && isset($_POST['p2q4quest9'])
  && isset($_POST['p2q4quest10'])
  && isset($_POST['p2q4quest11'])
  && isset($_POST['p2q4quest12'])
  && isset($_POST['p2q4quest13item1'])
  && isset($_POST['p2q4quest14item1'])
  && isset($_POST['p2q4quest15item1'])
  && isset($_POST['p2q4quest16item1'])
) {
  $_SESSION['p2q1quest1'] = $_POST['p2q1quest1'];
  $_SESSION['p2q1quest2'] = $_POST['p2q1quest2'];
  $_SESSION['p2q1quest3'] = $_POST['p2q1quest3'];
  $_SESSION['p2q1quest4'] = $_POST['p2q1quest4'];
  $_SESSION['p2q2quest1'] = $_POST['p2q2quest1'];
  $_SESSION['p2q2quest2'] = $_POST['p2q2quest2'];
  $_SESSION['p2q2quest3'] = $_POST['p2q2quest3'];
  $_SESSION['p2q2quest4'] = $_POST['p2q2quest4'];
  $_SESSION['p2q2quest5'] = $_POST['p2q2quest5'];
  $_SESSION['p2q2quest6'] = $_POST['p2q2quest6'];
  $_SESSION['p2q2quest7'] = $_POST['p2q2quest7'];
  $_SESSION['p2q2quest8'] = $_POST['p2q2quest8'];
  $_SESSION['p2q3quest0'] = $_POST['p2q3quest0'];
  $_SESSION['p2q3quest1'] = $_POST['p2q3quest1'];
  $_SESSION['p2q3quest2'] = $_POST['p2q3quest2'];
  $_SESSION['p2q3quest3'] = $_POST['p2q3quest3'];
  $_SESSION['p2q3quest4'] = $_POST['p2q3quest4'];
  $_SESSION['p2q3quest5'] = $_POST['p2q3quest5'];
  $_SESSION['p2q3quest6'] = $_POST['p2q3quest6'];
  $_SESSION['p2q3quest7'] = $_POST['p2q3quest7'];
  $_SESSION['p2q3quest8'] = $_POST['p2q3quest8'];
  $_SESSION['p2q3quest9'] = $_POST['p2q3quest9'];
  $_SESSION['p2q3quest10'] = $_POST['p2q3quest10'];
  $_SESSION['p2q3quest11'] = $_POST['p2q3quest11'];
  $_SESSION['p2q3quest12'] = $_POST['p2q3quest12'];
  $_SESSION['p2q3quest13item1'] = $_POST['p2q3quest13item1'];
  $_SESSION['p2q3quest14item1'] = $_POST['p2q3quest14item1'];
  $_SESSION['p2q3quest15item1'] = $_POST['p2q3quest15item1'];
  $_SESSION['p2q3quest16item1'] = $_POST['p2q3quest16item1'];
  $_SESSION['p2q4quest0'] = $_POST['p2q4quest0'];
  $_SESSION['p2q4quest1'] = $_POST['p2q4quest1'];
  $_SESSION['p2q4quest2'] = $_POST['p2q4quest2'];
  $_SESSION['p2q4quest3'] = $_POST['p2q4quest3'];
  $_SESSION['p2q4quest4'] = $_POST['p2q4quest4'];
  $_SESSION['p2q4quest5'] = $_POST['p2q4quest5'];
  $_SESSION['p2q4quest6'] = $_POST['p2q4quest6'];
  $_SESSION['p2q4quest7'] = $_POST['p2q4quest7'];
  $_SESSION['p2q4quest8'] = $_POST['p2q4quest8'];
  $_SESSION['p2q4quest9'] = $_POST['p2q4quest9'];
  $_SESSION['p2q4quest10'] = $_POST['p2q4quest10'];
  $_SESSION['p2q4quest11'] = $_POST['p2q4quest11'];
  $_SESSION['p2q4quest12'] = $_POST['p2q4quest12'];
  $_SESSION['p2q4quest13item1'] = $_POST['p2q4quest13item1'];
  $_SESSION['p2q4quest14item1'] = $_POST['p2q4quest14item1'];
  $_SESSION['p2q4quest15item1'] = $_POST['p2q4quest15item1'];
  $_SESSION['p2q4quest16item1'] = $_POST['p2q4quest16item1'];
/*
  echo "<pre>";
  var_dump($_SESSION);
  echo "</pre>";
*/
  header("location: ../view/p3.php");
} else {
  header("location: ../view/p2.php");
}
