-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 02-08-2017 a las 23:39:57
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `DBtallermecanico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbpersona`
--

CREATE TABLE `tbpersona` (
  `cedulapersona` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nombrepersona` text COLLATE utf8_spanish_ci NOT NULL,
  `apellido1persona` text COLLATE utf8_spanish_ci NOT NULL,
  `apellido2persona` text COLLATE utf8_spanish_ci NOT NULL,
  `telefonopersona` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `direccionpersona` text COLLATE utf8_spanish_ci NOT NULL,
  `correopersona` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbtipoempleado`
--

CREATE TABLE `tbtipoempleado` (
  `cedulapersona` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nombretipoempleado` text COLLATE utf8_spanish_ci NOT NULL,
  `descripciontipoempleado` text COLLATE utf8_spanish_ci NOT NULL,
  `estadotipoempleado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbpersona`
--
ALTER TABLE `tbpersona`
  ADD PRIMARY KEY (`cedulapersona`);

--
-- Indices de la tabla `tbtipoempleado`
--
ALTER TABLE `tbtipoempleado`
  ADD PRIMARY KEY (`cedulapersona`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbtipoempleado`
--
ALTER TABLE `tbtipoempleado`
  ADD CONSTRAINT `tbtipoempleado_ibfk_1` FOREIGN KEY (`cedulapersona`) REFERENCES `tbpersona` (`cedulapersona`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
