{include file="header.tpl"}
<ul>
  {foreach from=$ligas item=league}
    <li><h1>{$league->liga}<h1><img src="https://localhost/WEB2-TP-BIDI/{$league->logo}" width="150" height="100"></li> 
    <li><h2>Records: </h2><p>{$league->record}</p></li>
    <li><a href="leagues/{$league->idLiga}/history" class="btn btn-primary">historia</a></li><br>
    <li><a href="leagues/{$league->idLiga}/team" class="btn btn-primary">equipos</a></li>
  {/foreach}
  </ul>
  {include file="footer.tpl"}