-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2022 a las 21:32:16
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gabricalead`
--
CREATE DATABASE IF NOT EXISTS `gabricalead` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `gabricalead`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `id` int(11) NOT NULL,
  `nombre_ciudad` text COLLATE utf8_spanish_ci NOT NULL,
  `cod` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`id`, `nombre_ciudad`, `cod`) VALUES
(1, 'Cali', 'CAL'),
(2, 'Medellin', 'MED'),
(3, 'Bogotá', 'BOG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lead`
--

CREATE TABLE `lead` (
  `id` int(11) NOT NULL,
  `nombre_cliente` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nit` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_punto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_equipo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `promotor` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `rtc` int(11) NOT NULL,
  `capitan_usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ip_cliente` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `hora_actual` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_actual` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `lead`
--

INSERT INTO `lead` (`id`, `nombre_cliente`, `nit`, `nombre_punto`, `nombre_equipo`, `ciudad`, `promotor`, `rtc`, `capitan_usuario`, `ip_cliente`, `hora_actual`, `fecha_actual`) VALUES
(1, 'asd', 'asd', 'asd', 'sasd', 'asd', 'asd', 12312, 'asdasd', '::1', '06:50:26', '2022-10-04'),
(2, 'prueba', 'nit', 'punto', 'equipo', 'bogota', 'promotor', 123, 'capitan', '::1', '06:55:42', '2022-10-04');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lead`
--
ALTER TABLE `lead`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `lead`
--
ALTER TABLE `lead`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
