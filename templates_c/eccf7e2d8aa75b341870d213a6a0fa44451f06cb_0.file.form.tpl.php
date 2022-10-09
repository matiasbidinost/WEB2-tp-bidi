<?php
/* Smarty version 4.2.1, created on 2022-10-09 22:49:16
  from 'C:\xampp\htdocs\WEB2-tp-bidi\templates\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634333ccac40d5_77579475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eccf7e2d8aa75b341870d213a6a0fa44451f06cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2-tp-bidi\\templates\\form.tpl',
      1 => 1665348553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634333ccac40d5_77579475 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <form id="form-login" action="leagues" method="POST">
      
        <label for="name" class="form-label">Nombre
        <input type="name" class="form-control" id="name" name="name"required></label>
       
      
      
        <label for="email" class="form-label">Email
        <input type="email" class="form-control" id="email" name="email" required></label>
        <label for="password" class="form-label">Contraseña
        <input
          type="password"
          class="form-control"
          id="password"
          name="password"
        required></label>
        <button type="submit" class="btn btn-primary">Ingresa</button>
    </form>
    <form id="form-login" action="signUp" method="POST">
    <button type="submit" class="btn btn-primary">Registrate</button>
     </form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
