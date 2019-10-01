CREATE DATABASE `neurony` /*!40100 DEFAULT CHARACTER SET latin1 */;

CREATE TABLE `neurony`.`cars` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `brand` varchar(45) DEFAULT NULL,
  `model` varchar(45) DEFAULT NULL,
  `seats` tinyint(4) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `year` varchar(45) DEFAULT NULL,
  `brand_country` varchar(45) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
