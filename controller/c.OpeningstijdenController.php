<?php
require_once "model/m.OpeningstijdenModel.php";

class OpeningstijdenController
{
  public function __construct()
  {
    $this->OpeningstijdenModel = new OpeningstijdenModel();
  }

  public function openingstijdenPage()
  {
    $datums = $this->OpeningstijdenModel->readDatums();
    $info = $this->OpeningstijdenModel->readInfo();
    include "view/openingstijden/openingstijden.php";
  }


  public function __destruct()
  {
  }
}
