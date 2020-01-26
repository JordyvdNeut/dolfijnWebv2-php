<?php
require_once "model/m.Datahandler.php";

class ThemasModel
{
  public function __construct()
  {
    $this->DataHandler = new DataHandler();
  }



  public function __destruct()
  {
  }
}
