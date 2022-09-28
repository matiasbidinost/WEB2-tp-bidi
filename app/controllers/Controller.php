<?php
// require_once
// require_once
class Controller {
  private $model;
  private $view;
  public function __construct()
  {
    $this->model=new Model();
    $this->view=new View();
  }
}