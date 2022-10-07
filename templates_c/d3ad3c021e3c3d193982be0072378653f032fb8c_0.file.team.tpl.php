<?php
/* Smarty version 4.2.1, created on 2022-10-07 17:50:26
  from 'C:\xampp\htdocs\web2\WEB2-tp-bidi\templates\team.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63404ac249a6e4_72663486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3ad3c021e3c3d193982be0072378653f032fb8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\WEB2-tp-bidi\\templates\\team.tpl',
      1 => 1665157825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63404ac249a6e4_72663486 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<ul class="teamList">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['equipos']->value, 'team');
$_smarty_tpl->tpl_vars['team']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->do_else = false;
?>
    <li>Liga:<?php echo $_smarty_tpl->tpl_vars['team']->value->nombre;?>
</li>
     <li>Logo:<img src="<?php echo $_smarty_tpl->tpl_vars['team']->value->logo;?>
" width="100" height="100">
    <li>Historia:<?php echo $_smarty_tpl->tpl_vars['team']->value->historia;?>
</li>
    <li>Jugadores:<?php echo $_smarty_tpl->tpl_vars['team']->value->jugadores;?>
</li>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
