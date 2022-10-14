<?php
require_once './app/models/UserModel.php';
require_once './app/views/UserView.php';
require_once './helpers/Auth.Helper.php';
define('HOME', '//' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . '/');
define('LOGIN', '//' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . '/login');
//toda secuencia de comandos empieza por aca, sigue por el model(a veces) y despues view (a veces)

class UserController
{
  private $userModel;
  private $userView;
  private $authHelper;

  public function __construct()
  {
    $this->userModel = new UserModel();
    $this->userView = new UserView();
    $this->authHelper = new AuthHelper();
  }
  public function showAdmin(){
    $this->authHelper->CheckLoggedIn();
      $ligas = $this->userModel->getAllLigas();
      $equipos = $this->userModel->get_teams();
      if (!empty($ligas) and !empty($equipos)) {
      $this->userView->showUpdate($ligas,$equipos);
  } 
}
  // Registro
 public function register(){
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $contrasenia = $_POST['contrasenia']; 
  $hash = password_hash($contrasenia, PASSWORD_DEFAULT);  
  $this->userModel->registerUser($nombre,$email,$hash); 
  $this->userView->showSuccess();
  }     
  // Parte login
  public function login(){
  $nombre = $_POST['nombre'];
  $contrasenia = $_POST['contrasenia'];   

  $user = $this->userModel->getByUsername($nombre);

  if (!empty($user) && password_verify($contrasenia, $user->contrasenia)) {
    
    $this->authHelper->login($user);

    header("location: adminPanel");
    
  } else {
      $this->userView->showError();
      echo("Login incorrecto");
    }
  }
  public function logout(){
        $this->authHelper->logout();
        header('Location: home');

  }
  }
