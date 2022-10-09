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
}