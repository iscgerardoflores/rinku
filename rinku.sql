/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 10.4.25-MariaDB : Database - rinku
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`rinku` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `rinku`;

/*Table structure for table `empleados` */

DROP TABLE IF EXISTS `empleados`;

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numempleado` int(11) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellidoPaterno` varchar(255) DEFAULT NULL,
  `apellidoMaterno` varchar(255) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_ultimo_cambio` datetime DEFAULT NULL,
  `deleted` binary(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `empleados` */

insert  into `empleados`(`id`,`numempleado`,`nombre`,`apellidoPaterno`,`apellidoMaterno`,`id_rol`,`fecha_creacion`,`fecha_ultimo_cambio`,`deleted`) values 
(1,100,'Gerardo','Flores','De La Cruz',2,'2023-05-10 22:04:46','2023-05-12 03:52:18',NULL),
(2,200,'Alejandro','Flores','De la Cruz',2,'2023-05-11 04:48:35','2023-05-11 04:48:35',NULL),
(3,300,'Alejandro','Flores','De la Cruz',3,'2023-05-11 04:50:10','2023-05-11 04:50:10',NULL),
(4,400,'Manuel','Flores','De la Cruz',1,'2023-05-11 04:50:59','2023-05-11 04:50:59',NULL),
(5,500,'Arturo','Flores','De la Cruz',2,'2023-05-11 04:52:41','2023-05-11 04:52:41',NULL),
(6,600,'Antonio','Flores','De la Cruz',3,'2023-05-11 04:53:17','2023-05-11 04:53:17',NULL),
(7,700,'Adrian','Flores','De la Cruz',1,'2023-05-11 04:56:54','2023-05-11 04:56:54',NULL),
(8,800,'Enrique','Flores','De la Cruz',2,'2023-05-11 05:00:56','2023-05-11 05:00:56',NULL),
(9,900,'Javier','Flores','De la Cruz',2,'2023-05-11 05:01:14','2023-05-11 05:01:14',NULL),
(10,10000,'Heriberto','Osorio','Flores',3,'2023-05-11 05:25:02','2023-05-12 02:03:57',NULL),
(11,1100,'Mario','Flores','De la Cruz',1,'2023-05-11 05:28:09','2023-05-11 05:28:09',NULL),
(12,1300,'Humberto','Flores','De la Cruz',1,'2023-05-11 05:57:09','2023-05-12 02:04:18',NULL);

/*Table structure for table `movimientos` */

DROP TABLE IF EXISTS `movimientos`;

CREATE TABLE `movimientos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numempleado` int(11) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `mes` int(11) DEFAULT NULL,
  `num_entregas` int(11) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_ultimo_cambio` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `movimientos` */

insert  into `movimientos`(`id`,`numempleado`,`nombre`,`id_rol`,`mes`,`num_entregas`,`fecha_creacion`,`fecha_ultimo_cambio`,`deleted`) values 
(1,100,'Gerardo',2,5,10,'2023-05-12 04:09:13','2023-05-12 04:09:13',NULL),
(2,100,'Gerardo',2,5,10,'2023-05-12 04:10:46','2023-05-12 04:10:46',NULL),
(3,200,'Alejandro',2,5,10,'2023-05-12 04:11:52','2023-05-12 04:11:52',NULL),
(4,700,'Adrian',1,5,10,'2023-05-12 04:12:35','2023-05-12 04:12:35',NULL),
(5,900,'Javier',2,1,5,'2023-05-12 04:21:07','2023-05-12 04:21:07',NULL),
(6,500,'Arturo',2,7,10,'2023-05-12 04:21:18','2023-05-12 04:21:18',NULL),
(7,200,'Alejandro',2,4,10,'2023-05-12 04:21:49','2023-05-12 04:21:49',NULL),
(8,800,'Enrique',2,11,5,'2023-05-12 04:22:04','2023-05-12 04:22:04',NULL),
(9,1100,'Mario',1,5,10,'2023-05-12 04:22:13','2023-05-12 04:22:13',NULL),
(10,300,'Alejandro',3,11,5,'2023-05-12 04:22:23','2023-05-12 04:22:23',NULL),
(11,600,'Antonio',3,11,8,'2023-05-12 04:22:41','2023-05-12 04:22:41',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
