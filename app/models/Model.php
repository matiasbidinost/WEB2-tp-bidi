<?php
class Model{
  private $db;
  function __construct(){
    $this->db= new PDO('mysql:host=localhost;'.'dbname=liga;charset=utf8', 'root', '');
  }

  public function getAllLigas($liga){ //trae todo en liga, para mostrarlas por pantalla (el parametro q se va a pasar va a ser $liga)
    $query = $this->db->prepare('SELECT * FROM ligas ORDER BY liga ASC');
    $query->execute([$liga]);
    return $query->fetchAll(PDO::FETCH_OBJ);
  } 

  // public function get_team(){
  //  $query = $this->$db->prepare('SELECT e.id_equipo, e.logo, e.historiaEq, e.jugadores FROM equipos AS e');
  //  $query->execute();
  //  $equipo = $query->fetchAll(PDO::FETCH_OBJ); //fetch un solo resultado, lo devolvemos en formato objeto. Es un arreglo
  //  return $equipo;
  // }
  // public function get_one_team($id){
  //  $query = $this->$db->prepare('SELECT e.id_equipo, e.logo, e.historiaEq, e.jugadores FROM equipos AS e WHERE e.id_equipo=?');
  //  $query->execute([$id]);
  //  $equipo = $query->fetch(PDO::FETCH_OBJ); //fetch un solo resultado, lo devolvemos en formato objeto. Es un arreglo
  //  return $equipo;    
  // }
}
?>