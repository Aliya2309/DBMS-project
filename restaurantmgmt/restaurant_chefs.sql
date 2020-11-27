CREATE DATABASE  IF NOT EXISTS `restaurant` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `restaurant`;
-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: restaurant
-- ------------------------------------------------------
-- Server version	8.0.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `chefs`
--

DROP TABLE IF EXISTS `chefs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chefs` (
  `id_chefs` int NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `position` varchar(60) NOT NULL,
  `hours_worked` int DEFAULT '0',
  PRIMARY KEY (`id_chefs`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chefs`
--

LOCK TABLES `chefs` WRITE;
/*!40000 ALTER TABLE `chefs` DISABLE KEYS */;
INSERT INTO `chefs` VALUES (1,'Byron Wang','9864689642','Wilkinson Royd','Sous Chef',11),(2,'Shelly Alvarez','9864749972','Fifth Pastures','Chef de Cuisine',8),(3,'Zunaira Merrill','7893746293','Elgin Mead','Sous Chef',11),(4,'Regan Cano','8635482023','Olive Passage','Sous Chef',11),(5,'Mac Kelley','9556764424','Sylvan Maltings','Chef de Cuisine',11),(6,'Amin Mansell','8653235685','Langham Green','Sous Chef',11),(7,'Olaf Schroeder','7907635563','Ellison Link','Sous Chef',11),(8,'Azeem Crane','9663345673','Booth Links','Chef de Cuisine',11),(9,'Preston Woodley','8566790863','Tamarisk Road','Chef de Partie',11),(10,'Aubrey Scott','8542456789','Frances Alley','Chef de Partie',11),(11,'Korey Singh','9654674353','Alberta Close','Sous Chef',11),(12,'Hailie Rhodes','8632555789','Osborne Common','Sous Chef',11),(13,'Phebe Ballard','9656789754','Bell Grange','Chef de Cuisine',11),(14,'Antoinette Mills','7895675434','Hill View Meadow','Chef de Partie',11),(15,'Zac Logan','9764562345','Mill Hill Chase','Sous Chef',11),(16,'Hasnain Lester','8653245676','St Ives Acres','Sous Chef',11),(17,'Archie Stevens','9643575432','Briar Wharf','Chef de Partie',11),(18,'Kaylan Alfaro','8654456789','Courtenay Ridge','Sous Chef',11),(19,'Marianna Howard','9875453567','Snowdon By-Pass','Chef de Partie',11),(20,'Daria Snider','7543567890',' Ash Woods','Chef de Partie',11);
/*!40000 ALTER TABLE `chefs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-28  0:21:17
