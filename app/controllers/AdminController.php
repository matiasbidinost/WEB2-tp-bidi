<?php
require_once './app/models/AdminModel.php';
require_once './app/views/AdminView.php';
define('HOME', '//' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . '/');
define('LOGIN', '//' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . '/login');
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
  public function showAdmin(){
      $this->CheckLoggedIn();
      $ligas = $this->adminModel->getAllLigas();
      $equipos = $this->adminModel->get_teams();
      if (!empty($ligas) and !empty($equipos)) {
      $this->adminView->showUpdate($ligas,$equipos);
  } 
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
  }      
  // Tomo un username y compruebo los q me trae mi post de logueo
  public function login(){  
  $nombre = $_POST['nombre'];
  $contrasenia = $_POST['contrasenia']; 
  $user = $this->adminModel->getByUsername($nombre);
    // encontró un user con el username que mandó, y tiene la misma contraseña
    if (!empty($user) && password_verify($contrasenia, $user->contrasenia)) {
      // Ingreso datos de Ligas y Equipos, los obtengo y compruebo, de ahi muestro la parte de administrador
    // $this->showAdmin();
// Inicio la sesión;
    session_start();
    $_SESSION["nombre"] = $user;
    header("location: adminPanel");
  } else {
      $this->adminView->showError();
      echo("Login incorrecto");
    }
  }
  public function logout(){
    session_start();
    session_destroy();
    header('Location: home');
    die();
  }
  private function CheckLoggedIn(){
    session_start();
    if(!isset($_SESSION['nombre'])){
      header('Location:' . LOGIN);
      die();
    }
  }
  }
