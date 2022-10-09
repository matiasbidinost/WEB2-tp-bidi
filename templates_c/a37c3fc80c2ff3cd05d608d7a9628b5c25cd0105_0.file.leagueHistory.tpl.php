<?php
/* Smarty version 4.2.1, created on 2022-10-09 22:35:15
  from 'C:\xampp\htdocs\WEB2-tp-bidi\templates\leagueHistory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63433083d20ac8_99858029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a37c3fc80c2ff3cd05d608d7a9628b5c25cd0105' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2-tp-bidi\\templates\\leagueHistory.tpl',
      1 => 1665347712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63433083d20ac8_99858029 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="leaguelist">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ligas']->value, 'league');
$_smarty_tpl->tpl_vars['league']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['league']->value) {
$_smarty_tpl->tpl_vars['league']->do_else = false;
?>
    <li><h1><?php echo $_smarty_tpl->tpl_vars['league']->value->liga;?>
<h1><img src="https://localhost/WEB2-TP-BIDI/<?php echo $_smarty_tpl->tpl_vars['league']->value->logo;?>
" width="150" height="100"></li> 
    <li><p>Historia: <?php echo $_smarty_tpl->tpl_vars['league']->value->historia;?>
</p></li>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
