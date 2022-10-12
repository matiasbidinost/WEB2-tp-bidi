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
  // Registro y logueo
 public function register(){
  // registro con lo que me ingresa el usuario en los form correcto
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $contrasenia = $_POST['contrasenia']; 
  $hash = password_hash($contrasenia, PASSWORD_DEFAULT);  
  $this->adminModel->registerUser($nombre,$email,$hash); 
  $this->adminView->showSuccess();
  echo("Te registraste bien");
  }      
  // Tomo un username y compruebo los q me trae mi post de logueo
  public function login(){
  $nombre = $_POST['nombre'];
  $contrasenia = $_POST['contrasenia']; 
  $user = $this->adminModel->getByUsername($nombre);
        // encontró un user con el username que mandó, y tiene la misma contraseña
        if (!empty($user) && password_verify($contrasenia, $user->contrasenia)) {
          // Ingreso datos de Ligas y Equipos, los obtengo y compruebo, de ahi muestro la parte de administrador
          $ligas = $this->adminModel->getAllLigas();
          $equipos = $this->adminModel->get_teams();
          if (!empty($ligas) and !empty($equipos)) {
          $this->adminView->showUpdate($ligas,$equipos);
        }
        } else {
          $this->adminView->showError();
        }

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
//  Modificar leagues
 public function modifyLeague(){
   $logo = $_POST['logo']; 
   $liga = $_POST['liga']; 
   $record = $_POST['record']; 
   $historia = $_POST['historia'];
   $idLiga = $_POST['idLiga'];

  if(isset($_POST) and !empty($_POST)){
  $this->adminModel->modifyL($logo,$liga,$record,$historia,$idLiga);
  
  $this->adminView->showSuccess();
 }
//  Modify teams
 }
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
  $this->adminModel->modifyTeam($id_fk_liga,$nombre,$logo,$historia,$jugadores,$id_equipo);
  
  $this->adminView->showSuccess();
 }
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
  $id_fk_liga = $_POST['id_fk_liga'];
  $nombre = $_POST['nombre']; 
  $logo = $_POST['logo']; 
  $historia = $_POST['historia']; 
  $jugadores = $_POST['jugadores'];

  if(isset($_POST) and !empty($_POST)){
  $this->adminModel->new_Teams($id_fk_liga, $nombre,$logo,$historia,$jugadores);
  
  $this->adminView->showSuccess();
 }
 }
}
