<?php
require_once './app/models/Model.php';
require_once './app/views/View.php';

//toda secuencia de comandos empieza por aca, sigue por el model(a veces) y despues view (a veces)

class Controller {
  private $model;
  private $view;

  public function __construct()
  {
    $this->model=new Model();
    $this->view=new View();
  }

public function showLigas($liga){
  $ligas = $this->model->getAllLigas($liga);
  if(!empty($ligas)){
    $this->view->showLiga($ligas);
  }
  // else{
  //   $this->view->showError($mensaje);
  // }
}
}
?>
