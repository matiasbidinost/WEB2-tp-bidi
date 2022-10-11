<?php
require_once './app/models/AdminModel.php';
require_once './app/views/AdminView.php';

//toda secuencia de comandos empieza por aca, sigue por el model(a veces) y despues view (a veces)

class AdminController
{
  private $AdminModel;
  private $AdminView;

  public function __construct()
  {
    $this->adminModel = new AdminModel();
    $this->adminView = new AdminView();
  }
  public function signUp(){
    $this->adminView->showSignUp();  
  }
  public function showFormUpdate(){
    $ligas = $this->adminModel->getAllLigas();
    if (!empty($ligas)) {
       $this->adminView->showFupdate($ligas);
    }  
  }
  public function showTeamsUpdate(){
    $equipos = $this->adminModel->get_teams();
    if (!empty($equipos)){
      $this->adminView->TeamsUpdate($equipos);
    }  
  }  
 public function register(){
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $contrasenia = $_POST['contrasenia'];   
  $this->adminModel->registerUser($nombre,$email,$contrasenia); 

  $this->adminView->showSuccess();
  }
 public function newLeague(){
  $logo = $_POST['logo']; 
  $liga = $_POST['liga']; 
  $record = $_POST['record']; 
  $historia = $_POST['historia'];

  if(isset($_POST) and !empty($_POST)){
  $this->adminModel->new_League($logo,$liga,$record,$historia);
  
  $this->adminView->showSuccess();
 }
 }
 public function deleteLeague(){
  $idLiga = $_POST['idLiga'];

  if(isset($_POST) and !empty($_POST)){
  $this->adminModel->delete_League($idLiga);
  $this->adminView->showSuccess();
 }}
 public function modifyLeague(){
  $idLiga = $_POST['idLiga'];
  
 }
//  ----------------------------------------------------------
//  Parte de equipos
 public function deleteTeams(){
  $id_equipo = $_POST['id_equipo'];

  if(isset($_POST) and !empty($_POST)){
  $this->adminModel->deleteTeams($id_equipo);
  $this->adminView->showSuccess();
 }}
  public function newTeams(){
  $nombre = $_POST['nombre']; 
  $logo = $_POST['logo']; 
  $historia = $_POST['historia']; 
  $jugadores = $_POST['jugadores'];

  if(isset($_POST) and !empty($_POST)){
  $this->adminModel->new_Teams($nombre,$logo,$historia,$jugadores);
  
  $this->adminView->showSuccess();
 }
 }
}
