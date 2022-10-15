<?php
/* Smarty version 4.2.1, created on 2022-10-15 02:12:21
  from 'C:\xampp\htdocs\WEB2-tp-bidi\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349fae59c9b26_95461462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b48c46570de667d04b9ae5fd445058f1a022648' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2-tp-bidi\\templates\\header.tpl',
      1 => 1665792717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349fae59c9b26_95461462 (Smarty_Internal_Template $_smarty_tpl) {
?><base href="home">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://localhost/WEB2-TP-BIDI/css/style.css">
<title>Básquet</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <img src="./imagen/basquet.png" width="50px" height="50px">
        <a class="navbar-brand" href="https://localhost/WEB2-TP-BIDI/home">Básquet</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="https://localhost/WEB2-TP-BIDI/leagues">Ligas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://localhost/WEB2-TP-BIDI/teams">Equipos</a>
            </li>
             <?php if (!empty($_SESSION['NOMBRE'])) {?> 
              <li class="nav-item">
              <a class="nav-link" href="adminPanel">Panel Administrativo</a>
              </li>
              <li class="nav-item">
              <a class="nav-item nav-link" href="logout">LOGOUT</a>
              </li> 
            <?php }?> 
            
            </ul>
            </div>
            <?php if (!empty($_SESSION['NOMBRE'])) {?> 
            <img src="./imagen/iconouser.png" width="50px" height="50px">
            <span class="navbar-text"><?php echo $_SESSION['NOMBRE'];?>
</span>
            <?php }?> 
      </div>
    </nav>
</header><?php }
}
