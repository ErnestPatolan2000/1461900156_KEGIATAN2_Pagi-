/*
SQLyog Professional v12.5.1 (64 bit)
MySQL - 10.4.14-MariaDB : Database - juju
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`juju` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `juju`;

/*Table structure for table `prosesparkir` */

DROP TABLE IF EXISTS `prosesparkir`;

CREATE TABLE `prosesparkir` (
  `platnomor` varchar(12) NOT NULL,
  `tglmasuk` datetime NOT NULL,
  `tglkeluar` datetime NOT NULL,
  `status` varchar(1) NOT NULL,
  `selisih` int(11) NOT NULL,
  `biaya` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `prosesparkir` */

insert  into `prosesparkir`(`platnomor`,`tglmasuk`,`tglkeluar`,`status`,`selisih`,`biaya`) values 
('L102GG','2021-04-10 12:44:09','0000-00-00 00:00:00','m',0,0),
('L1234GZ','2021-04-01 09:54:48','0000-00-00 00:00:00','m',0,0),
('B1234BC','2021-04-13 10:55:24','2021-04-13 14:55:24','k',0,5000);

/*Table structure for table `ruangparkir` */

DROP TABLE IF EXISTS `ruangparkir`;

CREATE TABLE `ruangparkir` (
  `lantai` varchar(3) NOT NULL,
  `platnomor` varchar(12) DEFAULT NULL,
  `posisi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `ruangparkir` */

insert  into `ruangparkir`(`lantai`,`platnomor`,`posisi`) values 
('101','L102GG','kiri'),
('102','L1234GZ','kanan'),
('',' ',''),
('103',' ','kiri'),
('104',' ','kanan'),
('105',' ','kanan'),
('201',' ','kiri');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `namalengkap` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`username`,`password`,`namalengkap`,`level`) values 
('admin','123','administrator ','admin'),
('aru123','aru123','aruru','mobmasuk'),
('adu123','adu123','adudu','mobkel'),
('au123','au123','auauauao','ruang');


DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
