/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.9-MariaDB : Database - mvc
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mvc` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `mvc`;

/*Table structure for table `hotel` */

DROP TABLE IF EXISTS `hotel`;

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '호텔번호',
  `title` varchar(20) DEFAULT NULL COMMENT '호텔이름',
  `destination` varchar(20) DEFAULT NULL COMMENT '호텔위치',
  `description` varchar(255) DEFAULT NULL COMMENT '설명',
  `img_src` varchar(255) DEFAULT NULL COMMENT 'image',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `hotel` */

insert  into `hotel`(`id`,`title`,`destination`,`description`,`img_src`) values (1,'Atlantis-The Palm','DUBAI','Very nice and very top','bootstrap/img/image_atlantis.png'),(2,'Hilton','London','asdfasfdasdfasfd','bootstrap/img/image_hilton.png'),(3,'MGM Grand','LAS VEGAS','asdfasdfadsfasdfasdf','bootstrap/img/image_mgm.png'),(4,'Crown Casino','AUSTRALIA','asdfasdfasfasfd','bootstrap/img/image_casnio.png');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
