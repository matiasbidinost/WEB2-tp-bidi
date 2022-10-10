<?php
/* Smarty version 4.2.1, created on 2022-10-10 03:15:22
  from 'C:\xampp\htdocs\WEB2-tp-bidi\templates\signUp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6343722aa389a6_39318169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fc5253ad54e48425d39f2e0ea0f9fbdb5fd810b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2-tp-bidi\\templates\\signUp.tpl',
      1 => 1665364517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6343722aa389a6_39318169 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Queres agregar, editar la información que hay? te gustaría ser un Chad de las ligas de básquet? REGISTRATE!! </h1>
<form id="form-login" class="formRegistro" method=POST> <!--meti los input dentro del label para que esten relacionados-->
 <label class="form-label">Usuario <input name="nombre" type="text" class="form-control" required></label>
 <label class="form-label">e-mail <input name="email" type="email" class="form-control" required></label>                                     
 <label class="form-label">Contraseña <input name="contrasenia" type="password" class="form-control" id="password" required></label>
 <input type="submit" value="Registrarse" id="btn_registrar"class="btn btn-primary">
 </form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
