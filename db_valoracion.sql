-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 31-05-2020 a las 02:38:18
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

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
  `descripcion` varchar(45) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `gerencia_id` int(11) NOT NULL,
  `create_at` varchar(35) NOT NULL,
  `update_at` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id`, `nombre`, `descripcion`, `estado`, `gerencia_id`, `create_at`, `update_at`) VALUES
(1, 'Finanzas', '', 1, 1, '', ''),
(2, 'Desarollo Humano', '', 1, 1, '', ''),
(3, 'Sistemas', '', 1, 1, '', ''),
(4, 'Seguridad y salud', '', 1, 1, '', ''),
(5, 'PS', 'PS', 1, 2, '', 'Victor Edison Galvez Chavez'),
(6, 'ES', '', 1, 2, '', 'Victor Edison Galvez Chavez'),
(7, 'MS', '', 1, 2, '', ''),
(8, 'HS', '', 1, 2, '', ''),
(9, 'Sistemas', '', 0, 1, 'Victor Edison Galvez Chavez', ''),
(10, 'HS', '', 0, 2, 'Victor Edison Galvez Chavez', ''),
(11, '', '', 0, 1, 'Victor Edison Galvez Chavez', '');

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
  `update_at` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gerencias`
--

INSERT INTO `gerencias` (`id`, `nombre`, `descripcion`, `estado`, `create_at`, `update_at`) VALUES
(1, 'Administración ', 'No docente', 1, 'Victor Edison Galvez Chavez', 'Victor Edison Galvez Chavez'),
(2, 'Docentes ', 'Docente ', 1, 'Victor Edison Galvez Chavez', 'Victor Edison Galvez Chavez'),
(3, 'NOMBRE PRUEBA ACTUALIZAR', 'DESCRIPCIÓN PRUEBA ACTUALIZAR', 0, 'Victor Edison Galvez Chavez', 'Victor Edison Galvez Chavez'),
(4, 'GAAAA', 'GAAAA', 0, 'Victor Edison Galvez Chavez', 'Victor Edison Galvez Chavez'),
(5, 'GAAAA', 'GAAAA', 0, 'Victor Edison Galvez Chavez', ''),
(6, 'PruebaXXX', 'PruebaXXX', 0, 'Victor Edison Galvez Chavez', 'Victor Edison Galvez Chavez'),
(7, 'PRUEBA', 'PRUEBA', 0, 'Victor Edison Galvez Chavez', 'Victor Edison Galvez Chavez');

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
(4, 'Permisos ', 'administrador/permisos\r\n');

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
  `rol_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `read`, `insert`, `update`, `delete`, `menu_id`, `rol_id`) VALUES
(1, 1, 1, 1, 1, 1, 1),
(2, 1, 1, 1, 1, 2, 1),
(3, 1, 1, 1, 1, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `estado` tinyint(4) NOT NULL,
  `gerencia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `descripcion`, `estado`, `gerencia_id`) VALUES
(1, 'Administrador sistema', NULL, 1, 1),
(2, 'Jefe de área', NULL, 1, 1),
(3, 'Responsable área', NULL, 1, 1),
(4, 'Asistente área', NULL, 1, 1),
(5, 'Auxiliar área', NULL, 1, 1),
(6, 'Profesor', NULL, 1, 2),
(7, 'Head Principal', NULL, 1, 2);

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
  `area` varchar(45) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `create_at` varchar(35) DEFAULT NULL,
  `update_at` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `username`, `password`, `rol_id`, `area`, `estado`, `create_at`, `update_at`) VALUES
(1, 'Victor Edison', 'Galvez Chavez', 'vgalvez@prescott.edu.pe', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 'Sistemas', 1, '', ''),
(3, 'nombres prueba ', 'apellidos  prueba', NULL, 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 1, '', 0, NULL, NULL),
(4, 'Saul', 'Llosa', 'allosa@prescott.edu.pe', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 4, 'Sistemas', 1, NULL, NULL),
(5, 'Javier', 'Butron', 'jbutron@prescott.edu.pe', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 3, 'Sistemas', 1, NULL, NULL),
(6, 'Victor', 'Galvez', 'vgalvez1@prescott.edu.pe', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 5, 'Sistemas', 1, NULL, NULL),
(11, 'Fernando ', 'Salas', 'fsalas@prescott.edu.pe', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 2, NULL, 1, NULL, NULL),
(12, 'Florita', 'Sarmiento', 'fsarmiento@prescott.edu.pe', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 7, NULL, 1, NULL, NULL),
(13, 'p', 'p', 'fsarmiento@prescott.edu.pe', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 6, '8', 1, NULL, NULL),
(14, 'p', 'p', 'fsarmiento@prescott.edu.pe', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 6, 'ES', 1, NULL, NULL);

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
-- Indices de la tabla `gerencias`
--
ALTER TABLE `gerencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
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
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_role_usuarios` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `gerencias`
--
ALTER TABLE `gerencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `fk_gerencia_area` FOREIGN KEY (`gerencia_id`) REFERENCES `gerencias` (`id`);

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
  ADD CONSTRAINT `fk_role_usuarios` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
