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
    $this->leagueModel = new LeagueModel();
    $this->leagueView = new LeagueView();
  }
  public function showHome()
  {
    $this->leagueView->showHome();
    
  }
  public function showForm(){
    $this->leagueView->showForm();
  }
  public function showLeague()
  {
    $ligas = $this->leagueModel->getAllLigas();
    if (!empty($ligas)) {
      $this->leagueView->showHome();
      $this->leagueView->showLiga($ligas);
    }
  }
  public function showTeamsInThisLeague($id_liga)
  {
    $equipos = $this->leagueModel->get_team_by_league($id_liga);
    if (!empty($equipos)) {
      $this->leagueView->showTeam($equipos);
    }
  }
  public function showHistory($history)
  {
    $historyLeague = $this->leagueModel->get_league_history($history);
    if (!empty($historyLeague)) {
      $this->leagueView->show_History($historyLeague);
    }
  }
  public function showStats($record)
  {
    $stats = $this->leagueModel->get_record($record);
    if (!empty($equipos)) {
      $this->leagueView->showRecords($stats);
    }
  }
}
