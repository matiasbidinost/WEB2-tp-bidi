<?php
require_once './app/models/TeamModel.php';
require_once './app/views/TeamView.php';

//toda secuencia de comandos empieza por aca, sigue por el model(a veces) y despues view (a veces)

class TeamController
{
  private $TeamModel;
  private $TeamView;

  public function __construct()
  {
    $this->TeamModel = new TeamModel();
    $this->TeamView = new TeamView();
  }
  
  // public function showTeamsInThisLeague($equipos)
  // {
  //   $equipos = $this->TeamModel->get_teams();
  //   if (!empty($equipos)){
  //     $this->TeamView->showTeam($equipos);
  //   }

    public function showTeams()
  {
    $equipos = $this->TeamModel->get_teams();
    if (!empty($equipos)){
      $this->TeamView->showTeam($equipos);
    }
}
}