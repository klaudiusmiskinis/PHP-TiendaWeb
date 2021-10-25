-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2021 a las 19:38:28
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Informática'),
(2, 'Electrodomésticos'),
(3, 'Higiene'),
(4, 'Audio'),
(5, 'Ocio'),
(6, 'Cocina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(100) NOT NULL,
  `nombre` varchar(70) COLLATE utf8mb4_spanish_ci NOT NULL,
  `categoria` int(10) NOT NULL,
  `subcategoria` int(10) NOT NULL,
  `tipo` varchar(70) COLLATE utf8mb4_spanish_ci NOT NULL,
  `peso` int(70) NOT NULL,
  `precio` int(4) NOT NULL,
  `fechaIntroducido` date NOT NULL DEFAULT current_timestamp(),
  `marca` varchar(70) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `categoria`, `subcategoria`, `tipo`, `peso`, `precio`, `fechaIntroducido`, `marca`) VALUES
(1, 'test', 0, 0, 'test', 40, 50, '0000-00-00', 'test S.A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) NOT NULL COMMENT 'Id único por usuario.',
  `nombre` varchar(1024) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Nombre del usuario.',
  `email` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Email del usuario.',
  `password` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Contraseña del usuario.',
  `avatar` varchar(1024) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Imagen de perfil del usuario.',
  `rol` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'user' COMMENT 'Rol/Permiso del usuario.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `email`, `password`, `avatar`, `rol`) VALUES
(1, 'Klaudius', 'klaudius@email.com', '1234', 'none', 'admin'),
(2, 'prueba', 'prueba@email.com', '1234', 'none', 'admin'),
(3, 'user', 'user@email.com', '1234', 'none', 'user'),
(4, 'admin', 'admin@email.com', '1234', 'none', 'admin'),
(10, 'Klaudius Miskinis', 'a@a', 'a', 'none', 'admin'),
(12, 'dani maastodonteasas', 'dani@email.com', '1234', 'none', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Id único por usuario.', AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
