<?php
/* Smarty version 4.2.1, created on 2022-10-17 04:00:14
  from 'C:\xampp\htdocs\WEB2-tp-bidi\templates\teams.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634cb72eadf739_84004511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fcf8a1137d8ec78c77370da0d7137955df7bd6c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2-tp-bidi\\templates\\teams.tpl',
      1 => 1665971989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634cb72eadf739_84004511 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<ul class="teamList">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['equipos']->value, 'teams');
$_smarty_tpl->tpl_vars['teams']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['teams']->value) {
$_smarty_tpl->tpl_vars['teams']->do_else = false;
?>
    <li><h1><?php echo $_smarty_tpl->tpl_vars['teams']->value->nombre;?>
</h1><img src="https://localhost/WEB2-TP-BIDI/<?php echo $_smarty_tpl->tpl_vars['teams']->value->logo;?>
" width="100" height="100"></li>
    <li><h2>Historia: <h2><p><?php echo $_smarty_tpl->tpl_vars['teams']->value->historia;?>
</p></li>
    <li><h2>Jugadores: </h2><p><?php echo $_smarty_tpl->tpl_vars['teams']->value->jugadores;?>
</p></li>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
