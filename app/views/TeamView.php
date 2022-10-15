    <?php
    require_once('libs/Smarty.class.php');
    class TeamView
    {
        public function showTeams($equipos)
        {
            $smarty = new Smarty();
            $smarty->assign('equipos', $equipos);
            $smarty->display('templates/teams.tpl');
        }  
      public function showSuccess(){
        $smarty = new Smarty();
        $smarty->display('templates/success.tpl');
        header("refresh:1; url=adminPanel");
      }
      public function showError(){
        $smarty = new Smarty();
        $smarty->display('templates/error.tpl'); 
        header("refresh:1; url=adminPanel");
      }  
    }
