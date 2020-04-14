<?php
require_once "model/m.Datahandler.php";
require_once "config.php";

class ThemasModel
{
  public function __construct()
  {
    $this->DataHandler = new DataHandler(databaseInfo[0], databaseInfo[1], databaseInfo[2], databaseInfo[3], databaseInfo[4]);
  }



  public function __destruct()
  {
  }
}
