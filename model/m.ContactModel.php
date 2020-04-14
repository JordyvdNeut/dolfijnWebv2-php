<?php
require_once "model/m.DataHandler.php";
require_once "config.php";

class ContactModel
{
  public function __construct()
  {
    $this->DataHandler = new DataHandler(databaseInfo[0], databaseInfo[1], databaseInfo[2], databaseInfo[3], databaseInfo[4]);
  }



  public function __destruct()
  {
  }
}
