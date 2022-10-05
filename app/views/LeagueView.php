<?php
require_once ('libs/Smarty.class.php');

class LeagueView
{
  public function showHome(){
      $smarty = new Smarty();
      $smarty->display('templates/header.tpl'); // muestro el template        
    }
    public function showLiga($ligas)
    {
      foreach ($ligas as $ligass) {
        
        echo '<li>' . $ligass->liga . '</li>';
      }
    }
    public function showTeam($equipos)
    {
      foreach ($equipos as $equiposs) {
        
        echo '<li>' . $equiposs->nombre . '</li>';
      }
    }
    // public function showError($mensaje){
    // $mensaje ="error";
    // }



}