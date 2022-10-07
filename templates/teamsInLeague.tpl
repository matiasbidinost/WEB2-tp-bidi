<ul class="teamList">
  {foreach from=$equipos item=teams}
    <li>equipo:{$teams->nombre}<img src="https://localhost/WEB2-TP-BIDI/{$teams->logo}" width="100" height="100"></li>
    <li>Historia:{$teams->historia}</li>
    <li>Jugadores:{$teams->jugadores}</li>
  {/foreach}
  </ul>
  {include file="footer.tpl"}