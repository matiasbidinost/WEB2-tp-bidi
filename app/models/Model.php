<?php
class Model{
  private $db;
  function __construct(){
    $this->db= new PDO('mysql:host=localhost;'.'dbname=liga;charset=utf8', 'root', '');
  }

  function traer_equipo(){
   $query = $this->$db->prepare('SELECT e.id_equipo, e.logo, e.historiaEq, e.jugadores FROM equipos AS e');
   $query->execute();
   $equipo = $query->fetchAll(PDO::FETCH_OBJ); //fetch un solo resultado, lo devolvemos en formato objeto. Es un arreglo
   return $equipo;
  }
  function traer_un_equipo($id){
   $query = $this->$db->prepare('SELECT e.id_equipo, e.logo, e.historiaEq, e.jugadores FROM equipos AS e WHERE e.id_equipo=?');
   $query->execute([$id]);
   $equipo = $query->fetch(PDO::FETCH_OBJ); //fetch un solo resultado, lo devolvemos en formato objeto. Es un arreglo
   return $equipo;    
  }
}
?>