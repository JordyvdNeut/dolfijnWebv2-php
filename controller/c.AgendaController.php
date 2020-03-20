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
    $datums = $this->AgendaModel->readDatums();
    $info = $this->AgendaModel->readInfo();
    include "view/agenda/agenda.php";
  }


  public function __destruct()
  {
  }
}
