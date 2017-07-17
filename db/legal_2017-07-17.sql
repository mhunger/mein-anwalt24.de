# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.55-0ubuntu0.14.04.1)
# Database: legal
# Generation Time: 2017-07-17 12:57:02 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table legal_case
# ------------------------------------------------------------

DROP TABLE IF EXISTS `legal_case`;

CREATE TABLE `legal_case` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `income` decimal(11,2) unsigned NOT NULL,
  `date_of_employment` date NOT NULL,
  `date_of_birth` date NOT NULL,
  `children` int(11) DEFAULT NULL,
  `disability` tinyint(1) DEFAULT NULL,
  `wage_agreement` tinyint(1) DEFAULT NULL,
  `social_plan` tinyint(1) DEFAULT NULL,
  `company_size` int(11) DEFAULT NULL,
  `sector` varchar(255) DEFAULT '',
  `works_council` tinyint(1) DEFAULT NULL,
  `leadership_management` tinyint(1) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `termination_reason` varchar(255) DEFAULT NULL,
  `termination_status` varchar(255) DEFAULT NULL,
  `termination_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `legal_case` WRITE;
/*!40000 ALTER TABLE `legal_case` DISABLE KEYS */;

INSERT INTO `legal_case` (`id`, `income`, `date_of_employment`, `date_of_birth`, `children`, `disability`, `wage_agreement`, `social_plan`, `company_size`, `sector`, `works_council`, `leadership_management`, `state`, `termination_reason`, `termination_status`, `termination_type`)
VALUES
	(3,60000.00,'2013-01-01','1980-10-29',1,0,0,0,77,'Financial Services',0,0,'0',NULL,NULL,NULL);

/*!40000 ALTER TABLE `legal_case` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
