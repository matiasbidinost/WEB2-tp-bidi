{include file="header.tpl"}

{*FORM PARA AGREGAR UNA NUEVA LIGA*}
<form id="form-login" action="newLeague" method="POST" enctype="multipart/form-data">
  <p class="adminLeague">Agregar liga</p>
  <label class="form-label" for="logo">Logo:
  <input type="file" name="input_name" id="imageToUpload" required></label>
  <label class="form-label" for="liga">Nombre de la liga: 
  <input name="liga" type="text" class="form-control" required></label>
  <label class="form-label" for="record">Records logrados: 
  <input name="record" type="text" class="form-control" required></label>
  <label class="form-label" for="historia">Historia: 
  <input name="historia" type="text" class="form-control" required></label>
  <input type="submit" value="Agregar" class="btn btn-primary">
</form>

{*FORM PARA EDITAR UNA LIGA*}
<form id="form-login" action="modifyLogo" method="POST" enctype="multipart/form-data">
  <p class="adminLeague">Editar Liga</p>
  <select name="idLiga">
    <option value="">Selecionar liga</option>
    {foreach from=$ligas item=league}
      <option value="{$league->idLiga}">{$league->liga}</option>
    {/foreach}
  </select>
  <label class="form-label" for="logo">Logo:
  <input type="file" name="input_name" id="imageToUpload" required></label>
  <input type="submit" value="editar" class="btn btn-primary">
</form>

<form id="form-login" action="modifyLigaN" method="POST">
  <select name="idLiga">
    <option value="">Selecionar liga</option>
    {foreach from=$ligas item=league}
      <option value="{$league->idLiga}">{$league->liga}</option>
    {/foreach}
  </select>
  <label class="form-label" for="liga">Modificar liga: <input name="liga" type="text" class="form-control"></label>
  <input type="submit" value="editar" class="btn btn-primary">
</form>

<form id="form-login" action="modifyRecord" method="POST">
  <select name="idLiga">
    <option value="">Selecionar liga</option>
    {foreach from=$ligas item=league}
      <option value="{$league->idLiga}">{$league->liga}</option>
    {/foreach}
  </select>
  <label class="form-label" for="record">Modificar records logrados: <input name="record" type="text"
      class="form-control"></label>
  <input type="submit" value="editar" class="btn btn-primary">
</form>

<form id="form-login" action="modifyHistory" method="POST">
  <select name="idLiga">
    <option value="">Selecionar liga</option>
    {foreach from=$ligas item=league}
      <option value="{$league->idLiga}">{$league->liga}</option>
    {/foreach}
  </select>
  <label class="form-label" for="historia"> Modificar Historia: <input name="historia" type="text"
      class="form-control"></label>
  <input type="submit" value="editar" class="btn btn-primary">
</form>





{*FORM PARA ELIMINAR UNA LIGA*}
<form id="form-login" action="deleteLeague" method="POST">
  <p class="adminLeague">Borrar Liga</p>
  <select name="idLiga">
    <option value="">Selecionar liga</option>
    {foreach from=$ligas item=league}
      <option value="{$league->idLiga}">{$league->liga}</option>
    {/foreach}
    <input type="submit" value="eliminar" class="btn btn-primary">
  </select>
</form>

{*FORM PARA AGREGAR UN NUEVO TEAM*}
<form id="form-login" action="newTeams" method="POST" enctype="multipart/form-data">
  <p class="ModifyTeams">Agregar Equipo</p>
  <select name="id_fk_liga">
    <option value="">a que liga pertenece el equipo?</option>
    {foreach from=$ligas item=league}
      <option value="{$league->idLiga}">{$league->liga}</option>
    {/foreach}
  </select>
  <label class="form-label" for="nombre">nombre del equipo:
    <input name="nombre" type="text" class="form-control" required /></label>
    <label class="form-label" for="logo">Logo:
    <input type="file" name="input_name" id="imageToUpload" required></label>
  <label class="form-label" for="historia">Historia: <input name="historia" type="text" class="form-control"
      required /></label>
  <label class="form-label" for="jugadores">Jugadores:
    <input name="jugadores" type="text" class="form-control" required /></label>
  <input type="submit" value="Agregar" class="btn btn-primary" />
</form>

{*FORM PARA MODIFICAR UN EQUIPO*}
{*modifica fk*}
<form id="form-login" action="modifyTeamFk" method="POST">
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
  <input type="submit" value="editar" class="btn btn-primary">
</form>
{*modifica nombre*}
<form id="form-login" action="modifyTName" method="POST">
  <select name="id_equipo">
    <option value="">Selecionar Equipo</option>
    {foreach from=$equipos item=teams}
      <option value="{$teams->id_equipo}">{$teams->nombre}</option>
    {/foreach}
  </select>
  <label class="form-label" for="nombre">Modificar nombre: <input name="nombre" type="text" class="form-control"
      required></label>
  <input type="submit" value="editar" class="btn btn-primary">
</form>
{*modifica logo*}
<form id="form-login" action="modifyTLogo" method="POST" enctype="multipart/form-data">
  <select name="id_equipo">
    <option value="">Selecionar Equipo</option>
    {foreach from=$equipos item=teams}
      <option value="{$teams->id_equipo}">{$teams->nombre}</option>
    {/foreach}
  </select>
  <label class="form-label" for="logo">Logo:
  <input type="file" name="input_name" id="imageToUpload" required></label>
  <input type="submit" value="editar" class="btn btn-primary">
</form>
{*modifica historia*}
<form id="form-login" action="modifyTHistory" method="POST">
  <select name="id_equipo">
    <option value="">Selecionar Equipo</option>
    {foreach from=$equipos item=teams}
      <option value="{$teams->id_equipo}">{$teams->nombre}</option>
    {/foreach}
  </select>
  <label class="form-label" for="historia">Modificar historia: <input name="historia" type="text" class="form-control"
      required></label>
  <input type="submit" value="editar" class="btn btn-primary">
</form>
{* modifica juegadores*}
<form id="form-login" action="modifyTPlayers" method="POST">
  <select name="id_equipo">
    <option value="">Selecionar Equipo</option>
    {foreach from=$equipos item=teams}
      <option value="{$teams->id_equipo}">{$teams->nombre}</option>
    {/foreach}
  </select>
  <label class="form-label" for="jugadores"> Modificar jugadores: <input name="jugadores" type="text"
      class="form-control" required></label>
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