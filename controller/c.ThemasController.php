<?php
require_once "model/m.ThemasModel.php";

class ThemasController
{
  public function __construct()
  {
    $this->ThemasModel = new ThemasModel();
  }



  public function __destruct()
  {
  }
}
