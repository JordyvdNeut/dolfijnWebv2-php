<?php
require_once "model/m.Datahandler.php";
require_once "config.php";

class StaatvoorModel
{
  public function __construct()
  {
    $this->DataHandler = new DataHandler(databaseInfo[0], databaseInfo[1], databaseInfo[2], databaseInfo[3], databaseInfo[4]);
  }

  public function readStaatvoorItems()
  {
    try{
    $sql = "SELECT * FROM staatvoorItems";
    $result = $this->DataHandler->readsData($sql);
    return $result;
    } catch(exception $e) {
      throw $e;
    }
  }



  public function __destruct()
  {
  }
}
