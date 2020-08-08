/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.1.21-MariaDB : Database - dumpways2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dumpways2` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dumpways2`;

/*Table structure for table `skill_tb` */

DROP TABLE IF EXISTS `skill_tb`;

CREATE TABLE `skill_tb` (
  `id` int(10) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  KEY `fk_users_tb` (`id`),
  CONSTRAINT `fk_users_tb` FOREIGN KEY (`id`) REFERENCES `users_tb` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `skill_tb` */

insert  into `skill_tb`(`id`,`name`,`user_id`) values 
(1,'game','1'),
(2,'android','2'),
(3,'web','3'),
(4,'ios','4'),
(5,'hybird','5');

/*Table structure for table `users_tb` */

DROP TABLE IF EXISTS `users_tb`;

CREATE TABLE `users_tb` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `users_tb` */

insert  into `users_tb`(`id`,`name`,`photo`) values 
(1,'hendri',''),
(2,'mustakim',''),
(3,'henmus',''),
(4,'henmuskim',''),
(5,'hendrimusta','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
