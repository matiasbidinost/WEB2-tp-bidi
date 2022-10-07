
<ul class="leaguelist">
  {foreach from=$ligas item=league}
    <li>Liga:{$league->liga}<img src="https://localhost/WEB2-TP-BIDI/{$league->logo}" width="150" height="100"></li>
    <li>Records:{$league->record}</li>
    <li><a href="leagues/{$league->idLiga}/history">historia</a></li>
    <li><a href="leagues/{$league->idLiga}/team">equipos</a></li>
  {/foreach}
  </ul>
  {include file="footer.tpl"}