-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2020 a las 22:20:39
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_valoracion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anecdotarios`
--

CREATE TABLE `anecdotarios` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `create_at` date NOT NULL,
  `create_by` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `anecdotarios`
--

INSERT INTO `anecdotarios` (`id`, `descripcion`, `estado`, `usuario_id`, `create_at`, `create_by`) VALUES
(24, ''Hola'', 1, 83, ''2020-09-02'', ''Fernando Alberto Salas Heresi''),
(25, ''No'', 1, 83, ''2020-09-03'', ''Fernando Alberto Salas Heresi''),
(26, ''KKKKK'', 1, 76, ''2020-09-08'', ''Fernando Alberto Salas Heresi''),
(27, ''ASDASD'', 1, 76, ''2020-09-08'', ''Fernando Alberto Salas Heresi'');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(55) NOT NULL,
  `descripcion` varchar(65) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `gerencia_id` int(11) NOT NULL,
  `create_at` varchar(35) NOT NULL,
  `create_by` varchar(35) NOT NULL,
  `update_at` varchar(35) NOT NULL,
  `update_by` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id`, `nombre`, `descripcion`, `estado`, `gerencia_id`, `create_at`, `create_by`, `update_at`, `update_by`) VALUES
(1, ''Finanzas y comunicaciones'', ''sss'', 1, 2, ''15-08-2020 23:40:09'', ''Administrador Sistema'', ''23-09-2020 11:27:05'', ''Administrador Sistemas''),
(2, ''Desarrollo Humano'', '''', 1, 2, ''15-08-2020 23:40:09'', ''Administrador Sistema'', '''', ''''),
(3, ''Sistemas'', '''', 1, 2, ''15-08-2020 23:40:09'', ''Administrador Sistema'', '''', ''''),
(4, ''Seguridad y Salud Ocupacional'', '''', 1, 2, ''15-08-2020 23:40:09'', ''Administrador Sistema'', ''17-08-2020 10:59:15'', ''Administrador Sistema''),
(5, ''Logística, Infraestructura y Mantenimiento'', '''', 1, 2, ''15-08-2020 23:40:09'', ''Administrador Sistema'', ''17-08-2020 11:01:26'', ''Administrador Sistema''),
(6, ''Promoción y comunicación'', '''', 1, 2, ''15-08-2020 23:40:09'', ''Administrador Sistema'', '''', ''''),
(7, ''PS'', '''', 1, 1, ''15-08-2020 23:40:09'', ''Administrador Sistema'', '''', ''''),
(8, ''ES'', '''', 1, 1, ''15-08-2020 23:40:09'', ''Administrador Sistema'', '''', ''''),
(9, ''MS'', '''', 1, 1, ''15-08-2020 23:40:09'', ''Administrador Sistema'', '''', ''''),
(10, ''HS'', '''', 1, 1, ''15-08-2020 23:40:09'', ''Administrador Sistema'', '''', ''''),
(11, ''Programa de Desarrollo Institucional (PDI)'', '''', 1, 2, ''15-08-2020 23:40:09'', ''Administrador Sistema'', '''', ''''),
(12, ''RRPP'', '''', 1, 1, ''15-08-2020 23:40:09'', ''Administrador Sistema'', '''', ''''),
(15, ''No necesita área DOCENTES'', '''', 0, 2, ''15-08-2020 23:40:09'', ''Administrador Sistema'', '''', ''''),
(16, ''No necesita área NO DOCENTES'', '''', 0, 2, ''15-08-2020 23:44:07'', ''Administrador Sistema'', ''17-08-2020 11:01:02'', ''Administrador Sistema'');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bimestres`
--

CREATE TABLE `bimestres` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `update_at` date NOT NULL,
  `update_by` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bimestres`
--

INSERT INTO `bimestres` (`id`, `nombre`, `fecha_inicio`, `fecha_fin`, `update_at`, `update_by`) VALUES
(1, ''BIMESTRE I'', ''2020-09-01'', ''2020-09-30'', ''0000-00-00'', ''0000-00-00''),
(2, ''BIMESTRE II'', NULL, NULL, ''0000-00-00'', ''0000-00-00''),
(3, ''BIMESTRE III'', NULL, NULL, ''0000-00-00'', ''0000-00-00''),
(4, ''BIMESTRE IV'', NULL, NULL, ''0000-00-00'', ''0000-00-00'');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competencias`
--

CREATE TABLE `competencias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `estado` tinyint(4) NOT NULL,
  `create_at` varchar(35) NOT NULL,
  `create_by` varchar(35) NOT NULL,
  `update_at` varchar(35) NOT NULL,
  `update_by` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `competencias`
--

INSERT INTO `competencias` (`id`, `nombre`, `estado`, `create_at`, `create_by`, `update_at`, `update_by`) VALUES
(1, ''COMUNICACIÓN '', 1, '''', '''', ''23-09-2020 14:46:18'', ''Administrador Sistemas''),
(2, ''TRABAJO EN EQUIPO'', 1, '''', '''', ''02-07-2020 17:36:02'', ''Administrador Sistema''),
(3, ''PROACTIVIDAD'', 1, '''', '''', ''02-07-2020 17:36:06'', ''Administrador Sistema''),
(4, ''APRENDIZAJE'', 1, '''', '''', ''02-07-2020 17:36:10'', ''Administrador Sistema'');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_periodos`
--

CREATE TABLE `detalles_periodos` (
  `id` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `periodo_id` int(11) NOT NULL,
  `tipo_valoracion_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalles_periodos`
--

INSERT INTO `detalles_periodos` (`id`, `fecha_inicio`, `fecha_fin`, `periodo_id`, `tipo_valoracion_id`) VALUES
(1, ''2020-07-01'', ''2020-08-31'', 3, 1),
(2, ''2020-07-01'', ''2020-07-31'', 3, 2),
(3, ''2020-07-01'', ''2020-07-31'', 3, 3),
(4, ''2020-01-01'', ''2020-08-31'', 3, 4),
(5, ''2020-01-01'', ''2020-12-31'', 2, 1),
(6, ''2020-01-01'', ''2020-12-31'', 2, 2),
(7, ''2020-01-01'', ''2020-08-31'', 2, 3),
(8, ''2020-07-01'', ''2020-07-31'', 2, 4),
(9, ''2020-07-01'', ''2020-07-31'', 4, 1),
(10, ''2020-07-01'', ''2020-07-31'', 4, 2),
(11, ''2020-07-01'', ''2020-07-31'', 4, 3),
(12, ''2020-07-01'', ''2020-07-31'', 4, 4),
(13, ''1111-11-11'', ''1111-11-11'', 5, 1),
(14, ''2020-07-01'', ''2020-07-31'', 5, 2),
(15, ''2020-07-01'', ''2020-07-31'', 5, 3),
(16, ''2020-07-01'', ''2020-07-31'', 5, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_valoraciones`
--

CREATE TABLE `detalles_valoraciones` (
  `id` int(11) NOT NULL,
  `puntaje` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `valoracion_id` int(11) NOT NULL,
  `indicador_id` int(11) NOT NULL,
  `create_at` int(11) NOT NULL,
  `create_by` int(11) NOT NULL,
  `update_at` int(11) NOT NULL,
  `update_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalles_valoraciones`
--

INSERT INTO `detalles_valoraciones` (`id`, `puntaje`, `estado`, `valoracion_id`, `indicador_id`, `create_at`, `create_by`, `update_at`, `update_by`) VALUES
(1512, 1, 1, 106, 1, 3, 0, 0, 0),
(1513, 1, 1, 106, 2, 3, 0, 0, 0),
(1514, 1, 1, 106, 3, 3, 0, 0, 0),
(1515, 1, 1, 106, 4, 3, 0, 0, 0),
(1516, 1, 1, 106, 5, 3, 0, 0, 0),
(1517, 1, 1, 106, 6, 3, 0, 0, 0),
(1518, 1, 1, 106, 7, 3, 0, 0, 0),
(1519, 1, 1, 106, 8, 3, 0, 0, 0),
(1520, 1, 1, 106, 9, 3, 0, 0, 0),
(1521, 1, 1, 106, 10, 3, 0, 0, 0),
(1522, 1, 1, 106, 16, 3, 0, 0, 0),
(1523, 1, 1, 106, 17, 3, 0, 0, 0),
(1524, 1, 1, 106, 18, 3, 0, 0, 0),
(1525, 1, 1, 106, 19, 3, 0, 0, 0),
(1526, 1, 1, 106, 20, 3, 0, 0, 0),
(1527, 1, 1, 106, 11, 3, 0, 0, 0),
(1528, 1, 1, 106, 12, 3, 0, 0, 0),
(1529, 1, 1, 106, 13, 3, 0, 0, 0),
(1530, 1, 1, 106, 14, 3, 0, 0, 0),
(1531, 1, 1, 106, 15, 3, 0, 0, 0),
(1532, 2, 1, 107, 1, 3, 0, 0, 0),
(1533, 2, 1, 107, 2, 3, 0, 0, 0),
(1534, 2, 1, 107, 3, 3, 0, 0, 0),
(1535, 2, 1, 107, 4, 3, 0, 0, 0),
(1536, 2, 1, 107, 5, 3, 0, 0, 0),
(1537, 2, 1, 107, 6, 3, 0, 0, 0),
(1538, 2, 1, 107, 7, 3, 0, 0, 0),
(1539, 2, 1, 107, 8, 3, 0, 0, 0),
(1540, 2, 1, 107, 9, 3, 0, 0, 0),
(1541, 2, 1, 107, 10, 3, 0, 0, 0),
(1542, 2, 1, 107, 16, 3, 0, 0, 0),
(1543, 2, 1, 107, 17, 3, 0, 0, 0),
(1544, 2, 1, 107, 18, 3, 0, 0, 0),
(1545, 2, 1, 107, 19, 3, 0, 0, 0),
(1546, 2, 1, 107, 20, 3, 0, 0, 0),
(1547, 2, 1, 107, 11, 3, 0, 0, 0),
(1548, 2, 1, 107, 12, 3, 0, 0, 0),
(1549, 2, 1, 107, 13, 3, 0, 0, 0),
(1550, 2, 1, 107, 14, 3, 0, 0, 0),
(1551, 2, 1, 107, 15, 3, 0, 0, 0),
(1552, 1, 1, 109, 1, 5, 0, 0, 0),
(1553, 1, 1, 109, 2, 5, 0, 0, 0),
(1554, 1, 1, 109, 3, 5, 0, 0, 0),
(1555, 1, 1, 109, 4, 5, 0, 0, 0),
(1556, 1, 1, 109, 5, 5, 0, 0, 0),
(1557, 4, 1, 109, 6, 5, 0, 0, 0),
(1558, 4, 1, 109, 7, 5, 0, 0, 0),
(1559, 4, 1, 109, 8, 5, 0, 0, 0),
(1560, 4, 1, 109, 9, 5, 0, 0, 0),
(1561, 4, 1, 109, 10, 5, 0, 0, 0),
(1562, 3, 1, 109, 16, 5, 0, 0, 0),
(1563, 3, 1, 109, 17, 5, 0, 0, 0),
(1564, 3, 1, 109, 18, 5, 0, 0, 0),
(1565, 3, 1, 109, 19, 5, 0, 0, 0),
(1566, 3, 1, 109, 20, 5, 0, 0, 0),
(1567, 2, 1, 109, 11, 5, 0, 0, 0),
(1568, 2, 1, 109, 12, 5, 0, 0, 0),
(1569, 2, 1, 109, 13, 5, 0, 0, 0),
(1570, 2, 1, 109, 14, 5, 0, 0, 0),
(1571, 2, 1, 109, 15, 5, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_visitas`
--

CREATE TABLE `detalles_visitas` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `marked` varchar(5) NOT NULL,
  `visita_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `create_by` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalles_visitas`
--

INSERT INTO `detalles_visitas` (`id`, `item_id`, `marked`, `visita_id`, `create_at`, `create_by`) VALUES
(2001, 1, ''si'', 132, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2002, 2, ''si'', 132, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2003, 3, ''si'', 132, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2004, 4, ''no'', 132, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2005, 5, ''no'', 132, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2006, 6, ''no'', 132, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2007, 7, ''no'', 132, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2008, 8, ''no'', 132, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2009, 9, ''no'', 132, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2010, 10, ''no'', 132, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2011, 11, ''no'', 132, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2012, 12, ''no'', 132, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2013, 13, ''no'', 132, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2014, 14, ''no'', 132, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2015, 15, ''no'', 132, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2016, 16, ''no'', 132, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2017, 17, ''no'', 132, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2018, 18, ''no'', 132, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2019, 19, ''no'', 132, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2020, 20, ''no'', 132, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2021, 21, ''no'', 132, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2022, 22, ''no'', 132, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2023, 23, ''no'', 132, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2024, 24, ''no'', 132, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2025, 25, ''no'', 132, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2026, 26, ''no'', 132, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2027, 1, ''si'', 133, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2028, 2, ''si'', 133, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2029, 3, ''no'', 133, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2030, 4, ''no'', 133, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2031, 5, ''no'', 133, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2032, 6, ''no'', 133, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2033, 7, ''no'', 133, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2034, 8, ''no'', 133, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2035, 9, ''no'', 133, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2036, 10, ''no'', 133, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2037, 11, ''no'', 133, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2038, 12, ''no'', 133, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2039, 13, ''no'', 133, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2040, 14, ''no'', 133, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2041, 15, ''no'', 133, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2042, 16, ''no'', 133, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2043, 17, ''no'', 133, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2044, 18, ''no'', 133, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2045, 19, ''no'', 133, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2046, 20, ''no'', 133, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2047, 21, ''no'', 133, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2048, 22, ''no'', 133, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2049, 23, ''no'', 133, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2050, 24, ''no'', 133, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2051, 25, ''no'', 133, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2052, 26, ''no'', 133, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2053, 1, ''si'', 134, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2054, 2, ''si'', 134, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2055, 3, ''si'', 134, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2056, 4, ''no'', 134, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2057, 5, ''no'', 134, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2058, 6, ''no'', 134, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2059, 7, ''no'', 134, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2060, 8, ''no'', 134, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2061, 9, ''no'', 134, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2062, 10, ''no'', 134, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2063, 11, ''no'', 134, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2064, 12, ''no'', 134, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2065, 13, ''no'', 134, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2066, 14, ''no'', 134, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2067, 15, ''no'', 134, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2068, 16, ''no'', 134, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2069, 17, ''no'', 134, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2070, 18, ''no'', 134, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2071, 19, ''no'', 134, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2072, 20, ''no'', 134, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2073, 21, ''no'', 134, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2074, 22, ''no'', 134, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2075, 23, ''no'', 134, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2076, 24, ''no'', 134, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2077, 25, ''no'', 134, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2078, 26, ''no'', 134, ''2020-09-23 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2079, 91, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2080, 92, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2081, 93, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2082, 94, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2083, 95, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2084, 96, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2085, 97, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2086, 98, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2087, 99, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2088, 100, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2089, 101, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2090, 102, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2091, 103, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2092, 104, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2093, 105, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2094, 108, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2095, 109, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2096, 110, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2097, 111, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2098, 112, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2099, 113, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2100, 114, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2101, 115, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2102, 116, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2103, 117, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2104, 118, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2105, 119, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2106, 120, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2107, 121, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2108, 122, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2109, 123, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2110, 124, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2111, 125, ''si'', 135, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2112, 59, ''si'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2113, 60, ''si'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2114, 61, ''si'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2115, 62, ''si'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2116, 63, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2117, 64, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2118, 65, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2119, 66, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2120, 67, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2121, 68, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2122, 69, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2123, 70, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2124, 71, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2125, 72, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2126, 73, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2127, 74, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2128, 75, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2129, 76, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2130, 77, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2131, 78, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2132, 79, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2133, 80, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2134, 81, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2135, 82, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2136, 83, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2137, 84, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2138, 85, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2139, 86, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2140, 87, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2141, 88, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2142, 89, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2143, 90, ''no'', 136, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2144, 87, ''si'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2145, 88, ''si'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2146, 89, ''si'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2147, 90, ''si'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2148, 59, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2149, 60, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2150, 61, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2151, 62, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2152, 63, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2153, 64, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2154, 65, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2155, 66, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2156, 67, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2157, 68, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2158, 69, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2159, 70, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2160, 71, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2161, 72, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2162, 73, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2163, 74, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2164, 75, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2165, 76, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2166, 77, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2167, 78, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2168, 79, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2169, 80, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2170, 81, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2171, 82, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2172, 83, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2173, 84, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2174, 85, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2175, 86, ''no'', 137, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2176, 2, ''si'', 138, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2177, 3, ''si'', 138, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2178, 4, ''si'', 138, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2179, 5, ''si'', 138, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2180, 1, ''no'', 138, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2181, 6, ''no'', 138, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2182, 7, ''no'', 138, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2183, 8, ''no'', 138, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2184, 9, ''no'', 138, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2185, 10, ''no'', 138, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2186, 11, ''no'', 138, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2187, 12, ''no'', 138, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2188, 13, ''no'', 138, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2189, 14, ''no'', 138, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2190, 15, ''no'', 138, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2191, 16, ''no'', 138, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2192, 17, ''no'', 138, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2193, 18, ''no'', 138, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2194, 19, ''no'', 138, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2195, 20, ''no'', 138, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2196, 21, ''no'', 138, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2197, 22, ''no'', 138, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2198, 23, ''no'', 138, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2199, 24, ''no'', 138, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2200, 25, ''no'', 138, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2201, 26, ''no'', 138, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2202, 59, ''si'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2203, 60, ''si'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2204, 61, ''si'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2205, 62, ''si'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2206, 63, ''si'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2207, 64, ''no'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2208, 65, ''no'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2209, 66, ''no'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2210, 67, ''no'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2211, 68, ''no'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2212, 69, ''no'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2213, 70, ''no'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2214, 71, ''no'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2215, 72, ''no'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2216, 73, ''no'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2217, 74, ''no'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2218, 75, ''no'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2219, 76, ''no'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2220, 77, ''no'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2221, 78, ''no'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2222, 79, ''no'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2223, 80, ''no'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2224, 81, ''no'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2225, 82, ''no'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2226, 83, ''no'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2227, 84, ''no'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2228, 85, ''no'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2229, 86, ''no'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2230, 87, ''no'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2231, 88, ''no'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2232, 89, ''no'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2233, 90, ''no'', 139, ''2020-09-24 05:00:00'', ''Claudia\r\n Arrarte Cornejo''),
(2234, 27, ''si'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2235, 28, ''si'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2236, 29, ''si'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2237, 30, ''si'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2238, 31, ''si'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2239, 32, ''no'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2240, 33, ''no'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2241, 34, ''no'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2242, 35, ''no'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2243, 36, ''no'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2244, 37, ''no'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2245, 38, ''no'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2246, 39, ''no'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2247, 40, ''no'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2248, 41, ''no'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2249, 42, ''no'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2250, 43, ''no'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2251, 44, ''no'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2252, 45, ''no'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2253, 46, ''no'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2254, 47, ''no'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2255, 48, ''no'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2256, 49, ''no'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2257, 50, ''no'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2258, 51, ''no'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2259, 52, ''no'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2260, 53, ''no'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2261, 54, ''no'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2262, 55, ''no'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2263, 56, ''no'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2264, 57, ''no'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2265, 58, ''no'', 140, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2266, 1, ''si'', 141, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2267, 2, ''si'', 141, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2268, 3, ''si'', 141, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2269, 4, ''no'', 141, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2270, 5, ''no'', 141, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2271, 6, ''no'', 141, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2272, 7, ''no'', 141, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2273, 8, ''no'', 141, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2274, 9, ''no'', 141, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2275, 10, ''no'', 141, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2276, 11, ''no'', 141, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2277, 12, ''no'', 141, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2278, 13, ''no'', 141, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2279, 14, ''no'', 141, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2280, 15, ''no'', 141, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2281, 16, ''no'', 141, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2282, 17, ''no'', 141, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2283, 18, ''no'', 141, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2284, 19, ''no'', 141, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2285, 20, ''no'', 141, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2286, 21, ''no'', 141, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2287, 22, ''no'', 141, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2288, 23, ''no'', 141, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2289, 24, ''no'', 141, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2290, 25, ''no'', 141, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2291, 26, ''no'', 141, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2292, 91, ''si'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2293, 92, ''si'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2294, 93, ''si'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2295, 94, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2296, 95, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2297, 96, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2298, 97, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2299, 98, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2300, 99, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2301, 100, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2302, 101, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2303, 102, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2304, 103, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2305, 104, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2306, 105, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2307, 108, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2308, 109, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2309, 110, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2310, 111, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2311, 112, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2312, 113, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2313, 114, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2314, 115, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2315, 116, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2316, 117, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2317, 118, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2318, 119, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2319, 120, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2320, 121, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2321, 122, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2322, 123, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2323, 124, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2324, 125, ''no'', 142, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2325, 27, ''si'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2326, 28, ''si'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2327, 29, ''si'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2328, 30, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2329, 31, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2330, 32, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2331, 33, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2332, 34, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2333, 35, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2334, 36, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2335, 37, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2336, 38, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2337, 39, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2338, 40, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2339, 41, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2340, 42, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2341, 43, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2342, 44, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2343, 45, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2344, 46, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2345, 47, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2346, 48, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2347, 49, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2348, 50, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2349, 51, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2350, 52, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2351, 53, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2352, 54, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2353, 55, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2354, 56, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2355, 57, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón''),
(2356, 58, ''no'', 143, ''2020-09-24 05:00:00'', ''Arlette Katherine Rondón Carreón'');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrevistas`
--

CREATE TABLE `entrevistas` (
  `id` int(11) NOT NULL,
  `calif_obj1` tinyint(1) DEFAULT NULL,
  `calif_obj2` tinyint(1) DEFAULT NULL,
  `calif_obj3` tinyint(1) DEFAULT NULL,
  `coment1_colab` varchar(255) NOT NULL,
  `coment2_colab` varchar(255) NOT NULL,
  `coment3_colab` varchar(255) NOT NULL,
  `coment1_evalu` varchar(255) DEFAULT NULL,
  `coment2_evalu` varchar(255) DEFAULT NULL,
  `coment3_evalu` varchar(255) DEFAULT NULL,
  `ruta_firma_colab` varchar(150) NOT NULL,
  `ruta_firma_evalu` varchar(150) NOT NULL,
  `colaborador_id` int(11) NOT NULL,
  `evaluador_id` int(11) DEFAULT NULL,
  `tipo_entrevista_id` int(11) NOT NULL,
  `estado` varchar(10) NOT NULL,
  `create_at` varchar(45) NOT NULL,
  `create_by` varchar(45) NOT NULL,
  `update_at` varchar(45) NOT NULL,
  `update_by` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `entrevistas`
--

INSERT INTO `entrevistas` (`id`, `calif_obj1`, `calif_obj2`, `calif_obj3`, `coment1_colab`, `coment2_colab`, `coment3_colab`, `coment1_evalu`, `coment2_evalu`, `coment3_evalu`, `ruta_firma_colab`, `ruta_firma_evalu`, `colaborador_id`, `evaluador_id`, `tipo_entrevista_id`, `estado`, `create_at`, `create_by`, `update_at`, `update_by`) VALUES
(59, NULL, NULL, NULL, ''asd'', ''asd'', ''asd'', ''asdasd'', ''asd'', ''asd'', '''', '''', 83, 75, 1, ''1'', ''2020-09-03'', ''Andrea Alejandra Zegarra Lozada'', ''2020-09-03'', ''Fernando Alberto Salas Heresi''),
(60, 1, 1, 1, ''asd'', ''asd'', ''asd'', ''asd'', ''asd'', ''asd'', ''assets/img/firmas/firma_Andrea Alejandra Zegarra Lozada_2020.png'', ''assets/img/firmas/firma_Fernando Alberto Salas Heresi_2020.png'', 83, 75, 2, ''1'', ''2020-09-03'', ''Andrea Alejandra Zegarra Lozada'', ''2020-09-03'', '''');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichas_pedagogicas`
--

CREATE TABLE `fichas_pedagogicas` (
  `id` int(11) NOT NULL,
  `promedio` double NOT NULL,
  `estado` varchar(10) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `create_at` date NOT NULL,
  `create_by` varchar(35) NOT NULL,
  `update_at` date NOT NULL,
  `update_by` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fichas_pedagogicas`
--

INSERT INTO `fichas_pedagogicas` (`id`, `promedio`, `estado`, `usuario_id`, `create_at`, `create_by`, `update_at`, `update_by`) VALUES
(5, 0, ''EN PROCESO'', 87, ''2020-09-13'', ''Arlette Katherine Rondón Carreón'', ''2020-09-24'', ''Arlette Katherine Rondón Carreón''),
(6, 0, ''EN PROCESO'', 91, ''2020-09-24'', ''Arlette Katherine Rondón Carreón'', ''2020-09-24'', ''Arlette Katherine Rondón Carreón''),
(7, 0, ''EN PROCESO'', 92, ''2020-09-24'', ''Arlette Katherine Rondón Carreón'', ''2020-09-24'', ''Claudia\r\n Arrarte Cornejo''),
(8, 0, ''EN PROCESO'', 93, ''2020-09-24'', ''Arlette Katherine Rondón Carreón'', ''2020-09-24'', ''Arlette Katherine Rondón Carreón'');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gerencias`
--

CREATE TABLE `gerencias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `create_at` varchar(35) NOT NULL,
  `create_by` varchar(35) NOT NULL,
  `update_at` varchar(35) NOT NULL,
  `update_by` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gerencias`
--

INSERT INTO `gerencias` (`id`, `nombre`, `descripcion`, `estado`, `create_at`, `create_by`, `update_at`, `update_by`) VALUES
(1, ''Docentes  '', ''Gerencia para docentes Prescott'', 1, '''', '''', ''02-07-2020 17:30:06'', ''Administrador Sistema''),
(2, ''No docentes'', ''Descripción '', 1, '''', '''', ''2020-06-05 11:41:01'', ''Administrador Sistema'');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indicadores`
--

CREATE TABLE `indicadores` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `competencia_id` int(11) NOT NULL,
  `create_at` varchar(35) NOT NULL,
  `create_by` varchar(35) NOT NULL,
  `update_at` varchar(35) NOT NULL,
  `update_by` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `indicadores`
--

INSERT INTO `indicadores` (`id`, `descripcion`, `estado`, `competencia_id`, `create_at`, `create_by`, `update_at`, `update_by`) VALUES
(1, ''Sus mensajes son concretos, objetivos y tienen contenido relevante.'', 1, 1, '''', '''', ''02-07-2020 17:40:31'', ''Administrador Sistema''),
(2, ''Utiliza los momentos oportunos y medios idóneos para decir las cosas, sin dejar conversaciones pendientes.'', 1, 1, '''', '''', '''', ''0''),
(3, ''Afronta las conversaciones de manera clara, sincera, asertiva y efectiva, adaptando el lenguaje a la persona o personas con quienes se comunica.'', 1, 1, '''', '''', '''', ''0''),
(4, ''Mantiene la comunicación permanente, cordial y respetuosa con los miembros de la comunidad.'', 1, 1, '''', '''', '''', ''0''),
(5, ''Escucha y anima a la gente a que dé sus apreciaciones, aportes y sugerencias para el continuo desarrollo de la Institución.'', 1, 1, '''', '''', '''', ''0''),
(6, ''Cumple con esmero,  responsabilidad y puntualidad las normas y acuerdos del equipo lolorar.'', 1, 2, '''', '''', ''02-07-2020 18:45:25'', ''Administrador Sistema''),
(7, ''Se involucra con los objetivos del equipo y los hace suyos.'', 1, 2, '''', '''', '''', ''0''),
(8, ''Promueve el dialogo constructivo entre los miembros del equipo.'', 1, 2, '''', '''', '''', ''0''),
(9, ''Promueve e impulso el desarrollo de los objetivos del equipo.'', 1, 2, '''', '''', '''', ''0''),
(10, ''Respeta y participa activamente en las reuniones del equipo.'', 1, 2, '''', '''', '''', ''0''),
(11, ''Participa activamente en la generación de nuevas ideas, promoviendo la mejora institucional.'', 1, 3, '''', '''', '''', ''0''),
(12, ''Toma la iniciativa presentando propuestas de solución en su equipo.'', 1, 3, '''', '''', '''', ''0''),
(13, ''Asume la propia responsabilidad de hacer que las cosas propuestas se lleven a cabo.'', 1, 3, '''', '''', '''', ''0''),
(14, ''Actua con iniciativa creativa en el ejercicio de su función.'', 1, 3, '''', '''', '''', ''0''),
(15, ''Se esfuerza por la mejora continua en su desempeño personal y profesional.'', 1, 3, '''', '''', '''', ''0''),
(16, ''Mantiene un nivel adecuado de conocimiento a través de la formación continua.'', 1, 4, '''', '''', ''29-06-2020 18:36:21'', ''Administrador Sistema''),
(17, ''Mantiene una actitud positiva frente a los cambios.'', 1, 4, '''', '''', ''08-09-2020 16:23:45'', ''Administrador Sistemas''),
(18, ''Promueve la formación continua en sus equipos de trabajo.'', 1, 4, '''', '''', ''08-09-2020 16:23:48'', ''Administrador Sistemas''),
(19, ''Se mantiene animado ante las dificultades que conllevan el proceso de aprendizaje..'', 1, 4, '''', '''', ''08-09-2020 16:24:36'', ''Administrador Sistemas''),
(20, ''Comparte el conocimiento aprendido y lo adapta a través de los planes de acción.'', 1, 4, '''', '''', '''', ''0'');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `id_tipo_profesor` int(11) NOT NULL,
  `id_tipo_item` int(11) NOT NULL,
  `create_at` varchar(35) DEFAULT current_timestamp(),
  `create_by` varchar(35) DEFAULT NULL,
  `update_at` varchar(35) DEFAULT current_timestamp(),
  `update_by` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `items`
--

INSERT INTO `items` (`id`, `nombre`, `estado`, `id_tipo_profesor`, `id_tipo_item`, `create_at`, `create_by`, `update_at`, `update_by`) VALUES
(1, ''Recoge los saberes previos utilizando diferentes estrategias y los confrontan con información nueva. (Debe ser evidenciable)'', 1, 13, 1, '''', '''', '''', ''''),
(2, ''Los alumnos conocen el por qué y para qué son importantes los conocimientos que están desarrollando.'', 1, 13, 1, '''', '''', '''', ''''),
(3, ''Promueve espacios de diálogo, discusión y/o debate entre los alumnos para que expresen sus ideas, opiniones, formulen preguntas o consultas, expongan y presenten nuevas ideas, planteamientos, hipótesis y/o conclusiones como parte de la construcción de su '', 1, 13, 1, '''', '''', '''', ''''),
(4, ''Se evidencian enfoques creativos y constructivistas de enseñanza con estrategias variadas y motivadoras basadas en el juego.'', 1, 13, 1, '''', '''', '''', ''''),
(5, ''Las actividades propuestas por el profesor son diferenciadas de acuerdo a las necesidades de los alumnos y teniendo en cuenta los estilos y ritmos de aprendizaje. '', 1, 13, 1, '''', '''', '''', ''''),
(6, ''Se hace uso de una variedad de materiales para interesar a los alumnos y lograr que participen en las actividades propuestas.'', 1, 13, 1, '''', '''', '''', ''''),
(7, ''El profesor demuestra dominio del contenido, haciendo uso frecuente de un vocabulario apropiado al área y evidencia una estructura ordenada, lógica y clara en el desarrollo de la sesión.'', 1, 13, 1, '''', '''', '''', ''''),
(8, ''Los alumnos expresan respuestas y/o resultados en un ambiente de confianza, recibiendo una reflexión por parte del profesor.'', 1, 13, 1, '''', '''', '''', ''''),
(9, ''Se planifica actividades y/o experiencias significativas, las dosifica, las explica y las revisa haciendo una valoración cualitativa.'', 1, 13, 1, '''', '''', '''', ''''),
(10, ''Los alumnos son motivados a cumplir con los acuerdos esenciales, atributos, actitudes y habilidades en todo momento.'', 1, 13, 1, '''', '''', '''', ''''),
(11, ''El profesor pone en práctica los lineamientos específicos, consignados para su School, de acuerdo a la Política de Probidad Académica.'', 1, 13, 1, '''', '''', '''', ''''),
(12, ''El profesor cita y refiere todos sus documentos según se establece en la Política de Probidad Académica.'', 1, 13, 1, '''', '''', '''', ''''),
(13, ''El profesor promueve una ambientación de clase ordenada, que refleja la participación activa y el desarrollo del pensamiento de los alumnos, evidenciando el desarrollo de la unidad.'', 1, 13, 1, '''', '''', '''', ''''),
(14, ''Ejecuta las estrategias de aprendizaje según lo planificado.'', 1, 13, 1, '''', '''', '''', ''''),
(15, ''El profesor se preocupa en planificar y ejecutar visitas de estudio, valiéndose de las oportunidades que le brinda la comunidad, el colegio y los miembros de nuestra comunidad educativa, permitiendo ampliar el conocimiento de los alumnos.'', 1, 13, 1, '''', '''', '''', ''''),
(16, ''Los alumnos demuestran conocimiento y comprensión sobre el conocimiento que están desarrollando.'', 1, 13, 2, '''', '''', '''', ''''),
(17, ''El profesor registra los cuestionamientos y conocimientos resaltantes de los alumnos para organizar el desarrollo de su unidad.'', 1, 13, 2, '''', '''', '''', ''''),
(18, ''Genera un ambiente positivo, de respeto y confianza. Corrige asertivamente a los alumnos y favorece el aprendizaje. '', 1, 13, 3, '''', '''', '''', ''''),
(19, ''Se evidencian muchas demostraciones de emociones positivas entre el maestro y los alumnos.'', 1, 13, 3, '''', '''', '''', ''''),
(20, ''El profesor nota e interviene cuando un alumno necesita apoyo adicional, ayuda o atención.'', 1, 13, 3, '''', '''', '''', ''''),
(21, ''El profesor usa estrategias proactivas y orienta la conducta de los alumnos de manera eficaz antes que ocurran problemas.'', 1, 13, 3, '''', '''', '''', ''''),
(22, ''Las transiciones de una actividad a otra son fluidas y eficaces.'', 1, 13, 3, '''', '''', '''', ''''),
(23, ''El profesor redirige la conducta inapropiada enfocándose en aspectos positivos y haciendo indicaciones sutiles.'', 1, 13, 3, '''', '''', '''', ''''),
(24, ''Los planificadores, planes de clase, evaluaciones y fichas de trabajo son elaborados respetando el desarrollo del pensamiento crítico, la construcción del aprendizaje, la transdisciplinariedad, la mentalidad internacional y las necesidades de los alumnos.'', 1, 13, 4, '''', '''', '''', ''''),
(25, ''El profesor participa activamente en las reuniones de planificación y reflexiona sobre sus estrategias de enseñanza haciendo los ajustes necesarios. '', 1, 13, 4, '''', '''', '''', ''''),
(26, ''El profesor participa activamente en las reuniones de planificación del grado y con los profesores de áreas especiales. (Equipo educador) '', 1, 13, 4, '''', '''', '''', ''''),
(27, ''Recoge los saberes previos utilizando diferentes estrategias y los confrontan con información nueva. (Debe ser evidenciable)'', 1, 11, 1, '''', '''', '''', ''''),
(28, ''Los alumnos conocen el por qué y para qué son importantes los conocimientos que están desarrollando.'', 1, 11, 1, '''', '''', '''', ''''),
(29, ''Promueve espacios de diálogo, discusión y/o debate entre los alumnos para que expresen sus ideas, opiniones, formulen preguntas o consultas, expongan y presenten nuevas ideas, planteamientos, hipótesis y/o conclusiones como parte de la construcción de su '', 1, 11, 1, '''', '''', '''', ''''),
(30, ''Se evidencian enfoques creativos y constructivistas de enseñanza con estrategias variadas y motivadoras basadas en el juego.'', 1, 11, 1, '''', '''', '''', ''''),
(31, ''Las actividades propuestas por el profesor son diferenciadas de acuerdo a las necesidades de los alumnos y teniendo en cuenta los estilos y ritmos de aprendizaje. '', 1, 11, 1, '''', '''', '''', ''''),
(32, ''Se hace uso de una variedad de materiales para interesar a los alumnos y lograr que participen en las actividades propuestas.'', 1, 11, 1, '''', '''', '''', ''''),
(33, ''El profesor demuestra dominio del contenido, haciendo uso frecuente de un vocabulario apropiado al área y evidencia una estructura ordenada, lógica y clara en el desarrollo de la sesión.'', 1, 11, 1, '''', '''', '''', ''''),
(34, ''Los alumnos expresan respuestas y/o resultados en un ambiente de confianza, recibiendo una reflexión por parte del profesor.'', 1, 11, 1, '''', '''', '''', ''''),
(35, ''Se planifica actividades y/o experiencias significativas, las dosifica, las explica y las revisa haciendo una valoración cualitativa.'', 1, 11, 1, '''', '''', '''', ''''),
(36, ''Los alumnos son motivados a cumplir con los acuerdos esenciales, atributos, actitudes y habilidades en todo momento.'', 1, 11, 1, '''', '''', '''', ''''),
(37, ''El profesor pone en práctica los lineamientos específicos, consignados para su School, de acuerdo a la Política de Probidad Académica.'', 1, 11, 1, '''', '''', '''', ''''),
(38, ''El profesor cita y refiere todos sus documentos según se establece en la Política de Probidad Académica.'', 1, 11, 1, '''', '''', '''', ''''),
(39, ''El profesor promueve una ambientación de clase ordenada, que refleja la participación activa y el desarrollo del pensamiento de los alumnos, evidenciando el desarrollo de la unidad.'', 1, 11, 1, '''', '''', '''', ''''),
(40, ''Ejecuta las estrategias de aprendizaje según lo planificado.'', 1, 11, 1, '''', '''', '''', ''''),
(41, ''El profesor se preocupa en planificar y ejecutar visitas de estudio, valiéndose de las oportunidades que le brinda la comunidad, el colegio y los miembros de nuestra comunidad educativa, permitiendo ampliar el conocimiento de los alumnos.'', 1, 11, 1, '''', '''', '''', ''''),
(42, ''Los alumnos demuestran conocimiento y comprensión sobre el conocimiento que están desarrollando.'', 1, 11, 2, '''', '''', '''', ''''),
(43, ''El profesor registra los cuestionamientos y conocimientos resaltantes de los alumnos para organizar el desarrollo de su unidad.'', 1, 11, 2, '''', '''', '''', ''''),
(44, ''El profesor evalúa oportunamente el aprendizaje de sus alumnos para asegurarse si comprendieron lo trabajado,  y/o reprogramar o reforzar si fuera necesario.												'', 1, 11, 2, '''', '''', '''', ''''),
(45, ''Se evidencia el uso de diversas herramientas de evaluación, las cuales permiten que los alumnos conozcan los criterios sobre los cuales serán valorados, tanto en sus evaluaciones formativas como sumativas.												'', 1, 11, 2, '''', '''', '''', ''''),
(46, ''Se evidencia el uso de diversas estrategias para la evaluación formativa y sumativa, considerando actividades diferenciadas y su respectivo feedback .												'', 1, 11, 2, '''', '''', '''', ''''),
(47, ''Se evidencia oportunidades de retroalimentación/reflexión, por parte del profesor en las evaluaciones formativas y sumativas. (Portafolio Virtual)												'', 1, 11, 2, '''', '''', '''', ''''),
(48, ''Genera un ambiente positivo, de respeto y confianza. Corrige asertivamente a los alumnos y favorece el aprendizaje. '', 1, 11, 3, '''', '''', '''', ''''),
(49, ''Se evidencian muchas demostraciones de emociones positivas entre el maestro y los alumnos.'', 1, 11, 3, '''', '''', '''', ''''),
(50, ''El profesor nota e interviene cuando un alumno necesita apoyo adicional, ayuda o atención.'', 1, 11, 3, '''', '''', '''', ''''),
(51, ''El profesor usa estrategias proactivas y orienta la conducta de los alumnos de manera eficaz antes que ocurran problemas.'', 1, 11, 3, '''', '''', '''', ''''),
(52, ''Las transiciones de una actividad a otra son fluidas y eficaces.'', 1, 11, 3, '''', '''', '''', ''''),
(53, ''El profesor redirige la conducta inapropiada enfocándose en aspectos positivos y haciendo indicaciones sutiles.'', 1, 11, 3, '''', '''', '''', ''''),
(54, ''Los planificadores, planes de clase, evaluaciones y fichas de trabajo son elaborados respetando el desarrollo del pensamiento crítico, la construcción del aprendizaje, la transdisciplinariedad, la mentalidad internacional y las necesidades de los alumnos.'', 1, 11, 4, '''', '''', '''', ''''),
(55, ''Su registro auxiliar considera los desempeños de evaluación planificados, se encuentra actualizado y lo presenta a coordinación en las fechas indicadas.'', 1, 11, 4, '''', '''', '''', ''''),
(56, ''Implementa  y actualiza oportunamente el aula virtual para cada unidad considerando actividades que desarrollen el pensamiento crítico y habilidades.'', 1, 11, 4, '''', '''', '''', ''''),
(57, ''El profesor participa activamente en las reuniones de planificación y reflexiona sobre sus estrategias de enseñanza haciendo los ajustes necesarios. '', 1, 11, 4, '''', '''', '''', ''''),
(58, ''El profesor participa activamente en las reuniones de planificación del grado y con los profesores de áreas especiales. (Equipo educador) '', 1, 11, 4, '''', '''', '''', ''''),
(59, ''Recoge los saberes previos utilizando diferentes estrategias y los confrontan con información nueva. (Debe ser evidenciable)'', 1, 12, 1, '''', '''', '''', ''''),
(60, ''Los alumnos conocen el por qué y para qué son importantes los conocimientos que están desarrollando.'', 1, 12, 1, '''', '''', '''', ''''),
(61, ''Promueve espacios de diálogo, discusión y/o debate entre los alumnos para que expresen sus ideas, opiniones, formulen preguntas o consultas, expongan y presenten nuevas ideas, planteamientos, hipótesis y/o conclusiones como parte de la construcción de su '', 1, 12, 1, '''', '''', '''', ''''),
(62, ''Se evidencian enfoques creativos y constructivistas de enseñanza con estrategias variadas y motivadoras basadas en el juego.'', 1, 12, 1, '''', '''', '''', ''''),
(63, ''Las actividades propuestas por el profesor son diferenciadas de acuerdo a las necesidades de los alumnos y teniendo en cuenta los estilos y ritmos de aprendizaje. '', 1, 12, 1, '''', '''', '''', ''''),
(64, ''Se hace uso de una variedad de materiales para interesar a los alumnos y lograr que participen en las actividades propuestas.'', 1, 12, 1, '''', '''', '''', ''''),
(65, ''El profesor demuestra dominio del contenido, haciendo uso frecuente de un vocabulario apropiado al área y evidencia una estructura ordenada, lógica y clara en el desarrollo de la sesión.'', 1, 12, 1, '''', '''', '''', ''''),
(66, ''Los alumnos expresan respuestas y/o resultados en un ambiente de confianza, recibiendo una reflexión por parte del profesor.'', 1, 12, 1, '''', '''', '''', ''''),
(67, ''Se planifica actividades y/o experiencias significativas, las dosifica, las explica y las revisa haciendo una valoración cualitativa.'', 1, 12, 1, '''', '''', '''', ''''),
(68, ''Los alumnos son motivados a cumplir con los acuerdos esenciales, atributos, actitudes y habilidades en todo momento.'', 1, 12, 1, '''', '''', '''', ''''),
(69, ''El profesor pone en práctica los lineamientos específicos, consignados para su School, de acuerdo a la Política de Probidad Académica.'', 1, 12, 1, '''', '''', '''', ''''),
(70, ''El profesor cita y refiere todos sus documentos según se establece en la Política de Probidad Académica.'', 1, 12, 1, '''', '''', '''', ''''),
(71, ''El profesor promueve una ambientación de clase ordenada, que refleja la participación activa y el desarrollo del pensamiento de los alumnos, evidenciando el desarrollo de la unidad.'', 1, 12, 1, '''', '''', '''', ''''),
(72, ''Ejecuta las estrategias de aprendizaje según lo planificado.'', 1, 12, 1, '''', '''', '''', ''''),
(73, ''El profesor se preocupa en planificar y ejecutar visitas de estudio, valiéndose de las oportunidades que le brinda la comunidad, el colegio y los miembros de nuestra comunidad educativa, permitiendo ampliar el conocimiento de los alumnos.'', 1, 12, 1, '''', '''', '''', ''''),
(74, ''Los alumnos demuestran conocimiento y comprensión sobre el conocimiento que están desarrollando.'', 1, 12, 2, '''', '''', '''', ''''),
(75, ''El profesor registra los cuestionamientos y conocimientos resaltantes de los alumnos para organizar el desarrollo de su unidad.'', 1, 12, 2, '''', '''', '''', ''''),
(76, ''El profesor evalúa oportunamente el aprendizaje de sus alumnos para asegurarse si comprendieron lo trabajado,  y/o reprogramar o reforzar si fuera necesario.												'', 1, 12, 2, '''', '''', '''', ''''),
(77, ''Se evidencia el uso de diversas herramientas de evaluación, las cuales permiten que los alumnos conozcan los criterios sobre los cuales serán valorados, tanto en sus evaluaciones formativas como sumativas.												'', 1, 12, 2, '''', '''', '''', ''''),
(78, ''Se evidencia el uso de diversas estrategias para la evaluación formativa y sumativa, considerando actividades diferenciadas y su respectivo feedback .												'', 1, 12, 2, '''', '''', '''', ''''),
(79, ''Se evidencia oportunidades de retroalimentación/reflexión, por parte del profesor en las evaluaciones formativas y sumativas. (Portafolio Virtual)												'', 1, 12, 2, '''', '''', '''', ''''),
(80, ''Genera un ambiente positivo, de respeto y confianza. Corrige asertivamente a los alumnos y favorece el aprendizaje. '', 1, 12, 3, '''', '''', '''', ''''),
(81, ''Se evidencian muchas demostraciones de emociones positivas entre el maestro y los alumnos.'', 1, 12, 3, '''', '''', '''', ''''),
(82, ''El profesor nota e interviene cuando un alumno necesita apoyo adicional, ayuda o atención.'', 1, 12, 3, '''', '''', '''', ''''),
(83, ''El profesor usa estrategias proactivas y orienta la conducta de los alumnos de manera eficaz antes que ocurran problemas.'', 1, 12, 3, '''', '''', '''', ''''),
(84, ''Las transiciones de una actividad a otra son fluidas y eficaces.'', 1, 12, 3, '''', '''', '''', ''''),
(85, ''El profesor redirige la conducta inapropiada enfocándose en aspectos positivos y haciendo indicaciones sutiles.'', 1, 12, 3, '''', '''', '''', ''''),
(86, ''Los planificadores, planes de clase, evaluaciones y fichas de trabajo son elaborados respetando el desarrollo del pensamiento crítico, la construcción del aprendizaje, la transdisciplinariedad, la mentalidad internacional y las necesidades de los alumnos.'', 1, 12, 4, '''', '''', '''', ''''),
(87, ''Su registro auxiliar considera los desempeños de evaluación planificados, se encuentra actualizado y lo presenta a coordinación en las fechas indicadas.'', 1, 12, 4, '''', '''', '''', ''''),
(88, ''Implementa  y actualiza oportunamente el aula virtual para cada unidad considerando actividades que desarrollen el pensamiento crítico y habilidades.'', 1, 12, 4, '''', '''', '''', ''''),
(89, ''El profesor participa activamente en las reuniones de planificación y reflexiona sobre sus estrategias de enseñanza haciendo los ajustes necesarios. '', 1, 12, 4, '''', '''', '''', ''''),
(90, ''El profesor participa activamente en las reuniones de planificación del grado y con los profesores de áreas especiales. (Equipo educador) '', 1, 12, 4, '''', '''', '''', ''''),
(91, ''Recoge los saberes previos utilizando diferentes estrategias y los confrontan con información nueva. (Debe ser evidenciable)'', 1, 14, 1, '''', '''', '''', ''''),
(92, ''Los alumnos conocen el por qué y para qué son importantes los conocimientos que están desarrollando.'', 1, 14, 1, '''', '''', '''', ''''),
(93, ''Promueve espacios de diálogo, discusión y/o debate entre los alumnos para que expresen sus ideas, opiniones, formulen preguntas o consultas, expongan y presenten nuevas ideas, planteamientos, hipótesis y/o conclusiones como parte de la construcción de su '', 1, 14, 1, '''', '''', '''', ''''),
(94, ''Se evidencian enfoques creativos y constructivistas de enseñanza con estrategias variadas y motivadoras basadas en el juego.'', 1, 14, 1, '''', '''', '''', ''''),
(95, ''Las actividades propuestas por el profesor son diferenciadas de acuerdo a las necesidades de los alumnos y teniendo en cuenta los estilos y ritmos de aprendizaje. '', 1, 14, 1, '''', '''', '''', ''''),
(96, ''Se hace uso de una variedad de materiales para interesar a los alumnos y lograr que participen en las actividades propuestas.'', 1, 14, 1, '''', '''', '''', ''''),
(97, ''El profesor demuestra dominio del contenido, haciendo uso frecuente de un vocabulario apropiado al área y evidencia una estructura ordenada, lógica y clara en el desarrollo de la sesión.'', 1, 14, 1, '''', '''', '''', ''''),
(98, ''Los alumnos expresan respuestas y/o resultados en un ambiente de confianza, recibiendo una reflexión por parte del profesor.'', 1, 14, 1, '''', '''', '''', ''''),
(99, ''Se planifica actividades y/o experiencias significativas, las dosifica, las explica y las revisa haciendo una valoración cualitativa.'', 1, 14, 1, '''', '''', '''', ''''),
(100, ''Los alumnos son motivados a cumplir con los acuerdos esenciales, atributos, actitudes y habilidades en todo momento.'', 1, 14, 1, '''', '''', '''', ''''),
(101, ''El profesor pone en práctica los lineamientos específicos, consignados para su School, de acuerdo a la Política de Probidad Académica.'', 1, 14, 1, '''', '''', '''', ''''),
(102, ''El profesor cita y refiere todos sus documentos según se establece en la Política de Probidad Académica.'', 1, 14, 1, '''', '''', '''', ''''),
(103, ''El profesor promueve una ambientación de clase ordenada, que refleja la participación activa y el desarrollo del pensamiento de los alumnos, evidenciando el desarrollo de la unidad.'', 1, 14, 1, '''', '''', '''', ''''),
(104, ''Ejecuta las estrategias de aprendizaje según lo planificado.'', 1, 14, 1, '''', '''', '''', ''''),
(105, ''El profesor se preocupa en planificar y ejecutar visitas de estudio, valiéndose de las oportunidades que le brinda la comunidad, el colegio y los miembros de nuestra comunidad educativa, permitiendo ampliar el conocimiento de los alumnos.'', 1, 14, 1, '''', '''', '''', ''''),
(108, ''16.		El profesor de inglés promueve una comunicación permanente en este idioma, dentro y fuera del aula con los alumnos. Cuidando su pronunciación y el uso correcto de las estructuras gramaticales en la práctica.												'', 1, 14, 1, ''current_timestamp()'', NULL, ''current_timestamp()'', NULL),
(109, ''Los alumnos demuestran conocimiento y comprensión sobre el conocimiento que están desarrollando.'', 1, 14, 2, '''', '''', '''', ''''),
(110, ''El profesor registra los cuestionamientos y conocimientos resaltantes de los alumnos para organizar el desarrollo de su unidad.'', 1, 14, 2, '''', '''', '''', ''''),
(111, ''El profesor evalúa oportunamente el aprendizaje de sus alumnos para asegurarse si comprendieron lo trabajado,  y/o reprogramar o reforzar si fuera necesario.												'', 1, 14, 2, '''', '''', '''', ''''),
(112, ''Se evidencia el uso de diversas herramientas de evaluación, las cuales permiten que los alumnos conozcan los criterios sobre los cuales serán valorados, tanto en sus evaluaciones formativas como sumativas.												'', 1, 14, 2, '''', '''', '''', ''''),
(113, ''Se evidencia el uso de diversas estrategias para la evaluación formativa y sumativa, considerando actividades diferenciadas y su respectivo feedback .												'', 1, 14, 2, '''', '''', '''', ''''),
(114, ''Se evidencia oportunidades de retroalimentación/reflexión, por parte del profesor en las evaluaciones formativas y sumativas. (Portafolio Virtual)												'', 1, 14, 2, '''', '''', '''', ''''),
(115, ''Genera un ambiente positivo, de respeto y confianza. Corrige asertivamente a los alumnos y favorece el aprendizaje. '', 1, 14, 3, '''', '''', '''', ''''),
(116, ''Se evidencian muchas demostraciones de emociones positivas entre el maestro y los alumnos.'', 1, 14, 3, '''', '''', '''', ''''),
(117, ''El profesor nota e interviene cuando un alumno necesita apoyo adicional, ayuda o atención.'', 1, 14, 3, '''', '''', '''', ''''),
(118, ''El profesor usa estrategias proactivas y orienta la conducta de los alumnos de manera eficaz antes que ocurran problemas.'', 1, 14, 3, '''', '''', '''', ''''),
(119, ''Las transiciones de una actividad a otra son fluidas y eficaces.'', 1, 14, 3, '''', '''', '''', ''''),
(120, ''El profesor redirige la conducta inapropiada enfocándose en aspectos positivos y haciendo indicaciones sutiles.'', 1, 14, 3, '''', '''', '''', ''''),
(121, ''Los planificadores, planes de clase, evaluaciones y fichas de trabajo son elaborados respetando el desarrollo del pensamiento crítico, la construcción del aprendizaje, la transdisciplinariedad, la mentalidad internacional y las necesidades de los alumnos.'', 1, 14, 4, '''', '''', '''', ''''),
(122, ''Su registro auxiliar considera los desempeños de evaluación planificados, se encuentra actualizado y lo presenta a coordinación en las fechas indicadas.'', 1, 14, 4, '''', '''', '''', ''''),
(123, ''Implementa  y actualiza oportunamente el aula virtual para cada unidad considerando actividades que desarrollen el pensamiento crítico y habilidades.'', 1, 14, 4, '''', '''', '''', ''''),
(124, ''El profesor participa activamente en las reuniones de planificación y reflexiona sobre sus estrategias de enseñanza haciendo los ajustes necesarios. '', 1, 14, 4, '''', '''', '''', ''''),
(125, ''El profesor participa activamente en las reuniones de planificación del grado y con los profesores de áreas especiales. (Equipo educador) '', 1, 14, 4, '''', '''', '''', '''');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id`, `nombre`, `link`) VALUES
(1, ''Gerencias'', ''mantenimiento/gerencias''),
(2, ''Áreas'', ''mantenimiento/areas''),
(3, ''Usuarios'', ''administrador/usuarios\r\n''),
(4, ''Permisos '', ''administrador/permisos\r\n''),
(5, ''Valoración Administración'', ''valoracion/valoracion_adm''),
(6, ''Competencias'', ''mantenimiento/competencias''),
(7, ''Indicadores'', ''mantenimiento/indicadores''),
(8, ''Parentesco'', ''administrador/parentesco\r\n''),
(9, ''Periodos'', ''administrador/periodos\r\n''),
(10, ''Mi valoración '', ''valoracion/mi_valoracion_adm''),
(11, ''Anecdotario'', ''valoracion/anecdotario_adm''),
(12, ''Valoración Docentes'', ''valoracion/valoracion_docentes''),
(13, ''Mi valoración Docentes'', ''valoracion/mi_valoracion_docentes'');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objetivos`
--

CREATE TABLE `objetivos` (
  `id` int(11) NOT NULL,
  `n_obj_1` varchar(255) DEFAULT NULL,
  `a_obj_1` varchar(255) DEFAULT NULL,
  `p_obj_1` varchar(255) DEFAULT NULL,
  `i_obj_1` varchar(255) DEFAULT NULL,
  `r_obj_1` varchar(255) DEFAULT NULL,
  `n_obj_2` varchar(255) DEFAULT NULL,
  `a_obj_2` varchar(255) DEFAULT NULL,
  `p_obj_2` varchar(255) DEFAULT NULL,
  `i_obj_2` varchar(255) DEFAULT NULL,
  `r_obj_2` varchar(255) DEFAULT NULL,
  `n_obj_3` varchar(255) DEFAULT NULL,
  `a_obj_3` varchar(255) DEFAULT NULL,
  `p_obj_3` varchar(255) DEFAULT NULL,
  `i_obj_3` varchar(255) DEFAULT NULL,
  `r_obj_3` varchar(255) DEFAULT NULL,
  `comentario_opcional` varchar(200) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `create_at` varchar(35) NOT NULL,
  `create_by` varchar(35) NOT NULL,
  `update_at` varchar(35) NOT NULL,
  `update_by` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `objetivos`
--

INSERT INTO `objetivos` (`id`, `n_obj_1`, `a_obj_1`, `p_obj_1`, `i_obj_1`, `r_obj_1`, `n_obj_2`, `a_obj_2`, `p_obj_2`, `i_obj_2`, `r_obj_2`, `n_obj_3`, `a_obj_3`, `p_obj_3`, `i_obj_3`, `r_obj_3`, `comentario_opcional`, `usuario_id`, `estado`, `create_at`, `create_by`, `update_at`, `update_by`) VALUES
(63, ''G'', ''G'', ''G'', ''G'', ''G'', ''G'', ''G'', ''G'', ''G'', ''G'', ''G'', ''G'', ''G'', ''G'', ''G'', ''asd'', 83, ''aceptado'', ''2020-09-03'', ''Andrea Alejandra Zegarra Lozada'', ''03-09-2020 15:10:41'', ''Fernando Alberto Salas Heresi'');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parentesco`
--

CREATE TABLE `parentesco` (
  `id` int(11) NOT NULL,
  `hijo_id` int(11) NOT NULL,
  `padre_id` int(11) NOT NULL,
  `registrar` int(11) NOT NULL DEFAULT 0,
  `leer` int(11) NOT NULL DEFAULT 0,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `parentesco`
--

INSERT INTO `parentesco` (`id`, `hijo_id`, `padre_id`, `registrar`, `leer`, `estado`) VALUES
(219, 13, 12, 1, 1, 1),
(220, 14, 12, 0, 1, 1),
(221, 15, 12, 0, 1, 1),
(223, 12, 11, 1, 1, 1),
(224, 13, 11, 1, 1, 0),
(225, 70, 11, 1, 1, 0),
(226, 71, 11, 1, 1, 1),
(227, 14, 13, 1, 1, 1),
(228, 15, 11, 1, 1, 1),
(229, 70, 12, 1, 0, 0),
(230, 73, 12, 1, 1, 1),
(231, 73, 74, 1, 1, 1),
(232, 73, 11, 1, 1, 1),
(233, 76, 75, 1, 1, 1),
(234, 77, 75, 1, 1, 0),
(235, 78, 75, 1, 1, 1),
(236, 79, 75, 1, 1, 1),
(237, 80, 75, 1, 1, 0),
(238, 81, 75, 1, 1, 1),
(239, 82, 75, 1, 1, 0),
(240, 83, 75, 1, 1, 1),
(242, 84, 75, 0, 1, 1),
(243, 85, 83, 1, 0, 1),
(244, 85, 75, 0, 1, 1),
(245, 86, 83, 1, 0, 1),
(246, 86, 75, 0, 1, 1),
(247, 84, 83, 1, 0, 1),
(248, 87, 88, 1, 1, 0),
(249, 89, 88, 1, 1, 1),
(250, 89, 87, 1, 0, 1),
(251, 88, 90, 1, 1, 1),
(252, 91, 88, 1, 1, 1),
(253, 92, 88, 1, 1, 1),
(254, 87, 88, 1, 1, 1),
(255, 93, 88, 1, 1, 1),
(256, 87, 89, 1, 1, 1),
(257, 93, 89, 1, 1, 1),
(258, 91, 89, 1, 1, 1),
(259, 92, 89, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodos`
--

CREATE TABLE `periodos` (
  `id` int(11) NOT NULL,
  `periodo` varchar(15) NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `periodos`
--

INSERT INTO `periodos` (`id`, `periodo`, `estado`) VALUES
(2, ''2020'', 1),
(3, ''2021'', 1),
(4, ''2022'', 1),
(5, ''2023'', 1),
(6, ''2024'', 1),
(7, ''2025'', 1),
(8, ''2026'', 1),
(9, ''2027'', 1),
(10, ''2028'', 1),
(11, ''2029'', 1),
(12, ''2030'', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` int(11) NOT NULL,
  `read` int(11) DEFAULT NULL,
  `insert` int(11) DEFAULT NULL,
  `update` int(11) DEFAULT NULL,
  `delete` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `create_at` varchar(35) NOT NULL,
  `create_by` varchar(35) NOT NULL,
  `update_at` varchar(35) NOT NULL,
  `update_by` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `read`, `insert`, `update`, `delete`, `menu_id`, `rol_id`, `create_at`, `create_by`, `update_at`, `update_by`) VALUES
(1, 1, 1, 1, 1, 1, 1, '''', '''', '''', ''''),
(2, 1, 1, 1, 1, 2, 1, '''', '''', '''', ''''),
(3, 1, 1, 1, 1, 3, 1, '''', '''', '''', ''''),
(4, 1, 1, 1, 1, 4, 1, '''', '''', '''', ''''),
(5, 1, 1, 1, 1, 5, 1, '''', '''', '''', ''''),
(6, 1, 1, 1, 1, 5, 2, '''', '''', '''', ''''),
(7, 1, 1, 1, 1, 5, 3, '''', '''', '''', ''''),
(8, 1, 1, 1, 1, 5, 4, '''', '''', '''', ''''),
(9, 1, 1, 1, 1, 5, 5, '''', '''', '''', ''''),
(10, 1, 1, 1, 1, 5, 6, '''', '''', '''', ''''),
(12, 1, 1, 1, 1, 1, 3, '''', '''', '''', ''''),
(13, 1, 1, 1, 1, 6, 1, '''', '''', '''', ''''),
(14, 1, 1, 1, 1, 7, 1, '''', '''', '''', ''''),
(15, 1, 1, 1, 1, 8, 1, '''', '''', '''', ''''),
(17, 1, 1, 1, 1, 9, 1, '''', '''', '''', ''''),
(19, 1, 1, 1, 1, 10, 1, '''', '''', '''', ''''),
(20, 1, 1, 1, 1, 10, 3, '''', '''', '''', ''''),
(21, 1, 1, 1, 1, 10, 4, '''', '''', '''', ''''),
(22, 1, 1, 1, 1, 10, 2, '''', '''', '''', ''''),
(23, 1, 1, 1, 1, 11, 1, '''', '''', '''', ''''),
(24, 1, 1, 1, 1, 11, 3, '''', '''', '''', ''''),
(25, 1, 1, 1, 1, 11, 4, '''', '''', '''', ''''),
(26, 1, 1, 1, 1, 11, 2, '''', '''', '''', ''''),
(27, 1, 1, 1, 1, 5, 8, '''', '''', '''', ''''),
(28, 1, 1, 1, 1, 10, 8, '''', '''', '''', ''''),
(29, 1, 1, 1, 1, 12, 8, '''', '''', '''', ''''),
(30, 1, 1, 1, 1, 13, 8, '''', '''', '''', ''''),
(31, 1, 1, 1, 1, 5, 9, '''', '''', '''', ''''),
(32, 1, 1, 1, 1, 10, 9, '''', '''', '''', ''''),
(33, 1, 1, 1, 1, 12, 9, '''', '''', '''', ''''),
(34, 1, 1, 1, 1, 13, 9, '''', '''', '''', ''''),
(35, 1, 1, 1, 1, 5, 10, '''', '''', '''', ''''),
(36, 1, 1, 1, 1, 10, 10, '''', '''', '''', ''''),
(37, 1, 1, 1, 1, 12, 10, '''', '''', '''', ''''),
(38, 1, 1, 1, 1, 13, 10, '''', '''', '''', ''''),
(39, 1, 1, 1, 1, 5, 11, '''', '''', '''', ''''),
(40, 1, 1, 1, 1, 10, 11, '''', '''', '''', ''''),
(41, 1, 1, 1, 1, 12, 11, '''', '''', '''', ''''),
(42, 1, 1, 1, 1, 13, 11, '''', '''', '''', ''''),
(43, 1, 1, 1, 1, 5, 12, '''', '''', '''', ''''),
(44, 1, 1, 1, 1, 10, 12, '''', '''', '''', ''''),
(45, 1, 1, 1, 1, 12, 12, '''', '''', '''', ''''),
(46, 1, 1, 1, 1, 13, 12, '''', '''', '''', ''''),
(47, 1, 1, 1, 1, 5, 13, '''', '''', '''', ''''),
(48, 1, 1, 1, 1, 10, 13, '''', '''', '''', ''''),
(49, 1, 1, 1, 1, 12, 13, '''', '''', '''', ''''),
(50, 1, 1, 1, 1, 13, 13, '''', '''', '''', ''''),
(51, 1, 1, 1, 1, 5, 14, '''', '''', '''', ''''),
(52, 1, 1, 1, 1, 10, 14, '''', '''', '''', ''''),
(53, 1, 1, 1, 1, 12, 14, '''', '''', '''', ''''),
(54, 1, 1, 1, 1, 13, 14, '''', '''', '''', ''''),
(55, 1, 1, 1, 1, 5, 7, '''', '''', '''', ''''),
(56, 1, 1, 1, 1, 10, 7, '''', '''', '''', ''''),
(57, 1, 1, 1, 1, 12, 7, '''', '''', '''', ''''),
(58, 1, 1, 1, 1, 13, 7, '''', '''', '''', ''''),
(59, 1, 1, 1, 1, 11, 8, '''', '''', '''', ''''),
(60, 1, 1, 1, 1, 11, 9, '''', '''', '''', ''''),
(61, 1, 1, 1, 1, 11, 10, '''', '''', '''', ''''),
(62, 1, 1, 1, 1, 11, 11, '''', '''', '''', ''''),
(63, 1, 1, 1, 1, 11, 12, '''', '''', '''', ''''),
(64, 1, 1, 1, 1, 11, 13, '''', '''', '''', ''''),
(65, 1, 1, 1, 1, 11, 14, '''', '''', '''', ''''),
(66, 1, 1, 1, 1, 11, 7, '''', '''', '''', '''');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `gerencia_id` int(11) NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `descripcion`, `gerencia_id`, `estado`) VALUES
(1, ''Administrador sistema'', NULL, 2, 1),
(2, ''Jefe de área'', NULL, 2, 1),
(3, ''Responsable área'', NULL, 2, 1),
(4, ''Asistente área'', NULL, 2, 1),
(5, ''Auxiliar área'', NULL, 2, 1),
(6, ''Personal Mantenimiento'', NULL, 2, 1),
(7, ''Directora '', NULL, 1, 1),
(8, ''Head of School PS'', NULL, 1, 1),
(9, ''Psicólog(a) PS'', NULL, 1, 1),
(10, ''Cordinador(a) PS'', NULL, 1, 1),
(11, ''Profesor(a) Arte PS'', NULL, 1, 1),
(12, ''Profesor(a) Español PS'', NULL, 1, 1),
(13, ''Profesor(a) Asistente PS'', NULL, 1, 1),
(14, ''Profesor(a) Inglés PS'', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_entrevista`
--

CREATE TABLE `tipos_entrevista` (
  `id` int(11) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipos_entrevista`
--

INSERT INTO `tipos_entrevista` (`id`, `nombre`, `estado`) VALUES
(1, ''Entrevista 2'', 1),
(2, ''Entrevista 3'', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_items`
--

CREATE TABLE `tipos_items` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `create_at` varchar(35) NOT NULL,
  `create_by` varchar(35) NOT NULL,
  `update_at` varchar(35) NOT NULL,
  `update_by` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipos_items`
--

INSERT INTO `tipos_items` (`id`, `nombre`, `estado`, `create_at`, `create_by`, `update_at`, `update_by`) VALUES
(1, ''ESTRATEGIAS DE APRENDIZAJE - ENSEÑANZA'', 1, '''', '''', '''', ''''),
(2, ''PROCESO DE EVALUACIÓN'', 1, '''', '''', '''', ''''),
(3, ''MANEJO DE GRUPO/CLIMA POSITIVO'', 1, '''', '''', '''', ''''),
(4, ''DOCUMENTOS Y AULA VIRTUAL'', 1, '''', '''', '''', '''');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_valoracion`
--

CREATE TABLE `tipos_valoracion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `create_at` varchar(35) NOT NULL,
  `create_by` varchar(35) NOT NULL,
  `update_at` varchar(35) NOT NULL,
  `update_by` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipos_valoracion`
--

INSERT INTO `tipos_valoracion` (`id`, `nombre`, `estado`, `create_at`, `create_by`, `update_at`, `update_by`) VALUES
(1, ''Valoración 1'', 1, '''', '''', '''', ''''),
(2, ''Valoración 2'', 1, '''', '''', '''', ''''),
(3, ''Valoración por Objetivos'', 1, '''', '''', '''', ''''),
(4, ''Valoración ficha pedagógica'', 1, '''', '''', '''', '''');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `area_id` int(11) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `create_at` varchar(35) DEFAULT NULL,
  `create_by` varchar(35) NOT NULL,
  `update_at` varchar(35) DEFAULT NULL,
  `update_by` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `username`, `password`, `rol_id`, `area_id`, `estado`, `create_at`, `create_by`, `update_at`, `update_by`) VALUES
(11, ''Administrador'', ''Sistemas'', ''admin@prescott.edu.pe'', ''cb4154596b441ebe8deb40ccaceaf9befc55b0df'', 1, 11, 1, NULL, '''', NULL, ''''),
(75, ''Fernando Alberto'', ''Salas Heresi'', ''fsalas@prescott.edu.pe'', ''cb4154596b441ebe8deb40ccaceaf9befc55b0df'', 2, 11, 1, NULL, '''', NULL, ''''),
(76, ''Fernando Eduardo'', ''Azálgara Cuadros'', ''fazalgara@prescott.edu.pe'', ''20230bea9daf3d1a52cfacfbeb542529a0eb35c2'', 3, 4, 1, NULL, '''', NULL, ''''),
(77, ''Susana María Josefa'', ''Bustamante de Soto'', ''sbustamante@prescott.edu.pe'', ''3a95719f625632b9a78ccc791fce39cce3f6a208'', 3, 6, 1, NULL, '''', NULL, ''''),
(78, ''Javier Alonso'', ''Butrón Valencia'', ''jbutron@prescott.edu.pe'', ''cb4154596b441ebe8deb40ccaceaf9befc55b0df'', 3, 3, 1, NULL, '''', NULL, ''''),
(79, ''Paola Erika'', ''Cárdenas Valdivia de Prevate'', ''pcardenas@prescott.edu.pe'', ''cb4154596b441ebe8deb40ccaceaf9befc55b0df'', 3, 5, 1, NULL, '''', NULL, ''''),
(80, ''Vania'', ''López Berrios'', ''vlopez@prescott.edu.pe'', ''bee367050fdb6496bc465f9002c2e4d946166069'', 3, 6, 1, NULL, '''', NULL, ''''),
(81, ''Moscoso Aramayo'', ''Ana Paola'', ''amoscoso@prescott.edu.pe'', ''0e06bb6fe622c3cec7bfa6b3c8051f9d70907224'', 3, 1, 1, NULL, '''', NULL, ''''),
(82, ''Marleni'', ''Valencia Portugal'', ''mvalencia@prescott.edu.pe'', ''855f49136947d2893b97e9ab609b51d6681a6cc9'', 3, 12, 1, NULL, '''', NULL, ''''),
(83, ''Andrea Alejandra'', ''Zegarra Lozada'', ''azegarra@prescott.edu.pe'', ''6b9e0cfa0d1155fa80b0bd10eeeaaa64a81b87df'', 3, 2, 1, NULL, '''', NULL, ''''),
(84, ''Katherine Maryori'', ''Benites Cucho'', ''kbenites@prescott.edu.pe'', ''da6b6259ceb0c7f47a0a3db80de7069f91bf36a8'', 4, 2, 1, NULL, '''', NULL, ''''),
(85, ''Laura Elizabeth'', ''Portugal Passiuri'', ''lportugal@prescott.edu.pe'', ''ba9c52f7a0b74c9a95f530ad62a09fdf6443596a'', 4, 2, 1, NULL, '''', NULL, ''''),
(86, ''Haydee Liliana'', ''Ramos Castillo'', ''hramos@prescott.edu.pe'', ''fcd68095083ca5b3ac2affa9e283676224be5582'', 4, 2, 1, NULL, '''', NULL, ''''),
(87, ''Profesora'', ''Asistente'', ''profesoraasistente@prescott.edu.pe'', ''cb4154596b441ebe8deb40ccaceaf9befc55b0df'', 13, 7, 1, NULL, '''', NULL, ''''),
(88, ''Arlette Katherine'', ''Rondón Carreón'', ''arondo@prescott.edu.pe'', ''cb4154596b441ebe8deb40ccaceaf9befc55b0df'', 8, 7, 1, NULL, '''', NULL, ''''),
(89, ''Claudia\r\n'', ''Arrarte Cornejo'', ''carrarte@prescott.edu.pe'', ''cb4154596b441ebe8deb40ccaceaf9befc55b0df'', 10, 7, 1, NULL, '''', NULL, ''''),
(90, ''Carmén '', ''García'', ''cgarcia@prescott.edu.pe'', ''cb4154596b441ebe8deb40ccaceaf9befc55b0df'', 7, 15, 1, NULL, '''', NULL, ''''),
(91, ''Profesora '', ''Inglés'', ''profesoraingles@prescott.edu.pe'', ''cb4154596b441ebe8deb40ccaceaf9befc55b0df'', 14, 7, 1, NULL, '''', NULL, ''''),
(92, ''Profesora'', ''Español'', ''profesoraespanol@prescott.edu.pe'', ''cb4154596b441ebe8deb40ccaceaf9befc55b0df'', 12, 7, 1, NULL, '''', NULL, ''''),
(93, ''Profesora '', ''Arte'', ''profesoraarte@prescott.edu.pe'', ''cb4154596b441ebe8deb40ccaceaf9befc55b0df'', 11, 7, 1, NULL, '''', NULL, '''');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoraciones`
--

CREATE TABLE `valoraciones` (
  `id` int(11) NOT NULL,
  `total_valoracion` varchar(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `tipo_valoracion_id` int(11) NOT NULL,
  `create_at` date NOT NULL,
  `create_by` varchar(35) NOT NULL,
  `update_at` varchar(35) NOT NULL,
  `update_by` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `valoraciones`
--

INSERT INTO `valoraciones` (`id`, `total_valoracion`, `estado`, `usuario_id`, `tipo_valoracion_id`, `create_at`, `create_by`, `update_at`, `update_by`) VALUES
(106, ''19'', 1, 83, 1, ''2020-09-03'', ''Fernando Alberto Salas Heresi'', '''', ''''),
(107, ''18'', 1, 83, 2, ''2020-09-03'', ''Fernando Alberto Salas Heresi'', '''', ''''),
(108, ''20'', 1, 83, 3, ''2020-09-03'', ''Fernando Alberto Salas Heresi'', '''', ''''),
(109, ''12.5'', 1, 87, 1, ''2020-09-05'', ''Arlette Katherine Rondón Carreón'', '''', '''');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE `visitas` (
  `id` int(11) NOT NULL,
  `puntaje` int(10) NOT NULL,
  `describo_eval` varchar(255) NOT NULL,
  `valoro_eval` varchar(255) NOT NULL,
  `pregunto_eval` varchar(255) NOT NULL,
  `sugiero_eval` varchar(255) NOT NULL,
  `describo_colab` varchar(255) NOT NULL,
  `valoro_colab` varchar(255) NOT NULL,
  `pregunto_colab` varchar(255) NOT NULL,
  `sugiero_colab` varchar(255) NOT NULL,
  `grado_seccion` varchar(35) NOT NULL,
  `estado` varchar(35) NOT NULL,
  `bimestre_id` int(11) NOT NULL,
  `ficha_pedagogica_id` int(11) NOT NULL,
  `create_at` date NOT NULL DEFAULT current_timestamp(),
  `create_by` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `visitas`
--

INSERT INTO `visitas` (`id`, `puntaje`, `describo_eval`, `valoro_eval`, `pregunto_eval`, `sugiero_eval`, `describo_colab`, `valoro_colab`, `pregunto_colab`, `sugiero_colab`, `grado_seccion`, `estado`, `bimestre_id`, `ficha_pedagogica_id`, `create_at`, `create_by`) VALUES
(132, 3, ''1'', ''1'', ''1'', ''1'', '''', '''', '''', '''', ''1ero B'', '''', 1, 5, ''2020-09-23'', ''Arlette Katherine Rondón Carreón''),
(133, 2, ''1'', ''1'', ''1'', ''1'', '''', '''', '''', '''', ''1ero B'', '''', 1, 5, ''2020-09-23'', ''Arlette Katherine Rondón Carreón''),
(134, 3, ''1'', ''1'', ''1'', ''1'', '''', '''', '''', '''', ''1ero B'', '''', 1, 5, ''2020-09-23'', ''Arlette Katherine Rondón Carreón''),
(135, 33, ''Inglés 1'', ''Inglés 1'', ''Inglés 1'', ''Inglés 1'', '''', '''', '''', '''', ''1ero B'', '''', 1, 6, ''2020-09-24'', ''Arlette Katherine Rondón Carreón''),
(136, 4, ''Español 1'', ''Español 1'', ''Español 1'', ''Español 1'', '''', '''', '''', '''', ''1ero B'', '''', 1, 7, ''2020-09-24'', ''Arlette Katherine Rondón Carreón''),
(137, 4, ''2'', ''2'', ''2'', ''2'', '''', '''', '''', '''', ''1ero B'', '''', 2, 7, ''2020-09-24'', ''Arlette Katherine Rondón Carreón''),
(138, 4, ''2'', ''2'', ''2'', ''2'', '''', '''', '''', '''', ''1ero B'', '''', 2, 5, ''2020-09-24'', ''Claudia\r\n Arrarte Cornejo''),
(139, 5, ''2222'', ''22222'', ''222'', ''2222'', '''', '''', '''', '''', ''1ero B'', '''', 2, 7, ''2020-09-24'', ''Claudia\r\n Arrarte Cornejo''),
(140, 5, ''1'', ''1'', ''1'', ''1'', '''', '''', '''', '''', ''1ero B'', '''', 1, 8, ''2020-09-24'', ''Arlette Katherine Rondón Carreón''),
(141, 3, ''1'', ''1'', ''1'', ''1'', '''', '''', '''', '''', ''1ero B'', '''', 1, 5, ''2020-09-24'', ''Arlette Katherine Rondón Carreón''),
(142, 3, ''2'', ''2'', ''2'', ''2'', '''', '''', '''', '''', ''1ero B'', '''', 1, 6, ''2020-09-24'', ''Arlette Katherine Rondón Carreón''),
(143, 3, ''1'', ''1'', ''1'', ''1'', '''', '''', '''', '''', ''2do B'', '''', 1, 8, ''2020-09-24'', ''Arlette Katherine Rondón Carreón'');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anecdotarios`
--
ALTER TABLE `anecdotarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_anecdotario_usuario` (`usuario_id`);

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_gerencia_area` (`gerencia_id`);

--
-- Indices de la tabla `bimestres`
--
ALTER TABLE `bimestres`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `competencias`
--
ALTER TABLE `competencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalles_periodos`
--
ALTER TABLE `detalles_periodos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_periodo_detalle` (`periodo_id`),
  ADD KEY `fk_tipoval_detalle` (`tipo_valoracion_id`);

--
-- Indices de la tabla `detalles_valoraciones`
--
ALTER TABLE `detalles_valoraciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_valoracion_detalle` (`valoracion_id`),
  ADD KEY `fk_indicador_detalle` (`indicador_id`);

--
-- Indices de la tabla `detalles_visitas`
--
ALTER TABLE `detalles_visitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detalle_item` (`item_id`),
  ADD KEY `fk_detalle_visita` (`visita_id`);

--
-- Indices de la tabla `entrevistas`
--
ALTER TABLE `entrevistas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_colaborador_usuario` (`colaborador_id`),
  ADD KEY `fk_evaluador_usuario` (`evaluador_id`),
  ADD KEY `fk_tipo_entrevista` (`tipo_entrevista_id`);

--
-- Indices de la tabla `fichas_pedagogicas`
--
ALTER TABLE `fichas_pedagogicas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ficha_usuario` (`usuario_id`);

--
-- Indices de la tabla `gerencias`
--
ALTER TABLE `gerencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `indicadores`
--
ALTER TABLE `indicadores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_competencias_indicador` (`competencia_id`);

--
-- Indices de la tabla `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tipo_items` (`id_tipo_item`),
  ADD KEY `fk_tipo_profesor_items` (`id_tipo_profesor`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `objetivos`
--
ALTER TABLE `objetivos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_obj_usuario` (`usuario_id`);

--
-- Indices de la tabla `parentesco`
--
ALTER TABLE `parentesco`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_hijo_usuarios` (`hijo_id`),
  ADD KEY `fk_padre_usuarios` (`padre_id`);

--
-- Indices de la tabla `periodos`
--
ALTER TABLE `periodos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_men_per` (`menu_id`),
  ADD KEY `fk_rol_per` (`rol_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_gerencia_roles` (`gerencia_id`);

--
-- Indices de la tabla `tipos_entrevista`
--
ALTER TABLE `tipos_entrevista`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos_items`
--
ALTER TABLE `tipos_items`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos_valoracion`
--
ALTER TABLE `tipos_valoracion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_area_usuarios` (`area_id`),
  ADD KEY `fk_role_usuarios` (`rol_id`);

--
-- Indices de la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_valoracion` (`usuario_id`),
  ADD KEY `fk_tipo_valoraciones` (`tipo_valoracion_id`);

--
-- Indices de la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_visita_ficha` (`ficha_pedagogica_id`),
  ADD KEY `fk_visitas_bimestre` (`bimestre_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anecdotarios`
--
ALTER TABLE `anecdotarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `bimestres`
--
ALTER TABLE `bimestres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `competencias`
--
ALTER TABLE `competencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `detalles_periodos`
--
ALTER TABLE `detalles_periodos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `detalles_valoraciones`
--
ALTER TABLE `detalles_valoraciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1572;

--
-- AUTO_INCREMENT de la tabla `detalles_visitas`
--
ALTER TABLE `detalles_visitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2357;

--
-- AUTO_INCREMENT de la tabla `entrevistas`
--
ALTER TABLE `entrevistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `fichas_pedagogicas`
--
ALTER TABLE `fichas_pedagogicas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `gerencias`
--
ALTER TABLE `gerencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `indicadores`
--
ALTER TABLE `indicadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `objetivos`
--
ALTER TABLE `objetivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `parentesco`
--
ALTER TABLE `parentesco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=260;

--
-- AUTO_INCREMENT de la tabla `periodos`
--
ALTER TABLE `periodos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tipos_entrevista`
--
ALTER TABLE `tipos_entrevista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipos_items`
--
ALTER TABLE `tipos_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipos_valoracion`
--
ALTER TABLE `tipos_valoracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT de la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT de la tabla `visitas`
--
ALTER TABLE `visitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `anecdotarios`
--
ALTER TABLE `anecdotarios`
  ADD CONSTRAINT `fk_anecdotario_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `fk_gerencia_area` FOREIGN KEY (`gerencia_id`) REFERENCES `gerencias` (`id`);

--
-- Filtros para la tabla `detalles_periodos`
--
ALTER TABLE `detalles_periodos`
  ADD CONSTRAINT `fk_periodo_detalle` FOREIGN KEY (`periodo_id`) REFERENCES `periodos` (`id`),
  ADD CONSTRAINT `fk_tipoval_detalle` FOREIGN KEY (`tipo_valoracion_id`) REFERENCES `tipos_valoracion` (`id`);

--
-- Filtros para la tabla `detalles_valoraciones`
--
ALTER TABLE `detalles_valoraciones`
  ADD CONSTRAINT `fk_indicador_detalle` FOREIGN KEY (`indicador_id`) REFERENCES `indicadores` (`id`),
  ADD CONSTRAINT `fk_valoracion_detalle` FOREIGN KEY (`valoracion_id`) REFERENCES `valoraciones` (`id`);

--
-- Filtros para la tabla `detalles_visitas`
--
ALTER TABLE `detalles_visitas`
  ADD CONSTRAINT `fk_detalle_item` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `fk_detalle_visita` FOREIGN KEY (`visita_id`) REFERENCES `visitas` (`id`);

--
-- Filtros para la tabla `entrevistas`
--
ALTER TABLE `entrevistas`
  ADD CONSTRAINT `fk_colaborador_usuario` FOREIGN KEY (`colaborador_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `fk_evaluador_usuario` FOREIGN KEY (`evaluador_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `fk_tipo_entrevista` FOREIGN KEY (`tipo_entrevista_id`) REFERENCES `tipos_entrevista` (`id`);

--
-- Filtros para la tabla `fichas_pedagogicas`
--
ALTER TABLE `fichas_pedagogicas`
  ADD CONSTRAINT `fk_ficha_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `indicadores`
--
ALTER TABLE `indicadores`
  ADD CONSTRAINT `fk_competencias_indicador` FOREIGN KEY (`competencia_id`) REFERENCES `competencias` (`id`);

--
-- Filtros para la tabla `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `fk_tipo_items` FOREIGN KEY (`id_tipo_item`) REFERENCES `tipos_items` (`id`),
  ADD CONSTRAINT `fk_tipo_profesor_items` FOREIGN KEY (`id_tipo_profesor`) REFERENCES `roles` (`id`);

--
-- Filtros para la tabla `objetivos`
--
ALTER TABLE `objetivos`
  ADD CONSTRAINT `fk_obj_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `parentesco`
--
ALTER TABLE `parentesco`
  ADD CONSTRAINT `fk_hijo_usuarios` FOREIGN KEY (`hijo_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `fk_padre_usuarios` FOREIGN KEY (`padre_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `fk_men_per` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`),
  ADD CONSTRAINT `fk_rol_per` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);

--
-- Filtros para la tabla `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `fk_gerencia_roles` FOREIGN KEY (`gerencia_id`) REFERENCES `gerencias` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_area_usuarios` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`),
  ADD CONSTRAINT `fk_role_usuarios` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);

--
-- Filtros para la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  ADD CONSTRAINT `fk_tipo_valoraciones` FOREIGN KEY (`tipo_valoracion_id`) REFERENCES `tipos_valoracion` (`id`),
  ADD CONSTRAINT `fk_usuario_valoracion` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD CONSTRAINT `fk_visita_ficha` FOREIGN KEY (`ficha_pedagogica_id`) REFERENCES `fichas_pedagogicas` (`id`),
  ADD CONSTRAINT `fk_visitas_bimestre` FOREIGN KEY (`bimestre_id`) REFERENCES `bimestres` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
