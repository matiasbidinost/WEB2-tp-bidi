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
    $usuario = array(
      "nombre" => $_POST["user"],
      "email" => $_POST["email"],
      "contrasenia" => $_POST["pass"],
    );
    $this->adminModel->registerUser($usuario);
  }
public function register(){
      
   
    echo "llegue";
  }
}
