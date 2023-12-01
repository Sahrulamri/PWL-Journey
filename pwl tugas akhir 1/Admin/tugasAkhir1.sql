/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.24-MariaDB : Database - toko_bunga
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`toko_bunga` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `toko_bunga`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `hrg` double DEFAULT NULL,
  `jml` int(11) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `foto` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang` */

insert  into `barang`(`id`,`nama`,`hrg`,`jml`,`keterangan`,`foto`) values 
(1,'aglonema sukson',45000,10,NULL,NULL),
(2,'aglonema Rotuntud Aceh',30000,10,'aglonema',NULL),
(3,'aglonemaRoDudAnjamani',75000,10,'-',NULL),
(4,'aglonemaSnowWhiteRemaja',77,10,'-',NULL),
(5,'aglonemaSuperWhite',90000,50,'-',NULL),
(6,'aglonemaVenus',90000,10,'77',NULL),
(7,'aglonemaRedAnjamaniDewasa',75000,10,'-',NULL),
(8,'aglonemaAyunindi',35000,10,'-',NULL),
(9,'AglonemaKhocin',35000,5,NULL,NULL);

/*Table structure for table `member` */

DROP TABLE IF EXISTS `member`;

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nama_member` varchar(40) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telp` varchar(30) DEFAULT NULL,
  `alamat` varchar(60) DEFAULT NULL,
  `kota` varchar(40) DEFAULT NULL,
  `provinsi` varchar(40) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `foto` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `member` */

insert  into `member`(`id`,`nama_member`,`email`,`telp`,`alamat`,`kota`,`provinsi`,`gender`,`username`,`password`,`foto`) values 
(1,'Agus','agus@gmail.com','1234','Jl. Melati IV 212','Semarang','Jateng','1','agus','123',NULL),
(2,'Joko','joko@gmail.com','','jl. Jalan Bambu Seru','Semarang','Jateng',NULL,'joko','123',NULL);

/*Table structure for table `mhs` */

DROP TABLE IF EXISTS `mhs`;

CREATE TABLE `mhs` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `prodi` varchar(20) DEFAULT NULL,
  `ipk` double DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `kota_asal` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `mhs` */

insert  into `mhs`(`nim`,`nama`,`prodi`,`ipk`,`alamat`,`kota_asal`) values 
('A11.2022.00005','Bayu','TI-S1',3.9,'Yokohama','Surabaya'),
('A11.2022.00006','Yuki','DKV-S1',3.91,'Yokohama','Madura'),
('A11.2022.00007','Yuno','DKV-S1',3.89,'Yokohama','Surabaya');

/*Table structure for table `tborder` */

DROP TABLE IF EXISTS `tborder`;

CREATE TABLE `tborder` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idmember` int(10) NOT NULL,
  `tgl` date NOT NULL,
  `jenisByr` varchar(20) DEFAULT NULL,
  `bank` varchar(40) DEFAULT NULL,
  `norek` varchar(40) DEFAULT NULL,
  `biayaKirim` double DEFAULT NULL,
  `pembelian` double DEFAULT NULL,
  `totalByr` double DEFAULT NULL,
  `ekspedisi` varchar(40) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tborder` */

/*Table structure for table `tborder_detail` */

DROP TABLE IF EXISTS `tborder_detail`;

CREATE TABLE `tborder_detail` (
  `idorder` int(11) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `jml` float NOT NULL,
  `hrg` int(11) NOT NULL,
  PRIMARY KEY (`idorder`,`idbarang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tborder_detail` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `iduser` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`iduser`,`username`,`password`,`foto`) values 
(1,'admin','123',NULL),
(2,'Fauzan','123',NULL),
(4,'amin aaaaa','123456',NULL),
(5,'aaa','12345',NULL),
(7,'Kiko','',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
