<h1 class="error">Usted no puede eliminar esta liga </h1>
<h2> La liga contiene equipos dentro, elimine a los equipos en esa liga y vuelva a probar</h2>
<h3>Los equipos que debe eliminar para proseguir con la operacion son: </h3>
<ul class="teamList">
{foreach from=$equipos item=teams}
    <li><h4>{$teams->nombre}</h4></li>
  {/foreach}
  </ul>