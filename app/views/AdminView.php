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
  public function showUpdate($ligas,$equipos){
    $smarty = new  Smarty();
    $smarty->display('templates/header.tpl');
    $smarty->assign('ligas', $ligas);
    $smarty->assign('equipos', $equipos);
    $smarty->display('templates/adminEdit.tpl');
  }
    
  public function showSuccess(){
    $smarty = new Smarty();
    $smarty->display('templates/header.tpl');
    $smarty->display('templates/success.tpl');
    header("refresh:2; url=home" );
  }
  public function showError(){
    $smarty = new Smarty();
    $smarty->display('templates/header.tpl');
    $smarty->display('templates/error.tpl'); 
    header("refresh:2; url=home" );
  }
}