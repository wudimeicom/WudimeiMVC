-- MySQL dump 10.15  Distrib 10.0.16-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: wudimei_mvc
-- ------------------------------------------------------
-- Server version	10.0.16-MariaDB-log

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
-- Table structure for table `w_blog`
--

DROP TABLE IF EXISTS `w_blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `w_blog` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `w_blog`
--

LOCK TABLES `w_blog` WRITE;
/*!40000 ALTER TABLE `w_blog` DISABLE KEYS */;
INSERT INTO `w_blog` VALUES (1,'ha ha 2','abc2','2016-08-30 02:00:13'),(2,'test','test','2016-04-22 13:27:00'),(3,'test2','test2','2016-04-22 13:27:00'),(4,'test3','test3','2016-04-22 13:27:00'),(5,'test4','test4','2016-04-22 13:27:00'),(6,'test5','test5','2016-04-22 13:27:00'),(7,'ha ha ','abc','2016-04-30 16:02:02'),(8,'happy new year2','abc','2016-04-30 16:02:04'),(9,'ha ha ','abc','2016-04-30 16:02:14'),(14,'yang qing-rong','yang','2016-05-09 03:06:22'),(15,'ha ha ','abc','2016-05-14 13:44:43'),(16,'ha ha ','abc','2016-05-24 17:11:18'),(17,'ha ha ','abc','2016-08-06 08:39:18'),(18,'ha ha ','abc','2016-08-06 09:54:47'),(19,'ha ha ','abc','2016-08-08 03:25:35'),(20,'ha ha ','abc','2016-08-08 03:31:24'),(0,'ha ha ','abc','2016-08-12 06:16:15'),(0,'ha ha ','abc','2016-08-30 01:59:49');
/*!40000 ALTER TABLE `w_blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `w_password_resets`
--

DROP TABLE IF EXISTS `w_password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `w_password_resets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` varchar(62) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `w_password_resets`
--

LOCK TABLES `w_password_resets` WRITE;
/*!40000 ALTER TABLE `w_password_resets` DISABLE KEYS */;
INSERT INTO `w_password_resets` VALUES (1,5,'3b74ddd10a22807ae5c4d5b89e23c43f','2016-10-06 07:05:52'),(2,5,'4971db83f65073a8f604780add73d34f','2016-10-06 07:08:58'),(3,5,'45f0b7d67420a4756f14b81e19f7d327','2016-10-06 07:09:34'),(4,5,'8b9acec08f5e930d9c61a2a2c9de9a84','2016-10-06 07:09:48'),(5,5,'c214500383110c9fed1e304242a72d32','2016-10-06 07:10:06'),(6,5,'0d0e9ab2422addd94c28a04ce736cc43','2016-10-06 07:12:11'),(7,5,'d4f0d89c23d2aca5760b3abf8bac619b','2016-10-06 07:14:42'),(8,5,'5b543c1685c861de6d5461a923e8ccfb','2016-10-06 07:15:26'),(9,5,'87e51c7071d1e90a14a41996d539df19','2016-10-06 07:15:39'),(10,5,'5ffe1b1dc47f3470447c28b2cf6e8eed','2016-10-06 07:16:50'),(11,5,'fcc3c448b732c6a62129786cad6954bc','2016-10-06 07:17:41'),(12,5,'c68fa23cfbed5a9874ef59c458890cb8','2016-10-06 07:17:50'),(13,5,'6e169535e2f77551f24badf091b28d9d','2016-10-06 07:18:14'),(14,5,'b3af58140e9019b185ad22548b251cda','2016-10-06 07:18:49'),(15,5,'eeda6dfcc7eb78061cac8d05eb10d0ab','2016-10-06 07:19:33'),(16,5,'b6fc844cb41213fd9053a22594b2830f','2016-10-06 07:20:14'),(18,5,'6860a5f5af15b0fd5a5d5738a594d385','2016-10-06 07:24:17'),(19,5,'4e81e16d50efdab29a9d39968ea8e41e','2016-10-06 07:24:59'),(20,5,'435739f2cc84127a7a457a5168af6f01','2016-10-06 09:04:03'),(21,4,'6e52c29180512325d232514719ebb2b8','2016-12-14 08:50:13');
/*!40000 ALTER TABLE `w_password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `w_permissions`
--

DROP TABLE IF EXISTS `w_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `w_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(30) NOT NULL DEFAULT ' ',
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `w_permissions`
--

