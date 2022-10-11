<form id="form-login" action="newLeague" method="POST">
<p class="adminLeague">Agregar liga</p>
 <label class="form-label" for="logo">Logo de la liga: <input name="logo" type="text" class="form-control" required></label>
 <label class="form-label" for="liga">Nombre de la liga: <input name="liga" type="text" class="form-control" required></label>
 <label class="form-label" for="record">Records logrados: <input name="record" type="text" class="form-control" required></label>                                     
 <label class="form-label" for="historia">Historia: <input name="historia" type="text" class="form-control" required></label>
 <input type="submit" value="Agregar" class="btn btn-primary">
</form>

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




