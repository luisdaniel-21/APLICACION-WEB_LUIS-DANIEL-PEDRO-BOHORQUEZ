-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         10.3.12-MariaDB-log - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para deportes_bd
CREATE DATABASE IF NOT EXISTS `deportes_bd` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `deportes_bd`;

-- Volcando estructura para tabla deportes_bd.calzado
CREATE TABLE IF NOT EXISTS `calzado` (
  `id_calzado` int(11) NOT NULL AUTO_INCREMENT,
  `producto` varchar(100) NOT NULL DEFAULT '0',
  `marca` varchar(100) NOT NULL DEFAULT '0',
  `modelo` varchar(100) NOT NULL DEFAULT '0',
  `precio` varchar(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_calzado`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla deportes_bd.calzado: ~4 rows (aproximadamente)
DELETE FROM `calzado`;
/*!40000 ALTER TABLE `calzado` DISABLE KEYS */;
INSERT INTO `calzado` (`id_calzado`, `producto`, `marca`, `modelo`, `precio`) VALUES
	(2, 'Tenis Para Runing', 'ADIDAS', 'ADIDASTYR57567', '$ 2400'),
	(4, 'Tenis Para La Nieve', 'PUMA', 'PUM567YG', '$ 9800'),
	(5, 'Tacos Para Futbol Rapido', 'PUMA', 'PUM56YER', '$ 5300'),
	(6, 'Tenis Para Basquetball', 'NIKE', 'NIKEBXTT57', '$ 4000');
/*!40000 ALTER TABLE `calzado` ENABLE KEYS */;

-- Volcando estructura para tabla deportes_bd.login
CREATE TABLE IF NOT EXISTS `login` (
  `usuario` varchar(50) DEFAULT NULL,
  `contraseña` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla deportes_bd.login: ~8 rows (aproximadamente)
DELETE FROM `login`;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` (`usuario`, `contraseña`) VALUES
	('LUIS DANIEL', '12345'),
	('ANA MORENO FLORES', '1234567890'),
	('LUIS BOHORQUEZ', '123');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;

-- Volcando estructura para tabla deportes_bd.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(10) NOT NULL AUTO_INCREMENT,
  `producto` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `precio` varchar(100) NOT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla deportes_bd.productos: ~5 rows (aproximadamente)
DELETE FROM `productos`;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`id_producto`, `producto`, `marca`, `modelo`, `precio`) VALUES
	(2, 'Short Para Correr', 'ADIDAS', 'ADI678YUKJ', '$ 600'),
	(8, 'Short Para Runing', 'NIKE', 'NIKE3478YUKJ', '$ 400'),
	(9, 'Chamarra Para Entrenar', 'NIKE', 'NTUUYU67', '$ 800'),
	(10, 'Medias Para Futbol', 'ADIDAS', 'ADD567H', '$ 550'),
	(12, 'Mallas Deportivas', 'ADIDAS', 'ADI678YUKJ', '$ 700');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

-- Volcando estructura para tabla deportes_bd.ventas
CREATE TABLE IF NOT EXISTS `ventas` (
  `id_venta` int(11) NOT NULL AUTO_INCREMENT,
  `producto` varchar(100) NOT NULL DEFAULT '0',
  `cantidad` int(11) NOT NULL DEFAULT 0,
  `precio` int(11) NOT NULL DEFAULT 0,
  `total` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_venta`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla deportes_bd.ventas: ~4 rows (aproximadamente)
DELETE FROM `ventas`;
/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
INSERT INTO `ventas` (`id_venta`, `producto`, `cantidad`, `precio`, `total`) VALUES
	(1, 'Tenis Para Correr', 3, 1000, 3000),
	(2, 'Tacos De Futbol', 1, 5000, 5000),
	(3, 'Tenis Para Nieve', 3, 2000, 6000),
	(4, 'Playera Para Futbol', 5, 500, 2500);
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
