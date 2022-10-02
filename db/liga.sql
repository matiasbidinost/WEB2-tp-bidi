-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2022 a las 23:48:11
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `liga`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id_equipo` int(11) NOT NULL,
  `id_fk-liga` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `logo` text NOT NULL,
  `historia` text NOT NULL,
  `jugadores` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id_equipo`, `id_fk-liga`, `nombre`, `logo`, `historia`, `jugadores`) VALUES
(1, 1, 'Atlético Juventud Florentino Ameghino\r\nVilla María (Córdoba)', 'aca va un logo', 'Historia del Club Florentino Ameghino:\r\nEl Club Atlético Juventud Florentino Ameghino fue fundado el 1 de junio de 1939 en el corazón del barrio Villa Emilia, hoy barrio Ameghino. En primera instancia adoptó la denominación de su barrio de origen y posteriormente fue denominado con su nombre actual.\r\nLa primera comisión directiva estuvo encabezada por el presidente Luis Demaría, el\r\nvicepresidente Pedro Ludueña, y el secretario Pedro Palombo.\r\nFue recién en 1950 cuando se construyó la sede social del club, en San Juan 1646, donde se erigió una cancha de bochas, frontón y pista de baile. Con el tiempo, este espacio fue utilizado para la práctica de patín y básquet, y una década después los directivos, lograron techar el gimnasio.\r\nEn el aspecto deportivo, Ameghino ostenta el orgullo de haber participado de la tercera categoría del básquet argentino, en su momento Liga Nacional B, en 1995. Apenas una temporada duró ese sueño, donde Los Leones habían juntado a grandes jugadores locales para disputarlo.\r\nEn la temporada 2009/10 Ameghino dio el primer paso de un proyecto deportivo que se\r\nconstruyó paso a paso y sobre cimientos firmes y bien plantados: Fue campeón de la Liga\r\nCordobesa B y ascendió a la primera categoría dentro del básquet provincial. La temporada\r\nanterior, había quedado a un paso del ascenso.\r\nSimilar fue la historia cinco años después. Es que en la temporada 2013/14 Los Leones fueron subcampeones de la 17º edición de la Liga Cordobesa, quedando en las puertas del ascenso a Torneo Federal.\r\nSin embargo, el empeño, voluntad, y sed de revancha y crecimiento que caracteriza a este grupo de dirigentes, jugadores y cuerpo técnico condujo a la institución a conseguir el tan ansiado ascenso al Torneo Federal para disputar la temporada 2015/16, por haberse consagrado como el mejor equipo de la provincia de Córdoba.\r\nUna excelente temporada en la 16/17 en el Torneo Federal, donde terminó cayendo en semifinales y quedando a las puertas de un acenso al TNA, le abrió las puertas al León de la segunda categoría del básquet argentino, luego de haber ocupado uno de los lugares que habían quedado vacantes por un equipo que decidió bajarse. Fue el mérito deportivo el que lo llevó a estar en un lugar histórico para el básquet de la institución, como así también de la ciudad.\r\nDesde su arribo a la segunda categoría, el «León» se ha mantenido fiel a su estilo en un certamen muy competitivo. Logró obtener el pase a los playoffs en las tres campañas. En la 2019/2020 contó con su mejor inicio en números en una apuesta fortalecida por un quinteto de jugadores mayores y un banco de suplentes con un U23 y chicos de la cantera.\r\nInfraestructura:\r\nEn los últimos años además de la presencia nacional en torneos de élite junto con la participación en ediciones provinciales, la comisión directiva se abocó al crecimiento de la infraestructura del Club.\r\nComo obra principal se cumplió con el restablecimiento del parquet de la cancha principal con los arreglos pertinentes y se rigió bajo las reglas que obedecen al reglamento de la CABB y AdC.\r\nTambién se mejoró la iluminación en un 100%, se arreglaron los baños y se pintó por completo el interior de la institución.\r\nEn abril del 2019 se realizó la inauguración del mini estadio (ex cancha de bochas) en el primer piso. El cual en el 2020 poseerá piso de parquet con características necesarias en superficies deportivas (elasticidad, uniformidad antideslizante, etc.) en beneficio del jugador, propio de los mejores estadios junto con la compra de los tableros reglamentarios para la práctica efectiva del mismo.\r\n5\r\nTodos los miembros de la comisión directiva entienden que la constante innovación tiene sus frutos. No se trata sólo del apartado deportivo, también a nivel infraestructura general el avance es muy notorio: Además, el mantenimiento del estadio principal y el del auxiliar siguen siendo prioridad. En tanto que, en busca de la expansión, el club tiene como meta a corto plazo, realizar una cancha cerrada en el patio con el fin de que la pueda utilizar el mini básquet.\r\nEl club además cuenta con un gimnasio de pesas, un espacio de elongación y un centro de\r\nkinesiología que forman parte de la totalidad de la infraestructura del club.\r\nCómo todo lo que se ha hecho en el club en estos últimos años, la concreción de las tribunas fue a pura voluntad, esfuerzo y aporte de la comunidad que forma a Ameghino, entre padres, dirigentes y colaboradores.\r\nLo primero que se planteó fue cómo dotar de este tipo de elementos al club, contando con\r\nespacios que son relativamente reducidos. Una vez resuelto esto, la puesta en marcha no se hizo esperar. Por un lado, gestiones ante la Municipalidad permitieron hacerse de buena parte de los materiales que requirió la construcción de la tribuna que posteriormente se denominó «Germán Bischoff» y, por el otro, hicieron falta decenas de horas de trabajo de quienes siempre están en el club para poder levantarla.\r\nLa tribuna lateral primero, como la nueva que se encuentra detrás de uno de los aros, es producto de un trabajo sin descanso, hasta altas horas de la noche, y de un gran puñado de días de quienes hacen de Ameghino una familia.\r\nNuestra Visión:\r\nAspiramos a ser un club modelo consolidado como referente dentro de las instituciones a nivel nacional\r\nNuestra Misión:\r\nNuestro trabajo utilizará el deporte como medio para inculcar valores, apostando al desarrollo de los jugadores jóvenes y profesionalizando todas las áreas de la institución\r\nObjetivos Generales:\r\n* Formar jugadores con la impronta de “La Escuela Ameghino”\r\n* Incrementar la presencia social\r\n* Consolidar una estructura profesional para el básquet femenino\r\n* Evolucionar la estructura de profesionales (cuerpo técnico, cuerpo médico, preparadores físicos,\r\netc.)\r\n* Brindar todo el soporte complementario a la actividad deportiva (inglés, apoyo escolar, clases de\r\nperiodismo, etc.)\r\nObjetivos Específicos:\r\n* Mejorar, aumentar y profesionalizar la infraestructura edilicia\r\n* Aumentar la cantidad de jugadores en el mini básquet\r\n* Competir en torneos nacionales a nivel formativas\r\n* Aspirar al ascenso a La Liga (primera división) y consolidarnos en la categoría\r\n* Realizar y asistir a eventos extras\r\nNuestros Valores:\r\nRESPETO-ORGULLO-COMPROMISO-VOLUNTAD-COHERENCIA-GLORIA-IDENTIDADHONESTIDAD-HUMILDAD-GENEROSIDAD-EMPATÍA\r\n6\r\nFundamentación:\r\nAmeghino es un club histórico del barrio, referente de la ciudad de Villa María y la región que en\r\nlos últimos años ha crecido de manera exponencial. Cuenta con una gran estructura de\r\nprofesionales de élite.\r\nLa institución transmite valores, competitividad y brinda todas las herramientas para el\r\ndesarrollo deportivo y personal de cada uno de los que integran la misma.\r\nEl club busca seguir creciendo para llegar a ser una institución integral de altísimo nivel, en las que todos sus miembros piensen, sientan y actúen en un ámbito de compromiso, honestidad y responsabilidad.', 'JUAN ABEIRO, MATEO GAYNOR, ABEL ARISTIMUÑO, YOHANNER SIFONTES, CRISTIAN ZENCLUSSEN, JEREMIAS FRONTERA, ALVARO CARAFFA, MATEO BEIGIER, EMILIANO LEZCANO, BRUNO GIACONE, TOMAS ALLENDE,SANTIAGO BALIOSIANI,  BRUNO CARIBAUX, RENZO DAMARI, CARLOS RIVERO,  RENZO GIACONE, IGNACIO ORTEGA,  GONZALO RUBIN, JOSE IGNACIO NANI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ligas`
--

CREATE TABLE `ligas` (
  `idLiga` int(11) NOT NULL,
  `liga` varchar(250) NOT NULL,
  `record` text NOT NULL,
  `historia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ligas`
--

INSERT INTO `ligas` (`idLiga`, `liga`, `record`, `historia`) VALUES
(1, 'liga argentina', 'Campeonatos por entrenadores \r\n\r\nSergio Hernández es el único entrenador que logró un tricampeonato (con Peñarol), previo a eso había obtenido un bicampeonato, con Estudiantes de Olavarría. \r\n\r\n6 títulos: Sergio Hernández (1999-00, 2000-01, 2003-04, 2009-10, 2010-11, 2011-12) \r\n\r\n5 títulos: Julio Lamas (1996-97, 2004-05, 2007-08, 2015-16, 2016-17) \r\n\r\n4 títulos: Rubén Magnano (1991-92, 1997-1998, 1998-99, 2008-09) \r\n\r\n3 títulos: Walter Garrone (1987, 1988, 1990) \r\n\r\n2 títulos: Luis Martínez (1985, 1986) \r\n\r\n2 títulos: Horacio Seguí (1995-96, 2001-02) \r\n\r\n2 títulos: Gonzalo García (2017-18 y 2018-19) \r\n\r\n2 título: Silvio Santander (2014-15, 2020-21) \r\n\r\n1 título: León Najnudel (1989) \r\n\r\n1 título: Daniel Rodríguez (1990-91) \r\n\r\n1 título: Orlando Ferratto (1992-93) \r\n\r\n1 título: Néstor García (1993-94) \r\n\r\n1 título: Mario Guzmán (1994-95) \r\n\r\n1 título: Oscar Alberto Sánchez (2002-03) \r\n\r\n1 título: Fernando Duró (2005-06) \r\n\r\n1 título: Gabriel Picatto (2006-07) \r\n\r\n1 título: Nicolás Casalánguida (2012-13) \r\n\r\n1 título: Fernando Rivero (2013-14) \r\n\r\n1 título: Lucas Victoriano (2021-22) \r\n\r\nCampeonatos por jugadores \r\n\r\nLeonardo Gutiérrez logró el campeonato con 5 clubes distintos: Olimpia, Atenas, Ben Hur, Boca Juniors y Peñarol. \r\n\r\nEn el listado están aquellos jugadores que consiguieron cuatro o más títulos. \r\n\r\n10 títulos: Leonardo Gutiérrez (1995-96, 1998-99, 2001-02, 2004-05, 2006-07, 2008-09, 2009-10, 2010-11, 2011-12, 2013-14) \r\n\r\n7 títulos: Héctor Campana (1987, 1988, 1990-91, 1991-92, 1997-98, 1998-99, 2002-03) \r\n\r\n7 títulos: Marcelo Milanesio (1987, 1988, 1990, 1991-92, 1997-98, 1998-99, 2001-02) \r\n\r\n7 títulos: Marcos Mata (2009-10, 2010-11, 2011-12, 2015-16, 2016-17, 2017-18, 2018-19) \r\n\r\n6 títulos: Diego Osella: (1988, 1990, 1991-92, 1997-98, 1998-99, 2008-09) \r\n\r\n6 títulos: Martín Leiva: (2003-04, 2006-07, 2009-10, 2010-11, 2011-12, 2013-14) \r\n\r\n6 títulos: Nicolás Aguirre (2014-15, 2015-16, 2016-17, 2017-18, 2018-19, 2020-21) \r\n\r\n5 títulos: Gustavo Ismael Fernández (1990-91, 1992-93, 1996-97, 1999-00, 2000-01) \r\n\r\n5 títulos: Bruno Lábaque (1997-98, 1998-99, 2001-02, 2002-03, 2008-09) \r\n\r\n5 títulos: Diego Maggi (1985, 1986, 1989, 1990-91, 1993-94) \r\n\r\n4 títulos: Andrés Pelussi (1997-98, 2001-02, 2002-03, 2007-08) \r\n\r\n4 títulos: Germán Filloy (1987, 1988, 1990, 1991-92) \r\n\r\n4 títulos: Alejandro Reinick (2002-03, 2009-10, 2010-11, 2011-12) \r\n\r\n4 títulos: Facundo Campazzo (2009-10, 2010-11, 2011-12, 2013-14) ', 'La Liga Nacional de Básquet es la liga de baloncesto profesional de Argentina. Fue creada en 1984 por iniciativa de los entrenadores José María Cavallero, León Najnudel y Horacio Seguí, y el periodista Osvaldo Ricardo Orcasitas, entre otros, reemplazando al Campeonato Argentino de Clubes. La organiza y administra la Asociación de Clubes en sus tres máximas categorías. Los torneos provinciales que nutren de equipos a estas competencias son organizados por la Confederación Argentina de Básquetbol.\r\n\r\n·Estructura\r\nLa competencia está conformada por tres divisiones. La máxima categoría adopta el nombre de \"Liga Nacional A\", y pone en juego la Copa Challenger León Najnudel. La Liga está integrada por dieciséis equipos y se juega en dos fases regulares, y luego play-offs. La segunda categoría es el Torneo Nacional de Ascenso (abreviado TNA), cuya forma de disputa es similar a la Liga A. La tercera categoría es el Torneo Federal de Básquetbol, un torneo de 49 equipos distribuidos en nueve divisiones. Al Torneo Federal de Básquetbol se llega a través de los Torneos Provinciales de Clubes y de la Liga Metropolitana. Comúnmente, a las últimas etapas de estos torneos se los denomina \"Liga C\". \r\n\r\n·Competencia\r\nLa competencia en las dos máximas categorías se inicia entre fines de septiembre y comienzos de octubre, y finaliza entre fines de mayo y comienzos de junio del año siguiente. En la primera división, se juega una primera fase en donde se separan los equipos por conveniencia geográfica en 2 zonas (norte y sur) y se enfrentan en partidos ida y vuelta solo entre los equipos de su zona. Los primeros 4 de cada grupo clasifican al Torneo Súper 8. En la segunda fase se enfrentan todos contra todos arrastrando la mitad de los puntos de la primera fase.\r\n\r\n\r\nA principios de cada año de calendario, en la mitad de la temporada regular, se realiza el Juego de las Estrellas de la LNB. En primer lugar, se lleva a cabo una votación vía internet en la cual los fans pueden elegir a los mejores jugadores de cada posición así como los entrenadores. Actualmente se enfrentan un combinado de jugadores nacionales contra uno de extranjeros. El evento generalmente se disputa en dos días, agregándose al mismo un Torneo de Triples, un Torneo de Volcadas, una Carrera de Habilidades, competencia contrarreloj de destrezas y agilidad y el Tiro de las Estrellas, una competencia contrarreloj desarrollada en tríos compuestos por un jugador actual de la liga, una leyenda y una integrante de la selección femenina de baloncesto.\r\n\r\n\r\nUna vez terminada la segunda fase, los primeros equipos de la tabla se clasifican directamente a los cuartos de final, mientras que los que se posicionan del puesto quinto al décimosegundo juegan la reclasificación. Los últimos cuatro equipos juegan un Play Off para definir los 2 descensos. Los Play Off por el campeonato se juegan al mejor de 5 partidos (gana el primero que llegue a 3 victorias) con el formato 2-2-1, en la reclasificación, los cuartos de final y la semifinal. Antes del inicio de los Play Off se elige al mejor quinteto, el mejor sexto hombre, el jugador de mayor progreso, la revelación o debutante, el mejor extranjero, el entrenador del año, el mejor arbitro y la mejor dirigencia, de la mano de la Asociación de Clubes y el Diario Olé. La final se juega al mejor de 7 partidos (gana el primero que llegue a 4 partidos ganados) con el formato 2-2-1-1-1.'),
(2, 'Liga de Campeones de Baloncesto de las Américas', 'Último campeón:	Bandera de Argentina San Lorenzo\r\nÚltimo subcampeón: Bandera de Venezuela Guaros de Lara\r\nMás campeonatos: Bandera de Argentina San Lorenzo, Bandera de Argentina Peñarol de Mar del Plata y Bandera de Venezuela Guaros de Lara.\r\nMás participaciones: Capitanes de Arecibo	', 'El lanzamiento oficial del torneo fue en Montevideo, Uruguay y estuvo encabezado por el presidente honorario de FIBA, el argentino Horacio Muratore, el director ejecutivo de FIBA en Américas, el brasileño Carlos Alves, y el CEO de la Basketball Champions League de Europa, Patrick Comninos.'),
(4, 'liga USA basquetbol', 'En 1956 los Boston Celtics convirtieron en una auténtica leyenda, ganando 11 anillos en las 13 temporadas en las que estuvo en activo. En 1959 el central Wilt Chamberlain entró en la liga y en poco tiempo se convertiría en uno de los jugadores más dominantes que jamás haya pisado una cancha de baloncesto, estableciendo todo tipo de récords en puntos y rebotes, y llegando, incluso, a anotar 100 puntos en un partido. Su rivalidad con Russell es recordada como una de las más grandes en la historia del deporte.\r\n\r\nEn la temporada 1979-1980 la liga agregó la línea de tres puntos. Esa temporada, entrarían en la liga los rookies Magic Johnson y Larry Bird, para jugar en los Lakers y Celtics respectivamente, y se dio comienzo a un periodo en el que el interés por la liga y el número de aficionados creció tanto en el país como en el mundo entero. La preciosa rivalidad que mantenían estos dos jugadores fue, como muchos dicen, uno de los salvadores de la liga, que parecía que empezaba a vagar sin rumbo antes de sus llegadas. Bird ganaría con Boston tres títulos, mientras que Johnson se proclamaría vencedor de cinco campeonatos con los Lakers.\r\n\r\nMichael Jordan empieza a jugar en 1984 en la NBA, provocando un mayor interés en la liga. En 1989, el número de equipos se elevaba ya a 27, siguiendo el proceso de expansión. Durante la década de los 90, Jordan, ganaría seis anillos con los Bulls.\r\n\r\nLos inicios del nuevo milenio fueron dominados por Los Angeles Lakers de Shaquille O\'Neal y Kobe Bryant. Otro equipo destacado en la década de los 2000 fue San Antonio Spurs. Los Celtics recuperaron el trono en 2008, mientras los Lakers se llevaron los campeonatos de 2009 y 2010.\r\n\r\nDallas Mavericks se coronó en 2011 y Miami Heat consiguió un Back-to-back que se creía el inicio de una dinastía, pero LeBron James, la estrella del Heat regresó a Cleveland para darle su primer título a la franquicia en 2016.\r\n\r\nGolden State Warriors ganó 3 anillos en 5 finales consecutivas mientras que el joven equipo Toronto Raptors se llevó la edición de 2019\r\n\r\nLos años 2020 empezaron con Los Angeles Lakers como campeones tras una década', 'La USA Basketball es la federación nacional de baloncesto de los Estados Unidos. Es una organización sin ánimo de lucro y encargado de regular el deporte del baloncesto en los Estados Unidos. También se encarga de representar a su país ante la FIBA así como ante el comité olímpico estadounidense en todo lo referente al deporte de la canasta.\r\n\r\nEsta federación nacional fue fundada en 1974 con el nombre de Amateur Basketball Association of the United States of America (Asociación Amateur de Baloncesto de los Estados Unidos de América). Fue renombrado como USA Basketball en el 12 de octubre de 1989, después de que la FIBA modificara sus estatutos y sus reglamentos para permitir ingresar y competir a jugadores profesionales provenientes de la NBA en sus competiciones internacionales.\r\n\r\nLa USA Basketball es la responsable de la preparación de las selecciones nacionales de baloncesto, tanto masculina como femenina, que representan a Estados Unidos en los torneos internacionales tales como el Campeonato Mundial de Baloncesto, los Juegos Olímpicos, los Juegos Panamericanos, el Torneo de las Américas y el Campeonato FIBA Américas.\r\n\r\nAsí mismo tiene como misión la promoción del baloncesto para hacer llegar dicho deporte al mayor número de aficionados posible.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id_equipo`),
  ADD KEY `id_fk-liga` (`id_fk-liga`),
  ADD KEY `id_fk-liga_2` (`id_fk-liga`);

--
-- Indices de la tabla `ligas`
--
ALTER TABLE `ligas`
  ADD PRIMARY KEY (`idLiga`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ligas`
--
ALTER TABLE `ligas`
  MODIFY `idLiga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD CONSTRAINT `equipos_ibfk_1` FOREIGN KEY (`id_fk-liga`) REFERENCES `ligas` (`idLiga`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
