<form id="form-login" action="leagues" method="POST">

 <label class="form-label">Usuario <input name="nombre" type="text" class="form-control" required></label>
 <label class="form-label">e-mail <input name="email" type="email" class="form-control" required></label>                                     
 <label class="form-label">Contraseña <input name="contrasenia" name="pass" type="password" class="form-control" id="password" required></label>
 <input type="submit" value="Ingresar" class="btn btn-primary">
</form>
<form id="form-login" action="signUp" method="POST">
 <button type="submit" class="btn btn-primary">Registrate</button>
</form>

{include file="footer.tpl"}