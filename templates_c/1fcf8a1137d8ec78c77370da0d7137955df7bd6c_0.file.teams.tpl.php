<?php
/* Smarty version 4.2.1, created on 2022-10-07 22:49:34
  from 'C:\xampp\htdocs\WEB2-tp-bidi\templates\teams.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634090de5865f1_20703526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fcf8a1137d8ec78c77370da0d7137955df7bd6c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2-tp-bidi\\templates\\teams.tpl',
      1 => 1665175520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634090de5865f1_20703526 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="teamList">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['equipos']->value, 'teams');
$_smarty_tpl->tpl_vars['teams']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['teams']->value) {
$_smarty_tpl->tpl_vars['teams']->do_else = false;
?>
    <li>equipo:<?php echo $_smarty_tpl->tpl_vars['teams']->value->nombre;?>
<img src="https://localhost/WEB2-TP-BIDI/<?php echo $_smarty_tpl->tpl_vars['teams']->value->logo;?>
" width="100" height="100"></li>
    <li>Historia:<?php echo $_smarty_tpl->tpl_vars['teams']->value->historia;?>
</li>
    <li>Jugadores:<?php echo $_smarty_tpl->tpl_vars['teams']->value->jugadores;?>
</li>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
