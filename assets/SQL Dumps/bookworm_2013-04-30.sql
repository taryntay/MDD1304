# ************************************************************
# Sequel Pro SQL dump
# Version 4004
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.25)
# Database: bookworm
# Generation Time: 2013-05-01 00:06:33 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table books
# ------------------------------------------------------------

DROP TABLE IF EXISTS `books`;

CREATE TABLE `books` (
  `bookId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '',
  `author` varchar(50) NOT NULL DEFAULT '',
  `review` varchar(500) NOT NULL DEFAULT '',
  `quote` varchar(200) NOT NULL DEFAULT '',
  `favorite` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`bookId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;

INSERT INTO `books` (`bookId`, `title`, `author`, `review`, `quote`, `favorite`)
VALUES
	(2,'Catcher in the Rye','J.D. Salinger','A very interesting read.','Don\'t ever tell anybody anything. If you do, you start missing everybody.','No'),
	(6,'Brave New World','Alduous Huxley','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','COMMUNITY, IDENTITY, STABILITY.','Yes'),
	(11,'The Great Gatsby','F. Scott Fitzgerald','The best book of all time!','I was going to bring back all such things into my life and become again that most limited of all specialists, the \'well-rounded man.\'','Yes'),
	(12,'Lord of the Flies','William Golding','Lord of the Flies is an allegorical novel with a fairly obvious set of symbols to decode. The symbology is yet another reason the novel is popular with young readers (although their assurance may be misplaced). The novel also offers very believable characters and brief bursts of subtlety that are haunting and memorable. -About.com','Maybe there is a beast....maybe it\'s only us.','No');

/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL DEFAULT '',
  `username` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL DEFAULT '',
  `last_name` varchar(20) NOT NULL DEFAULT '',
  `newsletter` tinyint(1) DEFAULT NULL,
  `email` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `first_name`, `username`, `password`, `last_name`, `newsletter`, `email`)
VALUES
	(1,'Taryn','taryn','34819d7beeabb9260a5c854bc85b3e44','Taylor',NULL,''),
	(2,'Matthew','manderson','32b6aa53d5644377d7f8c2e7001e7fdf','Anderson',NULL,''),
	(3,'John','jdoe','f4eb27cea7255cea4d1ffabf593372e8','Doe',NULL,''),
	(28,'Johnny','apples','daeccf0ad3c1fc8c8015205c332f5b42','Appleseed',NULL,''),
	(4,'Tiffany','tifftht','2d5ea6a425103cacd243fabd27aa6cc6','Taylor',NULL,''),
	(5,'Myname','myusername','a029d0df84eb5549c641e04a9ef389e5','YourName',NULL,''),
	(31,'First Name','Username','dc647eb65e6711e155375218212b3964','Last Name',NULL,''),
	(30,'Tom','tomjones','65f185ec6bd47af8f082f8196d0b4d24','Jones',NULL,''),
	(29,'Sam','samjones','f5018389773b7cf2ba416f56119968dc','Jones',NULL,''),
	(6,'John','jsmith','6c569aabbf7775ef8fc570e228c16b98','Smith',NULL,''),
	(41,'Julie','juliea','18d6769919266cd0bd6cd78aa405d5d0','Andrews',NULL,''),
	(40,'myname','myuser','a029d0df84eb5549c641e04a9ef389e5','mylastname',NULL,''),
	(39,'First Name','Username','dc647eb65e6711e155375218212b3964','Last Name',NULL,''),
	(42,'Billy','billybob','93b542f0c7a6f2279fc94f44b013baf1','Bob',NULL,'billybob@gmail.com'),
	(43,'Taryn','laynie','9f80f4d1bc08f1325c72af4306bdeaf7','Layne',NULL,'tlayne@gmail.com'),
	(44,'Tanner','tanner','177f6b75da142d09d92cab3c06218e2c','Taylor',NULL,'tanner@tanner.com'),
	(45,'Tanner','tanner','177f6b75da142d09d92cab3c06218e2c','Taylor',NULL,'tanner@tanner.com');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
