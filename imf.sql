/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE IF NOT EXISTS `imf` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `imf`;

CREATE TABLE IF NOT EXISTS `deppaper` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dat` date NOT NULL,
  `subject` varchar(50) NOT NULL,
  `grade` int(11) NOT NULL,
  `term` int(11) NOT NULL,
  `pdf` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `deppaper` DISABLE KEYS */;
INSERT INTO `deppaper` (`id`, `dat`, `subject`, `grade`, `term`, `pdf`) VALUES
	(5, '2022-01-17', 'sinhala', 7, 3, 'Chapter 9.pdf'),
	(6, '2021-12-27', 'sinhala', 6, 2, 'Chapter 9.pdf');
/*!40000 ALTER TABLE `deppaper` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `lesson` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` year(4) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `grade` int(11) NOT NULL,
  `term` int(11) NOT NULL,
  `pdf` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `lesson` DISABLE KEYS */;
INSERT INTO `lesson` (`id`, `year`, `subject`, `grade`, `term`, `pdf`) VALUES
	(6, '2021', 'sinhala', 6, 1, 'sinhala.pdf'),
	(9, '2021', 'sinhala', 6, 2, 'HISTORY.pdf'),
	(10, '2022', 'maths', 12, 2, 'Maths.PDF'),
	(11, '2022', 'Econ', 0, 1, 'Chapter 9.pdf'),
	(12, '2021', 'biologhy', 13, 1, 'Chapter 9.pdf');
/*!40000 ALTER TABLE `lesson` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `modpaper` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dat` date NOT NULL,
  `subject` varchar(50) NOT NULL,
  `grade` int(11) NOT NULL,
  `term` int(11) NOT NULL,
  `pdf` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `modpaper` DISABLE KEYS */;
INSERT INTO `modpaper` (`id`, `dat`, `subject`, `grade`, `term`, `pdf`) VALUES
	(4, '2021-12-27', ' Geography ', 9, 9, ' geography.pdf'),
	(5, '2022-01-03', 'science', 10, 2, 'Chapter 9.pdf'),
	(6, '2022-01-03', '  Dancing  ', 5, 3, ' Dancing.pdf');
/*!40000 ALTER TABLE `modpaper` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dat` date NOT NULL,
  `subject` varchar(50) NOT NULL,
  `grade` int(2) NOT NULL,
  `term` int(11) NOT NULL,
  `pdf` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `module` DISABLE KEYS */;
INSERT INTO `module` (`id`, `dat`, `subject`, `grade`, `term`, `pdf`) VALUES
	(50, '2022-01-13', 'History', 13, 3, 'HISTORY.pdf'),
	(51, '2021-12-31', 'maths', 11, 1, 'Maths.PDF');
/*!40000 ALTER TABLE `module` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dat` date NOT NULL,
  `news` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `dat`, `news`) VALUES
	(3, '2022-01-02', 'Nest week Monday will add new modul paper set');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `ontest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dat` date NOT NULL,
  `subject` varchar(50) NOT NULL,
  `grade` int(11) NOT NULL,
  `term` int(11) NOT NULL,
  `url` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `ontest` DISABLE KEYS */;
INSERT INTO `ontest` (`id`, `dat`, `subject`, `grade`, `term`, `url`) VALUES
	(1, '2022-01-05', 'sinhala', 0, 2, 'https://www.youtube.com/watch?v=u5MeI0GYbsg');
/*!40000 ALTER TABLE `ontest` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `paper` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` year(4) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `grade` int(11) NOT NULL,
  `term` int(11) NOT NULL,
  `pdf` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `paper` DISABLE KEYS */;
INSERT INTO `paper` (`id`, `year`, `subject`, `grade`, `term`, `pdf`) VALUES
	(1, '2021', 'Geography', 8, 3, ' geography.pdf'),
	(2, '2021', 'Civics', 0, 2, 'Chapter 9.pdf');
/*!40000 ALTER TABLE `paper` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `userd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `userd` DISABLE KEYS */;
INSERT INTO `userd` (`id`, `username`, `email`, `password`) VALUES
	(1, 'chamodya', 'T1998rathnayake@gmai.com', '81dc9bdb52d04dc20036dbd8313ed055');
/*!40000 ALTER TABLE `userd` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `userp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `userp` DISABLE KEYS */;
INSERT INTO `userp` (`id`, `username`, `email`, `password`) VALUES
	(1, 'Chamodya ', 'T1998rathnayake@gmai.com', '81dc9bdb52d04dc20036dbd8313ed055');
/*!40000 ALTER TABLE `userp` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `usert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `usert` DISABLE KEYS */;
INSERT INTO `usert` (`id`, `username`, `email`, `password`) VALUES
	(5, 'Chamodya ', 'T1998rathnayake@gmai.com', '81dc9bdb52d04dc20036dbd8313ed055');
/*!40000 ALTER TABLE `usert` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `zonpaper` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dat` date NOT NULL,
  `subject` varchar(50) NOT NULL,
  `grade` int(11) NOT NULL,
  `term` varchar(50) NOT NULL,
  `pdf` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `zonpaper` DISABLE KEYS */;
INSERT INTO `zonpaper` (`id`, `dat`, `subject`, `grade`, `term`, `pdf`) VALUES
	(24, '2022-01-02', 'History', 9, '3', 'HISTORY.pdf'),
	(25, '2021-12-26', 'sinhala', 0, '3', 'Chapter 9.pdf');
/*!40000 ALTER TABLE `zonpaper` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
