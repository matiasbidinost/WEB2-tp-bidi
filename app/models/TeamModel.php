<?php
class TeamModel
{
  private $db;
  public function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;' . 'dbname=liga;charset=utf8', 'root', '');
  }   
   public function get_teams(){
    $query = $this->db->prepare('SELECT * FROM equipos ORDER BY id_equipo ASC');
    $query->execute();
    $equipo = $query->fetchAll(PDO::FETCH_OBJ); //fetch un solo resultado, lo devolvemos en formato objeto. Es un arreglo
    return $equipo;
   }
    public function new_Teams($id_fk_liga, $nombre,$logo,$historia,$jugadores){
   $query = $this->db->prepare ('INSERT INTO `equipos`(`id_fk_liga`, `nombre`, `logo`, `historia`, `jugadores`) VALUES (?, ?, ?, ?, ?) '); 
   $query->execute([$id_fk_liga,$nombre,$logo,$historia,$jugadores]); 
  }   
     // BORRO TEAMS
  public function deleteTeams($id_equipo){
    $query = $this->db->prepare ('DELETE FROM `equipos` WHERE `id_equipo` = ?'); 
    $query->execute([$id_equipo]); 
  }
  //modifico Teams
  public function modify_TeamFk($id_fk_liga,$id_equipo){
    $query = $this->db->prepare ("UPDATE equipos SET id_fk_liga=? WHERE id_equipo=?");
   $query->execute([$id_fk_liga,$id_equipo]); 
}
public function modify_TName($nombre,$id_equipo){
  $query = $this->db->prepare ("UPDATE equipos SET nombre=? WHERE id_equipo=?");
 $query->execute([$nombre,$id_equipo]); 
}
public function modify_TLogo($logo,$id_equipo){
  $query = $this->db->prepare ("UPDATE equipos SET logo=? WHERE id_equipo=?");
 $query->execute([$logo,$id_equipo]); 
}
public function modify_THistory($historia,$id_equipo){
  $query = $this->db->prepare ("UPDATE equipos SET historia=? WHERE id_equipo=?");
 $query->execute([$historia,$id_equipo]); 
}
public function modify_TPlayers($jugadores,$id_equipo){
  $query = $this->db->prepare ("UPDATE equipos SET jugadores=? WHERE id_equipo=?");
 $query->execute([$jugadores,$id_equipo]); 
}
  }