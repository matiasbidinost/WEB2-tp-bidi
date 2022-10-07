<?php
require_once('libs/Smarty.class.php');

class LeagueView
{
  public function showHome()
  {
    $smarty = new Smarty();
    $smarty->display('templates/header.tpl'); // muestro el template        
  }
  public function showForm()
  {
    $smarty = new Smarty();
    $smarty->display('templates/form.tpl');
  }
  public function showLiga($ligas)
  {
    $smarty = new Smarty();
    $smarty->assign('ligas', $ligas);
    $smarty->display('templates/header.tpl');
    $smarty->display('templates/league.tpl');
  }
  public function show_History($historyLeague)
  {
    $smarty = new Smarty();
    $smarty->assign('ligas', $historyLeague);
    $smarty->display('templates/header.tpl');
    $smarty->display('templates/leagueHistory.tpl');
  }
  public function showTeams($equipos)
  {
    $smarty = new Smarty();
    $smarty->assign('equipos', $equipos);
    $smarty->display('templates/header.tpl');
    $smarty->display('templates/teamsInLeague.tpl');
  }
}
