{include file="header.tpl"}
<ul class="teamList">
  {foreach from=$equipos item=team}
    <li>Liga:{$team->nombre}</li>
     <li>Logo:<img src="{$team->logo}" width="100" height="100">
    <li>Historia:{$team->historia}</li>
    <li>Jugadores:{$team->jugadores}</li>
  {/foreach}
{include file="footer.tpl"}