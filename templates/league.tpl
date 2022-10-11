<ul>
  {foreach from=$ligas item=league}
    <li><h1>{$league->liga}<h1><img src="https://localhost/WEB2-TP-BIDI/{$league->logo}" width="150" height="100"></li> 
    <li><p>Records:{$league->record}</p></li>
    <li><a href="leagues/{$league->idLiga}/history">historia</a></li>
    <li><a href="leagues/{$league->idLiga}/team">equipos</a></li>
  {/foreach}
  </ul>
  {include file="footer.tpl"}