<?php
require_once "model/m.HomeModel.php";

class HomeController
{
  public function __construct()
  {
    $this->HomeModel = new HomeModel();
  }

  public function homePage()
  {
    $subTitles = $this->HomeModel->readSubTitles();
    include "view/home/home.php";
  }

  public function __destruct()
  {
  }
}
