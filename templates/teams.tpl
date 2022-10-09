<ul class="teamList">
  {foreach from=$equipos item=teams}
    <li><h1>{$teams->nombre}</h1><img src="https://localhost/WEB2-TP-BIDI/{$teams->logo}" width="100" height="100"></li>
    <li><p>Historia: {$teams->historia}</p></li>
    <li><h2>Jugadores: </h2><p>{$teams->jugadores}</p></li>
  {/foreach}
  </ul>
  {include file="footer.tpl"}