<?php
class LeagueModel
{
  private $db;
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;' . 'dbname=liga;charset=utf8', 'root', '');
  }
}