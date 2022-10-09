
    <form id="form-login" action="leagues" method="POST">
      
        <label for="name" class="form-label">Nombre
        <input type="name" class="form-control" id="name" name="name"required></label>
       
      
      
        <label for="email" class="form-label">Email
        <input type="email" class="form-control" id="email" name="email" required></label>
        <label for="password" class="form-label">Contraseña
        <input
          type="password"
          class="form-control"
          id="password"
          name="password"
        required></label>
        <button type="submit" class="btn btn-primary">Ingresa</button>
    </form>
    <form id="form-login" action="signUp" method="POST">
    <button type="submit" class="btn btn-primary">Registrate</button>
     </form>
{include file="footer.tpl"}