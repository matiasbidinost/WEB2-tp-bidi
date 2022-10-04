    <?php
//require_once SMARTY (mas adelante va a ir esto)
class TeamView
{
    //private $smarty;
    public function __construct()
    {
        //$this->smarty = new Smarty();   
    }
    public function showHome(){
        echo "home";
    }
    public function showTeam($equipos){
        foreach ($equipos as $equiposs) {
            echo '<li>' . $equiposs->$equipo . '</li>';
        }
    }
}