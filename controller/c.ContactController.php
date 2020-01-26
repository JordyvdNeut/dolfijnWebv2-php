<?php
require_once "model/m.ContactModel.php";

class ContactController
{
  public function __construct()
  {
    $this->ContactModel = new ContactModel();
  }



  public function __destruct()
  {
  }
}
