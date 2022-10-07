{include file="header.tpl"}
<ul class="leaguelist">
  {foreach from=$ligas item=league}
    <li>Liga:{$league->liga}</li>
     <li>Logo:<img src="{$league->logo}" width="150" height="100"></li>
    <li>Records:{$league->record}</li>
  {/foreach}
  </ul>
{include file="footer.tpl"}