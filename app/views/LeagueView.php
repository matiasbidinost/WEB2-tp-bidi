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
        foreach ($ligas as $ligass) {

            echo '<a href = "league/'.$ligass->idLiga.'">' . $ligass->liga . '</a>';
            echo '<img width="100" height="50" src= "' . $ligass->logo . '"></img>';
            echo '<br>';
        }
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

                echo '<a>' . $historiaL->historia . '</a>';
            }
    }
    public function showRecords($statsLeague)
    {
          foreach($statsLeague as $statsL){
            echo '<a>' . $statsL->statsLeague . '</a>';
          }
    }
}