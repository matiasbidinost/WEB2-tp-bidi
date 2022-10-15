<?php
require_once('libs/Smarty.class.php');
require_once('helpers/auth.helper.php');

class UserView
{
  private $smarty;

  public function __construct(){
    $authHelper = new AuthHelper();    
    $this->smarty = new Smarty();     
    

  }
  public function showHome()
  {
    $smarty = new Smarty();
    $smarty->display('templates/header.tpl'); // muestro el template        
  }
  public function showUpdate($ligas,$equipos){
    $smarty = new  Smarty();
    $smarty->assign('ligas', $ligas);
    $smarty->assign('equipos', $equipos);
    $smarty->display('templates/adminEdit.tpl');
  }
    
  public function showSuccess(){
    $smarty = new Smarty();
    $smarty->display('templates/headerAdmin.tpl');
    $smarty->display('templates/success.tpl');
    header("refresh:1; url=adminPanel" );
  }
  public function showError(){
    $smarty = new Smarty();
    $smarty->display('templates/header.tpl');
    $smarty->display('templates/error.tpl'); 
    header("refresh:2; url=home");
  }
}