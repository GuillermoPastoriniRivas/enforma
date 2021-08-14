
DROP TABLE IF EXISTS `suplementos`;
CREATE TABLE `suplementos` (
  `id_suplementos` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `precio` int(11) NOT NULL,
  PRIMARY KEY (`id_suplementos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `suplementos` (`id_suplementos`, `titulo`, `descripcion`, `imagen`, `precio`) VALUES
(1,	'Whey Protein ENA',	'Suplemento Dietario Whey Protein sabor vainilla en polvo x 1000 gr',	'protein.webp',	3000),
(2,	'Natural Life Colageno',	'Suplemento dietario Natural Life Multi collagen x 30 Comprimidos',	'collagen.jpg',	1499),
(3,	'Proteina Isolada PROFIT',	'Isolate Protein Mix Profit 1,8 Kg 45 Servicios',	'isolada.jpg',	1690),
(4,	'Whey Gourmet Vainilla',	'2 Whey Gourmet Iso 900g Underx Nutri 25g Prot /5,3g Bcaa',	'wheygourmet.jpg',	2790);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `celular` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `numero_socio` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2021-08-14 19:35:07
