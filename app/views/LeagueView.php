<?php
//require_once SMARTY (mas adelante va a ir esto)
class LeagueView
{
    //private $smarty;
    public function __construct()
    {
        //$this->smarty = new Smarty();   
    }
    public function showHome(){
        require_once './templates/header.php';
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