-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: webtek
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.30-MariaDB

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
-- Table structure for table `css_choices`
--

DROP TABLE IF EXISTS `css_choices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `css_choices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `css_question_number` int(11) NOT NULL,
  `is_correct` int(1) NOT NULL,
  `choice` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cssquestion_choice_foreign` (`css_question_number`),
  CONSTRAINT `cssquestion_choice_foreign` FOREIGN KEY (`css_question_number`) REFERENCES `css_questions` (`css_question_number`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `css_choices`
--

LOCK TABLES `css_choices` WRITE;
/*!40000 ALTER TABLE `css_choices` DISABLE KEYS */;
INSERT INTO `css_choices` VALUES (50,1,1,'Cascading Style Sheet',NULL,NULL),(51,1,0,'Cacsading Style Sheet',NULL,NULL),(52,1,0,'Cascading Sheet Style',NULL,NULL),(53,1,0,'Cascading Style Sheep',NULL,NULL),(54,2,1,'body {color: black;}',NULL,NULL),(55,2,0,'body:color=black;',NULL,NULL),(56,2,0,'{body;color:black;}',NULL,NULL),(57,2,0,'{body:color=black;}',NULL,NULL),(58,3,0,'<css>',NULL,NULL),(59,3,0,'<script>',NULL,NULL),(60,3,1,'<style>',NULL,NULL),(61,3,0,'<insert>',NULL,NULL),(62,4,1,'style',NULL,NULL),(63,4,0,'class',NULL,NULL),(64,4,0,'font',NULL,NULL),(65,4,0,'styles',NULL,NULL),(66,5,0,'font-style',NULL,NULL),(67,5,0,'text-size',NULL,NULL),(68,5,1,'font-size',NULL,NULL),(69,5,0,' text-style',NULL,NULL);
/*!40000 ALTER TABLE `css_choices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `css_questions`
--

DROP TABLE IF EXISTS `css_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `css_questions` (
  `css_question_number` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`css_question_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `css_questions`
--

LOCK TABLES `css_questions` WRITE;
/*!40000 ALTER TABLE `css_questions` DISABLE KEYS */;
INSERT INTO `css_questions` VALUES (1,'What does CSS stand for?',NULL,NULL),(2,'Which is the correct CSS syntax?',NULL,NULL),(3,'Which HTML tag is used to define an internal style sheet?',NULL,NULL),(4,'Which HTML attribute is used to define inline styles?',NULL,NULL),(5,'Which CSS property controls the text size?',NULL,NULL);
/*!40000 ALTER TABLE `css_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `html_choices`
--

DROP TABLE IF EXISTS `html_choices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `html_choices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `html_question_number` int(11) NOT NULL,
  `is_correct` int(11) NOT NULL,
  `choice` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `htmlquestion_choice_foreign` (`html_question_number`),
  CONSTRAINT `htmlquestion_choice_foreign` FOREIGN KEY (`html_question_number`) REFERENCES `html_questions` (`html_question_number`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `html_choices`
--

LOCK TABLES `html_choices` WRITE;
/*!40000 ALTER TABLE `html_choices` DISABLE KEYS */;
/*!40000 ALTER TABLE `html_choices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `html_questions`
--

DROP TABLE IF EXISTS `html_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `html_questions` (
  `html_question_number` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`html_question_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `html_questions`
--

LOCK TABLES `html_questions` WRITE;
/*!40000 ALTER TABLE `html_questions` DISABLE KEYS */;
/*!40000 ALTER TABLE `html_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_05_09_113937_create_html_questions_table',1),(4,'2018_05_09_131322_create_html_choices_table',1),(5,'2018_05_10_142451_create_css_questions_table',1),(6,'2018_05_10_142709_create_css_choices_table',1),(7,'2018_05_10_143129_create_php_questions_table',1),(8,'2018_05_10_143208_create_php_choices_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `php_choices`
--

DROP TABLE IF EXISTS `php_choices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `php_choices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `php_question_number` int(11) NOT NULL,
  `is_correct` int(11) NOT NULL,
  `choice` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `phpquestion_choice_foreign` (`php_question_number`),
  CONSTRAINT `phpquestion_choice_foreign` FOREIGN KEY (`php_question_number`) REFERENCES `php_questions` (`php_question_number`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `php_choices`
--

LOCK TABLES `php_choices` WRITE;
/*!40000 ALTER TABLE `php_choices` DISABLE KEYS */;
/*!40000 ALTER TABLE `php_choices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `php_questions`
--

DROP TABLE IF EXISTS `php_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `php_questions` (
  `php_question_number` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`php_question_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `php_questions`
--

LOCK TABLES `php_questions` WRITE;
/*!40000 ALTER TABLE `php_questions` DISABLE KEYS */;
/*!40000 ALTER TABLE `php_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Jay Testado','jay@gmail.com','default.png','$2y$10$MbRFI04Xq6m8F3kkHOzzr.DQwA3NUOcTn/QpSk0ev5KJ72YcDUFX2','09LfEpgTuAwsF8fvFJ2DFGVP3BVRW7RCpOffzAJvjzm2cZSjFwzljdoynWGQ','2018-05-11 01:35:57','2018-05-11 01:35:57');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'webtek'
--

--
-- Dumping routines for database 'webtek'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-12 14:05:40
