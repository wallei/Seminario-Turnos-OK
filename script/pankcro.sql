-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-11-2019 a las 09:48:04
-- Versión del servidor: 5.6.13
-- Versión de PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pankcro`
--
CREATE DATABASE IF NOT EXISTS `pankcro` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `pankcro`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE IF NOT EXISTS `reservas` (
  `idReserva` int(11) NOT NULL AUTO_INCREMENT,
  `especialidad` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `doctor` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  PRIMARY KEY (`idReserva`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`idReserva`, `especialidad`, `doctor`, `fecha`, `hora`) VALUES
(20, 'Clinica Medica', 'Nick Riviera', '2019-11-11', '12:05:00'),
(21, 'Clinico', 'Chicharrito', '2019-11-25', '09:00:00'),
(22, 'La cola less', 'Muestra un poquito', '2019-11-26', '09:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE IF NOT EXISTS `turnos` (
  `idturno` int(11) NOT NULL,
  `especialidad` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `doctor` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  PRIMARY KEY (`idturno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`idturno`, `especialidad`, `doctor`, `fecha`, `hora`) VALUES
(1, 'Clinica Medica', 'Nick Riviera', '2019-11-11', '12:05:00'),
(2, 'Dermatologia', 'Zoidberg', '2019-12-12', '09:00:00'),
(3, 'Cardiologia', 'Hibbert', '2019-01-10', '21:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `apellido`, `usuario`, `email`, `clave`) VALUES
(1, 'John', 'Doe', 'JDoe', 'john@example.com', 'clave'),
(2, 'Walter', 'Gazzanego', 'wgazzanego', 'wgazzanego@gmail.com', 'lupin123'),
(3, 'Martin', 'Torrent', 'mtorrent', 'mtorrent@gmail.com', 'culofacil'),
(4, 'Martin', 'Torrent', 'mtorrent', 'mtorrent@gmail.com', 'culofacil'),
(5, 'Mauricio', 'macri', 'mmacri', 'mmacri@shemail.com', 'mmacri'),
(6, 'walter', 'gazzanego', 'wgazzanego', 'wgazzanego@gmail.com', 'wgazzanego'),
(7, 'w', 'w', 'w', 'w@w.com', 'w'),
(8, 'a', 'a', 'a', 'a@a.com', 'a'),
(9, 'marcosPuto', 'marcos', 'marcosPuto', 'marcosputo@gmail.com', 'marcosPuto'),
(10, 'nahuel', 'nahuel', 'nahuel', 'nahuel@nahuel.com', 'nahuel');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
