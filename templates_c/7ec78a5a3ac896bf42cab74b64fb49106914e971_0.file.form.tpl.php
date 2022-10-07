<?php
/* Smarty version 4.2.1, created on 2022-10-07 00:10:30
  from 'C:\xampp\htdocs\web2\WEB2-tp-bidi\templates\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633f525616da37_57197325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ec78a5a3ac896bf42cab74b64fb49106914e971' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\WEB2-tp-bidi\\templates\\form.tpl',
      1 => 1665094208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633f525616da37_57197325 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
