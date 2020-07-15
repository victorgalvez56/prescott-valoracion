-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2020 a las 03:17:02
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
(577, 1, 1, 49, 1, 13, 0, 0, 0),
(578, 1, 1, 49, 2, 13, 0, 0, 0),
(579, 1, 1, 49, 3, 13, 0, 0, 0),
(580, 1, 1, 49, 4, 13, 0, 0, 0),
(581, 1, 1, 49, 5, 13, 0, 0, 0),
(582, 1, 1, 49, 6, 13, 0, 0, 0),
(583, 1, 1, 49, 7, 13, 0, 0, 0),
(584, 1, 1, 49, 8, 13, 0, 0, 0),
(585, 1, 1, 49, 9, 13, 0, 0, 0),
(586, 1, 1, 49, 10, 13, 0, 0, 0),
(587, 3, 1, 49, 11, 13, 0, 0, 0),
(588, 3, 1, 49, 12, 13, 0, 0, 0),
(589, 3, 1, 49, 13, 13, 0, 0, 0),
(590, 2, 1, 49, 14, 13, 0, 0, 0),
(591, 2, 1, 49, 15, 13, 0, 0, 0),
(592, 1, 1, 49, 16, 13, 0, 0, 0),
(593, 1, 1, 49, 17, 13, 0, 0, 0),
(594, 1, 1, 49, 18, 13, 0, 0, 0),
(595, 1, 1, 49, 19, 13, 0, 0, 0),
(596, 1, 1, 49, 20, 13, 0, 0, 0),
(597, 4, 1, 50, 1, 13, 0, 0, 0),
(598, 4, 1, 50, 2, 13, 0, 0, 0),
(599, 4, 1, 50, 3, 13, 0, 0, 0),
(600, 4, 1, 50, 4, 13, 0, 0, 0),
(601, 4, 1, 50, 5, 13, 0, 0, 0),
(602, 4, 1, 50, 6, 13, 0, 0, 0),
(603, 4, 1, 50, 7, 13, 0, 0, 0),
(604, 4, 1, 50, 8, 13, 0, 0, 0),
(605, 4, 1, 50, 9, 13, 0, 0, 0),
(606, 4, 1, 50, 10, 13, 0, 0, 0),
(607, 4, 1, 50, 11, 13, 0, 0, 0),
(608, 4, 1, 50, 12, 13, 0, 0, 0),
(609, 4, 1, 50, 13, 13, 0, 0, 0),
(610, 4, 1, 50, 14, 13, 0, 0, 0),
(611, 4, 1, 50, 15, 13, 0, 0, 0),
(612, 4, 1, 50, 16, 13, 0, 0, 0),
(613, 4, 1, 50, 17, 13, 0, 0, 0),
(614, 4, 1, 50, 18, 13, 0, 0, 0),
(615, 4, 1, 50, 19, 13, 0, 0, 0),
(616, 4, 1, 50, 20, 13, 0, 0, 0);

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
(230, 73, 12, 1, 1, 1);

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
(72, 'laura', 'p', 'pci@prescott.edu.pe', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 4, 2, 0, NULL, '', NULL, ''),
(73, 'laura', 'pedregal', '123@prescott.edu.pe', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 3, 9, 1, NULL, '', NULL, '');

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
(49, 7, 1, 13, 1, '2020-07-13', 'Fernando Salas', '', ''),
(50, 20, 1, 13, 2, '2020-07-13', 'Fernando Salas', '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=617;

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
-- AUTO_INCREMENT de la tabla `parentesco`
--
ALTER TABLE `parentesco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

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
-- AUTO_INCREMENT de la tabla `tipos_valoracion`
--
ALTER TABLE `tipos_valoracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

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
-- Filtros para la tabla `indicadores`
--
ALTER TABLE `indicadores`
  ADD CONSTRAINT `fk_competencias_indicador` FOREIGN KEY (`competencia_id`) REFERENCES `competencias` (`id`);

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
