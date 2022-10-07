<ul class="leaguelist">
  {foreach from=$ligas item=league}
    <li><h1>{$league->liga}<h1><img src="https://localhost/WEB2-TP-BIDI/{$league->logo}" width="150" height="100"></li> 
    <li>historia:{$league->record}</li>
  {/foreach}
  </ul>
  {include file="footer.tpl"}