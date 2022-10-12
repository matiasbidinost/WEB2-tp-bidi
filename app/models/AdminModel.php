<?php
class AdminModel
{
  private $db;
  public function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;' . 'dbname=liga;charset=utf8', 'root', '');
  }
  // Subo datos a la base de datos ingresados por usuario
  public function registerUser($nombre,$email,$contrasenia){
    $query = $this->db->prepare ('INSERT INTO usuarios (nombre, email, contrasenia) VALUES (?, ?, ?) ');
    $query->execute([$nombre, $email, $contrasenia]);
  }
  // Obtengo los datos de usuario de la base de datos -- tomo nombre y de ahi la contraseña viene con él
    public function getByUsername($nombre) {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE nombre = ?');
        $query->execute(array($nombre));

        return $query->fetch(PDO::FETCH_OBJ);
    }
  // Agrego liga de LEAGUES
  public function new_League($logo,$liga,$record,$historia){
   $query = $this->db->prepare ('INSERT INTO ligas (logo, liga, record, historia) VALUES (?, ?, ?, ?) '); 
   $query->execute([$logo,$liga,$record,$historia]); 
  }
// Agrego equipo de TEAMS
    public function new_Teams($id_fk_liga, $nombre,$logo,$historia,$jugadores){
   $query = $this->db->prepare ('INSERT INTO `equipos`(`id_fk_liga`, `nombre`, `logo`, `historia`, `jugadores`) VALUES (?, ?, ?, ?, ?) '); 
   $query->execute([$id_fk_liga,$nombre,$logo,$historia,$jugadores]); 
  }
  // ----
  public function getAllLigas(){
    $query = $this->db->prepare('SELECT `idLiga`, `liga`FROM `ligas`');
    $query->execute();
    return $query->fetchAll(PDO::FETCH_OBJ);
  }
   public function get_teams(){
    $query = $this->db->prepare('SELECT * FROM equipos ORDER BY id_equipo ASC');
    $query->execute();
    $equipo = $query->fetchAll(PDO::FETCH_OBJ); //fetch un solo resultado, lo devolvemos en formato objeto. Es un arreglo
    return $equipo;
   }  
  //  BORRO LEAGUES
  public function delete_League($idLiga){
    $query = $this->db->prepare ('DELETE FROM `ligas` WHERE `idLiga` = ?'); 
    $query->execute([$idLiga]); 
  }
  // BORRO TEAMS
  public function deleteTeams($id_equipo){
    $query = $this->db->prepare ('DELETE FROM `equipos` WHERE `id_equipo` = ?'); 
    $query->execute([$id_equipo]); 
  }
  // Modifico leagues  
  public function modifyL($logo,$liga,$record,$historia, $idLiga){
    $query = $this->db->prepare ("UPDATE ligas SET logo=?, liga=?, record=?, historia=? WHERE idLiga=?");
   $query->execute([$logo,$liga,$record,$historia,$idLiga]); 
  }
  //modifico Teams
  public function modifyTeam($id_fk_liga,$nombre,$logo,$historia,$jugadores,$id_equipo){
    $query = $this->db->prepare ("UPDATE equipos SET id_fk_liga=?, nombre=?, logo=?, historia=?, jugadores=? WHERE id_equipo=?");
   $query->execute([$id_fk_liga,$nombre,$logo,$historia,$jugadores,$id_equipo]); 
}
}