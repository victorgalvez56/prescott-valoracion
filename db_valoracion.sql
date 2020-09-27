-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2020 a las 07:11:31
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
(24, 'Hola', 1, 83, '2020-09-02', 'Fernando Alberto Salas Heresi'),
(25, 'No', 1, 83, '2020-09-03', 'Fernando Alberto Salas Heresi'),
(26, 'KKKKK', 1, 76, '2020-09-08', 'Fernando Alberto Salas Heresi'),
(27, 'ASDASD', 1, 76, '2020-09-08', 'Fernando Alberto Salas Heresi');

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
(1, 'Finanzas', '', 1, 2, '15-08-2020 23:40:09', 'Administrador Sistema', '', ''),
(2, 'Desarrollo Humano', '', 1, 2, '15-08-2020 23:40:09', 'Administrador Sistema', '', ''),
(3, 'Sistemas', '', 1, 2, '15-08-2020 23:40:09', 'Administrador Sistema', '', ''),
(4, 'Seguridad y Salud Ocupacional', '', 1, 2, '15-08-2020 23:40:09', 'Administrador Sistema', '17-08-2020 10:59:15', 'Administrador Sistema'),
(5, 'Logística, Infraestructura y Mantenimiento', '', 1, 2, '15-08-2020 23:40:09', 'Administrador Sistema', '17-08-2020 11:01:26', 'Administrador Sistema'),
(6, 'Promoción y comunicación', '', 1, 2, '15-08-2020 23:40:09', 'Administrador Sistema', '', ''),
(7, 'PS', '', 1, 1, '15-08-2020 23:40:09', 'Administrador Sistema', '', ''),
(8, 'ES', '', 1, 1, '15-08-2020 23:40:09', 'Administrador Sistema', '', ''),
(9, 'MS', '', 1, 1, '15-08-2020 23:40:09', 'Administrador Sistema', '', ''),
(10, 'HS', '', 1, 1, '15-08-2020 23:40:09', 'Administrador Sistema', '', ''),
(11, 'Programa de Desarrollo Institucional (PDI)', '', 1, 2, '15-08-2020 23:40:09', 'Administrador Sistema', '', ''),
(12, 'RRPP', '', 1, 1, '15-08-2020 23:40:09', 'Administrador Sistema', '', ''),
(15, 'No necesita área DOCENTES', '', 0, 2, '15-08-2020 23:40:09', 'Administrador Sistema', '', ''),
(16, 'No necesita área NO DOCENTES', '', 0, 2, '15-08-2020 23:44:07', 'Administrador Sistema', '17-08-2020 11:01:02', 'Administrador Sistema');

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
(1, 'BIMESTRE I', '2020-09-01', '2020-09-30', '0000-00-00', '0000-00-00'),
(2, 'BIMESTRE II', NULL, NULL, '0000-00-00', '0000-00-00'),
(3, 'BIMESTRE III', NULL, NULL, '0000-00-00', '0000-00-00'),
(4, 'BIMESTRE IV', NULL, NULL, '0000-00-00', '0000-00-00');

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
(1, 'COMUNICACIÓN DE PROFESORES', 1, '', '', '08-09-2020 16:24:09', 'Administrador Sistemas'),
(2, 'TRABAJO EN EQUIPO', 1, '', '', '02-07-2020 17:36:02', 'Administrador Sistema'),
(3, 'PROACTIVIDAD', 1, '', '', '02-07-2020 17:36:06', 'Administrador Sistema'),
(4, 'APRENDIZAJE', 1, '', '', '02-07-2020 17:36:10', 'Administrador Sistema');

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
(1, '2020-07-01', '2020-08-31', 3, 1),
(2, '2020-07-01', '2020-07-31', 3, 2),
(3, '2020-07-01', '2020-07-31', 3, 3),
(4, '2020-01-01', '2020-08-31', 3, 4),
(5, '2020-01-01', '2020-12-31', 2, 1),
(6, '2020-01-01', '2020-12-31', 2, 2),
(7, '2020-01-01', '2020-08-31', 2, 3),
(8, '2020-07-01', '2020-07-31', 2, 4),
(9, '2020-07-01', '2020-07-31', 4, 1),
(10, '2020-07-01', '2020-07-31', 4, 2),
(11, '2020-07-01', '2020-07-31', 4, 3),
(12, '2020-07-01', '2020-07-31', 4, 4),
(13, '1111-11-11', '1111-11-11', 5, 1),
(14, '2020-07-01', '2020-07-31', 5, 2),
(15, '2020-07-01', '2020-07-31', 5, 3),
(16, '2020-07-01', '2020-07-31', 5, 4);

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
(1325, 1, 'si', 106, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1326, 2, 'no', 106, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1327, 3, 'no', 106, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1328, 4, 'no', 106, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1329, 5, 'no', 106, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1330, 6, 'no', 106, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1331, 7, 'no', 106, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1332, 8, 'no', 106, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1333, 9, 'no', 106, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1334, 10, 'no', 106, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1335, 11, 'no', 106, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1336, 12, 'no', 106, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1337, 13, 'no', 106, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1338, 14, 'no', 106, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1339, 15, 'no', 106, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1340, 16, 'no', 106, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1341, 17, 'no', 106, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1342, 18, 'no', 106, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1343, 19, 'no', 106, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1344, 20, 'no', 106, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1345, 21, 'no', 106, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1346, 22, 'no', 106, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1347, 23, 'no', 106, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1348, 24, 'no', 106, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1349, 25, 'no', 106, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1350, 26, 'no', 106, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1351, 2, 'si', 107, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1352, 1, 'no', 107, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1353, 3, 'no', 107, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1354, 4, 'no', 107, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1355, 5, 'no', 107, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1356, 6, 'no', 107, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1357, 7, 'no', 107, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1358, 8, 'no', 107, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1359, 9, 'no', 107, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1360, 10, 'no', 107, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1361, 11, 'no', 107, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1362, 12, 'no', 107, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1363, 13, 'no', 107, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1364, 14, 'no', 107, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1365, 15, 'no', 107, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1366, 16, 'no', 107, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1367, 17, 'no', 107, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1368, 18, 'no', 107, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1369, 19, 'no', 107, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1370, 20, 'no', 107, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1371, 21, 'no', 107, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1372, 22, 'no', 107, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1373, 23, 'no', 107, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1374, 24, 'no', 107, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1375, 25, 'no', 107, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1376, 26, 'no', 107, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1377, 3, 'si', 108, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1378, 1, 'no', 108, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1379, 2, 'no', 108, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1380, 4, 'no', 108, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1381, 5, 'no', 108, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1382, 6, 'no', 108, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1383, 7, 'no', 108, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1384, 8, 'no', 108, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1385, 9, 'no', 108, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1386, 10, 'no', 108, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1387, 11, 'no', 108, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1388, 12, 'no', 108, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1389, 13, 'no', 108, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1390, 14, 'no', 108, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1391, 15, 'no', 108, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1392, 16, 'no', 108, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1393, 17, 'no', 108, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1394, 18, 'no', 108, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1395, 19, 'no', 108, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1396, 20, 'no', 108, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1397, 21, 'no', 108, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1398, 22, 'no', 108, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1399, 23, 'no', 108, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1400, 24, 'no', 108, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1401, 25, 'no', 108, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1402, 26, 'no', 108, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1403, 1, 'si', 109, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1404, 2, 'no', 109, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1405, 3, 'no', 109, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1406, 4, 'no', 109, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1407, 5, 'no', 109, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1408, 6, 'no', 109, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1409, 7, 'no', 109, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1410, 8, 'no', 109, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1411, 9, 'no', 109, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1412, 10, 'no', 109, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1413, 11, 'no', 109, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1414, 12, 'no', 109, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1415, 13, 'no', 109, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1416, 14, 'no', 109, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1417, 15, 'no', 109, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1418, 16, 'no', 109, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1419, 17, 'no', 109, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1420, 18, 'no', 109, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1421, 19, 'no', 109, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1422, 20, 'no', 109, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1423, 21, 'no', 109, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1424, 22, 'no', 109, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1425, 23, 'no', 109, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1426, 24, 'no', 109, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1427, 25, 'no', 109, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1428, 26, 'no', 109, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1429, 2, 'si', 110, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1430, 1, 'no', 110, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1431, 3, 'no', 110, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1432, 4, 'no', 110, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1433, 5, 'no', 110, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1434, 6, 'no', 110, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1435, 7, 'no', 110, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1436, 8, 'no', 110, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1437, 9, 'no', 110, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1438, 10, 'no', 110, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1439, 11, 'no', 110, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1440, 12, 'no', 110, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1441, 13, 'no', 110, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1442, 14, 'no', 110, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1443, 15, 'no', 110, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1444, 16, 'no', 110, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1445, 17, 'no', 110, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1446, 18, 'no', 110, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1447, 19, 'no', 110, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1448, 20, 'no', 110, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1449, 21, 'no', 110, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1450, 22, 'no', 110, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1451, 23, 'no', 110, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1452, 24, 'no', 110, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1453, 25, 'no', 110, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1454, 26, 'no', 110, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1455, 3, 'si', 111, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1456, 1, 'no', 111, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1457, 2, 'no', 111, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1458, 4, 'no', 111, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1459, 5, 'no', 111, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1460, 6, 'no', 111, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1461, 7, 'no', 111, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1462, 8, 'no', 111, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1463, 9, 'no', 111, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1464, 10, 'no', 111, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1465, 11, 'no', 111, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1466, 12, 'no', 111, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1467, 13, 'no', 111, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1468, 14, 'no', 111, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1469, 15, 'no', 111, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1470, 16, 'no', 111, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1471, 17, 'no', 111, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1472, 18, 'no', 111, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1473, 19, 'no', 111, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1474, 20, 'no', 111, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1475, 21, 'no', 111, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1476, 22, 'no', 111, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1477, 23, 'no', 111, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1478, 24, 'no', 111, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1479, 25, 'no', 111, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1480, 26, 'no', 111, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1481, 4, 'si', 112, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1482, 1, 'no', 112, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1483, 2, 'no', 112, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1484, 3, 'no', 112, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1485, 5, 'no', 112, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1486, 6, 'no', 112, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1487, 7, 'no', 112, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1488, 8, 'no', 112, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1489, 9, 'no', 112, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1490, 10, 'no', 112, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1491, 11, 'no', 112, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1492, 12, 'no', 112, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1493, 13, 'no', 112, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1494, 14, 'no', 112, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1495, 15, 'no', 112, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1496, 16, 'no', 112, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1497, 17, 'no', 112, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1498, 18, 'no', 112, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1499, 19, 'no', 112, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1500, 20, 'no', 112, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1501, 21, 'no', 112, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1502, 22, 'no', 112, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1503, 23, 'no', 112, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1504, 24, 'no', 112, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1505, 25, 'no', 112, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1506, 26, 'no', 112, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1507, 5, 'si', 113, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1508, 1, 'no', 113, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1509, 2, 'no', 113, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1510, 3, 'no', 113, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1511, 4, 'no', 113, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1512, 6, 'no', 113, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1513, 7, 'no', 113, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1514, 8, 'no', 113, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1515, 9, 'no', 113, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1516, 10, 'no', 113, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1517, 11, 'no', 113, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1518, 12, 'no', 113, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1519, 13, 'no', 113, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1520, 14, 'no', 113, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1521, 15, 'no', 113, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1522, 16, 'no', 113, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1523, 17, 'no', 113, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1524, 18, 'no', 113, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1525, 19, 'no', 113, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1526, 20, 'no', 113, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1527, 21, 'no', 113, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1528, 22, 'no', 113, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1529, 23, 'no', 113, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1530, 24, 'no', 113, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1531, 25, 'no', 113, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1532, 26, 'no', 113, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1533, 6, 'si', 114, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1534, 1, 'no', 114, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1535, 2, 'no', 114, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1536, 3, 'no', 114, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1537, 4, 'no', 114, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1538, 5, 'no', 114, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1539, 7, 'no', 114, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1540, 8, 'no', 114, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1541, 9, 'no', 114, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1542, 10, 'no', 114, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1543, 11, 'no', 114, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1544, 12, 'no', 114, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1545, 13, 'no', 114, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1546, 14, 'no', 114, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1547, 15, 'no', 114, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1548, 16, 'no', 114, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1549, 17, 'no', 114, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1550, 18, 'no', 114, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1551, 19, 'no', 114, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1552, 20, 'no', 114, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1553, 21, 'no', 114, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1554, 22, 'no', 114, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1555, 23, 'no', 114, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1556, 24, 'no', 114, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1557, 25, 'no', 114, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1558, 26, 'no', 114, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1559, 1, 'si', 115, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1560, 2, 'no', 115, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1561, 3, 'no', 115, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1562, 4, 'no', 115, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1563, 5, 'no', 115, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1564, 6, 'no', 115, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1565, 7, 'no', 115, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1566, 8, 'no', 115, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1567, 9, 'no', 115, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1568, 10, 'no', 115, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1569, 11, 'no', 115, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1570, 12, 'no', 115, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1571, 13, 'no', 115, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1572, 14, 'no', 115, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1573, 15, 'no', 115, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1574, 16, 'no', 115, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1575, 17, 'no', 115, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1576, 18, 'no', 115, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1577, 19, 'no', 115, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1578, 20, 'no', 115, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1579, 21, 'no', 115, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1580, 22, 'no', 115, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1581, 23, 'no', 115, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1582, 24, 'no', 115, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1583, 25, 'no', 115, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1584, 26, 'no', 115, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1585, 2, 'si', 116, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1586, 1, 'no', 116, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1587, 3, 'no', 116, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1588, 4, 'no', 116, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1589, 5, 'no', 116, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1590, 6, 'no', 116, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1591, 7, 'no', 116, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1592, 8, 'no', 116, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1593, 9, 'no', 116, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1594, 10, 'no', 116, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1595, 11, 'no', 116, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1596, 12, 'no', 116, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1597, 13, 'no', 116, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1598, 14, 'no', 116, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1599, 15, 'no', 116, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1600, 16, 'no', 116, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1601, 17, 'no', 116, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1602, 18, 'no', 116, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1603, 19, 'no', 116, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1604, 20, 'no', 116, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1605, 21, 'no', 116, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1606, 22, 'no', 116, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1607, 23, 'no', 116, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1608, 24, 'no', 116, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1609, 25, 'no', 116, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1610, 26, 'no', 116, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1611, 4, 'si', 117, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1612, 1, 'no', 117, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1613, 2, 'no', 117, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1614, 3, 'no', 117, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1615, 5, 'no', 117, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1616, 6, 'no', 117, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1617, 7, 'no', 117, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1618, 8, 'no', 117, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1619, 9, 'no', 117, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1620, 10, 'no', 117, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1621, 11, 'no', 117, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1622, 12, 'no', 117, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1623, 13, 'no', 117, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1624, 14, 'no', 117, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1625, 15, 'no', 117, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1626, 16, 'no', 117, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1627, 17, 'no', 117, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1628, 18, 'no', 117, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1629, 19, 'no', 117, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1630, 20, 'no', 117, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1631, 21, 'no', 117, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1632, 22, 'no', 117, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1633, 23, 'no', 117, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1634, 24, 'no', 117, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1635, 25, 'no', 117, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1636, 26, 'no', 117, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1637, 3, 'si', 118, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1638, 1, 'no', 118, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1639, 2, 'no', 118, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1640, 4, 'no', 118, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1641, 5, 'no', 118, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1642, 6, 'no', 118, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1643, 7, 'no', 118, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1644, 8, 'no', 118, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1645, 9, 'no', 118, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1646, 10, 'no', 118, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1647, 11, 'no', 118, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1648, 12, 'no', 118, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1649, 13, 'no', 118, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1650, 14, 'no', 118, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1651, 15, 'no', 118, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1652, 16, 'no', 118, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1653, 17, 'no', 118, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1654, 18, 'no', 118, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1655, 19, 'no', 118, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1656, 20, 'no', 118, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1657, 21, 'no', 118, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1658, 22, 'no', 118, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1659, 23, 'no', 118, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1660, 24, 'no', 118, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1661, 25, 'no', 118, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(1662, 26, 'no', 118, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón');

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
(59, NULL, NULL, NULL, 'asd', 'asd', 'asd', 'asdasd', 'asd', 'asd', '', '', 83, 75, 1, '1', '2020-09-03', 'Andrea Alejandra Zegarra Lozada', '2020-09-03', 'Fernando Alberto Salas Heresi'),
(60, 1, 1, 1, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'assets/img/firmas/firma_Andrea Alejandra Zegarra Lozada_2020.png', 'assets/img/firmas/firma_Fernando Alberto Salas Heresi_2020.png', 83, 75, 2, '1', '2020-09-03', 'Andrea Alejandra Zegarra Lozada', '2020-09-03', '');

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
(5, 0, 'EN PROCESO', 87, '2020-09-13', 'Arlette Katherine Rondón Carreón', '2020-09-21', 'Arlette Katherine Rondón Carreón');

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
(1, 'Docentes  ', 'Gerencia para docentes Prescott', 1, '', '', '02-07-2020 17:30:06', 'Administrador Sistema'),
(2, 'No docentes', 'Descripción ', 1, '', '', '2020-06-05 11:41:01', 'Administrador Sistema');

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
(1, 'Sus mensajes son concretos, objetivos y tienen contenido relevante.', 1, 1, '', '', '02-07-2020 17:40:31', 'Administrador Sistema'),
(2, 'Utiliza los momentos oportunos y medios idóneos para decir las cosas, sin dejar conversaciones pendientes.', 1, 1, '', '', '', '0'),
(3, 'Afronta las conversaciones de manera clara, sincera, asertiva y efectiva, adaptando el lenguaje a la persona o personas con quienes se comunica.', 1, 1, '', '', '', '0'),
(4, 'Mantiene la comunicación permanente, cordial y respetuosa con los miembros de la comunidad.', 1, 1, '', '', '', '0'),
(5, 'Escucha y anima a la gente a que dé sus apreciaciones, aportes y sugerencias para el continuo desarrollo de la Institución.', 1, 1, '', '', '', '0'),
(6, 'Cumple con esmero,  responsabilidad y puntualidad las normas y acuerdos del equipo lolorar.', 1, 2, '', '', '02-07-2020 18:45:25', 'Administrador Sistema'),
(7, 'Se involucra con los objetivos del equipo y los hace suyos.', 1, 2, '', '', '', '0'),
(8, 'Promueve el dialogo constructivo entre los miembros del equipo.', 1, 2, '', '', '', '0'),
(9, 'Promueve e impulso el desarrollo de los objetivos del equipo.', 1, 2, '', '', '', '0'),
(10, 'Respeta y participa activamente en las reuniones del equipo.', 1, 2, '', '', '', '0'),
(11, 'Participa activamente en la generación de nuevas ideas, promoviendo la mejora institucional.', 1, 3, '', '', '', '0'),
(12, 'Toma la iniciativa presentando propuestas de solución en su equipo.', 1, 3, '', '', '', '0'),
(13, 'Asume la propia responsabilidad de hacer que las cosas propuestas se lleven a cabo.', 1, 3, '', '', '', '0'),
(14, 'Actua con iniciativa creativa en el ejercicio de su función.', 1, 3, '', '', '', '0'),
(15, 'Se esfuerza por la mejora continua en su desempeño personal y profesional.', 1, 3, '', '', '', '0'),
(16, 'Mantiene un nivel adecuado de conocimiento a través de la formación continua.', 1, 4, '', '', '29-06-2020 18:36:21', 'Administrador Sistema'),
(17, 'Mantiene una actitud positiva frente a los cambios.', 1, 4, '', '', '08-09-2020 16:23:45', 'Administrador Sistemas'),
(18, 'Promueve la formación continua en sus equipos de trabajo.', 1, 4, '', '', '08-09-2020 16:23:48', 'Administrador Sistemas'),
(19, 'Se mantiene animado ante las dificultades que conllevan el proceso de aprendizaje..', 1, 4, '', '', '08-09-2020 16:24:36', 'Administrador Sistemas'),
(20, 'Comparte el conocimiento aprendido y lo adapta a través de los planes de acción.', 1, 4, '', '', '', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `estado` int(11) NOT NULL,
  `id_tipo_profesor` int(11) NOT NULL,
  `id_tipo_item` int(11) NOT NULL,
  `create_at` varchar(35) NOT NULL,
  `create_by` varchar(35) NOT NULL,
  `update_at` varchar(35) NOT NULL,
  `update_by` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `items`
--

INSERT INTO `items` (`id`, `nombre`, `estado`, `id_tipo_profesor`, `id_tipo_item`, `create_at`, `create_by`, `update_at`, `update_by`) VALUES
(1, 'Recoge los saberes previos utilizando diferentes estrategias y los confrontan con información nueva. (Debe ser evidenciable)', 1, 13, 1, '', '', '', ''),
(2, 'Los alumnos conocen el por qué y para qué son importantes los conocimientos que están desarrollando.', 1, 13, 1, '', '', '', ''),
(3, 'Promueve espacios de diálogo, discusión y/o debate entre los alumnos para que expresen sus ideas, opiniones, formulen preguntas o consultas, expongan y presenten nuevas ideas, planteamientos, hipótesis y/o conclusiones como parte de la construcción de su ', 1, 13, 1, '', '', '', ''),
(4, 'Se evidencian enfoques creativos y constructivistas de enseñanza con estrategias variadas y motivadoras basadas en el juego.', 1, 13, 1, '', '', '', ''),
(5, 'Las actividades propuestas por el profesor son diferenciadas de acuerdo a las necesidades de los alumnos y teniendo en cuenta los estilos y ritmos de aprendizaje. ', 1, 13, 1, '', '', '', ''),
(6, 'Se hace uso de una variedad de materiales para interesar a los alumnos y lograr que participen en las actividades propuestas.', 1, 13, 1, '', '', '', ''),
(7, 'El profesor demuestra dominio del contenido, haciendo uso frecuente de un vocabulario apropiado al área y evidencia una estructura ordenada, lógica y clara en el desarrollo de la sesión.', 1, 13, 1, '', '', '', ''),
(8, 'Los alumnos expresan respuestas y/o resultados en un ambiente de confianza, recibiendo una reflexión por parte del profesor.', 1, 13, 1, '', '', '', ''),
(9, 'Se planifica actividades y/o experiencias significativas, las dosifica, las explica y las revisa haciendo una valoración cualitativa.', 1, 13, 1, '', '', '', ''),
(10, 'Los alumnos son motivados a cumplir con los acuerdos esenciales, atributos, actitudes y habilidades en todo momento.', 1, 13, 1, '', '', '', ''),
(11, 'El profesor pone en práctica los lineamientos específicos, consignados para su School, de acuerdo a la Política de Probidad Académica.', 1, 13, 1, '', '', '', ''),
(12, 'El profesor cita y refiere todos sus documentos según se establece en la Política de Probidad Académica.', 1, 13, 1, '', '', '', ''),
(13, 'El profesor promueve una ambientación de clase ordenada, que refleja la participación activa y el desarrollo del pensamiento de los alumnos, evidenciando el desarrollo de la unidad.', 1, 13, 1, '', '', '', ''),
(14, 'Ejecuta las estrategias de aprendizaje según lo planificado.', 1, 13, 1, '', '', '', ''),
(15, 'El profesor se preocupa en planificar y ejecutar visitas de estudio, valiéndose de las oportunidades que le brinda la comunidad, el colegio y los miembros de nuestra comunidad educativa, permitiendo ampliar el conocimiento de los alumnos.', 1, 13, 1, '', '', '', ''),
(16, 'Los alumnos demuestran conocimiento y comprensión sobre el conocimiento que están desarrollando.', 1, 13, 2, '', '', '', ''),
(17, 'El profesor registra los cuestionamientos y conocimientos resaltantes de los alumnos para organizar el desarrollo de su unidad.', 1, 13, 2, '', '', '', ''),
(18, 'Genera un ambiente positivo, de respeto y confianza. Corrige asertivamente a los alumnos y favorece el aprendizaje. ', 1, 13, 3, '', '', '', ''),
(19, 'Se evidencian muchas demostraciones de emociones positivas entre el maestro y los alumnos.', 1, 13, 3, '', '', '', ''),
(20, 'El profesor nota e interviene cuando un alumno necesita apoyo adicional, ayuda o atención.', 1, 13, 3, '', '', '', ''),
(21, 'El profesor usa estrategias proactivas y orienta la conducta de los alumnos de manera eficaz antes que ocurran problemas.', 1, 13, 3, '', '', '', ''),
(22, 'Las transiciones de una actividad a otra son fluidas y eficaces.', 1, 13, 3, '', '', '', ''),
(23, 'El profesor redirige la conducta inapropiada enfocándose en aspectos positivos y haciendo indicaciones sutiles.', 1, 13, 3, '', '', '', ''),
(24, 'Los planificadores, planes de clase, evaluaciones y fichas de trabajo son elaborados respetando el desarrollo del pensamiento crítico, la construcción del aprendizaje, la transdisciplinariedad, la mentalidad internacional y las necesidades de los alumnos.', 1, 13, 4, '', '', '', ''),
(25, 'El profesor participa activamente en las reuniones de planificación y reflexiona sobre sus estrategias de enseñanza haciendo los ajustes necesarios. ', 1, 13, 4, '', '', '', ''),
(26, 'El profesor participa activamente en las reuniones de planificación del grado y con los profesores de áreas especiales. (Equipo educador) ', 1, 13, 4, '', '', '', ''),
(27, 'Recoge los saberes previos utilizando diferentes estrategias y los confrontan con información nueva. (Debe ser evidenciable)', 1, 7, 1, '', '', '', ''),
(28, 'Los alumnos conocen el por qué y para qué son importantes los conocimientos que están desarrollando.', 1, 7, 1, '', '', '', ''),
(29, 'Promueve espacios de diálogo, discusión y/o debate entre los alumnos para que expresen sus ideas, opiniones, formulen preguntas o consultas, expongan y presenten nuevas ideas, planteamientos, hipótesis y/o conclusiones como parte de la construcción de su ', 1, 7, 1, '', '', '', ''),
(30, 'Se evidencian enfoques creativos y constructivistas de enseñanza con estrategias variadas y motivadoras basadas en el juego.', 1, 7, 1, '', '', '', ''),
(31, 'Las actividades propuestas por el profesor son diferenciadas de acuerdo a las necesidades de los alumnos y teniendo en cuenta los estilos y ritmos de aprendizaje. ', 1, 7, 1, '', '', '', ''),
(32, 'Se hace uso de una variedad de materiales para interesar a los alumnos y lograr que participen en las actividades propuestas.', 1, 7, 1, '', '', '', ''),
(33, 'El profesor demuestra dominio del contenido, haciendo uso frecuente de un vocabulario apropiado al área y evidencia una estructura ordenada, lógica y clara en el desarrollo de la sesión.', 1, 7, 1, '', '', '', ''),
(34, 'Los alumnos expresan respuestas y/o resultados en un ambiente de confianza, recibiendo una reflexión por parte del profesor.', 1, 7, 1, '', '', '', ''),
(35, 'Se planifica actividades y/o experiencias significativas, las dosifica, las explica y las revisa haciendo una valoración cualitativa.', 1, 7, 1, '', '', '', ''),
(36, 'Los alumnos son motivados a cumplir con los acuerdos esenciales, atributos, actitudes y habilidades en todo momento.', 1, 7, 1, '', '', '', ''),
(37, 'El profesor pone en práctica los lineamientos específicos, consignados para su School, de acuerdo a la Política de Probidad Académica.', 1, 7, 1, '', '', '', ''),
(38, 'El profesor cita y refiere todos sus documentos según se establece en la Política de Probidad Académica.', 1, 7, 1, '', '', '', ''),
(39, 'El profesor promueve una ambientación de clase ordenada, que refleja la participación activa y el desarrollo del pensamiento de los alumnos, evidenciando el desarrollo de la unidad.', 1, 7, 1, '', '', '', ''),
(40, 'Ejecuta las estrategias de aprendizaje según lo planificado.', 1, 7, 1, '', '', '', ''),
(41, 'El profesor se preocupa en planificar y ejecutar visitas de estudio, valiéndose de las oportunidades que le brinda la comunidad, el colegio y los miembros de nuestra comunidad educativa, permitiendo ampliar el conocimiento de los alumnos.', 1, 7, 1, '', '', '', ''),
(42, 'Los alumnos demuestran conocimiento y comprensión sobre el conocimiento que están desarrollando.', 1, 7, 2, '', '', '', ''),
(43, 'El profesor registra los cuestionamientos y conocimientos resaltantes de los alumnos para organizar el desarrollo de su unidad.', 1, 7, 2, '', '', '', ''),
(44, 'El profesor evalúa oportunamente el aprendizaje de sus alumnos para asegurarse si comprendieron lo trabajado,  y/o reprogramar o reforzar si fuera necesario.												', 1, 7, 2, '', '', '', ''),
(45, 'Se evidencia el uso de diversas herramientas de evaluación, las cuales permiten que los alumnos conozcan los criterios sobre los cuales serán valorados, tanto en sus evaluaciones formativas como sumativas.												', 1, 7, 2, '', '', '', ''),
(46, 'Se evidencia el uso de diversas estrategias para la evaluación formativa y sumativa, considerando actividades diferenciadas y su respectivo feedback .												', 1, 7, 2, '', '', '', ''),
(47, 'Se evidencia oportunidades de retroalimentación/reflexión, por parte del profesor en las evaluaciones formativas y sumativas. (Portafolio Virtual)												', 1, 7, 2, '', '', '', ''),
(48, 'Genera un ambiente positivo, de respeto y confianza. Corrige asertivamente a los alumnos y favorece el aprendizaje. ', 1, 7, 3, '', '', '', ''),
(49, 'Se evidencian muchas demostraciones de emociones positivas entre el maestro y los alumnos.', 1, 7, 3, '', '', '', ''),
(50, 'El profesor nota e interviene cuando un alumno necesita apoyo adicional, ayuda o atención.', 1, 7, 3, '', '', '', ''),
(51, 'El profesor usa estrategias proactivas y orienta la conducta de los alumnos de manera eficaz antes que ocurran problemas.', 1, 7, 3, '', '', '', ''),
(52, 'Las transiciones de una actividad a otra son fluidas y eficaces.', 1, 7, 3, '', '', '', ''),
(53, 'El profesor redirige la conducta inapropiada enfocándose en aspectos positivos y haciendo indicaciones sutiles.', 1, 7, 3, '', '', '', ''),
(54, 'Los planificadores, planes de clase, evaluaciones y fichas de trabajo son elaborados respetando el desarrollo del pensamiento crítico, la construcción del aprendizaje, la transdisciplinariedad, la mentalidad internacional y las necesidades de los alumnos.', 1, 7, 4, '', '', '', ''),
(55, 'Su registro auxiliar considera los desempeños de evaluación planificados, se encuentra actualizado y lo presenta a coordinación en las fechas indicadas.', 1, 7, 4, '', '', '', ''),
(56, 'Implementa  y actualiza oportunamente el aula virtual para cada unidad considerando actividades que desarrollen el pensamiento crítico y habilidades.', 1, 7, 4, '', '', '', ''),
(57, 'El profesor participa activamente en las reuniones de planificación y reflexiona sobre sus estrategias de enseñanza haciendo los ajustes necesarios. ', 1, 7, 4, '', '', '', ''),
(58, 'El profesor participa activamente en las reuniones de planificación del grado y con los profesores de áreas especiales. (Equipo educador) ', 1, 7, 4, '', '', '', '');

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
(1, 'Gerencias', 'mantenimiento/gerencias'),
(2, 'Áreas', 'mantenimiento/areas'),
(3, 'Usuarios', 'administrador/usuarios\r\n'),
(4, 'Permisos ', 'administrador/permisos\r\n'),
(5, 'Valoración Administración', 'valoracion/valoracion_adm'),
(6, 'Competencias', 'mantenimiento/competencias'),
(7, 'Indicadores', 'mantenimiento/indicadores'),
(8, 'Parentesco', 'administrador/parentesco\r\n'),
(9, 'Periodos', 'administrador/periodos\r\n'),
(10, 'Mi valoración ', 'valoracion/mi_valoracion_adm'),
(11, 'Anecdotario', 'valoracion/anecdotario_adm'),
(12, 'Valoración Docentes', 'valoracion/valoracion_docentes'),
(13, 'Mi valoración Docentes', 'valoracion/mi_valoracion_docentes');

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
(63, 'G', 'G', 'G', 'G', 'G', 'G', 'G', 'G', 'G', 'G', 'G', 'G', 'G', 'G', 'G', 'asd', 83, 'aceptado', '2020-09-03', 'Andrea Alejandra Zegarra Lozada', '03-09-2020 15:10:41', 'Fernando Alberto Salas Heresi');

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
(248, 87, 88, 1, 1, 1),
(249, 89, 88, 1, 1, 1),
(250, 89, 87, 1, 0, 1),
(251, 88, 90, 1, 1, 1);

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
(2, '2020', 1),
(3, '2021', 1),
(4, '2022', 1),
(5, '2023', 1),
(6, '2024', 1),
(7, '2025', 1),
(8, '2026', 1),
(9, '2027', 1),
(10, '2028', 1),
(11, '2029', 1),
(12, '2030', 1);

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
(1, 1, 1, 1, 1, 1, 1, '', '', '', ''),
(2, 1, 1, 1, 1, 2, 1, '', '', '', ''),
(3, 1, 1, 1, 1, 3, 1, '', '', '', ''),
(4, 1, 1, 1, 1, 4, 1, '', '', '', ''),
(5, 1, 1, 1, 1, 5, 1, '', '', '', ''),
(6, 1, 1, 1, 1, 5, 2, '', '', '', ''),
(7, 1, 1, 1, 1, 5, 3, '', '', '', ''),
(8, 1, 1, 1, 1, 5, 4, '', '', '', ''),
(9, 1, 1, 1, 1, 5, 5, '', '', '', ''),
(10, 1, 1, 1, 1, 5, 6, '', '', '', ''),
(12, 1, 1, 1, 1, 1, 3, '', '', '', ''),
(13, 1, 1, 1, 1, 6, 1, '', '', '', ''),
(14, 1, 1, 1, 1, 7, 1, '', '', '', ''),
(15, 1, 1, 1, 1, 8, 1, '', '', '', ''),
(17, 1, 1, 1, 1, 9, 1, '', '', '', ''),
(19, 1, 1, 1, 1, 10, 1, '', '', '', ''),
(20, 1, 1, 1, 1, 10, 3, '', '', '', ''),
(21, 1, 1, 1, 1, 10, 4, '', '', '', ''),
(22, 1, 1, 1, 1, 10, 2, '', '', '', ''),
(23, 1, 1, 1, 1, 11, 1, '', '', '', ''),
(24, 1, 1, 1, 1, 11, 3, '', '', '', ''),
(25, 1, 1, 1, 1, 11, 4, '', '', '', ''),
(26, 1, 1, 1, 1, 11, 2, '', '', '', ''),
(27, 1, 1, 1, 1, 5, 8, '', '', '', ''),
(28, 1, 1, 1, 1, 10, 8, '', '', '', ''),
(29, 1, 1, 1, 1, 12, 8, '', '', '', ''),
(30, 1, 1, 1, 1, 13, 8, '', '', '', ''),
(31, 1, 1, 1, 1, 5, 9, '', '', '', ''),
(32, 1, 1, 1, 1, 10, 9, '', '', '', ''),
(33, 1, 1, 1, 1, 12, 9, '', '', '', ''),
(34, 1, 1, 1, 1, 13, 9, '', '', '', ''),
(35, 1, 1, 1, 1, 5, 10, '', '', '', ''),
(36, 1, 1, 1, 1, 10, 10, '', '', '', ''),
(37, 1, 1, 1, 1, 12, 10, '', '', '', ''),
(38, 1, 1, 1, 1, 13, 10, '', '', '', ''),
(39, 1, 1, 1, 1, 5, 11, '', '', '', ''),
(40, 1, 1, 1, 1, 10, 11, '', '', '', ''),
(41, 1, 1, 1, 1, 12, 11, '', '', '', ''),
(42, 1, 1, 1, 1, 13, 11, '', '', '', ''),
(43, 1, 1, 1, 1, 5, 12, '', '', '', ''),
(44, 1, 1, 1, 1, 10, 12, '', '', '', ''),
(45, 1, 1, 1, 1, 12, 12, '', '', '', ''),
(46, 1, 1, 1, 1, 13, 12, '', '', '', ''),
(47, 1, 1, 1, 1, 5, 13, '', '', '', ''),
(48, 1, 1, 1, 1, 10, 13, '', '', '', ''),
(49, 1, 1, 1, 1, 12, 13, '', '', '', ''),
(50, 1, 1, 1, 1, 13, 13, '', '', '', ''),
(51, 1, 1, 1, 1, 5, 14, '', '', '', ''),
(52, 1, 1, 1, 1, 10, 14, '', '', '', ''),
(53, 1, 1, 1, 1, 12, 14, '', '', '', ''),
(54, 1, 1, 1, 1, 13, 14, '', '', '', ''),
(55, 1, 1, 1, 1, 5, 7, '', '', '', ''),
(56, 1, 1, 1, 1, 10, 7, '', '', '', ''),
(57, 1, 1, 1, 1, 12, 7, '', '', '', ''),
(58, 1, 1, 1, 1, 13, 7, '', '', '', ''),
(59, 1, 1, 1, 1, 11, 8, '', '', '', ''),
(60, 1, 1, 1, 1, 11, 9, '', '', '', ''),
(61, 1, 1, 1, 1, 11, 10, '', '', '', ''),
(62, 1, 1, 1, 1, 11, 11, '', '', '', ''),
(63, 1, 1, 1, 1, 11, 12, '', '', '', ''),
(64, 1, 1, 1, 1, 11, 13, '', '', '', ''),
(65, 1, 1, 1, 1, 11, 14, '', '', '', ''),
(66, 1, 1, 1, 1, 11, 7, '', '', '', '');

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
(1, 'Administrador sistema', NULL, 2, 1),
(2, 'Jefe de área', NULL, 2, 1),
(3, 'Responsable área', NULL, 2, 1),
(4, 'Asistente área', NULL, 2, 1),
(5, 'Auxiliar área', NULL, 2, 1),
(6, 'Personal Mantenimiento', NULL, 2, 1),
(7, 'Directora ', NULL, 1, 1),
(8, 'Head of School PS', NULL, 1, 1),
(9, 'Psicólog(a) PS', NULL, 1, 1),
(10, 'Cordinador(a) PS', NULL, 1, 1),
(11, 'Profesor(a) Arte PS', NULL, 1, 1),
(12, 'Profesor(a) Español PS', NULL, 1, 1),
(13, 'Profesor(a) Asistente PS', NULL, 1, 1),
(14, 'Profesor(a) Inglés PS', NULL, 1, 1);

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
(1, 'Entrevista 2', 1),
(2, 'Entrevista 3', 1);

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
(1, 'ESTRATEGIAS DE APRENDIZAJE - ENSEÑANZA', 1, '', '', '', ''),
(2, 'PROCESO DE EVALUACIÓN', 1, '', '', '', ''),
(3, 'MANEJO DE GRUPO/CLIMA POSITIVO', 1, '', '', '', ''),
(4, 'DOCUMENTOS Y AULA VIRTUAL', 1, '', '', '', '');

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
(1, 'Valoración 1', 1, '', '', '', ''),
(2, 'Valoración 2', 1, '', '', '', ''),
(3, 'Valoración por Objetivos', 1, '', '', '', ''),
(4, 'Valoración ficha pedagógica', 1, '', '', '', '');

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
(11, 'Administrador', 'Sistemas', 'admin@prescott.edu.pe', 'cb4154596b441ebe8deb40ccaceaf9befc55b0df', 1, 11, 1, NULL, '', NULL, ''),
(75, 'Fernando Alberto', 'Salas Heresi', 'fsalas@prescott.edu.pe', '2aeeb35329d3d35b572a02230bc51973a0dbe0ec', 2, 11, 1, NULL, '', NULL, ''),
(76, 'Fernando Eduardo', 'Azálgara Cuadros', 'fazalgara@prescott.edu.pe', '20230bea9daf3d1a52cfacfbeb542529a0eb35c2', 3, 4, 1, NULL, '', NULL, ''),
(77, 'Susana María Josefa', 'Bustamante de Soto', 'sbustamante@prescott.edu.pe', '3a95719f625632b9a78ccc791fce39cce3f6a208', 3, 6, 1, NULL, '', NULL, ''),
(78, 'Javier Alonso', 'Butrón Valencia', 'jbutron@prescott.edu.pe', 'cb4154596b441ebe8deb40ccaceaf9befc55b0df', 3, 3, 1, NULL, '', NULL, ''),
(79, 'Paola Erika', 'Cárdenas Valdivia de Prevate', 'pcardenas@prescott.edu.pe', 'cb4154596b441ebe8deb40ccaceaf9befc55b0df', 3, 5, 1, NULL, '', NULL, ''),
(80, 'Vania', 'López Berrios', 'vlopez@prescott.edu.pe', 'bee367050fdb6496bc465f9002c2e4d946166069', 3, 6, 1, NULL, '', NULL, ''),
(81, 'Moscoso Aramayo', 'Ana Paola', 'amoscoso@prescott.edu.pe', '0e06bb6fe622c3cec7bfa6b3c8051f9d70907224', 3, 1, 1, NULL, '', NULL, ''),
(82, 'Marleni', 'Valencia Portugal', 'mvalencia@prescott.edu.pe', '855f49136947d2893b97e9ab609b51d6681a6cc9', 3, 12, 1, NULL, '', NULL, ''),
(83, 'Andrea Alejandra', 'Zegarra Lozada', 'azegarra@prescott.edu.pe', '6b9e0cfa0d1155fa80b0bd10eeeaaa64a81b87df', 3, 2, 1, NULL, '', NULL, ''),
(84, 'Katherine Maryori', 'Benites Cucho', 'kbenites@prescott.edu.pe', 'da6b6259ceb0c7f47a0a3db80de7069f91bf36a8', 4, 2, 1, NULL, '', NULL, ''),
(85, 'Laura Elizabeth', 'Portugal Passiuri', 'lportugal@prescott.edu.pe', 'ba9c52f7a0b74c9a95f530ad62a09fdf6443596a', 4, 2, 1, NULL, '', NULL, ''),
(86, 'Haydee Liliana', 'Ramos Castillo', 'hramos@prescott.edu.pe', 'fcd68095083ca5b3ac2affa9e283676224be5582', 4, 2, 1, NULL, '', NULL, ''),
(87, 'Andrea Alejandra\r\n', 'Alpaca Nina', 'aalpaca@prescott.edu.pe', 'cb4154596b441ebe8deb40ccaceaf9befc55b0df', 13, 7, 1, NULL, '', NULL, ''),
(88, 'Arlette Katherine', 'Rondón Carreón', 'arondo@prescott.edu.pe', 'cb4154596b441ebe8deb40ccaceaf9befc55b0df', 8, 7, 1, NULL, '', NULL, ''),
(89, 'Claudia\r\n', 'Arrarte Cornejo', 'carrarte@prescott.edu.pe', 'cb4154596b441ebe8deb40ccaceaf9befc55b0df', 10, 7, 1, NULL, '', NULL, ''),
(90, 'Carmén ', 'García', 'cgarcia@prescott.edu.pe', 'cb4154596b441ebe8deb40ccaceaf9befc55b0df', 7, 15, 1, NULL, '', NULL, '');

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
(106, '19', 1, 83, 1, '2020-09-03', 'Fernando Alberto Salas Heresi', '', ''),
(107, '18', 1, 83, 2, '2020-09-03', 'Fernando Alberto Salas Heresi', '', ''),
(108, '20', 1, 83, 3, '2020-09-03', 'Fernando Alberto Salas Heresi', '', ''),
(109, '12.5', 1, 87, 1, '2020-09-05', 'Arlette Katherine Rondón Carreón', '', '');

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
  `bimestre_id` int(11) NOT NULL,
  `ficha_pedagogica_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `create_by` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `visitas`
--

INSERT INTO `visitas` (`id`, `puntaje`, `describo_eval`, `valoro_eval`, `pregunto_eval`, `sugiero_eval`, `describo_colab`, `valoro_colab`, `pregunto_colab`, `sugiero_colab`, `bimestre_id`, `ficha_pedagogica_id`, `create_at`, `create_by`) VALUES
(106, 1, '1', '1', '1', '1', '', '', '', '', 1, 5, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(107, 1, '1', '1', '1', '1', '', '', '', '', 1, 5, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(108, 1, '1', '1', '1', '1', '', '', '', '', 1, 5, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(109, 1, '2', '2', '2', '2', '', '', '', '', 2, 5, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(110, 1, '2', '2', '2', '2', '', '', '', '', 2, 5, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(111, 1, '2', '2', '2', '2', '', '', '', '', 2, 5, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(112, 1, '2', '2', '2', '2', '', '', '', '', 2, 5, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(113, 1, '2', '2', '2', '2', '', '', '', '', 2, 5, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(114, 1, '2', '2', '2', '2', '', '', '', '', 2, 5, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(115, 1, '3', '3', '3', '3', '', '', '', '', 3, 5, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(116, 1, '3', '3', '3', '3', '', '', '', '', 3, 5, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(117, 1, '1', '1', '1', '1', '', '', '', '', 1, 5, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón'),
(118, 1, '3', '3', '3', '3', '', '', '', '', 3, 5, '2020-09-21 05:00:00', 'Arlette Katherine Rondón Carreón');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1663;

--
-- AUTO_INCREMENT de la tabla `entrevistas`
--
ALTER TABLE `entrevistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `fichas_pedagogicas`
--
ALTER TABLE `fichas_pedagogicas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT de la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT de la tabla `visitas`
--
ALTER TABLE `visitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

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
