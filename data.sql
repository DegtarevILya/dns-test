# ************************************************************
# Sequel Pro SQL dump
# Версия 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Адрес: 127.0.0.1 (MySQL 5.6.12)
# Схема: test_hot
# Время создания: 2015-09-20 07:11:01 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Дамп таблицы tree
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tree`;

CREATE TABLE `tree` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT '0',
  `label` varchar(100) DEFAULT NULL,
  `orderBy` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `tree` WRITE;
/*!40000 ALTER TABLE `tree` DISABLE KEYS */;

INSERT INTO `tree` (`id`, `parent_id`, `label`, `orderBy`)
VALUES
	(1,0,'ajaxSave.php',1),
	(2,0,'buildTree.php',8),
	(3,0,'conf.php',9),
	(4,0,'css',7),
	(5,4,'style.css',1),
	(6,0,'images',6),
	(7,6,'collapsable.png',1),
	(8,6,'dot.png',6),
	(9,6,'expandable.png',5),
	(10,6,'leaf.png',4),
	(11,6,'plus.png',7),
	(12,6,'spacer.gif',3),
	(13,6,'spinner.gif',2),
	(14,0,'index.php',4),
	(15,0,'js',3),
	(16,15,'app.js',1),
	(17,15,'jquery.js',2),
	(18,15,'jquery.simple.tree.js',3),
	(19,0,'README.md',2),
	(20,0,'Tree.php',5);

/*!40000 ALTER TABLE `tree` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
