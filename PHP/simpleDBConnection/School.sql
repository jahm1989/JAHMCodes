-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-12-2016 a las 22:17:49
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `School`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SC_Department`
--

CREATE TABLE IF NOT EXISTS `SC_Department` (
`Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `SC_Department`
--

INSERT INTO `SC_Department` (`Id`, `Name`) VALUES
(1, 'Science'),
(3, 'Maths'),
(5, 'Basic');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SC_Students`
--

CREATE TABLE IF NOT EXISTS `SC_Students` (
`Id` int(10) unsigned NOT NULL,
  `Name` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Level` tinyint(3) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `SC_Students`
--

INSERT INTO `SC_Students` (`Id`, `Name`, `LastName`, `Level`) VALUES
(1, 'Bill', 'Rogers', 3),
(3, 'Michael', 'Wagner', 4),
(5, 'Antonio', 'Robles', 4),
(7, 'Vishnu', 'Rajamopalan', 2),
(9, 'Daniel', 'Soled', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SC_Student_Subject`
--

CREATE TABLE IF NOT EXISTS `SC_Student_Subject` (
  `IdStudent` int(11) NOT NULL,
  `IdSubject` int(11) NOT NULL,
  `Note` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `SC_Student_Subject`
--

INSERT INTO `SC_Student_Subject` (`IdStudent`, `IdSubject`, `Note`) VALUES
(1, 1, 9),
(1, 2, 8),
(1, 3, 10),
(1, 4, 7),
(1, 5, 9),
(1, 6, 8),
(3, 1, 10),
(3, 2, 8),
(3, 3, 9),
(3, 4, 10),
(3, 5, 8),
(3, 6, 9),
(5, 1, 10),
(5, 2, 8),
(5, 3, 9),
(5, 4, 10),
(5, 5, 8),
(5, 6, 9),
(7, 1, 10),
(7, 2, 8),
(7, 3, 9),
(7, 4, 10),
(7, 5, 8),
(7, 6, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SC_Subject`
--

CREATE TABLE IF NOT EXISTS `SC_Subject` (
`Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `IdDepartment` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `SC_Subject`
--

INSERT INTO `SC_Subject` (`Id`, `Name`, `IdDepartment`) VALUES
(1, 'Calculus', 3),
(2, 'Algebra', 3),
(3, 'Physics', 1),
(4, 'Chemistry', 1),
(5, 'Language', 5),
(6, 'Latin', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `SC_Department`
--
ALTER TABLE `SC_Department`
 ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `SC_Students`
--
ALTER TABLE `SC_Students`
 ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `SC_Student_Subject`
--
ALTER TABLE `SC_Student_Subject`
 ADD PRIMARY KEY (`IdStudent`,`IdSubject`);

--
-- Indices de la tabla `SC_Subject`
--
ALTER TABLE `SC_Subject`
 ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `SC_Department`
--
ALTER TABLE `SC_Department`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `SC_Students`
--
ALTER TABLE `SC_Students`
MODIFY `Id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `SC_Subject`
--
ALTER TABLE `SC_Subject`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
