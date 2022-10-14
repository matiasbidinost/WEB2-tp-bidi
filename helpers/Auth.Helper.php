<?php

class AuthHelper
{

  function __construct()
  {
  }

  public function login($user)
  {
    // Inicio la sesión;

    session_start();
    $_SESSION['ID_USUARIO'] = $user->id_usuario;
    $_SESSION['NOMBRE'] = $user->nombre;
  }
  // ----
  public function logout()
  {
    session_start();
    session_destroy();
  }
  public function CheckLoggedIn()
  {
    if (session_status() != PHP_SESSION_ACTIVE) {
      session_start();
    }
    if (!isset($_SESSION['ID_USUARIO'])) {
      header('Location:' . LOGIN);
      die();
    }
  }
  public function getLoggedUserName()
  {
    if (session_status() != PHP_SESSION_ACTIVE) {
      session_start();
    }
    return $_SESSION['NOMBRE'];
  }
}
