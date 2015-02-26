-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2015 a las 07:21:41
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `alquilerviedo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuegos`
--

CREATE TABLE IF NOT EXISTS `videojuegos` (
  `id` int(6) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `descripcion` varchar(60) NOT NULL,
  `cantidad` int(4) NOT NULL,
  `precio` float NOT NULL,
  `plataforma` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `videojuegos`
--

INSERT INTO `videojuegos` (`id`, `nombre`, `descripcion`, `cantidad`, `precio`, `plataforma`) VALUES
(1, 'mario', 'super mario bros', 7, 2000, 1),
(2, 'tetris', 'acomodar bloques', 8, 1500, 2),
(3, 'snake', 'hacer puntos mientras evitas chocar', 5, 2000, 1),
(4, 'poker', 'apuesta y gana', 6, 3000, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
