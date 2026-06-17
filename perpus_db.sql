-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: perpus_db
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `namespace` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time` int NOT NULL,
  `batch` int unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2026-04-30-051330','App\\Database\\Migrations\\PerpusTables','default','App',1777527071,1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_admin` (
  `id_admin` int unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_admin` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `akses_level` int NOT NULL DEFAULT '3',
  `status` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_admin`
--

LOCK TABLES `tbl_admin` WRITE;
/*!40000 ALTER TABLE `tbl_admin` DISABLE KEYS */;
INSERT INTO `tbl_admin` VALUES (4,'developer','$2y$10$aqfzWlqYjgdV46deCocE7uo2CEBHop7u0TaXeQSAj1OrSm/XdO1iu','developer',3,0);
/*!40000 ALTER TABLE `tbl_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_anggota`
--

DROP TABLE IF EXISTS `tbl_anggota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_anggota` (
  `id_anggota` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_anggota` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `jk` enum('L','P') COLLATE utf8mb4_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_anggota`
--

LOCK TABLES `tbl_anggota` WRITE;
/*!40000 ALTER TABLE `tbl_anggota` DISABLE KEYS */;
INSERT INTO `tbl_anggota` VALUES ('3','tes','L','090980890',';aosidjf;askdf\r\n'),('ANG004','sayang','L','08767676767','gajelas\r\n'),('ANG005','lkasdjf;lkasdf','L','0987878',';laskdfjas\r\n'),('ANG006','gaharus','P','23424243','gajelas\r\n');
/*!40000 ALTER TABLE `tbl_anggota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_buku`
--

DROP TABLE IF EXISTS `tbl_buku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_buku` (
  `id_buku` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `judul_buku` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `pengarang` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `penerbit` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tahun` varchar(4) COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah_eksemplar` int NOT NULL,
  `id_kategori` int NOT NULL,
  `id_rak` int NOT NULL,
  `keterangan` text COLLATE utf8mb4_general_ci,
  `cover_buku` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `e_book` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_buku`
--

LOCK TABLES `tbl_buku` WRITE;
/*!40000 ALTER TABLE `tbl_buku` DISABLE KEYS */;
INSERT INTO `tbl_buku` VALUES ('BK-001','Pemrograman Web dengan CI4','Antigravity','Google Deepmind','2026',10,1,1,'Buku panduan CI4',NULL,NULL),('BK-002','Dasar-dasar AI','Deepmind Team','Tech Press','2025',5,1,2,'Buku dasar AI',NULL,NULL),('BK-003','a\'flads;l','as;dlfkas\'d','a;slkfa\'lds','2384',230423,4,2,'asdfasd','1777528838_cbc6d3e024ffe987e7a5.png','1777528838_2e2ff5f3695b43b4ccc6.pdf'),('BK-005','dfja;lkdsjfasdd','lakdsjf;aldks','lakdjfad','2000',200,6,4,'akldjf;adls',NULL,'1780994833_886d546fb5601d7d12cc.pdf');
/*!40000 ALTER TABLE `tbl_buku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_detail_peminjaman`
--

DROP TABLE IF EXISTS `tbl_detail_peminjaman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_detail_peminjaman` (
  `id_detail` int unsigned NOT NULL AUTO_INCREMENT,
  `no_peminjaman` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `id_buku` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_detail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_detail_peminjaman`
--

LOCK TABLES `tbl_detail_peminjaman` WRITE;
/*!40000 ALTER TABLE `tbl_detail_peminjaman` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_detail_peminjaman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_kategori`
--

DROP TABLE IF EXISTS `tbl_kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_kategori` (
  `id_kategori` int unsigned NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_kategori`
--

LOCK TABLES `tbl_kategori` WRITE;
/*!40000 ALTER TABLE `tbl_kategori` DISABLE KEYS */;
INSERT INTO `tbl_kategori` VALUES (6,'cobaksjdfkasd');
/*!40000 ALTER TABLE `tbl_kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_peminjaman`
--

DROP TABLE IF EXISTS `tbl_peminjaman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_peminjaman` (
  `no_peminjaman` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `id_anggota` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `id_admin` int NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Dipinjam',
  PRIMARY KEY (`no_peminjaman`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_peminjaman`
--

LOCK TABLES `tbl_peminjaman` WRITE;
/*!40000 ALTER TABLE `tbl_peminjaman` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_peminjaman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_rak`
--

DROP TABLE IF EXISTS `tbl_rak`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_rak` (
  `id_rak` int unsigned NOT NULL AUTO_INCREMENT,
  `nama_rak` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_rak`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_rak`
--

LOCK TABLES `tbl_rak` WRITE;
/*!40000 ALTER TABLE `tbl_rak` DISABLE KEYS */;
INSERT INTO `tbl_rak` VALUES (3,'Rak B1iugiugkg'),(4,'Rak B2'),(5,'tes'),(9,'nambah');
/*!40000 ALTER TABLE `tbl_rak` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_temp_peminjaman`
--

DROP TABLE IF EXISTS `tbl_temp_peminjaman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_temp_peminjaman` (
  `id_temp` int unsigned NOT NULL AUTO_INCREMENT,
  `id_buku` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_temp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_temp_peminjaman`
--

LOCK TABLES `tbl_temp_peminjaman` WRITE;
/*!40000 ALTER TABLE `tbl_temp_peminjaman` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_temp_peminjaman` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-06-09 16:22:08
