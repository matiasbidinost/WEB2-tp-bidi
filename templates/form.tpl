{include file="header.tpl"}
{if empty($smarty.session.NOMBRE)}
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

{/if}
{if !empty($smarty.session.NOMBRE)}
<h1 class="error">¡Hola {$smarty.session.NOMBRE}!</h1>
  <h3 class="sucess">Bienvenido a la página de Basquet de juan y matias
  </h3>
  <p>Estás logeado como ADMINISTRADOR de ésta Página, y como tal puedes modificar y obtener los cambios yendo al PANEL ADMINISTRATIVO. Ten cuidado con los cambios que haces, cada cambio afecta a la página y a todos los campos que rellenes y envies </p>
{/if}
 </form>