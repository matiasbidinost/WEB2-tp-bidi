    {include file="header.tpl"}
    <form id="form-login" action="login.php" method="POST">
      <div>
        <label for="email" class="form-label">email</label>
        <input type="email" class="form-control" id="email" name="email" />
      </div>
      <div>
        <label for="password" class="form-label">Password</label>
        <input
          type="password"
          class="form-control"
          id="password"
          name="password"
        />
       <button type="submit" class="btn btn-primary">Login</button>
       {include file="footer.tpl"}