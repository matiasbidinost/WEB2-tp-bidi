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
  public function showForm()
  {
    $this->leagueView->showForm();
  }
  public function showLeague()
  {
    $ligas = $this->leagueModel->getAllLigas();
    if (!empty($ligas)) {
      $this->leagueView->showLiga($ligas);
    }
  }
  public function showTeamsInThisLeague($id_fk_liga)
  {
    $equipos = $this->leagueModel->get_team_by_league($id_fk_liga);
    if (!empty($equipos)) {
      $this->leagueView->showTeams($equipos);
    }
  }
  public function showHistory($history)
  {
    $historyLeague = $this->leagueModel->get_league_history($history);
    if (!empty($historyLeague)) {
      $this->leagueView->show_History($historyLeague);
    }
  }
  // Elimino, agrego, modificos LEAGUES
    public function newLeague(){
    $logo = $_POST['logo']; 
    $liga = $_POST['liga']; 
    $record = $_POST['record']; 
    $historia = $_POST['historia'];

    if(isset($_POST) and !empty($_POST)){
    $this->leagueModel->new_League($logo,$liga,$record,$historia);
    
    $this->leagueView->showSuccess();
   } else {
    $this->leagueView->showError();
  }
  }
  // Borro ligas
  public function deleteLeague(){
  $idLiga = $_POST['idLiga'];
  $id_fk_liga = $_POST['idLiga'];

  if(isset($_POST) and !empty($_POST)){
  $equipos=$this->leagueModel->get_team_by_league($id_fk_liga);
  if(empty($equipos)){
  $this->leagueModel->delete_League($idLiga);
    $this->leagueView->showSuccess();
   } else {
    $this->leagueView->showLeagueError($equipos);
  }
}else{
  $this->leagueView->showError();
}
}
//  Modificar leagues
 public function modifyLeague(){
   $logo = $_POST['logo']; 
   $liga = $_POST['liga']; 
   $record = $_POST['record']; 
   $historia = $_POST['historia'];
   $idLiga = $_POST['idLiga'];

  if(isset($_POST) and !empty($_POST)){
  $this->leagueModel->modifyL($logo,$liga,$record,$historia,$idLiga);
  
    $this->leagueView->showSuccess();
   } else {
    $this->leagueView->showError();
  }
}
}
