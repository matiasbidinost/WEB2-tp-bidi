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
    $this->teamModel = new TeamModel();
    $this->teamView = new TeamView();
  }
  

  public function showTeams()
  {
    $equipos = $this->teamModel->get_teams();
    if (!empty($equipos)){
      $this->teamView->showTeams($equipos);
    }
}
//  ----------------------------------------------------------
//  Parte de equipos
 public function deleteTeams(){
  $id_equipo = $_POST['id_equipo'];

  if(isset($_POST) and !empty($_POST)){
  $this->teamModel->deleteTeams($id_equipo);
    $this->teamView->showSuccess();
   } else {
    $this->teamView->showError();
  }
}
  public function newTeams(){
  $id_fk_liga = $_POST['id_fk_liga'];
  $nombre = $_POST['nombre']; 
  $logo = $_POST['logo']; 
  $historia = $_POST['historia']; 
  $jugadores = $_POST['jugadores'];

  if(isset($_POST) and !empty($_POST)){
  $this->teamModel->new_Teams($id_fk_liga, $nombre,$logo,$historia,$jugadores);
  
    $this->teamView->showSuccess();
   } else {
    $this->teamView->showError();
  }
 }
//  Modify teams
 
 public function modifyTeams(){
   $id_fk_liga = $_POST['id_fk_liga']; 
   $nombre = $_POST['nombre']; 
   $logo = $_POST['logo']; 
   $historia = $_POST['historia']; 
   $jugadores = $_POST['jugadores'];
   $id_equipo = $_POST['id_equipo'];
   //el if este es enorme pero se acegura q todos los campos esten llenos (deberia haber algo mejor pero no se me ocurre)
  if((isset($_POST['id_fk_liga']) and !empty($_POST['id_fk_liga']))and
  (isset($_POST['nombre']) and !empty($_POST['nombre']))and
  (isset($_POST['logo']) and !empty($_POST['logo']))and
  (isset($_POST['historia']) and !empty($_POST['historia']))and
  (isset($_POST['jugadores']) and !empty($_POST['jugadores']))and
  (isset($_POST['id_equipo']) and !empty($_POST['id_equipo']))){
  $this->teamModel->modifyTeam($id_fk_liga,$nombre,$logo,$historia,$jugadores,$id_equipo);
  
    $this->teamView->showSuccess();
   } else {
    $this->teamView->showError();
  }
 } 
}