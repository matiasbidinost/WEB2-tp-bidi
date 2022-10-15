{include file="header.tpl"}
<ul class="leaguelist">
  {foreach from=$ligas item=league}
    <li><h1>{$league->liga}<h1><img src="https://localhost/WEB2-TP-BIDI/{$league->logo}" width="150" height="100"></li> 
    <li><p>Historia: {$league->historia}</p></li>
  {/foreach}
  </ul>
  {include file="footer.tpl"}