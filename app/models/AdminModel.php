<?php
class AdminModel
{
  private $db;
  public function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;' . 'dbname=liga;charset=utf8', 'root', '');
  }
  public function registerUser($nombre,$email,$contrasenia){
    $query = $this->db->prepare ('INSERT INTO usuarios (nombre, email, contrasenia) VALUES (?, ?, ?) ');
    $query->execute([$nombre, $email, $contrasenia]);
  }
  public function new_League($logo,$liga,$record,$historia){
   $query = $this->db->prepare ('INSERT INTO ligas (logo, liga, record, historia) VALUES (?, ?, ?, ?) '); 
   $query->execute([$logo,$liga,$record,$historia]); 
  }

}