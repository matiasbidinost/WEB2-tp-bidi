    <?php
    require_once('libs/Smarty.class.php');
    class TeamView
    {
        public function showTeams($equipos)
        {
            $smarty = new Smarty();
            $smarty->assign('equipos', $equipos);
            $smarty->display('templates/header.tpl');
            $smarty->display('templates/teams.tpl');
        }  
       
    }
