<?php
require_once "model/m.Datahandler.php";
require_once "config.php";

class OpeningstijdenModel
{
  public function __construct()
  {
    $this->DataHandler = new DataHandler(databaseInfo[0], databaseInfo[1], databaseInfo[2], databaseInfo[3], databaseInfo[4]);
  }

  public function readDatums()
  {
    try{
    $sql = "SELECT * FROM `openingstijden`";
    $result = $this->DataHandler->readsData($sql);
    return $result;
    } catch(exception $e) {
      throw $e;
    }    
  }
  
  public function readInfo()
  {
    try{
    $sql = "SELECT text FROM `informatie` WHERE `info-id` = 1";
    $result = $this->DataHandler->readData($sql);
    return $result;
    } catch(exception $e) {
      throw $e;
    }    
  }



  public function __destruct()
  {
  }
}
