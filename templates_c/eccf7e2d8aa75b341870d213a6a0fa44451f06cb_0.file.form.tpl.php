<?php
/* Smarty version 4.2.1, created on 2022-10-17 04:11:59
  from 'C:\xampp\htdocs\WEB2-tp-bidi\templates\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634cb9ef3c8ab4_16765979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eccf7e2d8aa75b341870d213a6a0fa44451f06cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2-tp-bidi\\templates\\form.tpl',
      1 => 1665972716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634cb9ef3c8ab4_16765979 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if (empty($_SESSION['NOMBRE'])) {?>
<form id="form-login" class="formRegistro" action="register" method=POST>
 <label for="nombre"class="form-label">Elija un nombre de usuario <input name="nombre" type="text" class="form-control" required></label>
 <label for="email"class="form-label">Elija un e-mail <input name="email" type="email" class="form-control" required></label>                                     
 <label for="contrasenia"class="form-label">Elija un contraseña <input name="contrasenia" type="password" class="form-control" id="password" required></label>
 <input type="submit" value="Registrarse" id="btn_registrar"class="btn btn-primary">
 </form>
<form id="form-login" class="formLogin" action="login" method=POST>
 <label for="nombre"class="form-label">Usuario <input name="nombre" type="text" class="form-control" required></label>
 <label for="email"class="form-label">e-mail <input name="email" type="email" class="form-control" required></label>                                     
 <label for="contrasenia"class="form-label">Contraseña <input name="contrasenia" type="password" class="form-control" id="password" required></label>
 <input type="submit" value="Loguearse" id="btn_login"class="btn btn-primary">

<?php }
if (!empty($_SESSION['NOMBRE'])) {?>
<h1 class="error">¡Hola <?php echo $_SESSION['NOMBRE'];?>
!</h1>
  <h3 class="sucess">Bienvenido a la página de Basquet de juan y matias
  </h3>
  <p>Estás logeado como ADMINISTRADOR de ésta Página, y como tal puedes modificar y obtener los cambios yendo al PANEL ADMINISTRATIVO. Ten cuidado con los cambios que haces, cada cambio afecta a la página y a todos los campos que rellenes y envies </p>
<?php }?>
 </form><?php }
}
