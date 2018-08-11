-- MySQL dump 10.13  Distrib 5.5.39, for Win32 (x86)
--
-- Host: localhost    Database: sewabuku
-- ------------------------------------------------------
-- Server version	5.5.39

CREATE DATABASE sewabuku;

USE sewabuku;

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
-- Table structure for table `buku`
--

DROP TABLE IF EXISTS `buku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buku` (
  `idbuku` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(10) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `pengarang` varchar(40) NOT NULL,
  `penerbit` varchar(40) NOT NULL,
  `stok` int(11) NOT NULL,
  `foto` varchar(40) NOT NULL,
  PRIMARY KEY (`idbuku`),
  KEY `kode` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buku`
--

LOCK TABLES `buku` WRITE;
/*!40000 ALTER TABLE `buku` DISABLE KEYS */;
INSERT INTO `buku` VALUES (1,'B001','Mengungkap Rahasia Pembuatan Virus','Agha Abdurahman Natasha','Informatika Bandung',1,'Rahasia Virus.jpg'),(3,'B007','Pengembangan Web Dengan JQuery','Wahana Komputer','Informatika Bandung',0,'Pengembangan Web JQuery.jpg'),(4,'B005','Live Coding! 9 Aplikasi Android','Arif Akbarul Huda','Irawan',38,'Live Coding.jpg');
/*!40000 ALTER TABLE `buku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_peminjaman`
--

DROP TABLE IF EXISTS `detail_peminjaman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_peminjaman` (
  `iddetailpinjam` int(11) NOT NULL AUTO_INCREMENT,
  `idpeminjam` int(11) NOT NULL,
  `idbuku` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`iddetailpinjam`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_peminjaman`
--

LOCK TABLES `detail_peminjaman` WRITE;
/*!40000 ALTER TABLE `detail_peminjaman` DISABLE KEYS */;
INSERT INTO `detail_peminjaman` VALUES (1,2,3,1),(2,3,3,1),(3,3,1,1),(4,4,3,1),(5,4,1,1),(6,4,2,1),(7,5,3,1),(8,6,3,1),(9,6,2,1),(10,6,1,1),(11,7,1,1),(12,7,2,1),(13,7,2,1),(14,7,2,1),(15,7,2,1),(16,7,1,1),(17,7,1,1),(18,7,2,1),(19,7,1,1),(20,7,1,1),(21,7,1,1),(22,7,2,1),(23,7,2,1),(24,7,2,1),(25,7,2,1),(26,7,2,1),(27,7,2,1),(28,7,2,1),(29,7,2,1),(30,8,3,1),(31,9,3,1),(32,10,3,1),(33,10,1,1),(34,11,1,1),(35,12,3,1),(36,12,4,1),(37,12,1,1),(38,12,1,1),(39,13,1,1),(40,13,4,1),(41,13,3,1);
/*!40000 ALTER TABLE `detail_peminjaman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peminjam`
--

DROP TABLE IF EXISTS `peminjam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peminjam` (
  `idpeminjam` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `peminjam` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL DEFAULT '',
  `notelp` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`idpeminjam`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peminjam`
--

LOCK TABLES `peminjam` WRITE;
/*!40000 ALTER TABLE `peminjam` DISABLE KEYS */;
INSERT INTO `peminjam` VALUES (2,'2016-12-09','Masyoudi','masyoudi@gmail.com','085269260529'),(3,'2016-12-09','Masyoudi','masyoudi@gmail.com','085269260529'),(4,'2016-12-09','Masyoudi ','masyoudi@gmail.com','085269260529'),(5,'2016-12-09','gghgh','fgf@dgmu.com','32556'),(6,'2016-12-09','Massgeh','gdfhf@gdfhf.com','78534'),(7,'2016-12-09','Masyoudi','masyoudi@gmail.com','085269260529'),(8,'2016-12-09','hfhhd','jj@gjk.com','484'),(9,'2016-12-09','jtrjiti','gasdgd@hfd.com','5688685'),(10,'2016-12-09','ktltult','dfhhs@fhdf.com','58859'),(11,'2016-12-09','ehdfj','fhd@gdfhj.com','y74574'),(12,'2016-12-09','kvhjdf','cbkxlb@fjb.com','63063'),(13,'2016-12-09','Masyoudi','masyoudi@gmail.com','085269260529');
/*!40000 ALTER TABLE `peminjam` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-09 10:49:45
