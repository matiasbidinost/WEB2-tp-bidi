<?php
require_once './app/controllers/LeagueController.php';
require_once './app/controllers/TeamController.php';
require_once './app/controllers/AdminController.php';
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
$adminController = new AdminController();
switch ($param[0]) {
    case 'home':
        $leagueController->showHome();
        $leagueController->showForm();
        // $adminController->showFormUpdate();
        break;
    case 'teams':
        $teamController->showTeams();
        break;
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
    case 'signUp':
        $adminController->signUp();
    break;
    case 'register':
        $adminController->register();
    break;
    case 'login':
        $adminController->login();
    break;
    case 'newLeague':
            $adminController->newLeague();
    break;
    case 'deleteLeague':
        $adminController->deleteLeague();
    break;
    case'modifyLeague':
        $adminController->modifyLeague();
    break;
    // parte de equipos
    case'deleteTeams':
        $adminController->deleteTeams();
    break;
    case'newTeams':
        $adminController->newTeams();
    break;
    case'modifyTeams':
        $adminController->modifyTeams();
    break;

    default:
        echo "Error 404 not found";
        # code...
        break;
}
