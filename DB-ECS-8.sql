/*
SQLyog Ultimate v12.09 (32 bit)
MySQL - 10.4.21-MariaDB : Database - ecs-8
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ecs-8` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `ecs-8`;

/*Table structure for table `autos` */

DROP TABLE IF EXISTS `autos`;

CREATE TABLE `autos` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Marca` text DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `autos` */

insert  into `autos`(`Id`,`Marca`) values (1,'Ford'),(2,'Mercedez'),(3,'Fiat'),(4,'Camaro'),(5,'Hummer');

/*Table structure for table `personas` */

DROP TABLE IF EXISTS `personas`;

CREATE TABLE `personas` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Nombre` text DEFAULT NULL,
  `Apellido` text DEFAULT NULL,
  `NroDocumento` text DEFAULT NULL,
  `Direccion` text DEFAULT NULL,
  `Email` text DEFAULT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `UnikDNI` (`NroDocumento`) USING HASH
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `personas` */

insert  into `personas`(`Id`,`Nombre`,`Apellido`,`NroDocumento`,`Direccion`,`Email`) values (1,'Juan','Perez','11222333','Corrientes 101','juan.perez@sql.yog'),(2,'Maria','Martinez','22333444','Mitre 101','maria.martinez@sql.yog'),(3,'Flor','Farru','33444555','San Martin 101','flor.farru@sql.yog');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
