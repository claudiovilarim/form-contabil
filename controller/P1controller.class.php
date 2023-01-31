<?php

require_once "../model/StatusPage.class.php";

class P1controller
{
  public function showMessagePopUp()
  {
    $statusPage = new StatusPage();
    $currentStatus = $statusPage->verifyStatus()[0]['cod'];

    if ($currentStatus == 1){
      echo "sem alerta";
    }
    if ($currentStatus == 2){
      echo "exibir modal 1";
    }
    if ($currentStatus == 3){
      echo "exibir modal 2";
    }
    if ($currentStatus == 4){
      echo "exibir quadro 1";
    }
    if ($currentStatus == 5){
      echo "exibir quadro 2";
    }
    $statusPage->updateStatus($currentStatus);

    return $currentStatus;
  }
}
