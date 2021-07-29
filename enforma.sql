CREATE DATABASE IF NOT EXISTS enforma;


CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `celular` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `numero_socio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;