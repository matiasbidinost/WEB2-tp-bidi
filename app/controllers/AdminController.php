<?php
require_once './app/models/AdminModel.php';
require_once './app/views/AdminView.php';

//toda secuencia de comandos empieza por aca, sigue por el model(a veces) y despues view (a veces)

class LeagueController
{
  private $AdminModel;
  private $AdminView;

  public function __construct()
  {
    $this->adminModel = new AdminModel();
    $this->adminView = new AdminView();
  }

  
}