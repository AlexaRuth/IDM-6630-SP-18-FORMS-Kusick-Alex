-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: 
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Current Database: `week04`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `week04` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `week04`;

--
-- Table structure for table `10_Fav_Albums`
--

DROP TABLE IF EXISTS `10_Fav_Albums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `10_Fav_Albums` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `artist` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `cover` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `10_Fav_Albums`
--

LOCK TABLES `10_Fav_Albums` WRITE;
/*!40000 ALTER TABLE `10_Fav_Albums` DISABLE KEYS */;
INSERT INTO `10_Fav_Albums` VALUES (1,'Various','Quiero Creedence',2013,'../img/creedence.jpg'),(2,'Empire of the Sun ','Walking on a Dream',2009,'../img/empire.jpg'),(3,'Guns N Roses','Use Your Illusion 1',1973,'../img/illusion.jpg'),(4,'Keane','Best Of Keane',2013,'../img/keane.jpg'),(5,'Kesha','Rainbow',2017,'../img/kesha.jpg'),(6,'Kishi Bashi','151a',2005,'../img/kishi.jpg'),(7,'One Republic','Dreaming Out Loud',2008,'../img/onerepublic.jpg'),(8,'Pink Floyd','Darkside of the Moon',1973,'../img/pinkfloyd.jpg'),(9,'You + Me ','Roseave. ',2014,'../img/roseave.jpg'),(10,'City and Colour','Sometimes',2005,'../img/sometimes.jpg');
/*!40000 ALTER TABLE `10_Fav_Albums` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Top 10 Albums`
--

DROP TABLE IF EXISTS `Top 10 Albums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Top 10 Albums` (
  `Title` varchar(255) NOT NULL,
  `Artist` varchar(255) NOT NULL,
  `Year` year(4) NOT NULL,
  `Cover` varchar(255) NOT NULL,
  PRIMARY KEY (`Title`,`Artist`,`Year`,`Cover`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Top 10 Albums`
--

LOCK TABLES `Top 10 Albums` WRITE;
/*!40000 ALTER TABLE `Top 10 Albums` DISABLE KEYS */;
INSERT INTO `Top 10 Albums` VALUES ('151a','Kishi Bashi',2012,'img/kishi.jpg'),('Channel Orange','Frank Ocean',2012,'img/frank.jpg'),('Dreaming Out Loud','One Republic',2007,'img/onerepublic.jpg'),('Quiero Creedence ','Various Artists',2016,'img/creedence.jpg'),('Rainbow','Kesha',2017,'img/kesha.jpg'),('Rose Ave.','You + Me',2014,'img/roseave.jpg'),('Sometimes','City and Colour',2005,'img/sometimes.jpg'),('The Best of Keane','Keane',2013,'img/keane.jpg'),('Use Your Illusion 1','Guns N Roses',1973,'img/illusion.jpg'),('Walking On a Dream','Empire of the Sun',2009,'img/empire.jpg');
/*!40000 ALTER TABLE `Top 10 Albums` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-12  6:34:42
