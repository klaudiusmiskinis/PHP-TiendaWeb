SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

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
(4, 'admin', 'admin@email.com', '1234', 'none', 'admin');

--
-- Índices para tablas volcadas
--

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
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Id único por usuario.', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
