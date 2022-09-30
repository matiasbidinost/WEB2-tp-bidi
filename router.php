<?php
require_once './app/controllers/Controller.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

// lee la acción
$action = 'home';

if (!empty($_GET['action'])) { //si no se escribe home, entra igual al home (todas las url son por GET)
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían

}
$param = explode('/', $action);
$taskController = new Controller();

switch ($param[0]) {
    case 'home':
        $taskController->taskShowHome(); //me falta crear un showhome muestra la pagina de inicio
        break;

    case 'league':
        $taskController->showLigas();
        break;

    case 'teams':
        $taskController->showTeamsInThisLeague($params[1]); //showTeamsInThisLeague que muestre solo una liga en el param 1 (especifica)
        break;

    case 'history':
        $taskController->showHistory($params[1]); //showHistory muestra historia
        break;

    case 'stats':
        $taskController->showStats($params[1]); //showStats muestra las records y estadisticas
        break;

    default:
        echo "404 not found";
        # code...
        break;
}
