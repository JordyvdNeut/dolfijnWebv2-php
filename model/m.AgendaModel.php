<?php
require_once "model/m.Datahandler.php";

class AgendaModel
{
  public function __construct()
  {
    $this->DataHandler = new DataHandler();
  }



  public function __destruct()
  {
  }
}
