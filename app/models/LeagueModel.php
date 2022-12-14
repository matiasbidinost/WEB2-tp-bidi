<?php
class LeagueModel
{
  private $db;
  public function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;' . 'dbname=liga;charset=utf8', 'root', '');
  }
  public function getAllLigas()
  { //trae todo en liga, para mostrarlas por pantalla (el parametro q se va a pasar va a ser $liga)
    $query = $this->db->prepare('SELECT * FROM ligas ORDER BY liga ASC');
    $query->execute();
    return $query->fetchAll(PDO::FETCH_OBJ);
  }
  public function get_team_by_league($id_fk_liga)
  {
    $query = $this->db->prepare('SELECT * FROM `equipos` WHERE `id_fk_liga`=?');
    $query->execute([$id_fk_liga]);
    $equipo = $query->fetchAll(PDO::FETCH_OBJ); //fetch un solo resultado, lo devolvemos en formato objeto. Es un arreglo
    return $equipo;
  }
  public function get_league_history($historia)
  {
    $query = $this->db->prepare('SELECT * FROM `ligas` WHERE `idLiga`=?');
    $query->execute([$historia]);
    $liga = $query->fetchAll(PDO::FETCH_OBJ);
    return $liga;
  }
  public function new_League($liga,$record,$historia, $logo=null){
    $pathImg= null;
    $pathImg=$this->uploadImage($logo);
   $query = $this->db->prepare ('INSERT INTO ligas (liga, record, historia, logo) VALUES (?, ?, ?, ?) '); 
   $query->execute([$liga,$record,$historia,$pathImg]);     
  }
  private function uploadImage($logo){
    $target = 'img/task/' . uniqid() . '.jpg';
    move_uploaded_file($logo, $target);
    return $target;
  }

 //  BORRO LEAGUES
  public function delete_League($idLiga){
    $query = $this->db->prepare ('DELETE FROM `ligas` WHERE `idLiga` = ?'); 
    $query->execute([$idLiga]); 
  }  
  // Modifico leagues
  //logo  
  public function modify_Logo($logo=null, $idLiga){
      $pathImg= null;
      $pathImg=$this->uploadImage($logo);
    $query = $this->db->prepare ("UPDATE ligas SET logo=?WHERE idLiga=?");
   $query->execute([$pathImg,$idLiga]); 
  }
  //nombre liga
  public function modify_Liga($liga,$idLiga){
    $query = $this->db->prepare ("UPDATE ligas SET liga=?WHERE idLiga=?");
   $query->execute([$liga,$idLiga]); 
  } 
  //record
  public function modify_Record($record,$idLiga){
    $query = $this->db->prepare ("UPDATE ligas SET record=?WHERE idLiga=?");
   $query->execute([$record,$idLiga]); 
  } 
  //historia
  public function modify_History($historia,$idLiga){
    $query = $this->db->prepare ("UPDATE ligas SET logo=?WHERE idLiga=?");
   $query->execute([$historia,$idLiga]); 
  } 
}
