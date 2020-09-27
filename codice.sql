-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2020 a las 18:52:05
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `codice`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `pk_alumnos` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `contra` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `dni` int(9) NOT NULL,
  `fnacimiento` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`pk_alumnos`, `usuario`, `contra`, `nombre`, `apellido`, `dni`, `fnacimiento`) VALUES
(1, 'tumadre123', 'pipipopo', 'tumadre', 'jorgenitales', 0, '2020-09-20 '),
(2, 'tumadre123dsd', 'pipipopo123', 'tumadreaaa', 'jorgenitalesaa', 0, '2020-09-08 '),
(3, 'tumadre123dsd', '123123', 'tumadreaaa', 'jorgenitalesaa', 0, '2020-09-18 '),
(4, 'tumadre123dsd', '123123123', 'tumadreaaa', 'jorgenitalesaa', 0, '2020-09-18'),
(5, 'dasdasdasd', 'asdasd', 'tumadreaaa', 'jorgenitalesaa', 123123, '2020-09-18'),
(6, 'asd', '123', 'dasd', '123', 3333, '2020-09-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `id` smallint(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `archivo` blob NOT NULL,
  `fk_materia` smallint(11) NOT NULL,
  `fk_curso` smallint(11) NOT NULL,
  `fk_profesor` smallint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `pk_curso` smallint(11) NOT NULL,
  `curso` varchar(255) NOT NULL,
  `fk_alumno` smallint(6) NOT NULL,
  `fk_materia` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `pk_materia` smallint(11) NOT NULL,
  `materia` varchar(255) NOT NULL,
  `fk_curso` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `pk_profesores` smallint(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `contra` varchar(255) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `dni` int(9) NOT NULL,
  `fnacimiento` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`pk_profesores`, `usuario`, `contra`, `nombre`, `apellido`, `dni`, `fnacimiento`) VALUES
(2, 'profe123', 'megustalapapa', 'Juan', 'Perez', 44932121, '13-02-2001'),
(3, 'dsa', '123', 'erensto salvado', 'salvadoernesto', 123123, '12/01/2002');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`pk_alumnos`);

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`pk_curso`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`pk_materia`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`pk_profesores`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `pk_alumnos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `archivos`
--
ALTER TABLE `archivos`
  MODIFY `id` smallint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `pk_curso` smallint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `pk_materia` smallint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `pk_profesores` smallint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
