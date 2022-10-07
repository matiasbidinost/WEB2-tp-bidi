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
  public function get_team_by_league($id_liga)
  {
    $query = $this->db->prepare('SELECT * FROM `equipos` WHERE `id_fk-liga`=?');
    $query->execute([$id_liga]);
    $equipo = $query->fetchAll(PDO::FETCH_OBJ); //fetch un solo resultado, lo devolvemos en formato objeto. Es un arreglo
    return $equipo;
  }
  public function get_league_history($historia)
  {
    $query = $this->db->prepare('SELECT * FROM `ligas` WHERE `idLiga`=?');
    $query->execute([$historia]);
    $liga = $query->fetchAll(PDO::FETCH_OBJ); //fetch un solo resultado, lo devolvemos en formato objeto. Es un arreglo
    return $liga;
  }
    public function get_record($record)
  {
    $query = $this->db->prepare('SELECT * FROM `ligas` WHERE `idLiga`=?');
    $query->execute([$record]);
    $RecordL = $query->fetchAll(PDO::FETCH_OBJ); //fetch un solo resultado, lo devolvemos en formato objeto. Es un arreglo
    return $RecordL;
  }
}
