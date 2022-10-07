<?php
require_once('libs/Smarty.class.php');

class LeagueView
{
  public function showHome()
  {
    $smarty = new Smarty();
    $smarty->display('templates/header.tpl'); // muestro el template        
  }
}