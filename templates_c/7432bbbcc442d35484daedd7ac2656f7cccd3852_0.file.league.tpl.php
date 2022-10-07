<?php
/* Smarty version 4.2.1, created on 2022-10-07 17:52:08
  from 'C:\xampp\htdocs\web2\WEB2-tp-bidi\templates\league.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63404b28a9d506_44625042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7432bbbcc442d35484daedd7ac2656f7cccd3852' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\WEB2-tp-bidi\\templates\\league.tpl',
      1 => 1665157894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63404b28a9d506_44625042 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<ul class="leaguelist">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ligas']->value, 'league');
$_smarty_tpl->tpl_vars['league']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['league']->value) {
$_smarty_tpl->tpl_vars['league']->do_else = false;
?>
    <li>Liga:<?php echo $_smarty_tpl->tpl_vars['league']->value->liga;?>
</li>
     <li>Logo:<img src="<?php echo $_smarty_tpl->tpl_vars['league']->value->logo;?>
" width="150" height="100"></li>
    <li>Records:<?php echo $_smarty_tpl->tpl_vars['league']->value->record;?>
</li>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
