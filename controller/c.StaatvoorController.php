<?php
require_once "model/m.StaatvoorModel.php";

class StaatvoorController
{
  public function __construct()
  {
    $this->StaatvoorModel = new StaatvoorModel();
  }

  public function staatvoorPage()
  {
    $staanvoor = $this->StaatvoorModel->readStaatvoorItems();
    include "view/staatvoor/staatvoor.php";
  }

  public function __destruct()
  {
  }
}
