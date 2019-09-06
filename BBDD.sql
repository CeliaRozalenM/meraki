-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         10.3.10-MariaDB-log - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para meraki
CREATE DATABASE IF NOT EXISTS `meraki` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `meraki`;

-- Volcando estructura para tabla meraki.building
CREATE TABLE IF NOT EXISTS `building` (
  `building_id` int(50) NOT NULL AUTO_INCREMENT,
  `users_id` int(50) DEFAULT NULL,
  `sprint_id` int(50) DEFAULT NULL,
  PRIMARY KEY (`building_id`),
  KEY `FK__building_user` (`users_id`),
  CONSTRAINT `FK__building_user` FOREIGN KEY (`users_id`) REFERENCES `users` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla meraki.building: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `building` DISABLE KEYS */;
INSERT INTO `building` (`building_id`, `users_id`, `sprint_id`) VALUES
	(1, 1, 1);
/*!40000 ALTER TABLE `building` ENABLE KEYS */;

-- Volcando estructura para tabla meraki.images
CREATE TABLE IF NOT EXISTS `images` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `img_user` int(50) NOT NULL,
  `img_name` varchar(100) NOT NULL,
  `img_type` varchar(30) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla meraki.images: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` (`img_id`, `img_user`, `img_name`, `img_type`) VALUES
	(22, 1, 'glass.jpg', 'image/png'),
	(32, 1, 'book.jpg', 'image/jpeg'),
	(42, 1, 'beer.jpg', 'image/png');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

-- Volcando estructura para tabla meraki.task
CREATE TABLE IF NOT EXISTS `task` (
  `task_id` int(50) NOT NULL AUTO_INCREMENT,
  `task_sprint` int(3) NOT NULL,
  `user_id` int(50) DEFAULT NULL,
  `task_name` varchar(100) NOT NULL,
  `task_start_date` date NOT NULL,
  `task_final_date` date NOT NULL,
  `task_description` varchar(200) NOT NULL,
  `task_status` int(3) DEFAULT NULL,
  `task_built` int(3) DEFAULT NULL,
  PRIMARY KEY (`task_id`),
  KEY `FK__task_user` (`user_id`),
  CONSTRAINT `FK__task_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla meraki.task: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `task` DISABLE KEYS */;
INSERT INTO `task` (`task_id`, `task_sprint`, `user_id`, `task_name`, `task_start_date`, `task_final_date`, `task_description`, `task_status`, `task_built`) VALUES
	(1, 1, 1, 'Añadir iconos de redes sociales a footer', '2019-09-05', '2019-09-06', 'Añadir iconos de redes sociales a footer', 1, 0),
	(2, 1, 1, 'Llamadas base datos', '2019-09-05', '2019-09-07', 'Llamdas a la Base de datos', 1, 0),
	(3, 1, 1, 'Crear clases de usuario', '2019-09-05', '2019-09-05', 'Crear clases de usuario', 1, 1),
	(4, 1, 2, 'Maquetar home', '2019-09-05', '2019-09-05', 'Maquetar página home', 1, 1),
	(5, 1, 3, 'Escribir comentarios generales APP', '2019-09-05', '2019-09-05', 'Escribir comentarios generales APP', 1, 1),
	(6, 1, 2, 'Estilos home', '2019-09-06', '2019-09-06', 'Crear estilos home', 1, 1);
/*!40000 ALTER TABLE `task` ENABLE KEYS */;

-- Volcando estructura para tabla meraki.users
CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `profile_pic` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `color_user` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `role` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla meraki.users: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`uid`, `username`, `password`, `email`, `name`, `profile_pic`, `color_user`, `role`) VALUES
	(1, 'test', 'test', 'test@test', 'Usuario 1', 'profile_1.png', 'EA627D', '--'),
	(2, 'test1', 'test1', 'test1@test', 'Usuario 2', 'profile_2.jpg', '9665C8', '-\r\n-'),
	(3, 'test2', 'test2', 'test2@tes2', 'Usuario 3', 'profile_3.jpg', '19B8AE', '--');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
