-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: survey
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `auth_assignment`
--

DROP TABLE IF EXISTS `auth_assignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_assignment`
--

LOCK TABLES `auth_assignment` WRITE;
/*!40000 ALTER TABLE `auth_assignment` DISABLE KEYS */;
INSERT INTO `auth_assignment` VALUES ('super_admin','1',1512758947);
/*!40000 ALTER TABLE `auth_assignment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_item`
--

DROP TABLE IF EXISTS `auth_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_item`
--

LOCK TABLES `auth_item` WRITE;
/*!40000 ALTER TABLE `auth_item` DISABLE KEYS */;
INSERT INTO `auth_item` VALUES ('/*',2,NULL,NULL,NULL,1512758902,1512758902),('/admin/*',2,NULL,NULL,NULL,1512758901,1512758901),('/admin/assignment/*',2,NULL,NULL,NULL,1512758899,1512758899),('/admin/assignment/assign',2,NULL,NULL,NULL,1512758898,1512758898),('/admin/assignment/index',2,NULL,NULL,NULL,1512758898,1512758898),('/admin/assignment/revoke',2,NULL,NULL,NULL,1512758898,1512758898),('/admin/assignment/view',2,NULL,NULL,NULL,1512758898,1512758898),('/admin/default/*',2,NULL,NULL,NULL,1512758899,1512758899),('/admin/default/index',2,NULL,NULL,NULL,1512758899,1512758899),('/admin/menu/*',2,NULL,NULL,NULL,1512758899,1512758899),('/admin/menu/create',2,NULL,NULL,NULL,1512758899,1512758899),('/admin/menu/delete',2,NULL,NULL,NULL,1512758899,1512758899),('/admin/menu/index',2,NULL,NULL,NULL,1512758899,1512758899),('/admin/menu/update',2,NULL,NULL,NULL,1512758899,1512758899),('/admin/menu/view',2,NULL,NULL,NULL,1512758899,1512758899),('/admin/permission/*',2,NULL,NULL,NULL,1512758900,1512758900),('/admin/permission/assign',2,NULL,NULL,NULL,1512758900,1512758900),('/admin/permission/create',2,NULL,NULL,NULL,1512758899,1512758899),('/admin/permission/delete',2,NULL,NULL,NULL,1512758900,1512758900),('/admin/permission/index',2,NULL,NULL,NULL,1512758899,1512758899),('/admin/permission/remove',2,NULL,NULL,NULL,1512758900,1512758900),('/admin/permission/update',2,NULL,NULL,NULL,1512758899,1512758899),('/admin/permission/view',2,NULL,NULL,NULL,1512758899,1512758899),('/admin/role/*',2,NULL,NULL,NULL,1512758900,1512758900),('/admin/role/assign',2,NULL,NULL,NULL,1512758900,1512758900),('/admin/role/create',2,NULL,NULL,NULL,1512758900,1512758900),('/admin/role/delete',2,NULL,NULL,NULL,1512758900,1512758900),('/admin/role/index',2,NULL,NULL,NULL,1512758900,1512758900),('/admin/role/remove',2,NULL,NULL,NULL,1512758900,1512758900),('/admin/role/update',2,NULL,NULL,NULL,1512758900,1512758900),('/admin/role/view',2,NULL,NULL,NULL,1512758900,1512758900),('/admin/route/*',2,NULL,NULL,NULL,1512758900,1512758900),('/admin/route/assign',2,NULL,NULL,NULL,1512758900,1512758900),('/admin/route/create',2,NULL,NULL,NULL,1512758900,1512758900),('/admin/route/index',2,NULL,NULL,NULL,1512758900,1512758900),('/admin/route/refresh',2,NULL,NULL,NULL,1512758900,1512758900),('/admin/route/remove',2,NULL,NULL,NULL,1512758900,1512758900),('/admin/rule/*',2,NULL,NULL,NULL,1512758901,1512758901),('/admin/rule/create',2,NULL,NULL,NULL,1512758901,1512758901),('/admin/rule/delete',2,NULL,NULL,NULL,1512758901,1512758901),('/admin/rule/index',2,NULL,NULL,NULL,1512758900,1512758900),('/admin/rule/update',2,NULL,NULL,NULL,1512758901,1512758901),('/admin/rule/view',2,NULL,NULL,NULL,1512758900,1512758900),('/admin/user/*',2,NULL,NULL,NULL,1512758901,1512758901),('/admin/user/activate',2,NULL,NULL,NULL,1512758901,1512758901),('/admin/user/change-password',2,NULL,NULL,NULL,1512758901,1512758901),('/admin/user/delete',2,NULL,NULL,NULL,1512758901,1512758901),('/admin/user/index',2,NULL,NULL,NULL,1512758901,1512758901),('/admin/user/login',2,NULL,NULL,NULL,1512758901,1512758901),('/admin/user/logout',2,NULL,NULL,NULL,1512758901,1512758901),('/admin/user/request-password-reset',2,NULL,NULL,NULL,1512758901,1512758901),('/admin/user/reset-password',2,NULL,NULL,NULL,1512758901,1512758901),('/admin/user/signup',2,NULL,NULL,NULL,1512758901,1512758901),('/admin/user/view',2,NULL,NULL,NULL,1512758901,1512758901),('/debug/*',2,NULL,NULL,NULL,1512758902,1512758902),('/debug/default/*',2,NULL,NULL,NULL,1512758902,1512758902),('/debug/default/db-explain',2,NULL,NULL,NULL,1512758901,1512758901),('/debug/default/download-mail',2,NULL,NULL,NULL,1512758902,1512758902),('/debug/default/index',2,NULL,NULL,NULL,1512758901,1512758901),('/debug/default/toolbar',2,NULL,NULL,NULL,1512758902,1512758902),('/debug/default/view',2,NULL,NULL,NULL,1512758901,1512758901),('/debug/user/*',2,NULL,NULL,NULL,1512758902,1512758902),('/debug/user/reset-identity',2,NULL,NULL,NULL,1512758902,1512758902),('/debug/user/set-identity',2,NULL,NULL,NULL,1512758902,1512758902),('/gii/*',2,NULL,NULL,NULL,1512758902,1512758902),('/gii/default/*',2,NULL,NULL,NULL,1512758902,1512758902),('/gii/default/action',2,NULL,NULL,NULL,1512758902,1512758902),('/gii/default/diff',2,NULL,NULL,NULL,1512758902,1512758902),('/gii/default/index',2,NULL,NULL,NULL,1512758902,1512758902),('/gii/default/preview',2,NULL,NULL,NULL,1512758902,1512758902),('/gii/default/view',2,NULL,NULL,NULL,1512758902,1512758902),('/site/*',2,NULL,NULL,NULL,1512758902,1512758902),('/site/about',2,NULL,NULL,NULL,1512758902,1512758902),('/site/captcha',2,NULL,NULL,NULL,1512758902,1512758902),('/site/contact',2,NULL,NULL,NULL,1512758902,1512758902),('/site/error',2,NULL,NULL,NULL,1512758902,1512758902),('/site/index',2,NULL,NULL,NULL,1512758902,1512758902),('/site/login',2,NULL,NULL,NULL,1512758902,1512758902),('/site/logout',2,NULL,NULL,NULL,1512758902,1512758902),('/site/request-password-reset',2,NULL,NULL,NULL,1512758902,1512758902),('/site/reset-password',2,NULL,NULL,NULL,1512758902,1512758902),('/site/signup',2,NULL,NULL,NULL,1512758902,1512758902),('super_admin',1,NULL,NULL,NULL,1512758914,1512758914);
/*!40000 ALTER TABLE `auth_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_item_child`
--

DROP TABLE IF EXISTS `auth_item_child`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_item_child`
--

LOCK TABLES `auth_item_child` WRITE;
/*!40000 ALTER TABLE `auth_item_child` DISABLE KEYS */;
INSERT INTO `auth_item_child` VALUES ('super_admin','/*'),('super_admin','/admin/*'),('super_admin','/admin/assignment/*'),('super_admin','/admin/assignment/assign'),('super_admin','/admin/assignment/index'),('super_admin','/admin/assignment/revoke'),('super_admin','/admin/assignment/view'),('super_admin','/admin/default/*'),('super_admin','/admin/default/index'),('super_admin','/admin/menu/*'),('super_admin','/admin/menu/create'),('super_admin','/admin/menu/delete'),('super_admin','/admin/menu/index'),('super_admin','/admin/menu/update'),('super_admin','/admin/menu/view'),('super_admin','/admin/permission/*'),('super_admin','/admin/permission/assign'),('super_admin','/admin/permission/create'),('super_admin','/admin/permission/delete'),('super_admin','/admin/permission/index'),('super_admin','/admin/permission/remove'),('super_admin','/admin/permission/update'),('super_admin','/admin/permission/view'),('super_admin','/admin/role/*'),('super_admin','/admin/role/assign'),('super_admin','/admin/role/create'),('super_admin','/admin/role/delete'),('super_admin','/admin/role/index'),('super_admin','/admin/role/remove'),('super_admin','/admin/role/update'),('super_admin','/admin/role/view'),('super_admin','/admin/route/*'),('super_admin','/admin/route/assign'),('super_admin','/admin/route/create'),('super_admin','/admin/route/index'),('super_admin','/admin/route/refresh'),('super_admin','/admin/route/remove'),('super_admin','/admin/rule/*'),('super_admin','/admin/rule/create'),('super_admin','/admin/rule/delete'),('super_admin','/admin/rule/index'),('super_admin','/admin/rule/update'),('super_admin','/admin/rule/view'),('super_admin','/admin/user/*'),('super_admin','/admin/user/activate'),('super_admin','/admin/user/change-password'),('super_admin','/admin/user/delete'),('super_admin','/admin/user/index'),('super_admin','/admin/user/login'),('super_admin','/admin/user/logout'),('super_admin','/admin/user/request-password-reset'),('super_admin','/admin/user/reset-password'),('super_admin','/admin/user/signup'),('super_admin','/admin/user/view'),('super_admin','/debug/*'),('super_admin','/debug/default/*'),('super_admin','/debug/default/db-explain'),('super_admin','/debug/default/download-mail'),('super_admin','/debug/default/index'),('super_admin','/debug/default/toolbar'),('super_admin','/debug/default/view'),('super_admin','/debug/user/*'),('super_admin','/debug/user/reset-identity'),('super_admin','/debug/user/set-identity'),('super_admin','/gii/*'),('super_admin','/gii/default/*'),('super_admin','/gii/default/action'),('super_admin','/gii/default/diff'),('super_admin','/gii/default/index'),('super_admin','/gii/default/preview'),('super_admin','/gii/default/view'),('super_admin','/site/*'),('super_admin','/site/about'),('super_admin','/site/captcha'),('super_admin','/site/contact'),('super_admin','/site/error'),('super_admin','/site/index'),('super_admin','/site/login'),('super_admin','/site/logout'),('super_admin','/site/request-password-reset'),('super_admin','/site/reset-password'),('super_admin','/site/signup');
/*!40000 ALTER TABLE `auth_item_child` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_rule`
--

DROP TABLE IF EXISTS `auth_rule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_rule`
--

LOCK TABLES `auth_rule` WRITE;
/*!40000 ALTER TABLE `auth_rule` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_rule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `design_info`
--

DROP TABLE IF EXISTS `design_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `design_info` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  `hague` int(5) NOT NULL,
  `maxterm` int(5) NOT NULL,
  `renewals` varchar(255) NOT NULL,
  `renewals_details` text NOT NULL,
  `grace` varchar(255) NOT NULL,
  `grace_details` text NOT NULL,
  `max_no` int(5) NOT NULL,
  `what` varchar(255) NOT NULL,
  `what_details` text NOT NULL,
  `subst_exam` int(5) NOT NULL,
  `fees` text NOT NULL,
  `misc` varchar(255) NOT NULL,
  `misc_details` text NOT NULL,
  `description` varchar(255) NOT NULL,
  `claim` varchar(255) NOT NULL,
  `req_docs` varchar(255) NOT NULL,
  `req_docs_details` text NOT NULL,
  `deferment_period` varchar(255) NOT NULL,
  `reprod` varchar(255) NOT NULL,
  `reprod_details` text NOT NULL,
  `dashed` int(5) NOT NULL,
  `shading` int(5) NOT NULL,
  `sections` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `design_info`
--

LOCK TABLES `design_info` WRITE;
/*!40000 ALTER TABLE `design_info` DISABLE KEYS */;
INSERT INTO `design_info` VALUES (1,'WIPO',1,25,'Every 5 years','','6','',100,'No restrictions','',0,'Initial registration, renewals, and potential actions such as change of address.','','An international registration may not be refused on grounds of non-compliance with formal requirement, since such requirements must be considered satisfied following the examination carried out bt the International Bureau.\r\nThe conditions which regulate the applicable period of deferment in any given situation depend upon the laws of the various national or regional systems of the Contracting Parties designated in the international application, including the case of Contracting Parties which do not permit deferred publication at all.','Only if a contracting party requires it.','Only if a contracting party requires it.','Power of attorney. Other, depending in the contracting party.','','30','Both photographs and drawings are allowed. It is recommended to provide reproductions based on the requirements of the contracting parties.','',1,1,1),(2,'US',1,15,'0','','12','',1,'A design for an article of manufacture that is dictated primarily by the function of the article lacks ornamentality and is not proper statutory subject matter \r\n\r\nA design that simulates a well-known or naturally occurring object or person is not origina','',1,'Only registration fees. If via WIPO, the registration fees will be paid in two installments, one together with the submission of the application, and one with the receival of the notice of allowance.No renewal fees.','','','A short and concise description is needed.','A design patent application may only have a single claim.','Power of attorney, declaration of inventorship, information disclosure statement','','0','7 isometric reproductions are strongly advised. Also strongly advised is submitting drawn reproductions.','',1,1,1),(3,'CN',0,10,'Annual renewals','','0','',1,'Any component part of the product which cannot be partitioned or sold or used separately. Any product consisting of several component parts and the component part is not a product which has any value of independent use','',0,'Registration and annual renewal fees.','','Chinese examiners are sensitive to defects in design drawings which could delay or even prevent the granting of the patent. ','A very concise description is required.','','Power of attorney','','0','In case of a plane design, only front and back view are needed. In case of a three-dimensional design, the application must contain right, front, left, back, top and bottom view, as well as a space diagram.','',0,0,1);
/*!40000 ALTER TABLE `design_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration`
--

DROP TABLE IF EXISTS `migration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration`
--

LOCK TABLES `migration` WRITE;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` VALUES ('m000000_000000_base',1512755696),('m130524_201442_init',1512755711);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','VplzKSGqiay724ShYgbl3dEiffg1mOJR','$2y$13$Je6Iqxfw0NG7MC8B3mnkh.24jeKA5PAL4EakcLHjAOw.s7E9N8zc2',NULL,'rajwabarocho@gmail.com',10,1512755857,1512755857);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-10  0:54:29
