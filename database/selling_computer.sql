-- MySQL dump 10.13  Distrib 8.0.23, for Linux (x86_64)
--
-- Host: localhost    Database: selling_computer
-- ------------------------------------------------------
-- Server version	8.0.23-0ubuntu0.20.10.1

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
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bill` (
  `bill_id` int NOT NULL AUTO_INCREMENT,
  `cart_id` int NOT NULL,
  `date_bill` datetime DEFAULT NULL,
  `total_money` int DEFAULT NULL,
  PRIMARY KEY (`bill_id`),
  KEY `cart_id` (`cart_id`),
  CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bill`
--

LOCK TABLES `bill` WRITE;
/*!40000 ALTER TABLE `bill` DISABLE KEYS */;
/*!40000 ALTER TABLE `bill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cart` (
  `cart_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  PRIMARY KEY (`cart_id`),
  KEY `user_name` (`user_name`),
  CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `guest` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart_products`
--

DROP TABLE IF EXISTS `cart_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cart_products` (
  `cart_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int DEFAULT NULL,
  PRIMARY KEY (`cart_id`,`product_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `cart_products_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  CONSTRAINT `cart_products_ibfk_2` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart_products`
--

LOCK TABLES `cart_products` WRITE;
/*!40000 ALTER TABLE `cart_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `computer_mouse_products`
--

DROP TABLE IF EXISTS `computer_mouse_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `computer_mouse_products` (
  `computer_mouse_product_id` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `standard_connection` tinyint(1) DEFAULT NULL,
  `connection_protocol` varchar(50) DEFAULT NULL,
  `is_led` tinyint(1) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`computer_mouse_product_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `computer_mouse_products_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `computer_mouse_products`
--

LOCK TABLES `computer_mouse_products` WRITE;
/*!40000 ALTER TABLE `computer_mouse_products` DISABLE KEYS */;
INSERT INTO `computer_mouse_products` VALUES (2,20001,1,'USB Receiver',1,'3.89 in  x 2.36 in  x 1.54 in');
/*!40000 ALTER TABLE `computer_mouse_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `computer_products`
--

DROP TABLE IF EXISTS `computer_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `computer_products` (
  `computer_product_id` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `s_cpu` varchar(50) DEFAULT NULL,
  `s_ram` varchar(50) DEFAULT NULL,
  `s_storage` int DEFAULT NULL,
  `screen` varchar(50) DEFAULT NULL,
  `s_card` varchar(50) DEFAULT NULL,
  `main_connection` varchar(50) DEFAULT NULL,
  `os` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`computer_product_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `computer_products_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `computer_products`
--

LOCK TABLES `computer_products` WRITE;
/*!40000 ALTER TABLE `computer_products` DISABLE KEYS */;
INSERT INTO `computer_products` VALUES (10,10001,'AMD Ryzen 7 3700U','8GB DDR4 bus 2400MHz',512,'14.0\" FHD IPS (1920x1080)','AMD Radeon Vega 10',' USB-C 3.0','Windows 10 Home'),(12,10002,'Intel Core i3-1115G4','4GB DDR4 bus 3200 MHz',256,'15.6\\\" FHD IPS','Intel UHD G4','USB-C 3.2','Windows 10 Home SL'),(13,10003,'Intel Core i5-9300H','8GB DDR4 bus 2666 MHz',256,'15.6\" FHD IPS','NVIDIA GeForce GTX 1650 4GB','USB-A, C','Windows 10'),(14,30001,'Ryzen 7 PRO 2700','8GB DDR4 bus 2666 MHz',256,'','Nvidia Geforce GT730 2GB','USB-A, SD','Windows 10'),(15,10004,'Intel Core i5 10300H','8GB DDR4 bus 2933 MHz',256,'15.6\" FHD+ IPS',' Intel UHD 630','USB-C','Windows 10');
/*!40000 ALTER TABLE `computer_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evaluate`
--

DROP TABLE IF EXISTS `evaluate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `evaluate` (
  `user_name` varchar(50) NOT NULL,
  `product_id` int NOT NULL,
  `star` int DEFAULT NULL,
  `your_comment` text,
  `date_comment` datetime DEFAULT NULL,
  PRIMARY KEY (`user_name`,`product_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `evaluate_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `guest` (`user_name`),
  CONSTRAINT `evaluate_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evaluate`
--

LOCK TABLES `evaluate` WRITE;
/*!40000 ALTER TABLE `evaluate` DISABLE KEYS */;
/*!40000 ALTER TABLE `evaluate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guest`
--

DROP TABLE IF EXISTS `guest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `guest` (
  `user_name` varchar(50) NOT NULL,
  `your_password` varchar(50) DEFAULT NULL,
  `your_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guest`
--

LOCK TABLES `guest` WRITE;
/*!40000 ALTER TABLE `guest` DISABLE KEYS */;
INSERT INTO `guest` VALUES ('huy0628','123456','Nguyen Quang Huy');
/*!40000 ALTER TABLE `guest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `laptop`
--

DROP TABLE IF EXISTS `laptop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `laptop` (
  `laptop_id` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `battery` int DEFAULT NULL,
  PRIMARY KEY (`laptop_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `laptop_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laptop`
--

LOCK TABLES `laptop` WRITE;
/*!40000 ALTER TABLE `laptop` DISABLE KEYS */;
INSERT INTO `laptop` VALUES (2,10001,37),(3,10002,41),(4,10003,59),(5,10004,56);
/*!40000 ALTER TABLE `laptop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pc`
--

DROP TABLE IF EXISTS `pc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pc` (
  `pc_id` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `i_case` text,
  PRIMARY KEY (`pc_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `pc_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pc`
--

LOCK TABLES `pc` WRITE;
/*!40000 ALTER TABLE `pc` DISABLE KEYS */;
INSERT INTO `pc` VALUES (4,30001,'');
/*!40000 ALTER TABLE `pc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `product_id` int NOT NULL,
  `model` varchar(50) DEFAULT NULL,
  `image` text,
  `price` double DEFAULT NULL,
  `weigh` double DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `number_of_product` int DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `p_description` text,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (10001,'AVITA Liber V14 AMD','https://lumen.thinkpro.vn//backend/uploads/product/color_images/2021/4/23/liberv14a-summerpink-1.jpg',14990000,1.28,'Pink',100,'AVITA',NULL),(10002,'HP Pavilion 15 (Intel Gen 11)','https://lumen.thinkpro.vn//backend/uploads/product/color_images/2021/3/17/pavi15g11silver-1.jpg',13790000,1.75,'Grey',100,'HP',NULL),(10003,'Acer Nitro 5 2019','https://lumen.thinkpro.vn//backend/uploads/product/color_images/2020/7/16/acer-nitro-5-Nitro501NF-Adv.jpg',17490000,2.45,'Black',100,'Acer',''),(10004,'Dell XPS 15 9500','https://lumen.thinkpro.vn//backend/uploads/product/color_images/2020/9/6/Dell-XPS-15-9500-1.jpg',35990000,2,'Silver',100,'Dell',NULL),(20001,'Chuột Logitech M185','https://lumen.thinkpro.vn//backend/uploads/product/color_images/2020/9/15/m185-01jpg',229000,0.076,'Black',1000,'Logitech',''),(30001,'Lenovo ThinkCentre M725s SFF','https://lumen.thinkpro.vn//backend/uploads/product/color_images/2020/7/16/lenovo-thinkcentre-m725s-sff-ThinkCentreM725sSFF01NO-pwN.jpg',15990000,8,'Black',50,'Lenovo','');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'selling_computer'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-05  1:13:17
