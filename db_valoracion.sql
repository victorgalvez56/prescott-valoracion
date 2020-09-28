-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 28-09-2020 a las 07:31:04
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
(107, '18', 1, 83, 2, '2020-09-03', 'Fernando Alberto Salas Heresi', '', ''),
(109, '12.5', 1, 87, 1, '2020-09-05', 'Arlette Katherine Rondón Carreón', '', '');

--
-- Índices para tablas volcadas
--

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
-- AUTO_INCREMENT de la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- Restricciones para tablas volcadas
--

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