LOCK TABLES `w_permissions` WRITE;
/*!40000 ALTER TABLE `w_permissions` DISABLE KEYS */;
INSERT INTO `w_permissions` VALUES (14,'permission.read','读取权限','permission.read'),(15,'permission.create','permission.create','permission.create'),(16,'permission.update','permission.update','permission.update'),(17,'permission.delete','permission.delete','permission.delete'),(18,'user.read','user.read','user.read'),(19,'user.create','user.create','user.create'),(20,'user.update','user.update','user.update'),(21,'user.delete','删除用户','user.delete'),(22,'user_group.read','user_group.read','user_group.read'),(23,'user_group.create','创建用户组','user_group.create'),(24,'user_group.update','user_group.update','user_group.update'),(25,'user_group.delete','user_group.delete','user_group.delete'),(26,'setting.read','setting.read','setting.read'),(27,'setting.create','setting.create','setting.create'),(28,'setting.update','setting.update','setting.update'),(29,'setting.delete','setting.delete','setting.delete'),(32,'user.modifyPassword','user.modifyPassword_L',''),(33,'user_group.permission_setting','user_group.permission_setting_L',''),(34,'backend.access','访问后台','backend.access');
/*!40000 ALTER TABLE `w_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `w_setting_groups`
--

DROP TABLE IF EXISTS `w_setting_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `w_setting_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `w_setting_groups`
--

LOCK TABLES `w_setting_groups` WRITE;
/*!40000 ALTER TABLE `w_setting_groups` DISABLE KEYS */;
INSERT INTO `w_setting_groups` VALUES (1,'setting.groupname_website'),(2,'setting.groupname_SEO');
/*!40000 ALTER TABLE `w_setting_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `w_settings`
--

DROP TABLE IF EXISTS `w_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `w_settings` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT ' ',
  `value` text NOT NULL,
  `label` varchar(50) NOT NULL DEFAULT ' ',
  `tip` varchar(255) NOT NULL DEFAULT ' ',
  `type` varchar(50) NOT NULL DEFAULT 'text',
  `properties` text,
  `setting_group_id` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `w_settings`
--

LOCK TABLES `w_settings` WRITE;
/*!40000 ALTER TABLE `w_settings` DISABLE KEYS */;
INSERT INTO `w_settings` VALUES (1,'SITE.NAME','深圳市无敌美电子商务商行2','setting.site_name',' ','text','{\"default\":\"\",\"size\":50,\"class\":\"form-control\"}',1),(2,'SITE.ADDRESS','广东省深圳市','setting.address',' ','textarea','{\"class\":\"form-control\"}',1),(4,'SITE.ZIPCODE','518100','setting.zip_code',' ','text','{\"default\":\"\",\"class\":\"form-control\"}',1),(5,'SITE.CELLPHONE','13714715608','setting.cellphone',' ','text','{\"default\":\"\",\"class\":\"form-control\"}',1),(6,'SITE.FAX','075500000000','setting.fax',' ','text','{\"default\":\"\",\"class\":\"form-control\"}',1),(7,'SITE.CONTACTMAN','杨庆荣','setting.contact_man',' ','text','{\"default\":\"\",\"class\":\"form-control\"}',1),(8,'SEO.KEYWORDS','关键字1,关键字','setting.keywords','用半角逗号隔开','textarea','{\"default\":\"\",\"class\":\"form-control\"}',2),(9,'SEO.DESCRIPTION','描述，220个字符以内。22','setting.description',' ','textarea','{\"default\":\"\",\"class\":\"form-control\"}',2),(10,'SITE.URL_PREFIX','http://wudimeishop.anli.wudimei.com','url_prefix',' ','text','{\"default\":\"\",\"class\":\"form-control\"}',1),(12,'SITE.QQ','290359552,杨庆荣\r\n214341,张','qq_numbers','格式：“QQ号,昵称”，一行一个。','textarea','{\"default\":\"\",\"class\":\"form-control\"}',1);
/*!40000 ALTER TABLE `w_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `w_user_group_permissions`
--

DROP TABLE IF EXISTS `w_user_group_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `w_user_group_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `group_id` (`group_id`,`permission_id`)
) ENGINE=InnoDB AUTO_INCREMENT=322 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `w_user_group_permissions`
--

LOCK TABLES `w_user_group_permissions` WRITE;
/*!40000 ALTER TABLE `w_user_group_permissions` DISABLE KEYS */;
INSERT INTO `w_user_group_permissions` VALUES (303,2,14),(304,2,15),(305,2,16),(306,2,17),(307,2,18),(308,2,19),(309,2,20),(310,2,21),(312,2,22),(313,2,23),(314,2,24),(315,2,25),(317,2,26),(318,2,27),(319,2,28),(320,2,29),(311,2,32),(316,2,33),(321,2,34),(59,3,14),(60,3,15),(61,3,16),(62,3,20),(63,3,23),(64,3,26),(65,3,27),(66,3,28);
/*!40000 ALTER TABLE `w_user_group_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `w_user_groups`
--

DROP TABLE IF EXISTS `w_user_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `w_user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `w_user_groups`
--

LOCK TABLES `w_user_groups` WRITE;
/*!40000 ALTER TABLE `w_user_groups` DISABLE KEYS */;
INSERT INTO `w_user_groups` VALUES (1,'user'),(2,'admin'),(3,'test');
/*!40000 ALTER TABLE `w_user_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `w_users`
--

DROP TABLE IF EXISTS `w_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `w_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT ' ',
  `email` varchar(50) DEFAULT ' ',
  `password` varchar(60) DEFAULT ' ',
  `created_at` datetime NOT NULL,
  `remember_token` varchar(62) NOT NULL DEFAULT ' ',
  `status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '0inactive1active2baned',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `w_users`
--

LOCK TABLES `w_users` WRITE;
/*!40000 ALTER TABLE `w_users` DISABLE KEYS */;
INSERT INTO `w_users` VALUES (4,'yqr2','yqr2223@wudimei.com','e10adc3949ba59abbe56e057f20f883e','0000-00-00 00:00:00','c2a76963dfe6ce4e7127fab1419eda91',0);
/*!40000 ALTER TABLE `w_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `w_users_groups`
--

DROP TABLE IF EXISTS `w_users_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `w_users_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `w_users_groups`
--

LOCK TABLES `w_users_groups` WRITE;
/*!40000 ALTER TABLE `w_users_groups` DISABLE KEYS */;
INSERT INTO `w_users_groups` VALUES (6,4,2),(7,4,1),(8,5,3);
/*!40000 ALTER TABLE `w_users_groups` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-13 14:38:23
