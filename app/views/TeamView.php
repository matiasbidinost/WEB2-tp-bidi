    <?php
require_once('libs/Smarty.class.php');
    class TeamView
    {
        public function showTeam($equipos)
        {
          $smarty = new Smarty();
          $smarty->assign('equipos', $equipos);
          $smarty->display('templates/team.tpl');  
        }
    }
