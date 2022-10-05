    <?php
require_once('libs/Smarty.class.php');
    class TeamView
    {
        public function showHome()
        {
            echo "home";
        }
        public function showTeam($equipos)
        {
            foreach ($equipos as $equiposs) {
                echo '<li>' . $equiposs->nombre . '</li>';
            }
        }
    }
