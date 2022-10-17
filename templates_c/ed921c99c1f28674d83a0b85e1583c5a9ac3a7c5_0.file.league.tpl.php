<?php
/* Smarty version 4.2.1, created on 2022-10-17 04:00:02
  from 'C:\xampp\htdocs\WEB2-tp-bidi\templates\league.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634cb7223efc33_08772296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed921c99c1f28674d83a0b85e1583c5a9ac3a7c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2-tp-bidi\\templates\\league.tpl',
      1 => 1665971997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634cb7223efc33_08772296 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<ul>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ligas']->value, 'league');
$_smarty_tpl->tpl_vars['league']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['league']->value) {
$_smarty_tpl->tpl_vars['league']->do_else = false;
?>
    <li><h1><?php echo $_smarty_tpl->tpl_vars['league']->value->liga;?>
<h1><img src="https://localhost/WEB2-TP-BIDI/<?php echo $_smarty_tpl->tpl_vars['league']->value->logo;?>
" width="150" height="100"></li> 
    <li><h2>Records: </h2><p><?php echo $_smarty_tpl->tpl_vars['league']->value->record;?>
</p></li>
    <li><a href="leagues/<?php echo $_smarty_tpl->tpl_vars['league']->value->idLiga;?>
/history" class="btn btn-primary">historia</a></li><br>
    <li><a href="leagues/<?php echo $_smarty_tpl->tpl_vars['league']->value->idLiga;?>
/team" class="btn btn-primary">equipos</a></li>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
