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
    if (session_status() != PHP_SESSION_ACTIVE) {
      session_start();
    }
  }


  public function showTeams()
  {
    $equipos = $this->teamModel->get_teams();
    if (!empty($equipos)) {
      $this->teamView->showTeams($equipos);
    }
  }
  //  ----------------------------------------------------------
  //  Parte de equipos
  public function deleteTeams()
  {
    $id_equipo = $_POST['id_equipo'];

    if (isset($_POST) and !empty($_POST)) {
      $this->teamModel->deleteTeams($id_equipo);
      $this->teamView->showSuccess();
    } else {
      $this->teamView->showError();
    }
  }
  public function newTeams()
  {
    $id_fk_liga = $_POST['id_fk_liga'];
    $nombre = $_POST['nombre'];
    $historia = $_POST['historia'];
    $jugadores = $_POST['jugadores'];
    if (isset($_POST) and !empty($_POST)) {
      if (isset($_POST['id_fk_liga']) and !empty($_POST['id_fk_liga'])) {
        if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" || $_FILES['input_name']['type'] == "image/png" ){
        $this->teamModel->new_Teams($id_fk_liga, $nombre, $historia, $jugadores, $_FILES['input_name']['tmp_name']);
        $this->teamView->showSuccess();
      }else {
        $this->teamView->showError();
      }
    } else {
        $this->teamView->showError();
      }
    } else {
      $this->teamView->showError();
    }
  }
  //  Modify teams

  public function modifyTeamFk()
  {
    $id_fk_liga = $_POST['id_fk_liga'];
    $id_equipo = $_POST['id_equipo'];
    if ((isset($_POST['id_fk_liga']) and !empty($_POST['id_fk_liga'])) and (isset($_POST['id_equipo']) and !empty($_POST['id_equipo']))) {
      $this->teamModel->modify_TeamFk($id_fk_liga, $id_equipo);

      $this->teamView->showSuccess();
    } else {
      $this->teamView->showError();
    }
  }
  public function modifyTName()
  {
    $nombre = $_POST['nombre'];
    $id_equipo = $_POST['id_equipo'];
    if ((isset($_POST['nombre']) and !empty($_POST['nombre'])) and (isset($_POST['id_equipo']) and !empty($_POST['id_equipo']))) {
      $this->teamModel->modify_TName($nombre, $id_equipo);

      $this->teamView->showSuccess();
    } else {
      $this->teamView->showError();
    }
  }
  public function modifyTLogo()
  {
    $id_equipo = $_POST['id_equipo'];
    if ((isset($_POST['id_equipo']) and !empty($_POST['id_equipo']))) {
      if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" || $_FILES['input_name']['type'] == "image/png" ){
      $this->teamModel->modify_TLogo($_FILES['input_name']['tmp_name'], $id_equipo);

      $this->teamView->showSuccess();
    } else {
      $this->teamView->showError();
    }
  }else {
      $this->teamView->showError();
    }
  }

  public function modifyTHistory()
  {
    $historia = $_POST['historia'];
    $id_equipo = $_POST['id_equipo'];
    if ((isset($_POST['historia']) and !empty($_POST['historia'])) and (isset($_POST['id_equipo']) and !empty($_POST['id_equipo']))) {
      $this->teamModel->modify_THistory($historia, $id_equipo);

      $this->teamView->showSuccess();
    } else {
      $this->teamView->showError();
    }
  }
  public function modifyTPlayers()
  {
    $jugadores = $_POST['jugadores'];
    $id_equipo = $_POST['id_equipo'];
    if ((isset($_POST['jugadores']) and !empty($_POST['jugadores'])) and (isset($_POST['id_equipo']) and !empty($_POST['id_equipo']))) {
      $this->teamModel->modify_TPlayers($jugadores, $id_equipo);

      $this->teamView->showSuccess();
    } else {
      $this->teamView->showError();
    }
  }
}
