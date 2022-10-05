# WEB2-tp-bidi

este git es para el tp de la materia de web2 cursada 2022 tudai (3arr)
Matias y Juan

29/9 //matias
inclui un router, agrege tambien un templates para los estilos (calculo que el smarty va a ir ahi)
-agregue lineas en controller, si te fijas en router ahi agrege un par de comandos q nos faltaria agregar
-agrege una funcion para mostrar filas q por ahora no funciona porq no tenemos un home definido
-puse sentencias en el view de smarty (ignoralas, es para el tema q nos van a meter despues q seguro nos piden)

30/9 //matias
-solucione rutas del router ahora si pones la pagina /home muestra la palabra home, si pones /league te aparecen las ligas
-mejore codigo del model (que estaba mal la linea q hice yo)
-falta hacer una sesionController, sesionModel, sesionView para q el usuario cambie codigo si es admin
-hacer un javascript para recibir el $\_POST del usuario que ingrese a la session

- tabla:
  ----id_liga es foreing key e id y eso referencia a un id_fk en equipo que tiene q tener un id separado

---

4/10 //Juan
Modifico y agrego 1 controller para cada tabla, es decir, ahora están separdas TeamController, LeagueController, TeamView, LeagueView, TeamModel, LeagueModel. Esto lo pidió la profe en una clase :D Si todo está bien hay que borrar el Controller.php, model.php, view.php
Funciona correctamente muestra la liga con MVC en pantalla, en localhost/web2/league

4/10 //matias
funciona bien showteams, ahora tambien si pones en el link url/league/1 te muestra todos los equipos de id 1 de league

----siguientes pasos---
-templates- agregar un footer.php, un form.php, un <ul> con un href a liga, y otro con href a team (mirar viewTeam y viewLeague)//basicamente ahora se muestraa la lista,en showLeague, hacer q esa lista sea un boton que redirija hacia un id de liga
-crear un model, view y controller con nombre de AdminContr....
-intentar que cuando clikeo en una liga me redirija a los equipos que hay en ella
-una vez q los botones funcionan aplicar smarty
-crear un boton q elimine, agregue o edite laguna liga o team (esto creo q todavia no lo vimos)