# WEB2-tp-bidi
usuario: matias
email: matias@matias
contraseña: 123456

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

---

11-10-22 18:17
Juan
Termino la parte de agregar eliminar y borrar la parte de LEAGUE y TEAMS, en teams la parte de MODIFICAR no funciona al 100%, esto quiere decir que, no funciona por que MODIFICO no tira ERROR, pero no se MODIFICA NADA.
Acomodé la parte de LOGIN Y REGISTER, FALTA SEGUIR, FALTA.

12/10 // matias
todas las funcionalidades finalizadas, falta chequear que la sesion exista en nuestra bbdd, session y permisos de admin

12/10 Juan
Anda el registrarse y loguearse con un usuario, y cuando te logueas con el usuario te lleva como admin a modificar

14/10 Juan
Paso adminController funciones de modificar, borrar, y agregar a sus respectivos controladores. (LeagueController - TeamController)
De sesion tengo: Registro y guarda como HASH, ingreso con el mismo usuario y password y compruebo, si anda me lleva a la página LOGIN, allí puedo modificar lo que me apetezca como admin. Si intento ir por /login me tira error.
Me faltaría la parte de LOGOUT y que me mantenga la U_SESSION

14/10 //matias
Solucionado el problema de eliminar ligas, arreglo de rutas, agregue un par de tpl mas, mejore semantica, ordene el router, inclui un header para admin y un error league en caso de que pida eliminar una liga con teams adentro, logout completo por vos, session tambien completada por juan, queda cargar imagenes y arreglar estilos (yo me encargo de estilos)

---siguientes pasos---------------------------------------------------------------------------------------------
QUE SE PUEDA EDITAR UN SOLO CAMPO DEL ITEM (HACER UN SELECT PARA QUE EL USUARIO ELIJA QUE MODIFICAR)
-PLUS: agregar estilos e imagenes de fondo para mejorar el tp, NO USAR TIPOGRAFIA CON REMATE
-FUNCION AGREGAR IMAGENES: existe una funcion de php que guarda imagenes y las manda