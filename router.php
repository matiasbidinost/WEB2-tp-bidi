<?php
require_once './app/controllers/LeagueController.php';
require_once './app/controllers/TeamController.php';
require_once './app/controllers/UserController.php';
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

// lee la acción
$action = 'home';

if (!empty($_GET['action'])) { //si no se escribe home, entra igual al home (todas las url son por GET)
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían

}
$param = explode('/', $action);
$leagueController = new LeagueController();
$teamController = new TeamController();
$userController = new UserController();
switch ($param[0]) {
    case 'home':
        $leagueController->showHome();
        $leagueController->showForm();
    break;
    //mostrando ligas por param diff de 0
    case 'leagues':
        if (isset($param[1])) { //primero chequeo q haya un parametro 1 seteado
            if (intval($param[1])) { //luego chequeo q el param 1 sea un numero y no otra cosa
                if (isset($param[2])) {
                    if ($param[2] == 'history') { //luegoo le digo si el param 2 es historiao es equipos

                        $leagueController->showHistory($param[1]); //showHistory muestra historia

                    } else if ($param[2] == 'team') { //intval($param[1])
                        $leagueController->showTeamsInThisLeague($param[1]); //league que un id....url/league/1
                    } else {
                    }
                }else{
                    echo "error 404 not found";
                }
            } //url/leagues/1
        } else {
            $leagueController->showLeague();
        }
    break;
    //parte de registro y admin
    case 'register':
        $userController->register();
    break;
    case 'login':
        $userController->login();
    break;
    case'adminPanel':
      $userController->showAdmin();
    break;
    case'logout':
      $userController->logout();
    break;
      // ---------------
    // Parte de leagues
    case 'newLeague':
            $leagueController->newLeague();
    break;
    case 'deleteLeague':
        $leagueController->deleteLeague();
    break;
    case'modifyLeague':
        $leagueController->modifyLeague();
    break;
    // ---------------
    // parte de equipos 
    case 'teams':
        $teamController->showTeams();
    break;
    case'deleteTeams':
        $teamController->deleteTeams();
    break;
    case'newTeams':
        $teamController->newTeams();
    break;
    case'modifyTeams':
        $teamController->modifyTeams();
    break;

    default:
        echo "Error 404 not found";
        # code...
        break;
}
