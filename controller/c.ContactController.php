<?php
require_once "model/m.ContactModel.php";

class ContactController
{
  public function __construct()
  {
    $this->ContactModel = new ContactModel();
  }

  public function contactPage()
  {
    include "view/contact/contact.php";
  }

  public function __destruct()
  {
  }
}
