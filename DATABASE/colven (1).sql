-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2022 a las 00:45:49
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `colven`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Nombres` varchar(50) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `Ciudad` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Edad` int(2) DEFAULT NULL,
  `Celular` int(20) DEFAULT NULL,
  `Direccion` varchar(20) DEFAULT NULL,
  `Contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`Id`, `Nombres`, `Apellidos`, `Ciudad`, `Email`, `Edad`, `Celular`, `Direccion`, `Contrasena`) VALUES
(7, 'YARSON 5', 'BRICEÑO', '123', '123@gmail.com', 123, 123, '123', '$argon2i$v=19$m=65536,t=4,p=1$NDRzdmc3T1VUZnQ5OFp4VA$4nl5dkarP9PDeSfF59r9En8xEKbSYpWah+QmTXNVJhE'),
(12, 'YEISON DAVIDQ', 'GIRALDO GIRALDO', 'BELLO', 'yeisongg47@gmail.com', 123, 123, '123', '$argon2i$v=19$m=65536,t=4,p=1$amlXdXhyYUhZYXZlMjMucw$TwlpmDlcKeIJjkrOQlCQBWROkP8wJ9Ru3o1tL40P4/Q'),
(13, 'William DE jesus', 'GIRALDO Lopez', 'MEDEL', 'william@gmail.com', 1, 1, '1', '$argon2i$v=19$m=65536,t=4,p=1$bG5PaXlEdG9zazIvNXlmaw$0pqRxQTlPMw8DUgR1dLVOZ1KrpjL9xixQoYPptyAoW4'),
(14, 'YEISON DAVID', 'GIRALDO GIRALDO', 'BELLO', 'yeisongg47@gmail.com', 123, 123, '123', '$argon2i$v=19$m=65536,t=4,p=1$MTVTV0pzL0wyUjR5N05xUQ$QOaqIvpGfZuTu1H6wd3LHDrNVIok2rhBusB+NJSgqbI'),
(17, 'SANTIAGO', 'ARANGO', 'BELLO', 'yeisongg47@gmail.com', 18, 3556, 'CL 74 # 57 B 22', '$argon2i$v=19$m=65536,t=4,p=1$ME9tMzhaMmJwdWcva0lkRQ$pzzTvwvH6DvP5l1fMAo6loGmhzXZGowvaJMwEtH7aLM'),
(18, 'WILLIAM', 'GIRALDO', 'BELLO', 'yeisongg47@gmail.com', 50, 337, 'CALLA 45', '$argon2i$v=19$m=65536,t=4,p=1$bDAyOVZpelB5Y2hXbmZVeA$e+QkmkZfzeLkDTZLzyDxtt796i78XZ2g9mLAE9b1acE');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
