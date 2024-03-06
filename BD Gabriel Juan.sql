-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.28-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para tienda_gabriel
CREATE DATABASE IF NOT EXISTS `tienda_gabriel` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `tienda_gabriel`;

-- Volcando estructura para tabla tienda_gabriel.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla tienda_gabriel.categorias: ~3 rows (aproximadamente)
DELETE FROM `categorias`;
INSERT INTO `categorias` (`id`, `nombre`) VALUES
	(1, 'mujer'),
	(2, 'hombre'),
	(3, 'discover');

-- Volcando estructura para tabla tienda_gabriel.cesta_compra
CREATE TABLE IF NOT EXISTS `cesta_compra` (
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `cesta_compra_ibfk1` FOREIGN KEY (`id`) REFERENCES `productos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla tienda_gabriel.cesta_compra: ~0 rows (aproximadamente)
DELETE FROM `cesta_compra`;

-- Volcando estructura para tabla tienda_gabriel.intento_accesos
CREATE TABLE IF NOT EXISTS `intento_accesos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `resultado` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla tienda_gabriel.intento_accesos: ~100 rows (aproximadamente)
DELETE FROM `intento_accesos`;
INSERT INTO `intento_accesos` (`id`, `fecha`, `usuario`, `resultado`) VALUES
	(1, '2023-05-25 15:33:09', 'asd', 'fallido'),
	(2, '2023-05-25 15:33:42', 'asdasd', 'fallido'),
	(3, '2023-05-25 15:33:57', 'administrado', 'fallido'),
	(4, '2023-05-25 15:34:09', 'administrador', 'éxito'),
	(5, '2023-05-25 15:48:07', 'Gabriel', 'éxito'),
	(6, '2023-05-25 15:53:38', 'adglkn', 'fallido'),
	(7, '2023-05-25 15:53:45', 'administrador', 'éxito'),
	(8, '2023-05-25 15:55:27', 'asd', 'fallido'),
	(9, '2023-05-25 15:55:47', 'asd', 'éxito'),
	(10, '2023-05-25 16:03:30', 'asdd', 'fallido'),
	(11, '2023-05-25 16:03:33', 'asd', 'éxito'),
	(12, '2023-05-25 16:11:58', 'asd', 'éxito'),
	(13, '2023-05-25 16:13:20', 'asd', 'éxito'),
	(14, '2023-05-25 17:11:22', 'asd', 'éxito'),
	(15, '2023-05-25 17:11:26', 'ff', 'fallido'),
	(16, '2023-05-25 17:11:29', 'asd', 'éxito'),
	(17, '2023-05-25 18:36:29', 'asd', 'éxito'),
	(18, '2023-05-25 18:37:15', 'asd', 'éxito'),
	(19, '2023-05-25 19:00:38', 'asd', 'éxito'),
	(20, '2023-05-25 19:05:29', 'asd', 'éxito'),
	(21, '2023-05-25 19:08:14', 'administrador', 'éxito'),
	(22, '2023-05-25 19:11:39', 'asd', 'éxito'),
	(23, '2023-05-25 19:40:58', 'asd', 'éxito'),
	(24, '2023-05-25 20:34:02', 'asd', 'éxito'),
	(25, '2023-05-25 20:45:56', 'asd', 'éxito'),
	(26, '2023-05-25 20:48:44', 'asd', 'éxito'),
	(27, '2023-05-26 00:54:45', 'asd', 'éxito'),
	(28, '2023-05-26 03:22:47', 'asd', 'éxito'),
	(29, '2023-05-26 03:29:27', 'asd', 'éxito'),
	(30, '2023-05-26 03:34:13', 'asd', 'éxito'),
	(31, '2023-05-26 03:34:38', 'asd', 'éxito'),
	(32, '2023-05-26 03:49:23', 'asd', 'éxito'),
	(33, '2023-05-26 15:40:36', 'asd', 'éxito'),
	(34, '2023-05-26 15:51:19', 'asd', 'éxito'),
	(35, '2023-05-26 15:58:00', 'asd', 'éxito'),
	(36, '2023-05-26 16:04:28', 'asd', 'éxito'),
	(37, '2023-05-26 16:05:41', 'asd', 'éxito'),
	(38, '2023-05-26 16:06:05', 'asd', 'éxito'),
	(39, '2023-05-26 16:06:44', 'asd', 'éxito'),
	(40, '2023-05-26 16:06:52', 'asd', 'éxito'),
	(41, '2023-05-26 16:07:32', 'asd', 'éxito'),
	(42, '2023-05-26 16:08:02', 'asd', 'éxito'),
	(43, '2023-05-26 16:11:21', 'asd', 'éxito'),
	(44, '2023-05-26 16:12:19', 'asd', 'éxito'),
	(45, '2023-05-26 16:28:33', 'asd', 'éxito'),
	(46, '2023-05-26 16:28:44', 'administrador', 'éxito'),
	(47, '2023-05-26 16:29:26', 'asd', 'éxito'),
	(48, '2023-05-26 16:32:23', 'asd', 'éxito'),
	(49, '2023-05-26 16:32:48', 'Gabriel', 'éxito'),
	(50, '2023-05-26 16:33:06', 'asd', 'éxito'),
	(51, '2023-05-26 16:35:13', 'asd', 'éxito'),
	(52, '2023-05-26 16:37:50', 'asd', 'éxito'),
	(53, '2023-05-26 17:07:45', 'asd', 'éxito'),
	(54, '2023-05-26 17:09:34', 'asd', 'éxito'),
	(55, '2023-05-26 17:10:16', 'administrador', 'éxito'),
	(56, '2023-05-26 17:10:42', 'asd', 'éxito'),
	(57, '2023-05-26 17:11:17', 'asd', 'éxito'),
	(58, '2023-05-26 17:12:39', 'katikaturas', 'éxito'),
	(59, '2023-05-26 17:39:18', 'asd', 'éxito'),
	(60, '2023-05-26 17:40:25', 'administrador', 'éxito'),
	(61, '2023-05-26 17:58:52', 'asd', 'éxito'),
	(62, '2023-05-26 17:59:56', 'asd', 'éxito'),
	(63, '2023-05-26 18:00:16', 'katikaturas', 'éxito'),
	(64, '2023-05-26 18:00:52', 'asd', 'éxito'),
	(65, '2023-05-26 18:02:53', 'asd', 'éxito'),
	(66, '2023-05-26 18:10:28', 'asd', 'exito'),
	(67, '2023-05-26 18:12:44', 'asd', 'éxito'),
	(68, '2023-05-26 18:13:32', 'asd', 'éxito'),
	(69, '2023-05-26 18:13:42', 'administrador', 'éxito'),
	(70, '2023-05-26 18:14:15', 'karikaturas', 'fallido'),
	(71, '2023-05-26 18:14:24', 'katikaturas', 'éxito'),
	(72, '2023-05-26 18:15:31', 'gabriel', 'éxito'),
	(73, '2023-05-26 18:20:40', 'asd', 'éxito'),
	(74, '2023-05-26 18:21:31', 'asd', 'éxito'),
	(75, '2023-05-26 18:22:12', 'administrador', 'éxito'),
	(76, '2023-05-26 18:23:21', 'asd', 'éxito'),
	(77, '2023-05-26 18:26:42', 'asd', 'éxito'),
	(78, '2023-05-26 18:42:19', 'asd', 'éxito'),
	(79, '2023-05-26 19:54:10', 'asd', 'éxito'),
	(80, '2023-05-26 20:01:42', 'asd', 'éxito'),
	(81, '2023-06-30 16:42:17', 'abc', 'fallido'),
	(82, '2023-06-30 16:42:21', 'asd', 'éxito'),
	(83, '2023-06-30 17:14:08', 'ASD', 'fallido'),
	(84, '2023-06-30 17:14:13', 'asd', 'éxito'),
	(85, '2023-07-01 21:31:30', 'asd', 'éxito'),
	(86, '2023-07-01 21:35:38', 'asd', 'éxito'),
	(87, '2023-07-01 21:54:29', 'asd', 'éxito'),
	(88, '2023-07-01 23:02:46', 'asd', 'éxito'),
	(89, '2023-07-01 23:24:17', 'asd', 'éxito'),
	(90, '2023-07-01 23:39:36', 'asd', 'éxito'),
	(91, '2023-07-01 23:52:54', NULL, 'fallido'),
	(92, '2023-07-01 23:53:09', NULL, 'fallido'),
	(93, '2023-07-04 18:11:45', 'asd', 'éxito'),
	(94, '2023-07-04 18:12:16', 'asd', 'éxito'),
	(95, '2023-07-04 18:52:33', 'asd', 'éxito'),
	(96, '2023-07-04 19:03:46', 'asd', 'éxito'),
	(97, '2023-07-04 19:44:03', 'asd', 'éxito'),
	(98, '2023-07-04 19:46:43', NULL, 'fallido'),
	(99, '2023-07-04 19:46:46', 'asd', 'éxito'),
	(100, '2023-07-04 19:46:48', NULL, 'fallido');

-- Volcando estructura para tabla tienda_gabriel.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `imagen_hd` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categoria_id` (`categoria_id`),
  CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla tienda_gabriel.productos: ~24 rows (aproximadamente)
DELETE FROM `productos`;
INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `imagen`, `categoria_id`, `imagen_hd`) VALUES
	(0, 'CAMISA ACOLCHADA BALENCIAGA EN NEGRO', 'Camisa Acolchada Balenciaga de tejido vaquero suave en negro', 1300, 'aa.jpg', 1, 'aa_hd.jpg'),
	(1, 'GABARDINA FOLDED EN ARENA', 'Gabardina Folded de sarga de algodón beige', 3200, 'aa_discover.jpg', 3, 'aa_discover_hd.jpg'),
	(2, 'HOODIE CRYPTO MEDIUM FIT EN NEGRO DEGRADADO', 'Hoodie Crypto Medium Fit de vellón rizado negro', 1200, 'aa_hombre.jpg', 2, 'aa_hombre_hd.jpg'),
	(3, 'FALDA MAXI PARA MUJER EN NEGRO', 'Falda Maxi de suave piel de toro mate negra', 3900, 'ab.jpg', 1, 'ab_hd.jpg'),
	(4, 'JERSEY CON GUANTES PARA MUJER EN NEGRO', 'Jersey Con Guantes de punto elástico híbrido negro', 1200, 'ab_discover.jpg', 3, 'ab_discover_hd.jpg'),
	(5, 'CAMISETA CRYPTO OVERSIZE EN NEGRO DEGRADADO', 'Camiseta Crypto Oversize de jersey vintage negro', 725, 'ab_hombre.jpg', 2, 'ab_hombre_hd.jpg'),
	(6, 'BOLSO CON CADENA CRUSH MEDIANO ACOLCHADO PARA MUJER EN NEGRO', 'Bolso Con Cadena Crush Mediano Acolchado de piel aplastada de becerro en negro, elemento dorado envejecido', 2600, 'ac.jpg', 1, 'ac_hd.jpg'),
	(7, 'PANTALEGGINGS KNIFE PARA MUJER EN NEGRO', 'Pantaleggings Knife de punto aterciopelado fluido negro', 2800, 'ac_discover.jpg', 3, 'ac_discover_hd.jpg'),
	(8, 'PANTALÓN CORTO SLIM EN NEGRO', 'Pantalón Corto Slim en tejido vaquero left-hand suave negro', 795, 'ac_hombre.jpg', 2, 'ac_hombre_hd.jpg'),
	(9, 'SANDALIA CAMDEN DE 160 MM PARA MUJER EN NEGRO', 'La Sandalia Camden De 160 mm de piel suave de becerro es de los looks 48 y 50 de la colección de verano 23 de Balenciaga.', 1200, 'ad.jpg', 1, 'ad_hd.jpg'),
	(10, 'BOLSO DE MANO HOURGLASS XS PARA MUJER EN NEGRO', 'Bolso de Mano Hourglass XS de piel brillante de becerro boxcalf en negro', 1950, 'ad_discover.jpg', 3, 'ad_discover_hd.jpg'),
	(11, 'FURRY SLIDE SANDAL PARA HOMBRE EN NEGRO', 'Furry Slide Sandal de borrego artificial en negro y bordados Political Campaign en blanco', 595, 'ad_hombre.jpg', 2, 'ad_hombre_hd.jpg'),
	(12, 'SANDALIA CAMDEN DE 160 MM PARA MUJER EN BLANCO ÓPTICO', 'Sandalia Camden De 160 mm de charol brillante de becerro en blanco', 1200, 'ba.jpg', 1, 'ba_hd.jpg'),
	(13, 'PARKA MILITAR DOUBLE FRONT BALENCIAGA EN NEGRO', 'Parka Militar Double Front Balenciaga de algodón ripstop negro', 3700, 'ba_discover.jpg', 3, 'ba_discover_hd.jpg'),
	(14, 'HOODIE BB PARIS STRASS LARGE FIT EN NEGRO DEGRADADO', 'Hoodie BB Paris Strass Large Fit de vellón rizado negro', 1350, 'ba_hombre.jpg', 2, 'ba_hombre_hd.jpg'),
	(15, 'SANDALIA CAMDEN DE 160 MM CON ESTRÁS PARA MUJER EN NEGRO', 'Sandalia Camden De 160 mm de piel gamuza de becerro con estrás blanco', 2500, 'bb.jpg', 1, 'bb_hd.jpg'),
	(16, 'PANTALÓN ELÁSTICO PARA MUJER EN NEGRO', 'Pantalón Elástico de barathea fluida en negro', 850, 'bb_discover.jpg', 3, 'bb_discover_hd.jpg'),
	(17, 'CAMISETA BB PARIS STRASS MEDIUM FIT EN NEGRO DEGRADADO', 'Camiseta BB Paris Strass Medium Fit en jersey vintage negro', 950, 'bb_hombre.jpg', 2, 'bb_hombre_hd.jpg'),
	(18, 'BOLSO CON CADENA METALIZADO CRUSH MEDIANO PARA MUJER EN BRONCE', 'Bolso Con Cadena Metalizado Crush Mediano de piel de becerro aplastada metalizada marrón, elementos plateados envejecidos', 2650, 'bc.jpg', 1, 'bc_hd.jpg'),
	(19, 'BOLSO DE HOMBRO LE CAGOLE XS CON EFECTO SUCIO PARA MUJER EN NEGRO', 'Bolso De Hombro Le Cagole XS de piel de cordero Arena con efecto sucio en negro, elemento plateado envejecido', 2150, 'bc_discover.jpg', 3, 'bc_discover_hd.jpg'),
	(20, 'HOODIE HAND DRAWN BALENCIAGA MEDIUM FIT PARA HOMBRE EN NEGRO', 'Hoodie Hand Drawn Balenciaga Medium Fit de vellón rizado blanco y negro', 895, 'bc_hombre.jpg', 2, 'bc_hombre_hd.jpg'),
	(21, 'BOLSO MEDIANO CON CADENA CRUSH ACOLCHADO PARA MUJER EN BLANCO ÓPTICO', 'Bolso Mediano con Cadena Crush Acolchado de piel arrugada de becerro en blanco, elemento plateado envejecido', 2600, 'bd.jpg', 1, 'bd_hd.jpg'),
	(22, 'PULSERA SKATE EN PLATEADO', 'Pulsera Skate de latón plateado', 495, 'bd_discover.jpg', 3, 'bd_discover_hd.jpg'),
	(23, 'CAMISETA HAND DRAWN BALENCIAGA LARGE FIT PARA HOMBRE EN NEGRO', 'Camiseta Hand Drawn Balenciaga Large Fit de jersey vintage blanco y negro', 550, 'bd_hombre.jpg', 2, 'bd_hombre_hd.jpg');

-- Volcando estructura para tabla tienda_gabriel.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `contrasena` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `codigo_postal` varchar(255) DEFAULT NULL,
  `provincia` varchar(255) DEFAULT NULL,
  `rol` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla tienda_gabriel.usuarios: ~5 rows (aproximadamente)
DELETE FROM `usuarios`;
INSERT INTO `usuarios` (`id`, `nombre`, `contrasena`, `correo`, `telefono`, `direccion`, `codigo_postal`, `provincia`, `rol`) VALUES
	(0, 'administrador', '1234', 'victor@victor.com', NULL, NULL, NULL, NULL, 'admin'),
	(1, 'Gabriel', '1234', 'gabriel@gmail.com', 653848355, 'calle capitan alfonos vives', '03204', 'Alicante', 'admin'),
	(3, 'asd', 'asd', 'asd@asd.com', 999999999, 'asd', 'asd', 'asd', 'cliente'),
	(4, 'katikaturas', '1234', 'katikaturas@katikaturas.com', 123456789, 'calle katikaturas', '03320', 'Alicante', 'admin'),
	(5, 'paquito', 'qwe', 'paco@paquito.com', 654987321, 'calle almansa 123', '03321', 'Alicante', 'cliente');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
