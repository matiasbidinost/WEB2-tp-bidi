{*FORM PARA AGREGAR UNA NUEVA LIGA*}
<form id="form-login" action="newLeague" method="POST">
<p class="adminLeague">Agregar liga</p>
 <label class="form-label" for="logo">Logo de la liga: <input name="logo" type="text" class="form-control" required></label>
 <label class="form-label" for="liga">Nombre de la liga: <input name="liga" type="text" class="form-control" required></label>
 <label class="form-label" for="record">Records logrados: <input name="record" type="text" class="form-control" required></label>                                     
 <label class="form-label" for="historia">Historia: <input name="historia" type="text" class="form-control" required></label>
 <input type="submit" value="Agregar" class="btn btn-primary">
</form>

{*FORM PARA EDITAR UNA LIGA*}
<form id="form-login" action="modifyLeague" method="POST">
<p class="adminLeague">Editar Liga</p>
<select name="idLiga">
  <option value="">Selecionar liga</option>
  {foreach from=$ligas item=league}
    <option value="{$league->idLiga}">{$league->liga}</option>
  {/foreach}
  </select>
<label class="form-label" for="logo">Modificar logo: <input name="logo" type="text" class="form-control"></label>
<label class="form-label" for="liga">Modificar liga: <input name="liga" type="text" class="form-control"></label>
<label class="form-label" for="record">Modificar records logrados: <input name="record" type="text" class="form-control"></label>                                     
<label class="form-label" for="historia"> Modificar Historia: <input name="historia" type="text" class="form-control"></label>
<input type="submit" value="editar" class="btn btn-primary">

</form>

{*FORM PARA ELIMINAR UNA LIGA*}
<form id="form-login" action="deleteLeague" method="POST">
<p class="adminLeague">Borrar Liga</p>
<select name="id_fk_liga">
  <option value="">Selecionar liga</option>
  {foreach from=$ligas item=league}
    <option value="{$league->idLiga}">{$league->liga}</option>
  {/foreach}
  <input type="submit" value="eliminar" class="btn btn-primary">
  </select>
</form>

{*FORM PARA AGREGAR UN NUEVO TEAM*}
<form id="form-login" action="newTeams" method="POST">
<p class="ModifyTeams">Agregar Equipo</p>
<select name="id_fk_liga">
  <option value="">a que liga pertenece el equipo?</option>
  {foreach from=$ligas item=league}
    <option value="{$league->idLiga}">{$league->liga}</option>
  {/foreach}
  </select>
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

{*FORM PARA MODIFICAR UN EQUIPO*}
<form id="form-login" action="modifyTeams" method="POST">
<p class="ModifyTeams">Editar Equipo</p>
<select name="id_equipo">
    <option value="">Selecionar Equipo</option>
    {foreach from=$equipos item=teams}
    <option value="{$teams->id_equipo}">{$teams->nombre}</option>
    {/foreach}
  </select>
<select name="id_fk_liga">
  <option value="">a que liga pertenecera ahora?</option>
  {foreach from=$ligas item=league}
    <option value="{$league->idLiga}">{$league->liga}</option>
  {/foreach}
    </select>
    <label class="form-label" for="nombre">Modificar nombre: <input name="nombre" type="text" class="form-control" required></label>
    <label class="form-label" for="logo">Modificar logo: <input name="logo" type="text" class="form-control" required></label>
    <label class="form-label" for="historia">Modificar historia: <input name="historia" type="text" class="form-control" required></label>                                     
    <label class="form-label" for="jugadores"> Modificar jugadores: <input name="jugadores" type="text" class="form-control" required></label>
    <input type="submit" value="editar" class="btn btn-primary">
</form>

{*FORM PARA ELIMINAR UN EQUIPO*}
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


{include file="footer.tpl"}


