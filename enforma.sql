--
-- Base de datos: `enforma_db`
--


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

  --
-- Estructura de tabla para la tabla `suplementos`
--

CREATE TABLE `suplementos` (
  `id_suplementos` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `suplementos`
--

INSERT INTO `suplementos` (`id_suplementos`, `titulo`, `descripcion`, `imagen`, `precio`) VALUES
(1, 'Whey Protein ENA', 'Suplemento Dietario Whey Protein sabor vainilla en polvo x 1000 gr', 'protein.webp', 3000),
(2, 'Natural Life Colágeno', 'Suplemento dietario Natural Life Multi collagen x 30 Comprimidos', 'collagen.jpg', 1499);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `suplementos`
--
ALTER TABLE `suplementos`
  ADD PRIMARY KEY (`id_suplementos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `suplementos`
--
ALTER TABLE `suplementos`
  MODIFY `id_suplementos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;