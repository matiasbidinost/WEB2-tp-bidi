<h1>Queres agregar, editar la información que hay? te gustaría ser un Chad de las ligas de básquet? REGISTRATE!! </h1>
<form id="form-login" class="formRegistro" method=POST> <!--meti los input dentro del label para que esten relacionados-->
 <label class="form-label">Usuario <input name="nombre" type="text" class="form-control" required></label>
 <label class="form-label">e-mail <input name="email" type="email" class="form-control" required></label>                                     
 <label class="form-label">Contraseña <input name="contrasenia" type="password" class="form-control" id="password" required></label>
 <input type="submit" value="Registrarse" id="btn_registrar"class="btn btn-primary">
 </form>
{include file="footer.tpl"}