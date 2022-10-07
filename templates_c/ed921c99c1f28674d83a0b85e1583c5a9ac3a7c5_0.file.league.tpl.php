<?php
/* Smarty version 4.2.1, created on 2022-10-07 23:11:44
  from 'C:\xampp\htdocs\WEB2-tp-bidi\templates\league.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63409610938bc7_73646050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed921c99c1f28674d83a0b85e1583c5a9ac3a7c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2-tp-bidi\\templates\\league.tpl',
      1 => 1665177084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63409610938bc7_73646050 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="leaguelist">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ligas']->value, 'league');
$_smarty_tpl->tpl_vars['league']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['league']->value) {
$_smarty_tpl->tpl_vars['league']->do_else = false;
?>
    <li>Liga:<?php echo $_smarty_tpl->tpl_vars['league']->value->liga;?>
<img src="https://localhost/WEB2-TP-BIDI/<?php echo $_smarty_tpl->tpl_vars['league']->value->logo;?>
" width="150" height="100"></li>
    <li>Records:<?php echo $_smarty_tpl->tpl_vars['league']->value->record;?>
</li>
    <li><a href="leagues/<?php echo $_smarty_tpl->tpl_vars['league']->value->idLiga;?>
/history">historia</a></li>
    <li><a href="leagues/<?php echo $_smarty_tpl->tpl_vars['league']->value->idLiga;?>
/team">equipos</a></li>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
