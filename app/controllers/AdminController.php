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
    $this->adminView->showFupdate();
  
    
  }
 public function register(){
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $contrasenia = $_POST['contrasenia'];   
  $this->adminModel->registerUser($nombre,$email,$contrasenia); 

  $this->adminView->showHome();
  }
 public function newLeague(){
  $logo = $_POST['logo']; 
  $liga = $_POST['liga']; 
  $record = $_POST['record']; 
  $historia = $_POST['historia']; 

  $this->adminModel->new_League($logo,$liga,$record,$historia);

 }
}
