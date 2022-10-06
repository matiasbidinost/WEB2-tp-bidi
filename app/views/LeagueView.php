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

            echo '<li><a href = "league/1">' . $ligass->liga . '</a></li>';
        }
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