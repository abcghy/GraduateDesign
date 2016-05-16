-- MySQL dump 10.13  Distrib 5.7.9, for osx10.9 (x86_64)
--
-- Host: 127.0.0.1    Database: test
-- ------------------------------------------------------
-- Server version	5.5.42-log

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
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `car` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `model` int(20) NOT NULL,
  `type` int(20) NOT NULL,
  `price` int(10) NOT NULL,
  `year` year(4) NOT NULL,
  `mile` int(10) NOT NULL,
  `fixed` tinyint(4) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `user` int(20) NOT NULL,
  `detail` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `model` (`model`),
  KEY `type` (`type`),
  KEY `user` (`user`),
  KEY `detail` (`detail`),
  CONSTRAINT `car_ibfk_1` FOREIGN KEY (`model`) REFERENCES `model` (`id`),
  CONSTRAINT `car_ibfk_2` FOREIGN KEY (`type`) REFERENCES `type` (`id`),
  CONSTRAINT `car_ibfk_3` FOREIGN KEY (`user`) REFERENCES `user` (`id`),
  CONSTRAINT `car_ibfk_4` FOREIGN KEY (`detail`) REFERENCES `detail` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car`
--

LOCK TABLES `car` WRITE;
/*!40000 ALTER TABLE `car` DISABLE KEYS */;
INSERT INTO `car` VALUES (1,385,11,123800,2013,86400,1,'马自达 2012年款 马自达6 睿翼 2.0 手自一体 精英版','',3,1),(2,3,11,245799,2014,25299,1,'奥迪 2013年款 A4L 2.0TFSI 无级 35TFSI 舒适型','',3,2),(3,11,11,378500,2015,14400,1,'奥迪 2014年款 A5 Coupe 2.0TFSI 无级 45TFSI','',4,3),(4,34,12,173800,2014,51600,1,'宝马 2013年款 116i 1.6T 手自一体 领先型(改款)','',4,4),(5,31,11,125800,2009,83400,1,'宝马 2009年款 320i 2.0 手自一体 豪华型','',4,5),(6,65,13,389799,2013,27200,1,'奔驰 2014年款 E 200 Coupe 2.0T 手自一体','',5,6),(7,65,11,199800,2012,60199,1,'奔驰 2011年款 C 200 CGI 1.8T 手自一体 时尚型','',5,7),(8,177,12,69800,2010,86700,1,'大众 2011年款 宝来 1.4TSI 双离合 舒适版','',1,8),(9,207,12,162800,2013,29900,1,'大众 2013年款 Beetle [甲壳虫] 1.4TSI 双离合 舒适型','',1,9),(10,159,12,162800,2013,29900,1,'别克 2014年款 GL8 商务车 2.4 手自一体 舒适版','',1,10),(11,163,11,229800,2015,3800,1,'别克 2015年款 君越 2.0T SIDI 手自一体 智享旗舰型','',1,11),(12,390,12,58800,2010,47500,1,'马自达 2010年款 马自达3 1.6 手自一体 经典款 时尚版','',1,12),(13,564,11,208000,2011,63099,1,'英菲尼迪 2010年款 G25-Sedan [G25-三厢] 2.5 手自一体 豪华运动版','',1,13);
/*!40000 ALTER TABLE `car` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail`
--

DROP TABLE IF EXISTS `detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `a0` varchar(40) DEFAULT NULL,
  `a1` varchar(40) DEFAULT NULL,
  `a2` varchar(40) DEFAULT NULL,
  `a3` varchar(40) DEFAULT NULL,
  `a4` varchar(40) DEFAULT NULL,
  `a5` varchar(40) DEFAULT NULL,
  `a6` varchar(40) DEFAULT NULL,
  `a7` varchar(40) DEFAULT NULL,
  `a8` varchar(40) DEFAULT NULL,
  `a9` varchar(40) DEFAULT NULL,
  `a10` varchar(40) DEFAULT NULL,
  `a11` varchar(40) DEFAULT NULL,
  `a12` varchar(40) DEFAULT NULL,
  `a13` varchar(40) DEFAULT NULL,
  `a14` varchar(40) DEFAULT NULL,
  `a15` varchar(40) DEFAULT NULL,
  `a16` varchar(40) DEFAULT NULL,
  `a17` varchar(40) DEFAULT NULL,
  `a18` varchar(40) DEFAULT NULL,
  `a19` varchar(40) DEFAULT NULL,
  `a20` varchar(40) DEFAULT NULL,
  `a21` varchar(40) DEFAULT NULL,
  `a22` varchar(40) DEFAULT NULL,
  `a23` varchar(40) DEFAULT NULL,
  `a24` varchar(40) DEFAULT NULL,
  `a25` varchar(40) DEFAULT NULL,
  `a26` varchar(40) DEFAULT NULL,
  `a27` varchar(40) DEFAULT NULL,
  `a28` varchar(40) DEFAULT NULL,
  `a29` varchar(40) DEFAULT NULL,
  `a30` varchar(40) DEFAULT NULL,
  `a31` varchar(40) DEFAULT NULL,
  `a32` varchar(40) DEFAULT NULL,
  `a33` varchar(40) DEFAULT NULL,
  `a34` varchar(40) DEFAULT NULL,
  `a35` varchar(40) DEFAULT NULL,
  `a36` varchar(40) DEFAULT NULL,
  `a37` varchar(40) DEFAULT NULL,
  `a38` varchar(40) DEFAULT NULL,
  `a39` varchar(40) DEFAULT NULL,
  `a40` varchar(40) DEFAULT NULL,
  `a41` varchar(40) DEFAULT NULL,
  `a42` varchar(40) DEFAULT NULL,
  `a43` varchar(40) DEFAULT NULL,
  `a44` varchar(40) DEFAULT NULL,
  `a45` varchar(40) DEFAULT NULL,
  `a46` varchar(40) DEFAULT NULL,
  `a47` varchar(40) DEFAULT NULL,
  `a48` varchar(40) DEFAULT NULL,
  `a49` varchar(40) DEFAULT NULL,
  `a50` varchar(40) DEFAULT NULL,
  `a51` varchar(40) DEFAULT NULL,
  `a52` varchar(40) DEFAULT NULL,
  `a53` varchar(40) DEFAULT NULL,
  `a54` varchar(40) DEFAULT NULL,
  `a55` varchar(40) DEFAULT NULL,
  `a56` varchar(40) DEFAULT NULL,
  `a57` varchar(40) DEFAULT NULL,
  `a58` varchar(40) DEFAULT NULL,
  `a59` varchar(40) DEFAULT NULL,
  `a60` varchar(40) DEFAULT NULL,
  `a61` varchar(40) DEFAULT NULL,
  `a62` varchar(40) DEFAULT NULL,
  `a63` varchar(40) DEFAULT NULL,
  `a64` varchar(40) DEFAULT NULL,
  `a65` varchar(40) DEFAULT NULL,
  `a66` varchar(40) DEFAULT NULL,
  `a67` varchar(40) DEFAULT NULL,
  `a68` varchar(40) DEFAULT NULL,
  `a69` varchar(40) DEFAULT NULL,
  `a70` varchar(40) DEFAULT NULL,
  `a71` varchar(40) DEFAULT NULL,
  `a72` varchar(40) DEFAULT NULL,
  `a73` varchar(40) DEFAULT NULL,
  `a74` varchar(40) DEFAULT NULL,
  `a75` varchar(40) DEFAULT NULL,
  `a76` varchar(40) DEFAULT NULL,
  `a77` varchar(40) DEFAULT NULL,
  `a78` varchar(40) DEFAULT NULL,
  `a79` varchar(40) DEFAULT NULL,
  `a80` varchar(40) DEFAULT NULL,
  `a81` varchar(40) DEFAULT NULL,
  `a82` varchar(40) DEFAULT NULL,
  `a83` varchar(40) DEFAULT NULL,
  `a84` varchar(40) DEFAULT NULL,
  `a85` varchar(40) DEFAULT NULL,
  `a86` varchar(40) DEFAULT NULL,
  `a87` varchar(40) DEFAULT NULL,
  `a88` varchar(40) DEFAULT NULL,
  `a89` varchar(40) DEFAULT NULL,
  `a90` varchar(40) DEFAULT NULL,
  `a91` varchar(40) DEFAULT NULL,
  `a92` varchar(40) DEFAULT NULL,
  `a93` varchar(40) DEFAULT NULL,
  `a94` varchar(40) DEFAULT NULL,
  `a95` varchar(40) DEFAULT NULL,
  `a96` varchar(40) DEFAULT NULL,
  `a97` varchar(40) DEFAULT NULL,
  `a98` varchar(40) DEFAULT NULL,
  `a99` varchar(40) DEFAULT NULL,
  `a100` varchar(40) DEFAULT NULL,
  `a101` varchar(40) DEFAULT NULL,
  `a102` varchar(40) DEFAULT NULL,
  `a103` varchar(40) DEFAULT NULL,
  `a104` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail`
--

