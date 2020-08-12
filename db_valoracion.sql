-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-08-2020 a las 18:19:03
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
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(35) NOT NULL,
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
(1, 'Finanzas', '', 1, 2, '', '', '', ''),
(2, 'Desarrollo Humano', '', 1, 2, '', '', '', ''),
(3, 'Sistemas', '', 1, 2, '', '', '', ''),
(4, 'Seguridad salud', '', 1, 2, '', '', '', ''),
(5, 'Logística y mantenimiento', '', 1, 2, '', '', '', ''),
(6, 'Promoción y comunicación', '', 1, 2, '', '', '', ''),
(7, 'PS', '', 1, 1, '', '', '', ''),
(8, 'ES', 'x', 1, 1, '', '', '05-06-2020 11:52:45', 'Administrador Sistema'),
(9, 'MS', '', 1, 1, '', '', '', ''),
(10, 'HS', '', 1, 1, '', '', '', ''),
(11, 'No necesita área NO DOCENTES', '', 0, 2, '', '', '', ''),
(12, 'No necesita área DOCENTES', '', 0, 1, '', '', '', ''),
(13, 'Prueba', 'Prueba', 1, 2, '05-06-2020 13:32:11', 'Administrador Sistema', '', '');

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
(4, '2020-07-01', '2020-07-31', 3, 4),
(5, '2020-01-16', '2020-12-12', 2, 1),
(6, '2020-07-01', '2020-12-12', 2, 2),
(7, '2020-07-01', '2020-07-22', 2, 3),
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
(857, 1, 1, 63, 1, 11, 0, 0, 0),
(858, 1, 1, 63, 2, 11, 0, 0, 0),
(859, 1, 1, 63, 3, 11, 0, 0, 0),
(860, 1, 1, 63, 4, 11, 0, 0, 0),
(861, 1, 1, 63, 5, 11, 0, 0, 0),
(862, 4, 1, 63, 6, 11, 0, 0, 0),
(863, 4, 1, 63, 7, 11, 0, 0, 0),
(864, 4, 1, 63, 8, 11, 0, 0, 0),
(865, 4, 1, 63, 9, 11, 0, 0, 0),
(866, 4, 1, 63, 10, 11, 0, 0, 0),
(867, 3, 1, 63, 11, 11, 0, 0, 0),
(868, 3, 1, 63, 12, 11, 0, 0, 0),
(869, 3, 1, 63, 13, 11, 0, 0, 0),
(870, 3, 1, 63, 14, 11, 0, 0, 0),
(871, 3, 1, 63, 15, 11, 0, 0, 0),
(872, 2, 1, 63, 16, 11, 0, 0, 0),
(873, 2, 1, 63, 17, 11, 0, 0, 0),
(874, 2, 1, 63, 18, 11, 0, 0, 0),
(875, 2, 1, 63, 19, 11, 0, 0, 0),
(876, 2, 1, 63, 20, 11, 0, 0, 0),
(877, 1, 1, 64, 1, 11, 0, 0, 0),
(878, 2, 1, 64, 2, 11, 0, 0, 0),
(879, 2, 1, 64, 3, 11, 0, 0, 0),
(880, 2, 1, 64, 4, 11, 0, 0, 0),
(881, 2, 1, 64, 5, 11, 0, 0, 0),
(882, 3, 1, 64, 6, 11, 0, 0, 0),
(883, 3, 1, 64, 7, 11, 0, 0, 0),
(884, 3, 1, 64, 8, 11, 0, 0, 0),
(885, 3, 1, 64, 9, 11, 0, 0, 0),
(886, 3, 1, 64, 10, 11, 0, 0, 0),
(887, 4, 1, 64, 11, 11, 0, 0, 0),
(888, 4, 1, 64, 12, 11, 0, 0, 0),
(889, 4, 1, 64, 13, 11, 0, 0, 0),
(890, 4, 1, 64, 14, 11, 0, 0, 0),
(891, 4, 1, 64, 15, 11, 0, 0, 0),
(892, 2, 1, 64, 16, 11, 0, 0, 0),
(893, 2, 1, 64, 17, 11, 0, 0, 0),
(894, 2, 1, 64, 18, 11, 0, 0, 0),
(895, 3, 1, 64, 19, 11, 0, 0, 0),
(896, 3, 1, 64, 20, 11, 0, 0, 0),
(897, 1, 1, 65, 1, 11, 0, 0, 0),
(898, 1, 1, 65, 2, 11, 0, 0, 0),
(899, 1, 1, 65, 3, 11, 0, 0, 0),
(900, 1, 1, 65, 4, 11, 0, 0, 0),
(901, 1, 1, 65, 5, 11, 0, 0, 0),
(902, 3, 1, 65, 6, 11, 0, 0, 0),
(903, 3, 1, 65, 7, 11, 0, 0, 0),
(904, 3, 1, 65, 8, 11, 0, 0, 0),
(905, 3, 1, 65, 9, 11, 0, 0, 0),
(906, 3, 1, 65, 10, 11, 0, 0, 0),
(907, 3, 1, 65, 11, 11, 0, 0, 0),
(908, 3, 1, 65, 12, 11, 0, 0, 0),
(909, 3, 1, 65, 13, 11, 0, 0, 0),
(910, 3, 1, 65, 14, 11, 0, 0, 0),
(911, 3, 1, 65, 15, 11, 0, 0, 0),
(912, 2, 1, 65, 16, 11, 0, 0, 0),
(913, 2, 1, 65, 17, 11, 0, 0, 0),
(914, 2, 1, 65, 18, 11, 0, 0, 0),
(915, 2, 1, 65, 19, 11, 0, 0, 0),
(916, 2, 1, 65, 20, 11, 0, 0, 0),
(917, 3, 1, 66, 1, 11, 0, 0, 0),
(918, 3, 1, 66, 2, 11, 0, 0, 0),
(919, 3, 1, 66, 3, 11, 0, 0, 0),
(920, 3, 1, 66, 4, 11, 0, 0, 0),
(921, 3, 1, 66, 5, 11, 0, 0, 0),
(922, 3, 1, 66, 6, 11, 0, 0, 0),
(923, 3, 1, 66, 7, 11, 0, 0, 0),
(924, 3, 1, 66, 8, 11, 0, 0, 0),
(925, 3, 1, 66, 9, 11, 0, 0, 0),
(926, 3, 1, 66, 10, 11, 0, 0, 0),
(927, 3, 1, 66, 11, 11, 0, 0, 0),
(928, 3, 1, 66, 12, 11, 0, 0, 0),
(929, 3, 1, 66, 13, 11, 0, 0, 0),
(930, 3, 1, 66, 14, 11, 0, 0, 0),
(931, 3, 1, 66, 15, 11, 0, 0, 0),
(932, 3, 1, 66, 16, 11, 0, 0, 0),
(933, 3, 1, 66, 17, 11, 0, 0, 0),
(934, 3, 1, 66, 18, 11, 0, 0, 0),
(935, 3, 1, 66, 19, 11, 0, 0, 0),
(936, 3, 1, 66, 20, 11, 0, 0, 0),
(937, 2, 1, 67, 1, 11, 0, 0, 0),
(938, 2, 1, 67, 2, 11, 0, 0, 0),
(939, 2, 1, 67, 3, 11, 0, 0, 0),
(940, 2, 1, 67, 4, 11, 0, 0, 0),
(941, 2, 1, 67, 5, 11, 0, 0, 0),
(942, 2, 1, 67, 6, 11, 0, 0, 0),
(943, 2, 1, 67, 7, 11, 0, 0, 0),
(944, 2, 1, 67, 8, 11, 0, 0, 0),
(945, 2, 1, 67, 9, 11, 0, 0, 0),
(946, 2, 1, 67, 10, 11, 0, 0, 0),
(947, 2, 1, 67, 11, 11, 0, 0, 0),
(948, 2, 1, 67, 12, 11, 0, 0, 0),
(949, 2, 1, 67, 13, 11, 0, 0, 0),
(950, 2, 1, 67, 14, 11, 0, 0, 0),
(951, 2, 1, 67, 15, 11, 0, 0, 0),
(952, 2, 1, 67, 16, 11, 0, 0, 0),
(953, 2, 1, 67, 17, 11, 0, 0, 0),
(954, 2, 1, 67, 18, 11, 0, 0, 0),
(955, 2, 1, 67, 19, 11, 0, 0, 0),
(956, 2, 1, 67, 20, 11, 0, 0, 0),
(957, 1, 1, 68, 1, 11, 0, 0, 0),
(958, 1, 1, 68, 2, 11, 0, 0, 0),
(959, 1, 1, 68, 3, 11, 0, 0, 0),
(960, 1, 1, 68, 4, 11, 0, 0, 0),
(961, 1, 1, 68, 5, 11, 0, 0, 0),
(962, 3, 1, 68, 6, 11, 0, 0, 0),
(963, 3, 1, 68, 7, 11, 0, 0, 0),
(964, 3, 1, 68, 8, 11, 0, 0, 0),
(965, 3, 1, 68, 9, 11, 0, 0, 0),
(966, 3, 1, 68, 10, 11, 0, 0, 0),
(967, 4, 1, 68, 11, 11, 0, 0, 0),
(968, 4, 1, 68, 12, 11, 0, 0, 0),
(969, 4, 1, 68, 13, 11, 0, 0, 0),
(970, 4, 1, 68, 14, 11, 0, 0, 0),
(971, 4, 1, 68, 15, 11, 0, 0, 0),
(972, 2, 1, 68, 16, 11, 0, 0, 0),
(973, 2, 1, 68, 17, 11, 0, 0, 0),
(974, 2, 1, 68, 18, 11, 0, 0, 0),
(975, 2, 1, 68, 19, 11, 0, 0, 0),
(976, 2, 1, 68, 20, 11, 0, 0, 0),
(977, 4, 1, 69, 1, 11, 0, 0, 0),
(978, 4, 1, 69, 2, 11, 0, 0, 0),
(979, 4, 1, 69, 3, 11, 0, 0, 0),
(980, 4, 1, 69, 4, 11, 0, 0, 0),
(981, 4, 1, 69, 5, 11, 0, 0, 0),
(982, 2, 1, 69, 6, 11, 0, 0, 0),
(983, 2, 1, 69, 7, 11, 0, 0, 0),
(984, 2, 1, 69, 8, 11, 0, 0, 0),
(985, 2, 1, 69, 9, 11, 0, 0, 0),
(986, 2, 1, 69, 10, 11, 0, 0, 0),
(987, 1, 1, 69, 11, 11, 0, 0, 0),
(988, 1, 1, 69, 12, 11, 0, 0, 0),
(989, 1, 1, 69, 13, 11, 0, 0, 0),
(990, 1, 1, 69, 14, 11, 0, 0, 0),
(991, 1, 1, 69, 15, 11, 0, 0, 0),
(992, 3, 1, 69, 16, 11, 0, 0, 0),
(993, 3, 1, 69, 17, 11, 0, 0, 0),
(994, 3, 1, 69, 18, 11, 0, 0, 0),
(995, 3, 1, 69, 19, 11, 0, 0, 0),
(996, 3, 1, 69, 20, 11, 0, 0, 0);

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
(38, NULL, NULL, NULL, 'G1', 'G2', 'G3', 'F1', 'F2', 'F3', '', '', 73, 11, 1, '1', '2020-08-11', 'laura pedregal', '2020-08-11', 'Administrador Sistema'),
(39, 0, 0, 0, 'F1', 'F2', 'F3', 'G1', 'G2', 'G3', 'assets/img/firmas/firma_laura pedregal_2020.png', 'assets/img/firmas/firma_Administrador Sistema_2020.png', 73, 11, 2, '1', '2020-08-11', 'laura pedregal', '2020-08-11', '');

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
(20, 'Comparte el conocimiento aprendido y lo adapta a través de los planes de acción.', 1, 4, '', '', '', '0'),
(22, 'Indicador de Pruebas', 0, 1, '01-07-2020 11:36:39', 'Administrador Sistema', '01-07-2020 11:37:18', 'Administrador Sistema'),
(23, 'gggg', 0, 1, '01-07-2020 11:49:45', 'Administrador Sistema', '', '');

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
(10, 'Mi valoración ', 'valoracion/mi_valoracion_adm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objetivos`
--

CREATE TABLE `objetivos` (
  `id` int(11) NOT NULL,
  `n_obj_1` varchar(255) NOT NULL,
  `a_obj_1` varchar(255) NOT NULL,
  `p_obj_1` varchar(255) NOT NULL,
  `i_obj_1` varchar(255) NOT NULL,
  `r_obj_1` varchar(255) NOT NULL,
  `n_obj_2` varchar(255) NOT NULL,
  `a_obj_2` varchar(255) NOT NULL,
  `p_obj_2` varchar(255) NOT NULL,
  `i_obj_2` varchar(255) NOT NULL,
  `r_obj_2` varchar(255) NOT NULL,
  `n_obj_3` varchar(255) NOT NULL,
  `a_obj_3` varchar(255) NOT NULL,
  `p_obj_3` varchar(255) NOT NULL,
  `i_obj_3` varchar(255) NOT NULL,
  `r_obj_3` varchar(255) NOT NULL,
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

INSERT INTO `objetivos` (`id`, `n_obj_1`, `a_obj_1`, `p_obj_1`, `i_obj_1`, `r_obj_1`, `n_obj_2`, `a_obj_2`, `p_obj_2`, `i_obj_2`, `r_obj_2`, `n_obj_3`, `a_obj_3`, `p_obj_3`, `i_obj_3`, `r_obj_3`, `usuario_id`, `estado`, `create_at`, `create_by`, `update_at`, `update_by`) VALUES
(24, 'g1', '1', '1', '1', '1', 'g2', '2', '2', '2', '2', 'g3', '3', '3', '3', '3', 73, 'aceptado', '2020-08-11', 'laura pedregal', '11-08-2020 22:49:33', 'Administrador Sistema');

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
(232, 73, 11, 1, 1, 1);

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
(21, 1, 1, 1, 1, 10, 4, '', '', '', '');

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
(11, 'Administrador', 'Sistema', 'admin@prescott.edu.pe', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 11, 1, NULL, '', NULL, ''),
(12, 'Fernando', 'Salas', 'fsalas@prescott.edu.pe', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2, 11, 1, NULL, '', NULL, ''),
(13, 'Javier', 'Butrón', 'jbutron@prescott.edu.pe', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 3, 3, 1, NULL, '', NULL, ''),
(14, 'Saul1', 'Llosa1', 'allosa1@prescott.edu.pe', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 3, 3, 1, NULL, '', NULL, ''),
(15, 'Victor Edison', 'Gálvez Chávez', 'vgalvez@prescott.edu.pe', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 5, 3, 1, NULL, '', NULL, ''),
(70, 'ppddd1111', 'ppddd11111', '1111111ddd@prescott.edu.pe', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 8, 3, 1, NULL, '', NULL, ''),
(71, 'responsable', 'responsalbe', '123@prescott.edu.pe', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 8, 8, 1, NULL, '', NULL, ''),
(72, 'laura', 'p', 'asd', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 4, 2, 0, NULL, '', NULL, ''),
(73, 'laura', 'pedregal', 'pci@prescott.edu.pe', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 3, 9, 1, NULL, '', NULL, ''),
(74, 'andrea', 'zegarra', 'azegarra@prescott.edu.pe', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2, 2, 1, NULL, '', NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoraciones`
--

CREATE TABLE `valoraciones` (
  `id` int(11) NOT NULL,
  `total_valoracion` int(11) NOT NULL,
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
(68, 13, 1, 73, 1, '2020-08-11', 'Administrador Sistema', '', ''),
(69, 13, 1, 73, 2, '2020-08-11', 'Administrador Sistema', '', '');

--
-- Índices para tablas volcadas
--

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
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=997;

--
-- AUTO_INCREMENT de la tabla `entrevistas`
--
ALTER TABLE `entrevistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `objetivos`
--
ALTER TABLE `objetivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `parentesco`
--
ALTER TABLE `parentesco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;

--
-- AUTO_INCREMENT de la tabla `periodos`
--
ALTER TABLE `periodos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Restricciones para tablas volcadas
--

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
