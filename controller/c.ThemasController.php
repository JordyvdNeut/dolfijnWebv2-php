<?php
require_once "model/m.ThemasModel.php";

class ThemasController
{
  public function __construct()
  {
    $this->ThemasModel = new ThemasModel();
  }

  public function themasPage()
  {
    include "view/themas/themas.php";
  }

  public function __destruct()
  {
  }
}
