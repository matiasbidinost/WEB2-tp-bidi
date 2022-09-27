-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2022 a las 00:51:42
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
CREATE DATABASE IF NOT EXISTS `liga` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `liga`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id_equipo` int(11) NOT NULL,
  `logo` text NOT NULL,
  `historiaEq` text NOT NULL,
  `jugadores` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id_equipo`, `logo`, `historiaEq`, `jugadores`) VALUES
(1, 'logo1', 'habia una vez un patito q jugaba al basquet habia una vez un patito q jugaba al basquethabia una vez un patito q jugaba al basquethabia una vez un patito q jugaba al basquethabia una vez un patito q jugaba al basquethabia una vez un patito q jugaba al basquethabia una vez un patito q jugaba al basquethabia una vez un patito q jugaba al basquethabia una vez un patito q jugaba al basquethabia una vez un patito q jugaba al basquet', 'marcos peña, mirtha legrand, marcos peña, mirtha legrand, marcos peña, mirtha legrand, marcos peña, mirtha legrand.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ligas`
--

CREATE TABLE `ligas` (
  `id_liga` int(11) NOT NULL,
  `liga` varchar(150) NOT NULL,
  `historia` text NOT NULL,
  `estatRecord` text NOT NULL,
  `fk_id_equipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ligas`
--

INSERT INTO `ligas` (`id_liga`, `liga`, `historia`, `estatRecord`, `fk_id_equipo`) VALUES
(1, 'LIGA MANCHESTEEEEEERRRRRRRRRRRRR', 'en un rincon de la mancha en un rincon de la mancha en un rincon de la mancha en un rincon de la mancha en un rincon de la mancha en un rincon de la mancha en un rincon de la mancha en un rincon de la mancha en un rincon de la mancha ', '100% winrate ryze', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `ligas`
--
ALTER TABLE `ligas`
  ADD PRIMARY KEY (`id_liga`),
  ADD KEY `fk_id_equipo` (`fk_id_equipo`);

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
  MODIFY `id_liga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ligas`
--
ALTER TABLE `ligas`
  ADD CONSTRAINT `ligas_ibfk_1` FOREIGN KEY (`fk_id_equipo`) REFERENCES `equipos` (`ID_equipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
