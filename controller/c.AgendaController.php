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
    include "view/openingstijden/openingstijden.php";
  }


  public function __destruct()
  {
  }
}
