<?php
/* Smarty version 4.2.1, created on 2022-10-07 22:52:46
  from 'C:\xampp\htdocs\WEB2-tp-bidi\templates\teamsInLeague.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6340919e5f3400_57707821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f13bd30bfb1b3f72aed351392e0f892ac3e4be8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2-tp-bidi\\templates\\teamsInLeague.tpl',
      1 => 1665175938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6340919e5f3400_57707821 (Smarty_Internal_Template $_smarty_tpl) {
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
