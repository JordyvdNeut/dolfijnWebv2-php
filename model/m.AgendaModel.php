<?php
require_once "model/m.Datahandler.php";

class OpeningstijdenModel
{
  public function __construct()
  {
    $this->DataHandler = new DataHandler("localhost", "mysql", "gastoude_websiteV2", "root", "");
    // $this->DataHandler = new DataHandler("https://cpanel1.cheesehosting.net:2083/", "mysql", "gastoude_websiteV2", "root", "");
  }



  public function __destruct()
  {
  }
}
