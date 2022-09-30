<?php 
require_once '.app/controllers/Controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// lee la acción
$action ='home';

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'inicio'; // acción por defecto si no envían

}
$param=explode('/', $action); 
$taskController = new Controller();

switch ($param[0]) {
    case 'home':
        showHome(); //me falta crear un showhome muestra la pagina de inicio
        break;
        
    case 'league':
        $taskController->showLigas($params[1]);
        break;

    case 'teams':
        showTeamsInThisLeague($params[1]); //showTeamsInThisLeague que muestre solo una liga en el param 1 (especifica)
        break;

    case 'history':
        showHistory($params[1]); //showHistory muestra historia
        break;

    case 'stats':    
        showStats($params[1]); //showStats muestra las records y estadisticas
        break;

    default:
        echo "404 not found";
        # code...
        break;
}


?>