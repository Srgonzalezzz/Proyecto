-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2022 a las 09:12:04
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `personalizacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonalizacion`
--

CREATE TABLE `datospersonalizacion` (
  `Id` int(11) NOT NULL,
  `ProductoDeInteres` varchar(60) DEFAULT NULL,
  `CantidadQueDesea` varchar(5) DEFAULT NULL,
  `AnchoDeProducto` varchar(15) DEFAULT NULL,
  `LargorDeproducto` varchar(15) DEFAULT NULL,
  `TelaQueDesea` varchar(10) DEFAULT NULL,
  `ColorDeTela` varchar(10) DEFAULT NULL,
  `ColorDelProducto` varchar(10) DEFAULT NULL,
  `PrototipoDeReferencia` longblob DEFAULT NULL,
  `Descripcion` varchar(300) DEFAULT NULL,
  `FechaSolicitud` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datospersonalizacion`
--

INSERT INTO `datospersonalizacion` (`Id`, `ProductoDeInteres`, `CantidadQueDesea`, `AnchoDeProducto`, `LargorDeproducto`, `TelaQueDesea`, `ColorDeTela`, `ColorDelProducto`, `PrototipoDeReferencia`, `Descripcion`, `FechaSolicitud`) VALUES
(19, 'aa', '15', '150cm', '15cm', 'Capitoniad', 'gg', 'qqq', '', '', '2022-09-22');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datospersonalizacion`
--
ALTER TABLE `datospersonalizacion`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datospersonalizacion`
--
ALTER TABLE `datospersonalizacion`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
