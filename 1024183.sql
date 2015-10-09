-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-10-2015 a las 02:05:28
-- Versión del servidor: 10.0.21-MariaDB-log
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `1024183`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `User`
--

CREATE TABLE `User` (
  `use_id` int(11) NOT NULL,
  `use_login` varchar(45) NOT NULL,
  `use_password` varchar(45) NOT NULL,
  `use_name` varchar(100) NOT NULL,
  `use_document` int(11) NOT NULL,
  `use_address` varchar(150) NOT NULL,
  `use_city` varchar(150) NOT NULL,
  `use_mail` varchar(70) NOT NULL,
  `use_phone` varchar(45) NOT NULL,
  `use_cell` varchar(45) NOT NULL,
  `use_pay` set('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `User`
--

INSERT INTO `User` (`use_id`, `use_login`, `use_password`, `use_name`, `use_document`, `use_address`, `use_city`, `use_mail`, `use_phone`, `use_cell`, `use_pay`) VALUES
(0, 'aarchila', '1234567890', 'Arley Archila', 1234567890, 'Cra 1 #1 - 1', 'Bogota', 'aarchila@uniminuto.edu.co', '1234567890', '1234567890', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`use_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
