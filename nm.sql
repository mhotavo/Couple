-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2017 a las 16:32:36
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `ID_EVENTO` int(11) NOT NULL,
  `LUGAR` varchar(50) NOT NULL,
  `TIPO` text NOT NULL,
  `DESCRIPCION` text,
  `FECHA` date DEFAULT NULL,
  `USUARIOLOG` bigint(11) NOT NULL,
  `FECHALOG` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`ID_EVENTO`, `LUGAR`, `TIPO`, `DESCRIPCION`, `FECHA`, `USUARIOLOG`, `FECHALOG`) VALUES
(1, '', 'Andres', '.', '2017-06-04', 1, '2017-07-07 17:42:20'),
(2, 'Famarcia', 'Inyeccion', 'Cyclofem', '2017-06-04', 1, '2017-07-07 18:41:54'),
(3, 'Profamilia', 'Inyeccion', 'Cyclofem', '2017-07-04', 1, '2017-07-07 18:41:40'),
(4, '', 'Andres', '.', '2017-05-06', 1, '2017-07-07 17:46:42'),
(5, 'Casa Nicol', 'Sex', 'Sin condón, nos escondimos de Charith.', '2017-06-09', 1, '2017-07-07 17:47:59'),
(6, 'Casa Nicol', 'Sex', 'Mientras Charith estaba en otra habitación,  un poco de sangrado. ', '2017-06-24', 1, '2017-07-07 18:01:14'),
(7, 'Casa Nicol', 'El', 'Mientras Charith estaba en el 2do piso con la prima', '2017-07-04', 1, '2017-07-07 18:12:12'),
(8, 'Casa Milton', 'El', 'Mientras hacían tamales ', '2017-06-29', 1, '2017-07-07 18:14:16'),
(9, 'Casa Nicol', 'Sex', 'Dos veces, luego de ducharse sin condón.\r\nCuando Diana estaba en el segundo piso, vestido rosado. ', '2017-06-16', 1, '2017-07-07 18:22:08'),
(10, '', 'Andres', '.', '2017-03-13', 1, '2017-07-07 18:19:52'),
(11, 'Casa Milton', 'El', '.', '2017-02-22', 1, '2017-07-07 18:21:22'),
(12, 'Casa Milton', 'El', '.', '2017-02-17', 1, '2017-07-07 18:21:55'),
(13, '', 'Andres', '.', '2017-02-14', 1, '2017-07-07 18:23:16'),
(14, 'Casa Nicol', 'Sex', 'Luego del grupo, mientras veíamos la serie. \r\nSin condón', '2017-06-10', 1, '2017-07-07 18:33:00'),
(15, 'Casa Nicol', 'Sex', 'Día que se le fue andres, sin condon.\r\nDiana se fue a bailar con felipe', '2017-05-13', 1, '2017-07-07 18:35:59'),
(16, 'Casa Nicol', 'Sex', 'Dos veces sin condón, oral ambos, 69 y vídeo.', '2017-07-07', 1, '2017-07-08 13:29:22'),
(17, '', 'Andres', '.', '2017-06-25', 1, '2017-07-08 15:19:08'),
(18, '', 'Andres', '.', '2017-01-10', 1, '2017-07-08 15:21:16'),
(19, 'Casa Nicol', '69', '69 y mucho oral.\r\n', '2017-07-07', 1, '2017-07-08 16:04:51'),
(20, 'Casa Nicol', 'Ella', 'Mas de media hora ', '2017-07-08', 1, '2017-07-08 16:05:20'),
(21, 'Casa Nicol', 'El', 'Con xtime y video. ', '2017-07-07', 1, '2017-07-08 16:05:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` bigint(255) NOT NULL,
  `USER` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `PASS` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `NOMBRES` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `P_APELLIDO` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `S_APELLIDO` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `USER`, `PASS`, `EMAIL`, `NOMBRES`, `P_APELLIDO`, `S_APELLIDO`) VALUES
(1, 'admin', 'admin', 'milton.otavo@gmail.com', 'MILTON', 'OTAVO', 'VARON');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`ID_EVENTO`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `ID_EVENTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
