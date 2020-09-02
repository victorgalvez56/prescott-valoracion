-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-09-2020 a las 17:17:53
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
(13, 'Buen trabajo.', 1, 84, '2020-08-30', 'Andrea Alejandra Zegarra Lozada'),
(14, 'Se porto mal \r\n', 1, 86, '2020-08-30', 'Andrea Alejandra Zegarra Lozada'),
(15, 'Muy bien ', 1, 85, '2020-08-30', 'Andrea Alejandra Zegarra Lozada'),
(16, 'MUY BIEN', 1, 76, '2020-08-30', 'Fernando Alberto Salas Heresi'),
(17, 'No cumplió', 1, 83, '2020-08-30', 'Fernando Alberto Salas Heresi'),
(18, 'Realizó bien su trabajo', 1, 83, '2020-09-02', 'Fernando Alberto Salas Heresi'),
(19, 'assssssssssssssssssssssssssssssssssssssassssssssssssssssssssssssssssssssssssssassssssssssssssssssssssssssssssssssssssassssssssssssssssssssssssssssssssssssssassssssssssssssssssssssssssssssssssssssassssssssssssssssssssssssssssssssssssssasssssssssssssss', 1, 83, '2020-09-02', 'Fernando Alberto Salas Heresi'),
(20, 'asddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 1, 83, '2020-09-02', 'Fernando Alberto Salas Heresi'),
(21, 'asdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddasssssssssssssss', 1, 83, '2020-09-02', 'Fernando Alberto Salas Heresi'),
(22, 'asdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddasssssssssssssssasdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 1, 83, '2020-09-02', 'Fernando Alberto Salas Heresi'),
(23, 'No cumplió', 1, 83, '2020-09-02', 'Fernando Alberto Salas Heresi');

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
(4, 'Seguridad y Salud Ocupacional', '-', 1, 2, '15-08-2020 23:40:09', 'Administrador Sistema', '17-08-2020 10:59:15', 'Administrador Sistema'),
(5, 'Logística, Infraestructura y Mantenimiento', '-', 1, 2, '15-08-2020 23:40:09', 'Administrador Sistema', '17-08-2020 11:01:26', 'Administrador Sistema'),
(6, 'Promoción y comunicación', '', 1, 2, '15-08-2020 23:40:09', 'Administrador Sistema', '', ''),
(7, 'PS', '', 1, 1, '15-08-2020 23:40:09', 'Administrador Sistema', '', ''),
(8, 'ES', 'x', 1, 1, '15-08-2020 23:40:09', 'Administrador Sistema', '', ''),
(9, 'MS', '', 1, 1, '15-08-2020 23:40:09', 'Administrador Sistema', '', ''),
(10, 'HS', '', 1, 1, '15-08-2020 23:40:09', 'Administrador Sistema', '', ''),
(11, 'No necesita área NO DOCENTES', '', 0, 2, '15-08-2020 23:40:09', 'Administrador Sistema', '', ''),
(12, 'No necesita área DOCENTES', '', 0, 1, '15-08-2020 23:40:09', 'Administrador Sistema', '', ''),
(15, 'RRPP', 'RRPP', 1, 2, '15-08-2020 23:40:09', 'Administrador Sistema', '', ''),
(16, 'Programa de Desarrollo Institucional (PDI)', 'PDI', 1, 2, '15-08-2020 23:44:07', 'Administrador Sistema', '17-08-2020 11:01:02', 'Administrador Sistema');

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
(1, 'COMUNICACIÓN DE PROFESORES', 1, '', '', '02-07-2020 18:44:35', 'Administrador Sistema'),
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
(5, '2020-01-01', '2020-08-31', 2, 1),
(6, '2020-01-01', '2020-08-31', 2, 2),
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
(1372, 1, 1, 96, 1, 18, 0, 0, 0),
(1373, 1, 1, 96, 2, 18, 0, 0, 0),
(1374, 1, 1, 96, 3, 18, 0, 0, 0),
(1375, 1, 1, 96, 4, 18, 0, 0, 0),
(1376, 1, 1, 96, 5, 18, 0, 0, 0),
(1377, 3, 1, 96, 6, 18, 0, 0, 0),
(1378, 3, 1, 96, 7, 18, 0, 0, 0),
(1379, 3, 1, 96, 8, 18, 0, 0, 0),
(1380, 3, 1, 96, 9, 18, 0, 0, 0),
(1381, 3, 1, 96, 10, 18, 0, 0, 0),
(1382, 3, 1, 96, 16, 18, 0, 0, 0),
(1383, 3, 1, 96, 17, 18, 0, 0, 0),
(1384, 3, 1, 96, 18, 18, 0, 0, 0),
(1385, 3, 1, 96, 19, 18, 0, 0, 0),
(1386, 3, 1, 96, 20, 18, 0, 0, 0),
(1387, 2, 1, 96, 11, 18, 0, 0, 0),
(1388, 2, 1, 96, 12, 18, 0, 0, 0),
(1389, 2, 1, 96, 13, 18, 0, 0, 0),
(1390, 2, 1, 96, 14, 18, 0, 0, 0),
(1391, 2, 1, 96, 15, 18, 0, 0, 0),
(1392, 1, 1, 99, 1, 30, 0, 0, 0),
(1393, 1, 1, 99, 2, 30, 0, 0, 0),
(1394, 1, 1, 99, 3, 30, 0, 0, 0),
(1395, 1, 1, 99, 4, 30, 0, 0, 0),
(1396, 1, 1, 99, 5, 30, 0, 0, 0),
(1397, 3, 1, 99, 6, 30, 0, 0, 0),
(1398, 3, 1, 99, 7, 30, 0, 0, 0),
(1399, 3, 1, 99, 8, 30, 0, 0, 0),
(1400, 3, 1, 99, 9, 30, 0, 0, 0),
(1401, 3, 1, 99, 10, 30, 0, 0, 0),
(1402, 4, 1, 99, 16, 30, 0, 0, 0),
(1403, 4, 1, 99, 17, 30, 0, 0, 0),
(1404, 4, 1, 99, 18, 30, 0, 0, 0),
(1405, 4, 1, 99, 19, 30, 0, 0, 0),
(1406, 4, 1, 99, 20, 30, 0, 0, 0),
(1407, 2, 1, 99, 11, 30, 0, 0, 0),
(1408, 2, 1, 99, 12, 30, 0, 0, 0),
(1409, 2, 1, 99, 13, 30, 0, 0, 0),
(1410, 2, 1, 99, 14, 30, 0, 0, 0),
(1411, 2, 1, 99, 15, 30, 0, 0, 0),
(1412, 1, 1, 100, 1, 31, 0, 0, 0),
(1413, 1, 1, 100, 2, 31, 0, 0, 0),
(1414, 1, 1, 100, 3, 31, 0, 0, 0),
(1415, 1, 1, 100, 4, 31, 0, 0, 0),
(1416, 1, 1, 100, 5, 31, 0, 0, 0),
(1417, 3, 1, 100, 6, 31, 0, 0, 0),
(1418, 3, 1, 100, 7, 31, 0, 0, 0),
(1419, 3, 1, 100, 8, 31, 0, 0, 0),
(1420, 3, 1, 100, 9, 31, 0, 0, 0),
(1421, 3, 1, 100, 10, 31, 0, 0, 0),
(1422, 4, 1, 100, 16, 31, 0, 0, 0),
(1423, 4, 1, 100, 17, 31, 0, 0, 0),
(1424, 4, 1, 100, 18, 31, 0, 0, 0),
(1425, 4, 1, 100, 19, 31, 0, 0, 0),
(1426, 4, 1, 100, 20, 31, 0, 0, 0),
(1427, 2, 1, 100, 11, 31, 0, 0, 0),
(1428, 2, 1, 100, 12, 31, 0, 0, 0),
(1429, 2, 1, 100, 13, 31, 0, 0, 0),
(1430, 2, 1, 100, 14, 31, 0, 0, 0),
(1431, 2, 1, 100, 15, 31, 0, 0, 0);

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
(17, 'Mantiene una actitud positiva frente a los cambios.', 1, 4, '', '', '', '0'),
(18, 'Promueve la formación continua en sus equipos de trabajo.', 1, 4, '', '', '', '0'),
(19, 'Se mantiene animado ante las dificultades que conllevan el proceso de aprendizaje.', 1, 4, '', '', '', '0'),
(20, 'Comparte el conocimiento aprendido y lo adapta a través de los planes de acción.', 1, 4, '', '', '', '0');

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
(11, 'Anecdotario', 'valoracion/anecdotario_adm');

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
(57, 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', '', 83, 'aceptado', '2020-08-24', 'Andrea Alejandra Zegarra Lozada', '24-08-2020 21:59:08', 'Fernando Alberto Salas Heresi'),
(58, 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', '', 83, 'espera', '2020-08-24', 'Andrea Alejandra Zegarra Lozada', '', '');

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
(247, 84, 83, 1, 0, 1);

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
(26, 1, 1, 1, 1, 11, 2, '', '', '', '');

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
(8, 'Profesor', NULL, 1, 1);

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
(78, 'Javier Alonso', 'Butrón Valencia', 'jbutron@prescott.edu.pe', 'a32eebfc07ef1783797de4816159c8ab445dd67e', 3, 3, 1, NULL, '', NULL, ''),
(79, 'Paola Erika', 'Cárdenas Valdivia de Prevate', 'pcardenas@prescott.edu.pe', '1b2162b408b0337593eb8aacaa2115e22de472cc', 3, 5, 1, NULL, '', NULL, ''),
(80, 'Vania ', 'López Berrios', 'vlopez@prescott.edu.pe', 'bee367050fdb6496bc465f9002c2e4d946166069', 3, 6, 1, NULL, '', NULL, ''),
(81, 'Moscoso Aramayo', 'Ana Paola', 'amoscoso@prescott.edu.pe', '0e06bb6fe622c3cec7bfa6b3c8051f9d70907224', 3, 1, 1, NULL, '', NULL, ''),
(82, 'Marleni', 'Valencia Portugal', 'mvalencia@prescott.edu.pe', '855f49136947d2893b97e9ab609b51d6681a6cc9', 3, 15, 1, NULL, '', NULL, ''),
(83, 'Andrea Alejandra', 'Zegarra Lozada', 'azegarra@prescott.edu.pe', '6b9e0cfa0d1155fa80b0bd10eeeaaa64a81b87df', 3, 2, 1, NULL, '', NULL, ''),
(84, 'Katherine Maryori', 'Benites Cucho', 'kbenites@prescott.edu.pe', 'da6b6259ceb0c7f47a0a3db80de7069f91bf36a8', 4, 2, 1, NULL, '', NULL, ''),
(85, 'Laura Elizabeth', 'Portugal Passiuri', 'lportugal@prescott.edu.pe', 'ba9c52f7a0b74c9a95f530ad62a09fdf6443596a', 4, 2, 1, NULL, '', NULL, ''),
(86, 'Haydee Liliana', 'Ramos Castillo,', 'hramos@prescott.edu.pe', 'fcd68095083ca5b3ac2affa9e283676224be5582', 4, 2, 1, NULL, '', NULL, '');

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
(96, '11.25', 1, 85, 1, '2020-08-18', 'Andrea Alejandra Zegarra Lozada', '', ''),
(97, '20', 1, 83, 3, '2020-08-18', 'Fernando Alberto Salas Heresi', '', ''),
(98, '11.25', 1, 83, 1, '2020-08-18', 'Andrea Alejandra Zegarra Lozada', '', ''),
(99, '12.5', 1, 81, 1, '2020-08-30', 'Fernando Alberto Salas Heresi', '', ''),
(100, '13', 1, 78, 2, '2020-08-31', 'Fernando Alberto Salas Heresi', '', '');

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
-- Indices de la tabla `entrevistas`
--
ALTER TABLE `entrevistas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_colaborador_usuario` (`colaborador_id`),
  ADD KEY `fk_evaluador_usuario` (`evaluador_id`),
  ADD KEY `fk_tipo_entrevista` (`tipo_entrevista_id`);

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anecdotarios`
--
ALTER TABLE `anecdotarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1432;

--
-- AUTO_INCREMENT de la tabla `entrevistas`
--
ALTER TABLE `entrevistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

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
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `objetivos`
--
ALTER TABLE `objetivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `parentesco`
--
ALTER TABLE `parentesco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT de la tabla `periodos`
--
ALTER TABLE `periodos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipos_entrevista`
--
ALTER TABLE `tipos_entrevista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipos_valoracion`
--
ALTER TABLE `tipos_valoracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT de la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

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
-- Filtros para la tabla `entrevistas`
--
ALTER TABLE `entrevistas`
  ADD CONSTRAINT `fk_colaborador_usuario` FOREIGN KEY (`colaborador_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `fk_evaluador_usuario` FOREIGN KEY (`evaluador_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `fk_tipo_entrevista` FOREIGN KEY (`tipo_entrevista_id`) REFERENCES `tipos_entrevista` (`id`);

--
-- Filtros para la tabla `indicadores`
--
ALTER TABLE `indicadores`
  ADD CONSTRAINT `fk_competencias_indicador` FOREIGN KEY (`competencia_id`) REFERENCES `competencias` (`id`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
