<?php
require_once "model/m.AgendaModel.php";

class AgendaController
{
  public function __construct()
  {
    $this->AgendaModel = new AgendaModel();
  }



  public function __destruct()
  {
  }
}
