<?php
require_once ('libs/Smarty.class.php');

class LeagueView
{
    public function showHome(){
        require_once './templates/header.tpl';
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