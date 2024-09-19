-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-04-2024 a las 19:47:30
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `modal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `web`
--

CREATE TABLE `web` (
  `id` int(10) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `genero` varchar(200) NOT NULL,
  `año` date NOT NULL,
  `imagen` varchar(300) NOT NULL,
  `video` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `web`
--

INSERT INTO `web` (`id`, `nombre`, `descripcion`, `genero`, `año`, `imagen`, `video`) VALUES
(1, '', 'superheroe, marvel', 'accion ', '0000-00-00', 'https://img.freepik.com/foto-gratis/majestuoso-pico-montana-tranquilo-paisaje-invernal-generado-ia_188544-15662.jpg?w=1060&t=st=1710868325~exp=1710868925~hmac=97b6021f2938fdf17f2429d511628532f9858f6f9c721b111615c80fe5a732e6', 'htt');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `web`
--
ALTER TABLE `web`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `web`
--
ALTER TABLE `web`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
