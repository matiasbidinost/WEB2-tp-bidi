<?php
require_once './app/controllers/LeagueController.php';
require_once './app/controllers/TeamController.php';
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
switch ($param[0]) {
    case 'home':
        $leagueController->showHome();
        break;

    case 'league':
        $leagueController->showLeague();
        if ($param[0] == 'league') {
            if (isset($param[1])) {
                $leagueController->showTeamsInThisLeague($param[1]);
                if (isset($param[1]) == 'history') {

                    $LeagueController->showHistory($param[1]); //showHistory muestra historia

                }
                if (isset($param[1]) == 'stats') {
                    $LeagueController->showStats($param[1]); //showStats muestra las records y estadisticas
                }
            }
        }
        break;
    case 'teams':
        $teamController->showTeams();
        break;

    default:
        echo "Error 404 not found";
        # code...
        break;
}
