<?php
require_once "model/m.AgendaModel.php";

class AgendaController
{
  public function __construct()
  {
    $this->AgendaModel = new AgendaModel();
  }

  public function agendaPage()
  {
    include "view/agenda/agenda.php";
  }


  public function __destruct()
  {
  }
}
