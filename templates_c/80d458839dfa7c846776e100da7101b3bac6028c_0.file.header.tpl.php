<?php
/* Smarty version 4.2.1, created on 2022-10-05 21:54:44
  from 'C:\xampp\htdocs\web2\WEB2-tp-bidi\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633de10402d4a8_78735338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80d458839dfa7c846776e100da7101b3bac6028c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\WEB2-tp-bidi\\templates\\header.tpl',
      1 => 1664999682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633de10402d4a8_78735338 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <link href="footer.php">
    <meta charset="UTF-8">
    <base href="<?php echo '<?php'; ?>
 echo BASE_URL <?php echo '?>'; ?>
">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="/estilos/estilos.css" rel="stylesheet">
    <title>Básquet</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="">Básquet</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="league">Ligas
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="teams">Equipos</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <form id="form-login" action="login.php" method="POST">
      <div>
        <label for="email" class="form-label">email</label>
        <input type="email" class="form-control" id="email" name="email" />
      </div>
      <div>
        <label for="password" class="form-label">Password</label>
        <input
          type="password"
          class="form-control"
          id="password"
          name="password"
        />
       <button type="submit" class="btn btn-primary">Login</button>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
