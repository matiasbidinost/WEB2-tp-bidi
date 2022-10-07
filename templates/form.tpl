
    <form id="form-login" action="leagues" method="POST">
      <div>
        <label for="name" class="form-label">Nombre</label>
        <input type="name" class="form-control" id="name" name="name" />
      </div>
      <div>
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" />
      </div>
      <div>
        <label for="password" class="form-label">Contraseña</label>
        <input
          type="password"
          class="form-control"
          id="password"
          name="password"
        />
        <button type="submit" class="btn btn-primary">Ingresa</button>
    </form>
    <form id="form-login" action="signUp" method="POST">
    <button type="submit" class="btn btn-primary">Registrate</button>
     </form>
{include file="footer.tpl"}