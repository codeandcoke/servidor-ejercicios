-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-11-2017 a las 16:36:39
-- Versión del servidor: 5.5.55-0+deb8u1
-- Versión de PHP: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `viajes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contrasena`) VALUES
(1, 'santi', '99800b85d3383e3a2fb45eb7d0066a4879a9dad0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viajes`
--

CREATE TABLE IF NOT EXISTS `viajes` (
`id` int(10) unsigned NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `foto1` varchar(100) NOT NULL,
  `foto2` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `duracion` int(11) NOT NULL,
  `disponible` tinyint(1) NOT NULL,
  `precio` float NOT NULL,
  `destacado` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `viajes`
--

INSERT INTO `viajes` (`id`, `nombre`, `descripcion`, `foto1`, `foto2`, `fecha`, `duracion`, `disponible`, `precio`, `destacado`) VALUES
(1, 'Viaje al marenostrum', 'Conoce el supercomputador más potente de Europa', 'marenostrum.jpg', '', '2017-12-12', 2, 0, 100, 0),
(2, 'Viaje al marenostrum', 'Conoce el supercomputador más potente de Europa', 'marenostrum.jpg', '', '2017-12-08', 2, 1, 100, 1),
(3, 'Viaje a Murcia', 'Visita la mejor ciudad del mundo', 'murcia2.jpg', '', '2017-10-28', 12, 1, 1560, 1),
(4, 'dkfjgkd', '<p>kjzhjkf</p>', 'Captura de pantalla de 2017-06-26 11-49-47.png', 'Captura de pantalla de 2017-06-29 12-30-10.png', '0000-00-00', 0, 0, 0, 0),
(5, 'dkfjgkd', '<p>kjzhjkf</p>', 'Captura de pantalla de 2017-06-26 11-49-47.png', 'Captura de pantalla de 2017-06-29 12-30-10.png', '0000-00-00', 0, 0, 0, 0),
(6, 'Viaje al colegio', '<p>Un viaje <strong>al mejor colegio del mundo</strong></p><ol><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsd</strong></li></ol>', 'Captura de pantalla de 2017-06-26 11-49-47.png', 'Captura de pantalla de 2017-06-26 11-49-47 - 1.png', '0000-00-00', 12, 0, 100, 0),
(7, 'Viaje al colegio', '<p>Un viaje <strong>al mejor colegio del mundo</strong></p><ol><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsd</strong></li></ol>', 'Captura de pantalla de 2017-06-26 11-49-47.png', 'Captura de pantalla de 2017-06-26 11-49-47 - 1.png', '0000-00-00', 12, 0, 100, 0),
(8, 'Viaje al colegio', '<p>Un viaje <strong>al mejor colegio del mundo</strong></p><ol><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsd</strong></li></ol>', 'Captura de pantalla de 2017-06-26 11-49-47.png', 'Captura de pantalla de 2017-06-26 11-49-47 - 1.png', '0000-00-00', 12, 0, 100, 0),
(9, 'Viaje al colegio', '<p>Un viaje <strong>al mejor colegio del mundo</strong></p><ol><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsd</strong></li></ol>', 'Captura de pantalla de 2017-06-26 11-49-47.png', 'Captura de pantalla de 2017-06-26 11-49-47 - 1.png', '0000-00-00', 12, 0, 100, 0),
(10, 'Viaje al colegio', '<p>Un viaje <strong>al mejor colegio del mundo</strong></p><ol><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsd</strong></li></ol>', 'Captura de pantalla de 2017-06-26 11-49-47.png', 'Captura de pantalla de 2017-06-26 11-49-47 - 1.png', '0000-00-00', 12, 0, 100, 0),
(11, 'Viaje al colegio', '<p>Un viaje <strong>al mejor colegio del mundo</strong></p><ol><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsd</strong></li></ol>', 'Captura de pantalla de 2017-06-26 11-49-47.png', 'Captura de pantalla de 2017-06-26 11-49-47 - 1.png', '0000-00-00', 12, 0, 100, 0),
(12, 'Viaje al colegio', '<p>Un viaje <strong>al mejor colegio del mundo</strong></p><ol><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsd</strong></li></ol>', 'Captura de pantalla de 2017-06-26 11-49-47.png', 'Captura de pantalla de 2017-06-26 11-49-47 - 1.png', '0000-00-00', 12, 0, 100, 1),
(13, 'Viaje al colegio', '<p>Un viaje <strong>al mejor colegio del mundo</strong></p><ol><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsd</strong></li></ol>', 'Captura de pantalla de 2017-06-26 11-49-47.png', 'Captura de pantalla de 2017-06-26 11-49-47 - 1.png', '0000-00-00', 12, 0, 100, 0),
(14, 'Viaje al colegio', '<p>Un viaje <strong>al mejor colegio del mundo</strong></p><ol><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsd</strong></li></ol>', 'Captura de pantalla de 2017-06-26 11-49-47.png', 'Captura de pantalla de 2017-06-26 11-49-47 - 1.png', '0000-00-00', 12, 0, 100, 0),
(15, 'Viaje al colegio', '<p>Un viaje <strong>al mejor colegio del mundo</strong></p><ol><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsd</strong></li></ol>', 'Captura de pantalla de 2017-06-26 11-49-47.png', 'Captura de pantalla de 2017-06-26 11-49-47 - 1.png', '0000-00-00', 12, 0, 100, 0),
(16, 'Viaje al colegio', '<p>Un viaje <strong>al mejor colegio del mundo</strong></p><ol><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsd</strong></li></ol>', 'Captura de pantalla de 2017-06-26 11-49-47.png', 'Captura de pantalla de 2017-06-26 11-49-47 - 1.png', '0000-00-00', 12, 0, 100, 0),
(17, 'Viaje al colegio', '<p>Un viaje <strong>al mejor colegio del mundo</strong></p><ol><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsd</strong></li></ol>', 'Captura de pantalla de 2017-06-26 11-49-47.png', 'Captura de pantalla de 2017-06-26 11-49-47 - 1.png', '0000-00-00', 12, 0, 100, 1),
(18, 'Viaje al colegio', '<p>Un viaje <strong>al mejor colegio del mundo</strong></p><ol><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsd</strong></li></ol>', 'Captura de pantalla de 2017-06-26 11-49-47.png', 'Captura de pantalla de 2017-06-26 11-49-47 - 1.png', '0000-00-00', 12, 0, 100, 1),
(19, 'Viaje al colegio', '<p>Un viaje <strong>al mejor colegio del mundo</strong></p><ol><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsd</strong></li></ol>', 'Captura de pantalla de 2017-06-26 11-49-47.png', 'Captura de pantalla de 2017-06-26 11-49-47 - 1.png', '0000-00-00', 12, 0, 100, 0),
(20, 'Viaje al colegio', '<p>Un viaje <strong>al mejor colegio del mundo</strong></p><ol><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsd</strong></li></ol>', 'Captura de pantalla de 2017-06-26 11-49-47.png', 'Captura de pantalla de 2017-06-26 11-49-47 - 1.png', '0000-00-00', 12, 0, 100, 0),
(21, 'Viaje al colegio', '<p>Un viaje <strong>al mejor colegio del mundo</strong></p><ol><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsdf</strong></li><li><strong>sdfsdfsd</strong></li></ol>', 'Captura de pantalla de 2017-06-26 11-49-47.png', 'Captura de pantalla de 2017-06-26 11-49-47 - 1.png', '0000-00-00', 12, 1, 100, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `viajes`
--
ALTER TABLE `viajes`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `viajes`
--
ALTER TABLE `viajes`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
