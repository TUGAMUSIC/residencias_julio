-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2022 a las 07:16:40
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tesco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativos`
--

CREATE TABLE `administrativos` (
  `Matricula` int(11) NOT NULL,
  `Area` varchar(150) DEFAULT NULL,
  `Psswrd` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `Matricula` int(11) NOT NULL,
  `Nombre` varchar(70) DEFAULT NULL,
  `Paterno` varchar(50) DEFAULT NULL,
  `Materno` varchar(50) DEFAULT NULL,
  `Psswrd` varchar(50) DEFAULT NULL,
  `Carrera` varchar(4) DEFAULT NULL,
  `Turno` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`Matricula`, `Nombre`, `Paterno`, `Materno`, `Psswrd`, `Carrera`, `Turno`) VALUES
(199925153, 'Dr. Campero', 'Bootstrap', 'De Pastor', '1234', 'SIC', 'Matutino'),
(199958162, 'Dr. Vivanco', 'APA', 'Crespo', '1234', 'SIC', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrativos`
--
ALTER TABLE `administrativos`
  ADD PRIMARY KEY (`Matricula`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`Matricula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
