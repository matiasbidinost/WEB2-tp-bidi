<?php
require_once ('libs/Smarty.class.php');

class LeagueView
{
  public function showHome(){
      $smarty = new Smarty();
      $smarty->display('templates/header.tpl'); // muestro el template        
    }
    public function showForm(){
      $smarty = new Smarty();
      $smarty->display('templates/form.tpl');
    }
    public function showLiga($ligas)
    {
      $smarty = new Smarty();
      $smarty->assign('ligas', $ligas);
      $smarty->display('templates/league.tpl');      
    }
    public function showTeam($equipos)
    {
      foreach ($equipos as $equiposs) {
        
        echo '<li>' . $equiposs->nombre . '</li>';
      }
    }
    public function show_History($historyLeague)
    {

            foreach ($historyLeague as $historiaL) {

                echo '<a>' . $historiaL->historia . '</a><br>';
                echo '<h1>  RECORDS</h1>';
                echo '<a>' . $historiaL->record . '</a>';

            }
    }
    public function showRecords($statsLeague)
    {
          foreach($statsLeague as $statsL){
            echo '<a>' . $statsL->statsLeague . '</a>';
          }
    }
}