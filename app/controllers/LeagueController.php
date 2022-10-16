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
    if(session_status() != PHP_SESSION_ACTIVE){
      session_start();
    }

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
    $liga = $_POST['liga']; 
    $record = $_POST['record']; 
    $historia = $_POST['historia'];
    if(isset($_POST) and !empty($_POST)){
    if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" || $_FILES['input_name']['type'] == "image/png" ) {
      $this->leagueModel->new_League($liga,$record,$historia, $_FILES['input_name']['tmp_name']);
    }
     else {
      $this->leagueModel->new_League($liga,$record,$historia);
     }
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
 public function modifyLogo(){
   $logo = $_POST['logo']; 
   $idLiga = $_POST['idLiga'];

  if((isset($_POST['idLiga']) and !empty($_POST['idLiga']))and(isset($_POST['logo']) and !empty($_POST['logo']))){
  $this->leagueModel->modify_Logo($logo,$idLiga);
  
    $this->leagueView->showSuccess();
   } else {
    $this->leagueView->showError();
  }
}
public function modifyLigaN(){
  $liga= $_POST['liga'];
  $idLiga = $_POST['idLiga'];
   if((isset($_POST['idLiga']) and !empty($_POST['idLiga']))and(isset($_POST['liga']) and !empty($_POST['liga']))){
  $this->leagueModel->modify_Liga($liga,$idLiga);
  
    $this->leagueView->showSuccess();
   } else {
    $this->leagueView->showError();
  }
}
public function modifyRecord(){
 $record= $_POST['record'];
 $idLiga = $_POST['idLiga']; 
  
 if((isset($_POST['idLiga']) and !empty($_POST['idLiga']))and(isset($_POST['record']) and !empty($_POST['record']))){
  $this->leagueModel->modify_Record($record,$idLiga);
  
    $this->leagueView->showSuccess();
   } else {
    $this->leagueView->showError();
  }
}
public function modifyHistory(){
 $historia= $_POST['historia'];
 $idLiga = $_POST['idLiga']; 
  if((isset($_POST['idLiga']) and !empty($_POST['idLiga']))and(isset($_POST['historia']) and !empty($_POST['historia']))){
  $this->leagueModel->modify_History($historia,$idLiga);
  
    $this->leagueView->showSuccess();
   } else {
    $this->leagueView->showError();
  }
}

}
