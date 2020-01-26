<?php
require_once "model/m.HomeModel.php";

class HomeController
{
  public function __construct()
  {
    $this->HomeModel = new HomeModel();
  }



  public function __destruct()
  {
  }
}
