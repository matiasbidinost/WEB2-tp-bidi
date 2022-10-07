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

5/10 //matias
agreguee stats, record e history, aunque todavia no estan funcionales
agregue la funcionalidad de history, esta funcional pero hay algo q esta mal (tengo q tocarlo, la idea es q no me muestre todas las ligas sino q me muestre la historia de esa liga especifica)

05/10/22 (TODAVIA FALTA POR TERMINAR) Juan
Estoy continuando con smarty, me falta todavía pero estoy en proceso je
Debo continuar con smarty, todavía no está terminado. :(

6/10 //matias
Agregue imagenes, actualice base de datos con mas info, limpie codigo en la view (hay q pasarlo a su respectivo tpl)
Conflicto al poner o´neil solucionado, NO USAR " ´ " EN MYPHP, bugea todo
Agregue mas archivos tpl, separe header de form porq me causaba conflicto en el codigo
Actualice view para que si clickeas en alguna de las url/league te redirija a los teams que tiene esa league (ej:
clikeas arg, te lleva a url/league/1)

7/10 //matias y juan
Agregado funcionalides, agregado admin (faltan funcionalidades)
Funcionalidades de la pagina solucionadas, rutas comprobadas, botones completamente funcionales, css redirigido correctamente, agregado tpl dde historia y de equipos en un liga concreta, agregado equipos (todos) agregado boton signUp
Agregado ruta para boton signUp
Limpieza de codigo en router.php, controller league, controller team y sus views

----siguientes pasos--------------------------------------------------------------------------------------------------
-guardar datos del sign up para que se registre y tenga modalidad admin
-crear un usuario admin con las siguientes desiciones
-crear un boton q elimine, agregue o edite algun atributo de liga o team (esto creo q todavia no lo vimos)