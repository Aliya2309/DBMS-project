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
-- Table structure for table `ingredients`
--

DROP TABLE IF EXISTS `ingredients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ingredients` (
  `id_ingredients` int NOT NULL AUTO_INCREMENT,
  `ingd_name` varchar(100) NOT NULL,
  `quantity` int NOT NULL,
  `expiry` date DEFAULT NULL,
  `sup_id` int NOT NULL,
  PRIMARY KEY (`id_ingredients`),
  KEY `sup_id_idx` (`sup_id`),
  CONSTRAINT `sup_id` FOREIGN KEY (`sup_id`) REFERENCES `supplier` (`id_supplier`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingredients`
--

LOCK TABLES `ingredients` WRITE;
/*!40000 ALTER TABLE `ingredients` DISABLE KEYS */;
INSERT INTO `ingredients` VALUES (1,'Olive oil',15,'2030-01-01',1),(2,'All purpose flour',20,'2024-11-11',1),(3,'Butter',10,'2022-04-22',3),(4,'Chicken',5,'2020-12-30',5),(5,'Sugar',40,'2030-01-01',1),(6,'Salt',10,'2030-01-01',1),(7,'Egg',36,'2020-01-12',5),(8,'Rice',50,'2030-01-01',1),(9,'Vegetable oil',50,'2030-01-01',1),(10,'Pork',10,'2020-12-30',2),(11,'Beef',10,'2020-12-30',2),(12,'Cheese',30,'2021-04-01',3),(13,'Garlic',50,'2020-01-12',6),(14,'Orange',15,'2020-01-12',4),(15,'Turkey',20,'2020-12-30',2),(16,'Onion',20,'2020-12-30',4),(17,'Corn',20,'2020-01-12',4),(18,'Whole milk',10,'2020-01-12',3),(19,'Mayonnaise',10,'2021-04-01',1),(20,'Chiles',20,'2021-04-01',1),(21,'Almonds',50,'2021-04-01',1),(22,'Bacon',15,'2020-12-30',2),(23,'Mushrooms',20,'2020-01-12',4),(24,'Coconut',20,'2021-04-01',1),(25,'Beets',20,'2020-01-12',4),(26,'Strawberries',10,'2020-01-12',4),(27,'Fennel',10,'2020-12-30',4),(28,'Lamb',30,'2020-12-30',2),(29,'Apple',10,'2020-01-12',4),(30,'Shrimp',20,'2020-12-30',2),(31,'Black Pepper',5,'2030-01-01',6),(32,'Garlic Powder',5,'2030-01-01',6),(33,'Thyme',5,'2030-01-01',6),(34,'Cinnamon',5,'2030-01-01',6),(35,'Oregano',5,'2030-01-01',6),(36,'Rosemary',5,'2030-01-01',6),(37,'Cayenne Pepper',5,'2030-01-01',6),(38,'Cumin',5,'2030-01-01',6),(39,'Nutmeg',5,'2030-01-01',6),(40,'Paprika',5,'2030-01-01',6);
/*!40000 ALTER TABLE `ingredients` ENABLE KEYS */;
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