LOCK TABLES `detail` WRITE;
/*!40000 ALTER TABLE `detail` DISABLE KEYS */;
INSERT INTO `detail` VALUES (1,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','左前门油漆：重做油漆','','','左后（中）门油漆：重做油漆','','','','','','左后叶子板油漆：重做油漆','','后盖油漆：重做油漆','','','','后保险杠油漆：重做油漆','','右后叶子板油漆：重做油漆','右后（中）门油漆：重做油漆','','右前门油漆：重做油漆','','','','','','','','右前叶子板油漆：重做油漆','','前机盖油漆：重做油漆','前保险杠油漆：重做油漆','','','左前叶子板油漆：重做油漆','','','','','','','','','','','',''),(2,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','左后叶子板油漆：重做油漆','','','','','','','','右后叶子板油漆：重做油漆','右后（中）门油漆：重做油漆','','右前门油漆：重做油漆','','','','','','','','右前叶子板油漆：重做油漆,钣金油漆','','','前保险杠油漆：重做油漆','','','','','','','','','','','','','','',''),(3,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','左后叶子板油漆：重做油漆','','','','','','','','','','','右前门油漆：重做油漆','','','','','','','','','','','前保险杠油漆：重做油漆','','','左前叶子板油漆：重做油漆','','','','','','','','','','','',''),(4,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','左前门油漆：重做油漆','','','左后（中）门油漆：重做油漆','','','','','','左后叶子板油漆：重做油漆','','','','','','后保险杠油漆：重做油漆','','右后叶子板油漆：重做油漆','右后（中）门油漆：重做油漆','','右前门油漆：重做油漆','','','','','','','','右前叶子板油漆：重做油漆','','前机盖油漆：重做油漆','前保险杠油漆：重做油漆','','','左前叶子板油漆：重做油漆','','','','','','','','','','','',''),(5,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','机油油底壳：漏油','','','','','','','','','','','','','','机油油底壳：漏油','','','','','','左后叶子板油漆：重做油漆','','后盖油漆：重做油漆','','','','后保险杠油漆：重做油漆','','右后叶子板油漆：重做油漆','右后（中）门油漆：重做油漆','','右前门油漆：重做油漆','','','','','','','','右前叶子板油漆：重做油漆','','前机盖油漆：重做油漆','前保险杠油漆：重做油漆','','','左前叶子板油漆：重做油漆','','','','','','','','','','','',''),(6,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','左后叶子板油漆：重做油漆','','','','','','后保险杠油漆：重做油漆','','右后叶子板油漆：重做油漆','','','右前门油漆：重做油漆','','','','','','','','','','','前保险杠油漆：重做油漆','','','','','','','','','','','','','','',''),(7,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','左前门油漆：钣金油漆','','','左后（中）门油漆：钣金油漆','','','','','','左后叶子板油漆：重做油漆','','','','','','后保险杠油漆：重做油漆','','右后叶子板油漆：重做油漆','右后（中）门油漆：重做油漆','','右前门油漆：重做油漆','','','','','','','','右前叶子板油漆：重做油漆','','前机盖油漆：已更换','前保险杠油漆：更换','右前大灯生产日期：已更换','','左前叶子板油漆：重做油漆','','前档玻璃生产日期（确定：不匹配,更换','','','','','','','','','',''),(8,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','左前门油漆：重做油漆','','','左后（中）门油漆：重做油漆','','','','','','左后叶子板油漆：重做油漆','','后盖油漆：重做油漆','','','','后保险杠油漆：重做油漆','','右后叶子板油漆：重做油漆,钣金油漆','右后（中）门油漆：重做油漆','','右前门油漆：重做油漆','','','','','','','','右前叶子板油漆：重做油漆','','前机盖油漆：重做油漆','前保险杠油漆：重做油漆','','','左前叶子板油漆：重做油漆','','','','','','','','','','','',''),(9,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','左后叶子板油漆：重做油漆','','后盖油漆：重做油漆','','','','后保险杠油漆：重做油漆','','右后叶子板油漆：重做油漆','','','','','','','','','右车身下裙边板油漆：钣金油漆','','','','','前保险杠油漆：重做油漆','','','','','','','','','','','','','','',''),(10,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','左前门油漆：重做油漆','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','前保险杠油漆：重做油漆','','','','','','','','','','','','','','',''),(11,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','左后（中）门油漆：重做油漆','','','','','','','','后盖油漆：重做油漆','','','','','','右后叶子板油漆：重做油漆','右后（中）门油漆：重做油漆','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(12,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','机油油底壳：轻微渗油','','','','','','','','','','','机油油底壳：轻微渗油','','','左后（中）门油漆：重做油漆','','','','','','左后叶子板油漆：重做油漆','','','','','','后保险杠油漆：重做油漆','','右后叶子板油漆：重做油漆','右后（中）门油漆：重做油漆','','右前门油漆：重做油漆','','','','','','','','右前叶子板油漆：重做油漆','','','前保险杠油漆：重做油漆','','','左前叶子板油漆：重做油漆','','','','','','','','','','','',''),(13,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','右前减震器：更换','','','','右前减震器：更换','','','','','','','','','','左后轮轮胎胎压检测：胎压不足','','','','','后保险杠油漆：重做油漆','','','','','','','','','','','','','','','','前保险杠油漆：重做油漆','','','左前叶子板油漆：重做油漆','','','','','','','','','','','',''),(14,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(15,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(16,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(17,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(18,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(19,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(20,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(21,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(22,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(23,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(24,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
/*!40000 ALTER TABLE `detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evaluate`
--

DROP TABLE IF EXISTS `evaluate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `evaluate` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `model` int(20) NOT NULL,
  `year` year(4) NOT NULL,
  `mile` int(10) NOT NULL,
  `evaluate_price` int(10) NOT NULL,
  `fixed` tinyint(4) NOT NULL,
  `user` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `model` (`model`),
  KEY `user` (`user`),
  CONSTRAINT `evaluate_ibfk_1` FOREIGN KEY (`model`) REFERENCES `model` (`id`),
  CONSTRAINT `evaluate_ibfk_2` FOREIGN KEY (`user`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evaluate`
--

LOCK TABLES `evaluate` WRITE;
/*!40000 ALTER TABLE `evaluate` DISABLE KEYS */;
/*!40000 ALTER TABLE `evaluate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favourite`
--

DROP TABLE IF EXISTS `favourite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `favourite` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user` int(20) NOT NULL,
  `car` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`user`),
  KEY `car` (`car`),
  CONSTRAINT `favourite_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`id`),
  CONSTRAINT `favourite_ibfk_2` FOREIGN KEY (`car`) REFERENCES `car` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favourite`
--

LOCK TABLES `favourite` WRITE;
/*!40000 ALTER TABLE `favourite` DISABLE KEYS */;
INSERT INTO `favourite` VALUES (1,5,4);
/*!40000 ALTER TABLE `favourite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `src` varchar(100) NOT NULL,
  `car` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `car` (`car`),
  CONSTRAINT `image_ibfk_1` FOREIGN KEY (`car`) REFERENCES `car` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=244 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` VALUES (1,'http://img1.dongdalou.com/cars/RZ-20160425-12281988-appearance-number1.jpeg@1200w_900h_80q',1),(2,'http://img1.dongdalou.com/cars/RZ-20160425-12281988-appearance-number2.jpeg@1200w_900h_80q',1),(3,'http://img1.dongdalou.com/cars/RZ-20160425-12281988-appearance-number3.jpeg@1200w_900h_80q',1),(4,'http://img1.dongdalou.com/cars/RZ-20160425-12281988-appearance-number4.jpeg@1200w_900h_80q',1),(5,'http://img1.dongdalou.com/cars/RZ-20160425-12281988-appearance-number5.jpeg@1200w_900h_80q',1),(6,'http://img1.dongdalou.com/cars/RZ-20160425-12281988-appearance-number6.jpeg@1200w_900h_80q',1),(7,'http://img1.dongdalou.com/cars/RZ-20160425-12281988-appearance-number7.jpeg@1200w_900h_80q',1),(8,'http://img1.dongdalou.com/cars/RZ-20160425-12281988-appearance-number8.jpeg@1200w_900h_80q',1),(9,'http://img1.dongdalou.com/cars/RZ-20160425-12281988-appearance-number9.jpeg@1200w_900h_80q',1),(10,'http://img1.dongdalou.com/cars/RZ-20160425-12281988-appearance-number10.jpeg@1200w_900h_80q',1),(11,'http://img1.dongdalou.com/cars/RZ-20160425-12281988-interior-number11.jpeg@1200w_900h_80q',1),(12,'http://img1.dongdalou.com/cars/RZ-20160425-12281988-interior-number12.jpeg@1200w_900h_80q',1),(13,'http://img1.dongdalou.com/cars/RZ-20160425-12281988-interior-number13.jpeg@1200w_900h_80q',1),(14,'http://img1.dongdalou.com/cars/RZ-20160425-12281988-interior-number14.jpeg@1200w_900h_80q',1),(15,'http://img1.dongdalou.com/cars/RZ-20160425-12281988-interior-number15.jpeg@1200w_900h_80q',1),(16,'http://img1.dongdalou.com/cars/RZ-20160425-12281988-interior-number16.jpeg@1200w_900h_80q',1),(17,'http://img1.dongdalou.com/cars/RZ-20160425-12281988-interior-number17.jpeg@1200w_900h_80q',1),(18,'http://img1.dongdalou.com/cars/RZ-20160425-12281988-interior-number18.jpeg@1200w_900h_80q',1),(19,'http://img1.dongdalou.com/cars/RZ-20160430-02062955-appearance-number1.jpeg@1200w_900h_80q',2),(20,'http://img1.dongdalou.com/cars/RZ-20160430-02062955-appearance-number2.jpeg@1200w_900h_80q',2),(22,'http://img1.dongdalou.com/cars/RZ-20160430-02062955-appearance-number4.jpeg@1200w_900h_80q',2),(23,'http://img1.dongdalou.com/cars/RZ-20160430-02062955-appearance-number5.jpeg@1200w_900h_80q',2),(24,'http://img1.dongdalou.com/cars/RZ-20160430-02062955-interior-number11.jpeg@1200w_900h_80q',2),(25,'http://img1.dongdalou.com/cars/RZ-20160430-02062955-interior-number12.jpeg@1200w_900h_80q',2),(26,'http://img1.dongdalou.com/cars/RZ-20160430-02062955-interior-number13.jpeg@1200w_900h_80q',2),(27,'http://img1.dongdalou.com/cars/RZ-20160430-02062955-interior-number14.jpeg@1200w_900h_80q',2),(28,'http://img1.dongdalou.com/cars/RZ-20160430-02062955-interior-number15.jpeg@1200w_900h_80q',2),(29,'http://img1.dongdalou.com/cars/RZ-20160430-02062955-interior-number16.jpeg@1200w_900h_80q',2),(30,'http://img1.dongdalou.com/cars/RZ-20160430-02062955-interior-number17.jpeg@1200w_900h_80q',2),(31,'http://img1.dongdalou.com/cars/RZ-20160430-02062955-interior-number18.jpeg@1200w_900h_80q',2),(32,'http://img1.dongdalou.com/cars/RZ-20160430-02062955-interior-number19.jpeg@1200w_900h_80q',2),(33,'http://img1.dongdalou.com/cars/RZ-20160430-02062955-interior-number20.jpeg@1200w_900h_80q',2),(34,'http://img1.dongdalou.com/cars/RZ-20160430-02062955-interior-number21.jpeg@1200w_900h_80q',2),(35,'http://img1.dongdalou.com/cars/RZ-20160430-02062955-interior-number22.jpeg@1200w_900h_80q',2),(36,'http://img1.dongdalou.com/cars/RZ-20160430-02062955-interior-number23.jpeg@1200w_900h_80q',2),(37,'http://img1.dongdalou.com/cars/RZ-20160417-09073174-appearance-number1.jpeg@1200w_900h_80q',3),(38,'http://img1.dongdalou.com/cars/RZ-20160417-09073174-appearance-number2.jpeg@1200w_900h_80q',3),(39,'http://img1.dongdalou.com/cars/RZ-20160417-09073174-appearance-number3.jpeg@1200w_900h_80q',3),(40,'http://img1.dongdalou.com/cars/RZ-20160417-09073174-appearance-number4.jpeg@1200w_900h_80q',3),(41,'http://img1.dongdalou.com/cars/RZ-20160417-09073174-appearance-number5.jpeg@1200w_900h_80q',3),(42,'http://img1.dongdalou.com/cars/RZ-20160417-09073174-interior-number11.jpeg@1200w_900h_80q',3),(43,'http://img1.dongdalou.com/cars/RZ-20160417-09073174-interior-number12.jpeg@1200w_900h_80q',3),(44,'http://img1.dongdalou.com/cars/RZ-20160417-09073174-interior-number13.jpeg@1200w_900h_80q',3),(45,'http://img1.dongdalou.com/cars/RZ-20160417-09073174-interior-number14.jpeg@1200w_900h_80q',3),(46,'http://img1.dongdalou.com/cars/RZ-20160417-09073174-interior-number15.jpeg@1200w_900h_80q',3),(47,'http://img1.dongdalou.com/cars/RZ-20160417-09073174-interior-number16.jpeg@1200w_900h_80q',3),(48,'http://img1.dongdalou.com/cars/RZ-20160417-09073174-interior-number17.jpeg@1200w_900h_80q',3),(49,'http://img1.dongdalou.com/cars/RZ-20160417-09073174-interior-number18.jpeg@1200w_900h_80q',3),(50,'http://img1.dongdalou.com/cars/RZ-20160417-09073174-interior-number19.jpeg@1200w_900h_80q',3),(51,'http://img1.dongdalou.com/cars/RZ-20160417-09073174-interior-number20.jpeg@1200w_900h_80q',3),(52,'http://img1.dongdalou.com/cars/RZ-20160417-09073174-interior-number21.jpeg@1200w_900h_80q',3),(53,'http://img1.dongdalou.com/cars/RZ-20160417-09073174-interior-number22.jpeg@1200w_900h_80q',3),(54,'http://img1.dongdalou.com/cars/RZ-20160417-09073174-interior-number23.jpeg@1200w_900h_80q',3),(55,'http://img1.dongdalou.com/cars/RZ-20160430-12563136-appearance-number1.jpeg@1200w_900h_80q',4),(56,'http://img1.dongdalou.com/cars/RZ-20160430-12563136-appearance-number2.jpeg@1200w_900h_80q',4),(57,'http://img1.dongdalou.com/cars/RZ-20160430-12563136-appearance-number3.jpeg@1200w_900h_80q',4),(58,'http://img1.dongdalou.com/cars/RZ-20160430-12563136-appearance-number4.jpeg@1200w_900h_80q',4),(59,'http://img1.dongdalou.com/cars/RZ-20160430-12563136-appearance-number5.jpeg@1200w_900h_80q',4),(60,'http://img1.dongdalou.com/cars/RZ-20160430-12563136-interior-number11.jpeg@1200w_900h_80q',4),(61,'http://img1.dongdalou.com/cars/RZ-20160430-12563136-interior-number12.jpeg@1200w_900h_80q',4),(62,'http://img1.dongdalou.com/cars/RZ-20160430-12563136-interior-number13.jpeg@1200w_900h_80q',4),(63,'http://img1.dongdalou.com/cars/RZ-20160430-12563136-interior-number14.jpeg@1200w_900h_80q',4),(64,'http://img1.dongdalou.com/cars/RZ-20160430-12563136-interior-number15.jpeg@1200w_900h_80q',4),(65,'http://img1.dongdalou.com/cars/RZ-20160430-12563136-interior-number16.jpeg@1200w_900h_80q',4),(66,'http://img1.dongdalou.com/cars/RZ-20160430-12563136-interior-number17.jpeg@1200w_900h_80q',4),(67,'http://img1.dongdalou.com/cars/RZ-20160430-12563136-interior-number18.jpeg@1200w_900h_80q',4),(68,'http://img1.dongdalou.com/cars/RZ-20160430-12563136-interior-number19.jpeg@1200w_900h_80q',4),(69,'http://img1.dongdalou.com/cars/RZ-20160430-12563136-interior-number20.jpeg@1200w_900h_80q',4),(70,'http://img1.dongdalou.com/cars/RZ-20160430-12563136-interior-number21.jpeg@1200w_900h_80q',4),(71,'http://img1.dongdalou.com/cars/RZ-20160430-12563136-interior-number22.jpeg@1200w_900h_80q',4),(72,'http://img1.dongdalou.com/cars/RZ-20160430-12563136-interior-number23.jpeg@1200w_900h_80q',4),(73,'http://img1.dongdalou.com/cars/RZ-20160330-03504597-appearance-number1.jpeg@1200w_900h_80q',5),(74,'http://img1.dongdalou.com/cars/RZ-20160330-03504597-appearance-number2.jpeg@1200w_900h_80q',5),(75,'http://img1.dongdalou.com/cars/RZ-20160330-03504597-appearance-number3.jpeg@1200w_900h_80q',5),(76,'http://img1.dongdalou.com/cars/RZ-20160330-03504597-appearance-number4.jpeg@1200w_900h_80q',5),(77,'http://img1.dongdalou.com/cars/RZ-20160330-03504597-appearance-number5.jpeg@1200w_900h_80q',5),(78,'http://img1.dongdalou.com/cars/RZ-20160330-03504597-appearance-number6.jpeg@1200w_900h_80q',5),(79,'http://img1.dongdalou.com/cars/RZ-20160330-03504597-appearance-number7.jpeg@1200w_900h_80q',5),(80,'http://img1.dongdalou.com/cars/RZ-20160330-03504597-appearance-number8.jpeg@1200w_900h_80q',5),(81,'http://img1.dongdalou.com/cars/RZ-20160330-03504597-appearance-number9.jpeg@1200w_900h_80q',5),(82,'http://img1.dongdalou.com/cars/RZ-20160330-03504597-appearance-number10.jpeg@1200w_900h_80q',5),(83,'http://img1.dongdalou.com/cars/RZ-20160330-03504597-interior-number11.jpeg@1200w_900h_80q',5),(84,'http://img1.dongdalou.com/cars/RZ-20160330-03504597-interior-number12.jpeg@1200w_900h_80q',5),(85,'http://img1.dongdalou.com/cars/RZ-20160330-03504597-interior-number13.jpeg@1200w_900h_80q',5),(86,'http://img1.dongdalou.com/cars/RZ-20160330-03504597-interior-number14.jpeg@1200w_900h_80q',5),(87,'http://img1.dongdalou.com/cars/RZ-20160330-03504597-interior-number15.jpeg@1200w_900h_80q',5),(88,'http://img1.dongdalou.com/cars/RZ-20160330-03504597-interior-number16.jpeg@1200w_900h_80q',5),(89,'http://img1.dongdalou.com/cars/RZ-20160330-03504597-interior-number17.jpeg@1200w_900h_80q',5),(90,'http://img1.dongdalou.com/cars/RZ-20160330-03504597-interior-number18.jpeg@1200w_900h_80q',5),(93,'http://img1.dongdalou.com/cars/RZ-20160427-02030834-appearance-number1.jpeg@1200w_900h_80q',6),(94,'http://img1.dongdalou.com/cars/RZ-20160427-02030834-appearance-number2.jpeg@1200w_900h_80q',6),(95,'http://img1.dongdalou.com/cars/RZ-20160427-02030834-appearance-number3.jpeg@1200w_900h_80q',6),(96,'http://img1.dongdalou.com/cars/RZ-20160427-02030834-appearance-number4.jpeg@1200w_900h_80q',6),(97,'http://img1.dongdalou.com/cars/RZ-20160427-02030834-appearance-number5.jpeg@1200w_900h_80q',6),(98,'http://img1.dongdalou.com/cars/RZ-20160427-02030834-interior-number11.jpeg@1200w_900h_80q',6),(99,'http://img1.dongdalou.com/cars/RZ-20160427-02030834-interior-number12.jpeg@1200w_900h_80q',6),(100,'http://img1.dongdalou.com/cars/RZ-20160427-02030834-interior-number13.jpeg@1200w_900h_80q',6),(101,'http://img1.dongdalou.com/cars/RZ-20160427-02030834-interior-number14.jpeg@1200w_900h_80q',6),(102,'http://img1.dongdalou.com/cars/RZ-20160427-02030834-interior-number15.jpeg@1200w_900h_80q',6),(103,'http://img1.dongdalou.com/cars/RZ-20160427-02030834-interior-number16.jpeg@1200w_900h_80q',6),(104,'http://img1.dongdalou.com/cars/RZ-20160427-02030834-interior-number17.jpeg@1200w_900h_80q',6),(105,'http://img1.dongdalou.com/cars/RZ-20160427-02030834-interior-number18.jpeg@1200w_900h_80q',6),(106,'http://img1.dongdalou.com/cars/RZ-20160427-02030834-interior-number19.jpeg@1200w_900h_80q',6),(107,'http://img1.dongdalou.com/cars/RZ-20160427-02030834-interior-number20.jpeg@1200w_900h_80q',6),(108,'http://img1.dongdalou.com/cars/RZ-20160427-02030834-interior-number21.jpeg@1200w_900h_80q',6),(109,'http://img1.dongdalou.com/cars/RZ-20160427-02030834-interior-number22.jpeg@1200w_900h_80q',6),(110,'http://img1.dongdalou.com/cars/RZ-20160427-02030834-interior-number23.jpeg@1200w_900h_80q',6),(111,'http://img1.dongdalou.com/cars/RZ-20160416-11171899-appearance-number1.jpeg@1200w_900h_80q',7),(112,'http://img1.dongdalou.com/cars/RZ-20160416-11171899-appearance-number2.jpeg@1200w_900h_80q',7),(113,'http://img1.dongdalou.com/cars/RZ-20160416-11171899-appearance-number3.jpeg@1200w_900h_80q',7),(114,'http://img1.dongdalou.com/cars/RZ-20160416-11171899-appearance-number4.jpeg@1200w_900h_80q',7),(115,'http://img1.dongdalou.com/cars/RZ-20160416-11171899-appearance-number5.jpeg@1200w_900h_80q',7),(116,'http://img1.dongdalou.com/cars/RZ-20160416-11171899-appearance-number6.jpeg@1200w_900h_80q',7),(117,'http://img1.dongdalou.com/cars/RZ-20160416-11171899-appearance-number7.jpeg@1200w_900h_80q',7),(118,'http://img1.dongdalou.com/cars/RZ-20160416-11171899-appearance-number8.jpeg@1200w_900h_80q',7),(119,'http://img1.dongdalou.com/cars/RZ-20160416-11171899-appearance-number9.jpeg@1200w_900h_80q',7),(120,'http://img1.dongdalou.com/cars/RZ-20160416-11171899-appearance-number10.jpeg@1200w_900h_80q',7),(121,'http://img1.dongdalou.com/cars/RZ-20160416-11171899-interior-number11.jpeg@1200w_900h_80q',7),(122,'http://img1.dongdalou.com/cars/RZ-20160416-11171899-interior-number12.jpeg@1200w_900h_80q',7),(123,'http://img1.dongdalou.com/cars/RZ-20160416-11171899-interior-number13.jpeg@1200w_900h_80q',7),(124,'http://img1.dongdalou.com/cars/RZ-20160416-11171899-interior-number14.jpeg@1200w_900h_80q',7),(125,'http://img1.dongdalou.com/cars/RZ-20160416-11171899-interior-number15.jpeg@1200w_900h_80q',7),(126,'http://img1.dongdalou.com/cars/RZ-20160416-11171899-interior-number16.jpeg@1200w_900h_80q',7),(127,'http://img1.dongdalou.com/cars/RZ-20160416-11171899-interior-number17.jpeg@1200w_900h_80q',7),(128,'http://img1.dongdalou.com/cars/RZ-20160416-11171899-interior-number18.jpeg@1200w_900h_80q',7),(129,'http://img1.dongdalou.com/cars/RZ-20160421-11515949-appearance-number1.jpeg@1200w_900h_80q',8),(130,'http://img1.dongdalou.com/cars/RZ-20160421-11515949-appearance-number2.jpeg@1200w_900h_80q',8),(131,'http://img1.dongdalou.com/cars/RZ-20160421-11515949-appearance-number3.jpeg@1200w_900h_80q',8),(132,'http://img1.dongdalou.com/cars/RZ-20160421-11515949-appearance-number4.jpeg@1200w_900h_80q',8),(133,'http://img1.dongdalou.com/cars/RZ-20160421-11515949-appearance-number5.jpeg@1200w_900h_80q',8),(134,'http://img1.dongdalou.com/cars/RZ-20160421-11515949-appearance-number7.jpeg@1200w_900h_80q',8),(135,'http://img1.dongdalou.com/cars/RZ-20160421-11515949-appearance-number8.jpeg@1200w_900h_80q',8),(136,'http://img1.dongdalou.com/cars/RZ-20160421-11515949-appearance-number9.jpeg@1200w_900h_80q',8),(137,'http://img1.dongdalou.com/cars/RZ-20160421-11515949-appearance-number10.jpeg@1200w_900h_80q',8),(138,'http://img1.dongdalou.com/cars/RZ-20160421-11515949-interior-number11.jpeg@1200w_900h_80q',8),(139,'http://img1.dongdalou.com/cars/RZ-20160421-11515949-interior-number12.jpeg@1200w_900h_80q',8),(140,'http://img1.dongdalou.com/cars/RZ-20160421-11515949-interior-number13.jpeg@1200w_900h_80q',8),(141,'http://img1.dongdalou.com/cars/RZ-20160421-11515949-interior-number14.jpeg@1200w_900h_80q',8),(142,'http://img1.dongdalou.com/cars/RZ-20160421-11515949-interior-number15.jpeg@1200w_900h_80q',8),(143,'http://img1.dongdalou.com/cars/RZ-20160421-11515949-interior-number16.jpeg@1200w_900h_80q',8),(144,'http://img1.dongdalou.com/cars/RZ-20160421-11515949-interior-number17.jpeg@1200w_900h_80q',8),(145,'http://img1.dongdalou.com/cars/RZ-20160421-11515949-interior-number18.jpeg@1200w_900h_80q',8),(146,'http://img1.dongdalou.com/cars/RZ-20160421-11515949-interior-number19.jpeg@1200w_900h_80q',8),(147,'http://img1.dongdalou.com/cars/RZ-20160408-02484112-appearance-number1.jpeg@1200w_900h_80q',9),(148,'http://img1.dongdalou.com/cars/RZ-20160408-02484112-appearance-number2.jpeg@1200w_900h_80q',9),(149,'http://img1.dongdalou.com/cars/RZ-20160408-02484112-appearance-number3.jpeg@1200w_900h_80q',9),(150,'http://img1.dongdalou.com/cars/RZ-20160408-02484112-appearance-number4.jpeg@1200w_900h_80q',9),(151,'http://img1.dongdalou.com/cars/RZ-20160408-02484112-appearance-number5.jpeg@1200w_900h_80q',9),(152,'http://img1.dongdalou.com/cars/RZ-20160408-02484112-appearance-number6.jpeg@1200w_900h_80q',9),(153,'http://img1.dongdalou.com/cars/RZ-20160408-02484112-appearance-number7.jpeg@1200w_900h_80q',9),(154,'http://img1.dongdalou.com/cars/RZ-20160408-02484112-appearance-number8.jpeg@1200w_900h_80q',9),(155,'http://img1.dongdalou.com/cars/RZ-20160408-02484112-appearance-number9.jpeg@1200w_900h_80q',9),(156,'http://img1.dongdalou.com/cars/RZ-20160408-02484112-appearance-number10.jpeg@1200w_900h_80q',9),(157,'http://img1.dongdalou.com/cars/RZ-20160408-02484112-interior-number11.jpeg@1200w_900h_80q',9),(158,'http://img1.dongdalou.com/cars/RZ-20160408-02484112-interior-number12.jpeg@1200w_900h_80q',9),(159,'http://img1.dongdalou.com/cars/RZ-20160408-02484112-interior-number13.jpeg@1200w_900h_80q',9),(160,'http://img1.dongdalou.com/cars/RZ-20160408-02484112-interior-number14.jpeg@1200w_900h_80q',9),(161,'http://img1.dongdalou.com/cars/RZ-20160408-02484112-interior-number15.jpeg@1200w_900h_80q',9),(162,'http://img1.dongdalou.com/cars/RZ-20160408-02484112-interior-number16.jpeg@1200w_900h_80q',9),(163,'http://img1.dongdalou.com/cars/RZ-20160408-02484112-interior-number17.jpeg@1200w_900h_80q',9),(164,'http://img1.dongdalou.com/cars/RZ-20160408-02484112-interior-number18.jpeg@1200w_900h_80q',9),(166,'http://img1.dongdalou.com/cars/RZ-20160420-12262586-appearance-number1.jpeg@1200w_900h_80q',10),(167,'http://img1.dongdalou.com/cars/RZ-20160420-12262586-appearance-number2.jpeg@1200w_900h_80q',10),(168,'http://img1.dongdalou.com/cars/RZ-20160420-12262586-appearance-number3.jpeg@1200w_900h_80q',10),(169,'http://img1.dongdalou.com/cars/RZ-20160420-12262586-appearance-number4.jpeg@1200w_900h_80q',10),(170,'http://img1.dongdalou.com/cars/RZ-20160420-12262586-appearance-number5.jpeg@1200w_900h_80q',10),(171,'http://img1.dongdalou.com/cars/RZ-20160420-12262586-interior-number11.jpeg@1200w_900h_80q',10),(172,'http://img1.dongdalou.com/cars/RZ-20160420-12262586-interior-number12.jpeg@1200w_900h_80q',10),(173,'http://img1.dongdalou.com/cars/RZ-20160420-12262586-interior-number13.jpeg@1200w_900h_80q',10),(174,'http://img1.dongdalou.com/cars/RZ-20160420-12262586-interior-number14.jpeg@1200w_900h_80q',10),(175,'http://img1.dongdalou.com/cars/RZ-20160420-12262586-interior-number15.jpeg@1200w_900h_80q',10),(176,'http://img1.dongdalou.com/cars/RZ-20160420-12262586-interior-number16.jpeg@1200w_900h_80q',10),(177,'http://img1.dongdalou.com/cars/RZ-20160420-12262586-interior-number17.jpeg@1200w_900h_80q',10),(178,'http://img1.dongdalou.com/cars/RZ-20160420-12262586-interior-number18.jpeg@1200w_900h_80q',10),(179,'http://img1.dongdalou.com/cars/RZ-20160420-12262586-interior-number19.jpeg@1200w_900h_80q',10),(180,'http://img1.dongdalou.com/cars/RZ-20160420-12262586-interior-number20.jpeg@1200w_900h_80q',10),(181,'http://img1.dongdalou.com/cars/RZ-20160420-12262586-interior-number21.jpeg@1200w_900h_80q',10),(182,'http://img1.dongdalou.com/cars/RZ-20160420-12262586-interior-number22.jpeg@1200w_900h_80q',10),(183,'http://img1.dongdalou.com/cars/RZ-20160420-12262586-interior-number23.jpeg@1200w_900h_80q',10),(184,'http://img1.dongdalou.com/cars/RZ-20160421-04233115-appearance-number1.jpeg@1200w_900h_80q',11),(185,'http://img1.dongdalou.com/cars/RZ-20160421-04233115-appearance-number2.jpeg@1200w_900h_80q',11),(186,'http://img1.dongdalou.com/cars/RZ-20160421-04233115-appearance-number3.jpeg@1200w_900h_80q',11),(187,'http://img1.dongdalou.com/cars/RZ-20160421-04233115-appearance-number4.jpeg@1200w_900h_80q',11),(188,'http://img1.dongdalou.com/cars/RZ-20160421-04233115-appearance-number5.jpeg@1200w_900h_80q',11),(189,'http://img1.dongdalou.com/cars/RZ-20160421-04233115-appearance-number7.jpeg@1200w_900h_80q',11),(190,'http://img1.dongdalou.com/cars/RZ-20160421-04233115-appearance-number8.jpeg@1200w_900h_80q',11),(191,'http://img1.dongdalou.com/cars/RZ-20160421-04233115-appearance-number9.jpeg@1200w_900h_80q',11),(192,'http://img1.dongdalou.com/cars/RZ-20160421-04233115-appearance-number10.jpeg@1200w_900h_80q',11),(193,'http://img1.dongdalou.com/cars/RZ-20160421-04233115-interior-number11.jpeg@1200w_900h_80q',11),(194,'http://img1.dongdalou.com/cars/RZ-20160421-04233115-interior-number12.jpeg@1200w_900h_80q',11),(195,'http://img1.dongdalou.com/cars/RZ-20160421-04233115-interior-number13.jpeg@1200w_900h_80q',11),(196,'http://img1.dongdalou.com/cars/RZ-20160421-04233115-interior-number14.jpeg@1200w_900h_80q',11),(197,'http://img1.dongdalou.com/cars/RZ-20160421-04233115-interior-number15.jpeg@1200w_900h_80q',11),(198,'http://img1.dongdalou.com/cars/RZ-20160421-04233115-interior-number16.jpeg@1200w_900h_80q',11),(199,'http://img1.dongdalou.com/cars/RZ-20160421-04233115-interior-number17.jpeg@1200w_900h_80q',11),(200,'http://img1.dongdalou.com/cars/RZ-20160421-04233115-interior-number18.jpeg@1200w_900h_80q',11),(201,'http://img1.dongdalou.com/cars/RZ-20160421-04233115-interior-number19.jpeg@1200w_900h_80q',11),(202,'http://img1.dongdalou.com/cars/RZ-20160318-02212996-appearance-number1.jpeg@1200w_900h_80q',12),(203,'http://img1.dongdalou.com/cars/RZ-20160318-02212996-appearance-number2.jpeg@1200w_900h_80q',12),(204,'http://img1.dongdalou.com/cars/RZ-20160318-02212996-appearance-number3.jpeg@1200w_900h_80q',12),(205,'http://img1.dongdalou.com/cars/RZ-20160318-02212996-appearance-number4.jpeg@1200w_900h_80q',12),(206,'http://img1.dongdalou.com/cars/RZ-20160318-02212996-appearance-number5.jpeg@1200w_900h_80q',12),(207,'http://img1.dongdalou.com/cars/RZ-20160318-02212996-appearance-number6.jpeg@1200w_900h_80q',12),(208,'http://img1.dongdalou.com/cars/RZ-20160318-02212996-appearance-number7.jpeg@1200w_900h_80q',12),(209,'http://img1.dongdalou.com/cars/RZ-20160318-02212996-appearance-number8.jpeg@1200w_900h_80q',12),(210,'http://img1.dongdalou.com/cars/RZ-20160318-02212996-appearance-number9.jpeg@1200w_900h_80q',12),(211,'http://img1.dongdalou.com/cars/RZ-20160318-02212996-appearance-number10.jpeg@1200w_900h_80q',12),(212,'http://img1.dongdalou.com/cars/RZ-20160318-02212996-interior-number11.jpeg@1200w_900h_80q',12),(213,'http://img1.dongdalou.com/cars/RZ-20160318-02212996-interior-number12.jpeg@1200w_900h_80q',12),(214,'http://img1.dongdalou.com/cars/RZ-20160318-02212996-interior-number13.jpeg@1200w_900h_80q',12),(215,'http://img1.dongdalou.com/cars/RZ-20160318-02212996-interior-number14.jpeg@1200w_900h_80q',12),(216,'http://img1.dongdalou.com/cars/RZ-20160318-02212996-interior-number15.jpeg@1200w_900h_80q',12),(217,'http://img1.dongdalou.com/cars/RZ-20160318-02212996-interior-number16.jpeg@1200w_900h_80q',12),(218,'http://img1.dongdalou.com/cars/RZ-20160318-02212996-interior-number17.jpeg@1200w_900h_80q',12),(219,'http://img1.dongdalou.com/cars/RZ-20160318-02212996-interior-number18.jpeg@1200w_900h_80q',12),(220,'http://img1.dongdalou.com/cars/RZ-20160108-12345498-appearance-number1.jpeg@1200w_900h_80q',13),(221,'http://img1.dongdalou.com/cars/RZ-20160108-12345498-appearance-number2.jpeg@1200w_900h_80q',13),(222,'http://img1.dongdalou.com/cars/RZ-20160108-12345498-appearance-number3.jpeg@1200w_900h_80q',13),(223,'http://img1.dongdalou.com/cars/RZ-20160108-12345498-appearance-number4.jpeg@1200w_900h_80q',13),(224,'http://img1.dongdalou.com/cars/RZ-20160108-12345498-appearance-number5.jpeg@1200w_900h_80q',13),(225,'http://img1.dongdalou.com/cars/RZ-20160108-12345498-interior-number11.jpeg@1200w_900h_80q',13),(226,'http://img1.dongdalou.com/cars/RZ-20160108-12345498-interior-number12.jpeg@1200w_900h_80q',13),(227,'http://img1.dongdalou.com/cars/RZ-20160108-12345498-interior-number13.jpeg@1200w_900h_80q',13),(228,'http://img1.dongdalou.com/cars/RZ-20160108-12345498-interior-number14.jpeg@1200w_900h_80q',13),(229,'http://img1.dongdalou.com/cars/RZ-20160108-12345498-interior-number15.jpeg@1200w_900h_80q',13),(230,'http://img1.dongdalou.com/cars/RZ-20160108-12345498-interior-number16.jpeg@1200w_900h_80q',13),(231,'http://img1.dongdalou.com/cars/RZ-20160108-12345498-interior-number17.jpeg@1200w_900h_80q',13),(232,'http://img1.dongdalou.com/cars/RZ-20160108-12345498-interior-number18.jpeg@1200w_900h_80q',13),(233,'http://img1.dongdalou.com/cars/RZ-20160108-12345498-interior-number19.jpeg@1200w_900h_80q',13),(234,'http://img1.dongdalou.com/cars/RZ-20160108-12345498-interior-number20.jpeg@1200w_900h_80q',13),(235,'http://img1.dongdalou.com/cars/RZ-20160108-12345498-interior-number21.jpeg@1200w_900h_80q',13),(236,'http://img1.dongdalou.com/cars/RZ-20160108-12345498-interior-number22.jpeg@1200w_900h_80q',13),(237,'http://img1.dongdalou.com/cars/RZ-20160108-12345498-interior-number23.jpeg@1200w_900h_80q',13);
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `make`
--

DROP TABLE IF EXISTS `make`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `make` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `make` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `make`
--

LOCK TABLES `make` WRITE;
/*!40000 ALTER TABLE `make` DISABLE KEYS */;
INSERT INTO `make` VALUES (1,'奥迪'),(2,'宝马'),(3,'保时捷'),(4,'奔驰'),(5,'本田'),(6,'比亚迪'),(7,'别克'),(8,'宾利'),(9,'大众'),(10,'东风'),(11,'法拉利'),(12,'丰田'),(13,'福特'),(14,'红旗'),(15,'吉利'),(16,'江淮'),(17,'凯迪拉克'),(18,'劳斯莱斯'),(19,'雷克萨斯'),(20,'雷诺'),(21,'林肯'),(22,'路虎'),(23,'马自达'),(24,'迈巴赫'),(25,'奇瑞'),(26,'日产'),(27,'特斯拉'),(28,'五菱'),(29,'夏利'),(30,'现代'),(31,'雪佛兰'),(32,'雪铁龙'),(33,'一汽'),(34,'英菲尼迪');
/*!40000 ALTER TABLE `make` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model`
--

DROP TABLE IF EXISTS `model`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `model` varchar(20) NOT NULL,
  `make` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `make` (`make`),
  CONSTRAINT `model_ibfk_1` FOREIGN KEY (`make`) REFERENCES `Make` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=577 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model`
--

LOCK TABLES `model` WRITE;
/*!40000 ALTER TABLE `model` DISABLE KEYS */;
INSERT INTO `model` VALUES (1,'奥迪A3',1),(2,'奥迪A4',1),(3,'奥迪A4L',1),(4,'奥迪A6',1),(5,'奥迪A6L',1),(6,'奥迪Q3',1),(7,'奥迪Q5',1),(8,'奥迪A1',1),(9,'奥迪A3(进口)',1),(10,'奥迪A4(进口)',1),(11,'奥迪A5',1),(12,'奥迪A6(进口)',1),(13,'奥迪A7',1),(14,'奥迪A8L',1),(15,'奥迪Allroad quattro',1),(16,'奥迪Q3(进口)',1),(17,'奥迪Q5(进口)',1),(18,'奥迪Q7',1),(19,'奥迪R8',1),(20,'奥迪S3',1),(21,'奥迪S4',1),(22,'奥迪S5',1),(23,'奥迪S6',1),(24,'奥迪S7',1),(25,'奥迪S8',1),(26,'奥迪SQ5',1),(27,'奥迪TT',1),(28,'奥迪RS5',1),(29,'奥迪RS7',1),(30,'宝马2系旅行车',2),(31,'宝马3系',2),(32,'宝马5系',2),(33,'宝马X1',2),(34,'宝马1系',2),(35,'宝马2系',2),(36,'宝马2系多功能旅行车',2),(37,'宝马3系(进口)',2),(38,'宝马3系GT',2),(39,'宝马4系',2),(40,'宝马5系(进口)',2),(41,'宝马5系GT',2),(42,'宝马6系',2),(43,'宝马7系',2),(44,'宝马i8',2),(45,'宝马X1(进口)',2),(46,'宝马X3',2),(47,'宝马X4',2),(48,'宝马X5',2),(49,'宝马X6',2),(50,'宝马Z4',2),(51,'宝马1系M',2),(52,'宝马M3',2),(53,'宝马M4',2),(54,'宝马M5',2),(55,'宝马M6',2),(56,'宝马X5 M',2),(57,'宝马X6 M',2),(58,'保时捷911',3),(59,'保时捷918',3),(60,'保时捷Boxster',3),(61,'保时捷Cayenne',3),(62,'保时捷Cayman',3),(63,'保时捷Macan',3),(64,'保时捷Panamera',3),(65,'奔驰C级',4),(66,'奔驰E级',4),(67,'奔驰GLA级',4),(68,'奔驰GLC级',4),(69,'奔驰GLK级',4),(70,'奔驰A级',4),(71,'奔驰B级',4),(72,'奔驰CLA级',4),(73,'奔驰CLK',4),(74,'奔驰CLS级',4),(75,'奔驰CL级',4),(76,'奔驰C级(进口)',4),(77,'奔驰E级(进口)',4),(78,'奔驰GLA级(进口)',4),(79,'奔驰GLE级',4),(80,'奔驰GLK级(进口)',4),(81,'奔驰GLS级',4),(82,'奔驰GL级',4),(83,'奔驰G级',4),(84,'奔驰M级',4),(85,'奔驰R级',4),(86,'奔驰SLK级',4),(87,'奔驰SL级',4),(88,'奔驰S级',4),(89,'劳伦士',4),(90,'斯宾特Sprinter',4),(91,'威霆(进口)',4),(92,'唯雅诺(进口)',4),(93,'奔驰V级',4),(94,'凌特',4),(95,'威霆',4),(96,'唯雅诺',4),(97,'AMG GT',4),(98,'奔驰A级AMG',4),(99,'奔驰CLA级AMG',4),(100,'奔驰CLS级AMG',4),(101,'奔驰C级AMG',4),(102,'奔驰E级AMG',4),(103,'奔驰GLA级AMG',4),(104,'奔驰GLE级AMG',4),(105,'奔驰GL级AMG',4),(106,'奔驰G级AMG',4),(107,'奔驰M级AMG',4),(108,'奔驰SLK级AMG',4),(109,'奔驰SLS级AMG',4),(110,'奔驰SL级AMG',4),(111,'奔驰S级AMG',4),(112,'迈巴赫S级',4),(113,'奥德赛',5),(114,'缤智',5),(115,'飞度',5),(116,'锋范',5),(117,'锋范经典',5),(118,'歌诗图',5),(119,'凌派',5),(120,'思迪',5),(121,'雅阁',5),(122,'艾力绅',5),(123,'本田CR-V',5),(124,'本田XR-V',5),(125,'哥瑞',5),(126,'杰德',5),(127,'思铂睿',5),(128,'思域',5),(129,'奥德赛(进口)',5),(130,'本田CR-V(进口)',5),(131,'本田CR-Z',5),(132,'飞度(进口)',5),(133,'里程',5),(134,'时韵',5),(135,'思域(进口)',5),(136,'雅阁(进口)',5),(137,'音赛特',5),(138,'元素',5),(139,'比亚迪F0',6),(140,'比亚迪F3',6),(141,'比亚迪F3DM',6),(142,'比亚迪F3R',6),(143,'比亚迪F6',6),(144,'比亚迪G3',6),(145,'比亚迪G3R',6),(146,'比亚迪G5',6),(147,'比亚迪G6',6),(148,'比亚迪L3',6),(149,'比亚迪M6',6),(150,'比亚迪S6',6),(151,'比亚迪S7',6),(152,'比亚迪S8',6),(153,'福莱尔',6),(154,'秦',6),(155,'思锐',6),(156,'宋',6),(157,'速锐',6),(158,'唐',6),(159,'GL8',7),(160,'昂科拉',7),(161,'昂科威',7),(162,'君威',7),(163,'君越',7),(164,'凯越',7),(165,'林荫大道',7),(166,'荣御',7),(167,'赛欧',7),(168,'威朗',7),(169,'英朗',7),(170,'昂科雷',7),(171,'飞驰',8),(172,'慕尚',8),(173,'欧陆',8),(174,'添越',8),(175,'雅骏',8),(176,'雅致Arnage',8),(177,'宝来',9),(178,'宝来两厢',9),(179,'高尔夫',9),(180,'捷达',9),(181,'开迪',9),(182,'迈腾',9),(183,'速腾',9),(184,'一汽-大众CC',9),(185,'大众POLO',9),(186,'高尔',9),(187,'朗境',9),(188,'朗行',9),(189,'朗逸',9),(190,'凌渡',9),(191,'帕萨特',9),(192,'帕萨特领驭',9),(193,'桑塔纳·浩纳',9),(194,'桑塔纳·尚纳',9),(195,'桑塔纳经典',9),(196,'桑塔纳志俊',9),(197,'途安',9),(198,'途观',9),(199,'PASSAT(进口)',9),(200,'大众 R36(进口)',9),(201,'大众CC(进口)',9),(202,'大众Eos',9),(203,'大众Multivan',9),(204,'大众up!',9),(205,'高尔夫(进口)',9),(206,'辉腾',9),(207,'甲壳虫',9),(208,'凯路威',9),(209,'迈腾(进口)',9),(210,'尚酷',9),(211,'途观(进口)',9),(212,'途锐',9),(213,'蔚揽',9),(214,'夏朗',9),(215,'御风',10),(216,'360 Modena',11),(217,'575M Maranello',11),(218,'612 Scaglietti',11),(219,'California',11),(220,'F12 berlinetta',11),(221,'LaFerrari',11),(222,'法拉利458',11),(223,'法拉利488',11),(224,'法拉利599',11),(225,'法拉利F430',11),(226,'法拉利FF',11),(227,'RAV4',12),(228,'花冠',12),(229,'皇冠',12),(230,'卡罗拉',12),(231,'柯斯达',12),(232,'兰德酷路泽',12),(233,'普拉多',12),(234,'普锐斯',12),(235,'锐志',12),(236,'特锐',12),(237,'威驰',12),(238,'YARiS L 致炫',12),(239,'汉兰达',12),(240,'凯美瑞',12),(241,'凯美瑞Hybrid',12),(242,'雷凌',12),(243,'雅力士',12),(244,'逸致',12),(245,'4Runner',12),(246,'FJ酷路泽',12),(247,'Fortuner',12),(248,'Sienna',12),(249,'埃尔法',12),(250,'丰田86',12),(251,'丰田MR2',12),(252,'丰田RAV4(进口)',12),(253,'丰田Wish',12),(254,'丰田海狮',12),(255,'丰田佳美(进口)',12),(256,'丰田赛利卡(进口)',12),(257,'海拉克斯(进口)',12),(258,'汉兰达(进口)',12),(259,'红杉',12),(260,'杰路驰',12),(261,'考斯特(进口)',12),(262,'兰德酷路泽(进口)',12),(263,'普拉多(进口)',12),(264,'普瑞维亚',12),(265,'坦途',12),(266,'威飒',12),(267,'亚洲龙',12),(268,'福克斯',13),(269,'福睿斯',13),(270,'嘉年华',13),(271,'金牛座',13),(272,'麦柯斯',13),(273,'蒙迪欧',13),(274,'蒙迪欧-致胜',13),(275,'锐界',13),(276,'翼搏',13),(277,'翼虎',13),(278,'E系列',13),(279,'Flex',13),(280,'F系列',13),(281,'福克斯(进口)',13),(282,'嘉年华(进口)',13),(283,'锐界(进口)',13),(284,'探险者',13),(285,'外交官',13),(286,'野马',13),(287,'翼虎/Kuga(进口)',13),(288,'征服者',13),(289,'撼路者',13),(290,'红旗',14),(291,'红旗H7',14),(292,'红旗旗舰',14),(293,'红旗盛世',14),(294,'明仕',14),(295,'世纪星',14),(296,'博瑞',15),(297,'博越',15),(298,'豪情',15),(299,'豪情SUV',15),(300,'美人豹',15),(301,'美日之星',15),(302,'优利欧',15),(303,'中国龙',15),(304,'宾悦',16),(305,'和悦',16),(306,'和悦A13',16),(307,'和悦A30',16),(308,'瑞风',16),(309,'瑞风M2',16),(310,'瑞风M3',16),(311,'瑞风M5',16),(312,'瑞风S2',16),(313,'瑞风S3',16),(314,'瑞风S5',16),(315,'瑞风改装车',16),(316,'瑞铃',16),(317,'瑞鹰',16),(318,'同悦',16),(319,'同悦RS',16),(320,'星锐',16),(321,'悦悦',16),(322,'金牛',16),(323,'威豹',16),(324,'雪豹X50',16),(325,'凯迪拉克ATS-L',17),(326,'凯迪拉克CT6',17),(327,'凯迪拉克CTS',17),(328,'凯迪拉克XTS',17),(329,'凯迪拉克赛威',17),(330,'凯迪拉克ATS',17),(331,'凯迪拉克CTS COUPE',17),(332,'凯迪拉克CTS(进口)',17),(333,'凯迪拉克CTS-V(进口)',17),(334,'凯迪拉克DTS',17),(335,'凯迪拉克SRX',17),(336,'凯迪拉克XLR',17),(337,'凯迪拉克帝威',17),(338,'凯迪拉克加长版',17),(339,'凯迪拉克凯雷德',17),(340,'古斯特',18),(341,'幻影',18),(342,'魅影',18),(343,'雷克萨斯CT',19),(344,'雷克萨斯ES',19),(345,'雷克萨斯GS',19),(346,'雷克萨斯GX',19),(347,'雷克萨斯IS',19),(348,'雷克萨斯LF-A',19),(349,'雷克萨斯LS',19),(350,'雷克萨斯LX',19),(351,'雷克萨斯NX',19),(352,'雷克萨斯RC',19),(353,'雷克萨斯RX',19),(354,'雷克萨斯SC',19),(355,'雷克萨斯RC F',19),(356,'风景',20),(357,'风朗',20),(358,'卡缤',20),(359,'科雷傲',20),(360,'拉古那',20),(361,'雷诺威赛帝',20),(362,'梅甘娜',20),(363,'塔利斯曼',20),(364,'纬度',20),(365,'科雷嘉',20),(366,'城市',21),(367,'林肯MKC',21),(368,'林肯MKS',21),(369,'林肯MKT',21),(370,'林肯MKX',21),(371,'林肯MKZ',21),(372,'林肯加长版',21),(373,'领航员',21),(374,'发现',22),(375,'发现神行(进口)',22),(376,'揽胜',22),(377,'揽胜极光(进口)',22),(378,'揽胜运动版',22),(379,'路虎卫士',22),(380,'神行者2代',22),(381,'自由人',22),(382,'发现神行',22),(383,'揽胜极光',22),(384,'阿特兹',23),(385,'马自达6',23),(386,'马自达8',23),(387,'马自达CX-7',23),(388,'睿翼',23),(389,'马自达2',23),(390,'马自达3',23),(391,'马自达3 Axela昂克赛拉',23),(392,'马自达3星骋',23),(393,'马自达CX-5',23),(394,'海南马自达323',23),(395,'Mazda6(进口)',23),(396,'阿特兹ATENZA(进口)',23),(397,'马自达3(进口)',23),(398,'马自达5',23),(399,'马自达8(进口)',23),(400,'马自达CX-5(进口)',23),(401,'马自达CX-7(进口)',23),(402,'马自达CX-9',23),(403,'马自达MX-5',23),(404,'马自达RX-8',23),(405,'迈巴赫',24),(406,'艾瑞泽3',25),(407,'艾瑞泽5',25),(408,'艾瑞泽7',25),(409,'艾瑞泽M7',25),(410,'东方之子',25),(411,'东方之子CROSS',25),(412,'风云',25),(413,'风云2',25),(414,'奇瑞A1',25),(415,'奇瑞A3',25),(416,'奇瑞A5',25),(417,'奇瑞E3',25),(418,'奇瑞E5',25),(419,'奇瑞QQ',25),(420,'奇瑞QQ6',25),(421,'奇瑞QQme',25),(422,'奇瑞X1',25),(423,'旗云',25),(424,'旗云1',25),(425,'旗云2',25),(426,'旗云3',25),(427,'旗云5',25),(428,'瑞虎',25),(429,'瑞虎3',25),(430,'瑞虎5',25),(431,'奇瑞QQ3EV',25),(432,'LANNIA 蓝鸟',26),(433,'骏逸',26),(434,'蓝鸟',26),(435,'骊威',26),(436,'楼兰',26),(437,'玛驰',26),(438,'奇骏',26),(439,'骐达',26),(440,'天籁',26),(441,'逍客',26),(442,'轩逸',26),(443,'阳光',26),(444,'颐达',26),(445,'D22皮卡',26),(446,'D22厢式车',26),(447,'帕拉丁',26),(448,'日产ZN6493',26),(449,'日产ZN6494',26),(450,'郑州日产NV200',26),(451,'碧莲',26),(452,'贵士',26),(453,'楼兰(进口)',26),(454,'奇骏(进口)',26),(455,'日产350Z',26),(456,'日产370Z',26),(457,'日产GT-R',26),(458,'日产Juke',26),(459,'日产风度',26),(460,'日产风雅',26),(461,'途乐',26),(462,'Model S',27),(463,'五菱宏光',28),(464,'五菱鸿途',28),(465,'五菱荣光',28),(466,'五菱荣光V',28),(467,'五菱小旋风',28),(468,'五菱兴旺',28),(469,'五菱扬光',28),(470,'五菱之光',28),(471,'夏利',29),(472,'夏利2000',29),(473,'夏利A+',29),(474,'夏利N3',29),(475,'夏利N3+',29),(476,'夏利N5',29),(477,'夏利N7',29),(478,'MISTRA名图',30),(479,'北京现代i30',30),(480,'北京现代ix25',30),(481,'北京现代ix35',30),(482,'朗动',30),(483,'领动',30),(484,'领翔',30),(485,'名驭',30),(486,'全新胜达',30),(487,'瑞纳',30),(488,'瑞奕',30),(489,'索纳塔',30),(490,'途胜',30),(491,'雅绅特',30),(492,'伊兰特',30),(493,'御翔',30),(494,'悦动',30),(495,'飞思',30),(496,'格锐',30),(497,'辉翼',30),(498,'捷恩斯',30),(499,'君爵',30),(500,'酷派',30),(501,'劳恩斯',30),(502,'劳恩斯coupe',30),(503,'全新胜达(进口)',30),(504,'世纪',30),(505,'索纳塔(进口)',30),(506,'维拉克斯',30),(507,'现代美佳',30),(508,'新胜达(进口)',30),(509,'雅科仕',30),(510,'雅尊',30),(511,'爱唯欧',31),(512,'创酷',31),(513,'景程',31),(514,'科鲁兹',31),(515,'科帕奇',31),(516,'乐骋',31),(517,'乐风',31),(518,'乐风RV',31),(519,'迈锐宝',31),(520,'迈锐宝XL',31),(521,'赛欧',31),(522,'乐驰',31),(523,'科尔维特',31),(524,'科迈罗',31),(525,'科帕奇(进口)',31),(526,'斯帕可',31),(527,'沃蓝达',31),(528,'雪佛兰EXPRESS',31),(529,'雪佛兰开拓者',31),(530,'C4世嘉',32),(531,'爱丽舍',32),(532,'富康',32),(533,'凯旋',32),(534,'萨拉-毕加索',32),(535,'赛纳',32),(536,'世嘉',32),(537,'雪铁龙C2',32),(538,'雪铁龙C3-XR',32),(539,'雪铁龙C4L',32),(540,'雪铁龙C5',32),(541,'C4 AIRCROSS',32),(542,'C4毕加索',32),(543,'雪铁龙C3',32),(544,'雪铁龙C4',32),(545,'雪铁龙C5(进口)',32),(546,'雪铁龙C6',32),(547,'佳宝',33),(548,'森雅M80',33),(549,'森雅S80',33),(550,'一汽奥星',33),(551,'骏派D60',33),(552,'威乐',33),(553,'威志',33),(554,'威志V2',33),(555,'威志V5',33),(556,'威姿',33),(557,'自由风',33),(558,'森雅',33),(559,'一汽佳星幸福使者',33),(560,'坤程',33),(561,'英菲尼迪ESQ',34),(562,'英菲尼迪EX',34),(563,'英菲尼迪FX',34),(564,'英菲尼迪G',34),(565,'英菲尼迪JX35(QX60)',34),(566,'英菲尼迪M',34),(567,'英菲尼迪Q50',34),(568,'英菲尼迪Q60',34),(569,'英菲尼迪Q60S',34),(570,'英菲尼迪Q70L',34),(571,'英菲尼迪QX50(进口)',34),(572,'英菲尼迪QX60',34),(573,'英菲尼迪QX70',34),(574,'英菲尼迪QX80(QX56)',34),(575,'英菲尼迪Q50L',34),(576,'英菲尼迪QX50',34);
/*!40000 ALTER TABLE `model` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `part`
--

DROP TABLE IF EXISTS `part`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `part` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `description` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `part`
--

LOCK TABLES `part` WRITE;
/*!40000 ALTER TABLE `part` DISABLE KEYS */;
INSERT INTO `part` VALUES (1,'发动机前端'),(2,'发动机'),(3,'发动机侧面'),(4,'发动机舱左部'),(5,'冷却系统'),(6,'发动机舱右部'),(7,'方向及助力'),(8,'车内进气栅格及传感器'),(9,'前挡左下'),(10,'方向盘右下'),(11,'仪表盘'),(12,'方向盘左下'),(13,'左前灯'),(14,'右前灯'),(15,'左后灯'),(16,'右后灯'),(17,'左反光镜'),(18,'右反光镜'),(19,'中控台'),(20,'后挡及下部'),(21,'车尾'),(22,'前雨刷'),(23,'方向盘'),(24,'左前门'),(25,'右前门'),(26,'左后门'),(27,'右后门'),(28,'中央扶手台后部'),(29,'车顶前部'),(30,'车顶后部'),(31,'排挡及中央扶手台前部'),(32,'左立柱内侧'),(33,'右立柱内侧'),(34,'左前座'),(35,'右前座'),(36,'后座中央'),(37,'左后座'),(38,'右后座'),(39,'副驾驶室'),(40,'左前大梁'),(41,'右前大梁'),(42,'前横梁'),(43,'左前叶子板内板'),(44,'右前叶子板内板'),(45,'发动机舱前围板'),(46,'左大梁中段'),(47,'右大梁中段'),(48,'发动机变速器下部'),(49,'左后大梁'),(50,'右后大梁'),(51,'后围后横梁'),(52,'后桥'),(53,'备胎框架'),(54,'左前悬挂'),(55,'右前悬挂'),(56,'左后悬挂'),(57,'右后悬挂'),(58,'车底'),(59,'左前门'),(60,'左反光镜'),(61,'左前门玻璃'),(62,'左后门'),(63,'左后门玻璃'),(64,'左A柱'),(65,'左B柱'),(66,'左C柱'),(67,'左边梁'),(68,'左后叶子板'),(69,'左后轮'),(70,'后机盖'),(71,'左后灯'),(72,'右后灯'),(73,'后挡玻璃'),(74,'后保'),(75,'右后轮'),(76,'右后叶子板'),(77,'右后门'),(78,'右后门玻璃'),(79,'右前门'),(80,'右反光镜'),(81,'右前门玻璃'),(82,'右A柱'),(83,'右B柱'),(84,'右C柱'),(85,'右边梁'),(86,'车顶'),(87,'右前叶子板'),(88,'右前轮'),(89,'前机盖'),(90,'前保'),(91,'右前灯'),(92,'左前灯'),(93,'左前叶子板'),(94,'左前轮'),(95,'前挡玻璃'),(96,'发动机怠速平稳无异响'),(97,'发动机运转顺畅无异响'),(98,'加速性能与车型排量相符'),(99,'变速器工作正常（自动挡）'),(100,'变速器工作正常（手动挡）'),(101,'制动性能正常'),(102,'车辆转向方向回位灵敏'),(103,'车辆制动时不跑偏'),(104,'泡水车辆检测项检测'),(105,'过火车辆检测项检测');
/*!40000 ALTER TABLE `part` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `price`
--

DROP TABLE IF EXISTS `price`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `price` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `start` int(20) NOT NULL,
  `end` int(20) NOT NULL,
  `description` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `price`
--

LOCK TABLES `price` WRITE;
/*!40000 ALTER TABLE `price` DISABLE KEYS */;
INSERT INTO `price` VALUES (1,0,20000,'低于2万'),(2,20000,50000,'2-5万'),(3,50000,80000,'5-8万'),(4,80000,120000,'8-12万'),(5,120000,160000,'12-16万'),(6,160000,200000,'16-20万'),(7,200000,300000,'20-30万'),(8,300000,400000,'30-40万'),(9,400000,500000,'40-50万'),(10,500000,1000000,'50-100万');
/*!40000 ALTER TABLE `price` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `type` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `description` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type`
--

LOCK TABLES `type` WRITE;
/*!40000 ALTER TABLE `type` DISABLE KEYS */;
INSERT INTO `type` VALUES (1,'SUV'),(2,'轿车'),(3,'敞篷车'),(4,'跑车'),(5,'混合动力'),(6,'卡车'),(7,'房车'),(8,'省油车'),(9,'经济代步'),(10,'高性价比'),(11,'中型'),(12,'紧凑型'),(13,'中大型');
/*!40000 ALTER TABLE `type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `rate` tinyint(4) NOT NULL,
  `province` varchar(10) DEFAULT NULL,
  `city` varchar(10) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `motto` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'123@qq.com','123','123',NULL,0,NULL,NULL,NULL,NULL),(2,'234@qq.com','234','123','18818217393',0,'上海','上海','宝山区上海大学',NULL),(3,'123@hotmail.com','123','123','18818217393',0,'上海','上海','宝山区上海大学',NULL),(4,'234@hotmail.com','234','123','18818217393',0,'上海','上海','宝山区上海大学',NULL),(5,'beatbox_gao@hotmail.com','19941024Abc','Gao','18818217393',1,'上海','上海','宝山区上海大学',NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `year`
--

DROP TABLE IF EXISTS `year`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `year` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `start` int(20) NOT NULL,
  `end` int(20) NOT NULL,
  `description` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `year`
--

LOCK TABLES `year` WRITE;
/*!40000 ALTER TABLE `year` DISABLE KEYS */;
INSERT INTO `year` VALUES (1,2016,2016,'2016'),(2,2015,2015,'2015'),(3,2014,2014,'2014'),(4,2013,2013,'2013'),(5,2012,2012,'2012'),(6,2011,2011,'2011'),(7,2010,2010,'2010'),(8,2009,2009,'2009'),(9,2008,2008,'2008'),(10,2000,2007,'2000 - 2007'),(11,1993,1999,'1993 - 1999');
/*!40000 ALTER TABLE `year` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-16 21:54:24
