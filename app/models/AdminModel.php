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
}