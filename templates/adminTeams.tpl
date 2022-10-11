<form id="form-login" action="newTeams" method="POST">
  <h1 class="ModifyTeams">Agregar Equipo</h1>
    {* <label class="form-label" for="id"
    >id:
    <input name="id" type="text" class="form-control" required
  /></label> *}
  <label class="form-label" for="nombre"
    >nombre del equipo:
    <input name="nombre" type="text" class="form-control" required
  /></label>
  <label class="form-label" for="logo"
    >logo del equipo:
    <input name="logo" type="text" class="form-control" required
  /></label>
  <label class="form-label" for="historia"
    >Historia: <input name="historia" type="text" class="form-control" required
  /></label>
  <label class="form-label" for="jugadores"
    >Jugadores:
    <input name="jugadores" type="text" class="form-control" required
  /></label>
  <input type="submit" value="Agregar" class="btn btn-primary" />
</form>

<form id="form-login" action="deleteTeams" method="POST">
  <h1 class="ModifyTeams">Eliminar Equipo</h1>
  <select name="id_equipo">
    <option value="">Selecionar liga</option>
    {foreach from=$equipos item=teams}
    <option value="{$teams->id_equipo}">{$teams->nombre}</option>
    {/foreach}
    <input type="submit" value="eliminar" class="btn btn-primary" />
  </select>
</form>
{include file="footer.tpl"}
