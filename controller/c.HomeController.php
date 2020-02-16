<?php
require_once "model/m.HomeModel.php";

class HomeController
{
  public function __construct()
  {
    $this->HomeModel = new HomeModel();
  }

  public function collectHome()
  {
    include "view/home.php";
  }


  public function __destruct()
  {
  }
}
