<?php
/* Smarty version 4.2.1, created on 2022-10-06 21:13:53
  from 'C:\xampp\htdocs\WEB2-tp-bidi\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633f28f100a9c5_25253538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b48c46570de667d04b9ae5fd445058f1a022648' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2-tp-bidi\\templates\\header.tpl',
      1 => 1665083343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633f28f100a9c5_25253538 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <base href="<?php echo '<?php'; ?>
 echo BASE_URL <?php echo '?>'; ?>
">
   
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

  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
