<?php
/* Smarty version 4.2.1, created on 2022-10-10 03:20:53
  from 'C:\xampp\htdocs\WEB2-tp-bidi\templates\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63437375413bd9_83473795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eccf7e2d8aa75b341870d213a6a0fa44451f06cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2-tp-bidi\\templates\\form.tpl',
      1 => 1665364845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63437375413bd9_83473795 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="form-login" action="leagues" method="POST">

 <label class="form-label">Usuario <input name="user" type="text" class="form-control" required></label>
 <label class="form-label">e-mail <input name="email" type="email" class="form-control" required></label>                                     
 <label class="form-label">Contraseña <input name="pass" name="pass" type="password" class="form-control" id="password" required></label>
 <input type="submit" value="Ingresar" class="btn btn-primary">
</form>
<form id="form-login" action="signUp" method="POST">
 <button type="submit" class="btn btn-primary">Registrate</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
