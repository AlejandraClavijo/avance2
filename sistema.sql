-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-04-2024 a las 09:30:18
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `correo_adm` varchar(255) NOT NULL,
  `contrasena_adm` char(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `correo_adm`, `contrasena_adm`) VALUES
(1, 'profesor@udistrital.edu.co', 'colombia2024'),
(2, 'analisis@udistrital.edu.co', 'colombia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `curso` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `curso`, `cedula`, `correo`, `contrasena`) VALUES
(1, 'd', 'a', 'a', '1054284905', 'daaclavijop@udistrital.edu.co', '$2y$10$UdYf9xtRmNp4mu3eOintk.mb6XIunBkaXsOn1.hsTCZA4s/leS6we'),
(2, 'dayanna', 'clavijo', 'alisis', '10545284', 'alejandra@udistrital.edu.co', '$2y$10$pRaj1m1/3cx5m7I.nqWYY.DjKp6za6F4Gk7cR38UCw2vBGzQayXG.'),
(3, 'Santiago ', 'Mogollon', 'Analisis de sistemas  302', '1000231889', 'santiago@udistrital.edu.co', '$2y$10$PhPfNAkWs2LpgyetABlTu.RK7Qd.E9QbLBHZ6L4NaO7b.7xenSr7.'),
(4, 'Kevin', 'Mogollon', 'Analisis de sistemas  302', '74084552', 'kevin@udistrital.edu.co', '$2y$10$MBxsnKXd1aQ5CNFZsBYBguHaR5pA.oYknTyD2QZsO193jFXxzZzXa'),
(6, 'Catalina', 'Perez', 'Analisis de sistemas  302', '1010231374', 'Catalina@udistrital.edu.co', '$2y$10$dBtfeVcTOQpRTwKroUtfh.nVknW5OpJesdD7NksCaH.r9ZWTOjEG6');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo_adm`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cedula` (`cedula`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
