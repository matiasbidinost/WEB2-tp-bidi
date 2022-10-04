<?php
class LeagueModel
{
  private $db;
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;' . 'dbname=liga;charset=utf8', 'root', '');
  }   
  public function getAllLigas()
  { //trae todo en liga, para mostrarlas por pantalla (el parametro q se va a pasar va a ser $liga)
    $query = $this->db->prepare('SELECT * FROM ligas ORDER BY liga ASC');
    $query->execute();
    return $query->fetchAll(PDO::FETCH_OBJ);
  }
  }