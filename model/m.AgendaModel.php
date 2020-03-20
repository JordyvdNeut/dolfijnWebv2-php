<?php
require_once "model/m.Datahandler.php";

class AgendaModel
{
  public function __construct()
  {
    $this->DataHandler = new DataHandler("localhost", "mysql", "gastoude_websiteV2", "root", "");
    // $this->DataHandler = new DataHandler("https://cpanel1.cheesehosting.net:2083/", "mysql", "gastoude_websiteV2", "root", "");
  }

  public function readDatums()
  {
    try{
    $sql = "SELECT * FROM `agenda`";
    $result = $this->DataHandler->readsData($sql);
    return $result;
    } catch(exception $e) {
      throw $e;
    }    
  }
  
  public function readInfo()
  {
    try{
    $sql = "SELECT 'text' FROM `informatie` WHERE `info-id` = 1";
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
