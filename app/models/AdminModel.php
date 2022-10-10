<?php
class AdminModel
{
  private $db;
  public function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;' . 'dbname=liga;charset=utf8', 'root', '');
  }
  public function registerUser($usuario){
    $query = $this->db->prepare('INSERT INTO usuarios(nombre, email, contrasenia) VALUES (nombre, email, contrasenia)');
    $query->execute($usuario);
  }
}