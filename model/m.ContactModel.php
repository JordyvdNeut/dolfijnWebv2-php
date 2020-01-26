<?php
require_once "model/m.DataHandler.php";

class ContactModel
{
  public function __construct()
  {
    $this->DataHandler = new DataHandler();
  }



  public function __destruct()
  {
  }
}
