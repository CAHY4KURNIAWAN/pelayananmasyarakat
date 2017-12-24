-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: pelayananmasyarakat
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.19-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `idADMIN` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idADMIN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','admin13');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `laporan`
--

DROP TABLE IF EXISTS `laporan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `laporan` (
  `No_Tiket_Laporan` int(11) NOT NULL AUTO_INCREMENT,
  `Tanggal` varchar(45) NOT NULL,
  `Judul` varchar(45) NOT NULL,
  `Kategori` varchar(45) NOT NULL,
  `Keluhan` varchar(1000) NOT NULL,
  `Pelapor_idPelapor` int(11) NOT NULL,
  `status_idstatus` int(11) NOT NULL,
  `Petugas_id_Petugas` varchar(45) NOT NULL,
  PRIMARY KEY (`No_Tiket_Laporan`),
  KEY `fk_Laporan_Petugas1_idx` (`Petugas_id_Petugas`),
  KEY `fk_Laporan_status1_idx` (`status_idstatus`),
  KEY `fk_Laporan_Pelapor1_idx` (`Pelapor_idPelapor`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laporan`
--

LOCK TABLES `laporan` WRITE;
/*!40000 ALTER TABLE `laporan` DISABLE KEYS */;
INSERT INTO `laporan` VALUES (4,'01/12/2017','Tindak Kriminal','Perampokan','tester',2587960,2,'Sofyan Adi Nugroho'),(5,'01/12/2017','Kriminal','Pembegalan','asli',2147483647,0,'0'),(7,'01/12/2017','qwert','Perampokan','asdfgh',2147483647,2,'Mahmud');
/*!40000 ALTER TABLE `laporan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log_history`
--

DROP TABLE IF EXISTS `log_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log_history` (
  `id_logHistory` int(11) NOT NULL AUTO_INCREMENT,
  `Tanggal` varchar(45) NOT NULL,
  `Keterangan` varchar(45) DEFAULT NULL,
  `Laporan_No_Tiket_Laporan` int(11) NOT NULL,
  PRIMARY KEY (`id_logHistory`),
  KEY `fk_log_history_Laporan1_idx` (`Laporan_No_Tiket_Laporan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_history`
--

LOCK TABLES `log_history` WRITE;
/*!40000 ALTER TABLE `log_history` DISABLE KEYS */;
INSERT INTO `log_history` VALUES (2,'05/01/2017','tester',1);
/*!40000 ALTER TABLE `log_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pelapor`
--

DROP TABLE IF EXISTS `pelapor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pelapor` (
  `idPelapor` int(11) NOT NULL AUTO_INCREMENT,
  `NIK` bigint(16) NOT NULL,
  `Nama` varchar(45) NOT NULL,
  `Alamat` varchar(45) NOT NULL,
  `Jenis_kelamin` varchar(45) NOT NULL,
  `No_telepon` varchar(45) NOT NULL,
  `E_mail` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`idPelapor`),
  UNIQUE KEY `idPelapor_UNIQUE` (`idPelapor`),
  UNIQUE KEY `NIK_UNIQUE` (`NIK`),
  UNIQUE KEY `E_mail_UNIQUE` (`E_mail`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pelapor`
--

LOCK TABLES `pelapor` WRITE;
/*!40000 ALTER TABLE `pelapor` DISABLE KEYS */;
INSERT INTO `pelapor` VALUES (2,2587960,'Muhammad Nur Ikhsan','Sariasih 2','Laki-Laki','0852645922','nurikhsan175@gmail.com','827ccb0eea8a706c4c34a16891f84e7b'),(3,2147483647,'Budi','sariasih','Laki-Laki','02265489','budi@budi.com','c5fe25896e49ddfe996db7508cf00534');
/*!40000 ALTER TABLE `pelapor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `petugas`
--

DROP TABLE IF EXISTS `petugas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `petugas` (
  `id_Petugas` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(45) NOT NULL,
  `Jabatan` varchar(45) NOT NULL,
  PRIMARY KEY (`id_Petugas`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `petugas`
--

LOCK TABLES `petugas` WRITE;
/*!40000 ALTER TABLE `petugas` DISABLE KEYS */;
INSERT INTO `petugas` VALUES (1,'Sofyan Adi Nugroho','Sersan'),(2,'Adi Putra Senjaya','Sersan'),(3,'Tommy Saputra','Jendral');
/*!40000 ALTER TABLE `petugas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `idstatus` int(11) NOT NULL,
  `deskripsi` varchar(45) NOT NULL,
  PRIMARY KEY (`idstatus`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (0,'Belum Diproses'),(1,'Sedang Dikerjakan'),(2,'Sudah Ditangani'),(3,'Sudah Selesai');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-22 22:35:02
