<form id="form-login" action="newTeams" method="POST">
  <p class="ModifyTeams">Agregar Equipo</p>
    <label class="form-label" for="newfk_add"
    >id forenki del equipo:
    <input name="newfk_add" type="number" class="form-control" min="0" required
  /></label>
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
  <p class="ModifyTeams">Eliminar Equipo</p>
  <select name="id_equipo">
    <option value="">Selecionar Equipo</option>
    {foreach from=$equipos item=teams}
    <option value="{$teams->id_equipo}">{$teams->nombre}</option>
    {/foreach}
    <input type="submit" value="eliminar" class="btn btn-primary" />
  </select>
</form>

<form id="form-login" action="modifyTeams" method="POST">
<p class="ModifyTeams">Editar Equipo</p>
<select name="id_equipo">
    <option value="">Selecionar Equipo</option>
    {foreach from=$equipos item=teams}
    <option value="{$teams->id_equipo}">{$teams->nombre}</option>
    {/foreach}
    </select>
    <label class="form-label" for="nombre">Modificar nombre: <input name="nombre" type="text" class="form-control"></label>
    <label class="form-label" for="logo">Modificar logo: <input name="logo" type="text" class="form-control"></label>
    <label class="form-label" for="historia">Modificar historia: <input name="historia" type="text" class="form-control"></label>                                     
    <label class="form-label" for="jugadores"> Modificar jugadores: <input name="jugadores" type="text" class="form-control"></label>
    <input type="submit" value="editar" class="btn btn-primary">
</form>
{include file="footer.tpl"}
