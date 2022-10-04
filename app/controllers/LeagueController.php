<?php
require_once './app/models/LeagueModel.php';
require_once './app/views/LeagueView.php';

//toda secuencia de comandos empieza por aca, sigue por el model(a veces) y despues view (a veces)

class LeagueController
{
  private $LeagueModel;
  private $LeagueView;

  public function __construct()
  {
    $this->LeagueModel = new LeagueModel();
    $this->LeagueView = new LeagueView();
  }
    public function ShowHome()
  {
    $this->LeagueView->showHome();
  }
  public function showLeague()
  {
    $ligas = $this->LeagueModel->getAllLigas();
    if (!empty($ligas)) {
      $this->LeagueView->showLiga($ligas);
    }
  }
  //   public function showTeamsInThisLeague($equipos)
  // {
  //   $equipos = $this->model->get_teams();
  //   if (!empty($equipos)){
  //     $this->view->showTeam($equipos);
  //   }
  // }
}