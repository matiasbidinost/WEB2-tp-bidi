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
<<<<<<< HEAD
        foreach ($ligas as $ligass) {

            echo '<li><a href = "league/1">' . $ligass->liga . '</a></li>';
        }
=======
      foreach ($ligas as $ligass) {
        
        echo '<li>' . $ligass->liga . '</li>';
      }
>>>>>>> 4713e32987c76f449d3a092c99d95dc9a6716d85
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

    // public function showError($mensaje){
    // $mensaje ="error";
    // }



}