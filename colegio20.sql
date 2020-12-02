-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 02-12-2020 a las 02:40:18
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `colegio20`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `login` varchar(10) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `login`, `pass`) VALUES
(1, 'Luis Perez', 'luis', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Rosa Santos', 'rosa', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'pedro casas', 'pedro', '12345'),
(4, 'Ricardo', 'Mamani', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'Pedro Diaz', 'diaz', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'Fernado Castro', 'fernando', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'Karla Flores', 'karla', '12345'),
(11, 'MARTHA QUISPE', 'martha', '12345'),
(12, 'FRANCISCO MAMANI', 'francisco', '827ccb0eea8a706c4c34a16891f84e7b'),
(13, 'USUARIO 13', 'u13', 'e10adc3949ba59abbe56e057f20f883e'),
(14, 'Usuario 14', 'u14', 'e10adc3949ba59abbe56e057f20f883e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
