<form id="form-login" action="deleteLeague" method="POST">
<h1 class="piePag">Eliminar liga</h1>
<select name="idLiga">
  {foreach from=$ligas item=league}
    <option value="{$league->idLiga}">{$league->liga}</option>
  {/foreach}
  <input type="submit" value="eliminar" class="btn btn-primary">
  </select>
</form>

<form id="form-login" action="modifyLeague" method="POST">
<h1 class="piePag">Editar liga</h1>
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


<form id="form-login" action="newLeague" method="POST">
<h1 class="piePag">Agregar liga</h1>
 <label class="form-label" for="logo">Logo de la liga: <input name="logo" type="text" class="form-control" required></label>
 <label class="form-label" for="liga">Nombre de la liga: <input name="liga" type="text" class="form-control" required></label>
 <label class="form-label" for="record">Records logrados: <input name="record" type="text" class="form-control" required></label>                                     
 <label class="form-label" for="historia">Historia: <input name="historia" type="text" class="form-control" required></label>
 <input type="submit" value="Agregar" class="btn btn-primary">
</form>
{include file="footer.tpl"}
