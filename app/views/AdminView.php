<?php
require_once('libs/Smarty.class.php');

class AdminView
{
  public function showHome()
  {
    $smarty = new Smarty();
    $smarty->display('templates/header.tpl'); // muestro el template        
  }
  public function showSignUp(){
    $smarty = new  Smarty();
    $smarty->display('templates/header.tpl');
    $smarty->display('templates/signUp.tpl');
  }
  public function showFupdate($ligas){
    $smarty = new  Smarty();
    $smarty->assign('ligas', $ligas);
    $smarty->display('templates/adminLeagues.tpl');
  }
  public function TeamsUpdate($equipos){
    $smarty = new  Smarty();
    $smarty->assign('equipos', $equipos);
    $smarty->display('templates/adminTeams.tpl');
  }  
  public function showSuccess(){
    $smarty = new Smarty();
    $smarty->display('templates/header.tpl');
    $smarty->display('templates/success.tpl');
  }
}