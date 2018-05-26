-- MySQL dump 10.13  Distrib 5.5.58, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: c9
-- ------------------------------------------------------
-- Server version	5.5.58-0ubuntu0.14.04.1

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
-- Table structure for table `bidder_data`
--

DROP TABLE IF EXISTS `bidder_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bidder_data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `omikuji_id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `omikuji_sub_id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `bidder_user_id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) unsigned NOT NULL,
  `bidder_published` datetime NOT NULL,
  `delflg` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `bidder_data_user_id_omikuji_id_omikuji_sub_id_unique` (`user_id`,`omikuji_id`,`omikuji_sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bidder_data`
--

LOCK TABLES `bidder_data` WRITE;
/*!40000 ALTER TABLE `bidder_data` DISABLE KEYS */;
/*!40000 ALTER TABLE `bidder_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bidder_result_data`
--

DROP TABLE IF EXISTS `bidder_result_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bidder_result_data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `omikuji_id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `omikuji_sub_id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `bidder_user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) unsigned NOT NULL,
  `result` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `result_published` datetime NOT NULL,
  `delflg` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `bidder_result_data_user_id_omikuji_id_omikuji_sub_id_unique` (`user_id`,`omikuji_id`,`omikuji_sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bidder_result_data`
--

LOCK TABLES `bidder_result_data` WRITE;
/*!40000 ALTER TABLE `bidder_result_data` DISABLE KEYS */;
/*!40000 ALTER TABLE `bidder_result_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_number` int(11) NOT NULL,
  `item_amount` int(11) NOT NULL,
  `published` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `book_id` int(10) unsigned NOT NULL,
  `body` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_book_id_foreign` (`book_id`),
  CONSTRAINT `comments_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image_data`
--

DROP TABLE IF EXISTS `image_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image_data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_data` blob NOT NULL,
  `delflg` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `image_data_user_id_image_id_unique` (`user_id`,`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image_data`
--

LOCK TABLES `image_data` WRITE;
/*!40000 ALTER TABLE `image_data` DISABLE KEYS */;
INSERT INTO `image_data` VALUES (1,'test2@test.co.jp','1516112386@test1.png','�PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0�\0\0\0�\0\0\0\":9�\0\0\0sRGB\0���\0\0\0gAMA\0\0���a\0\0\0	pHYs\0\0�\0\0��o�d\0\0hIDATx^�ݡ[�P�q�	4֠iӦ\r��65I�/���6l�$ڤi�&\r\Z4�X��g\"ra��~½�E��9g;�m���s�����+aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX��oXOOO�z��jM��W�}�Q��P(L&��!���+C�oE�~ߎ����uxxh���{����uzzjN�r=c��e7pgZ�D����N�ONNl�j�]�n��������E6\Z��Ţ���;c9������n�\r9��+�a9�)<��_y�{�A�ˍ����fǱ���X�hؘIˣ���īa�ݶ��#,6�$���Ņ\rX\r}�%M_��a�Z��h4�	�`��R�Tj�����򂰦���p�]�J%�*|yy�ydƌ5�w�~1c}{}}=88p�b��N�]jv0c}s������a�n�� �!�8�������x���A�R�1�b���\\.�7Y����j�K�(��ժ[����9ޑG*�X�f7����l�����&��1c-����e�\r�lk1N���R��;yw����������#9f��f7���2 �����j�l�Br��_�d��Z������iq�L�����q�B�0��\"9f�e��`��6�R!���ʆ�p7W�7Y�Ԑ䘱V�;�l��V�v��z�\r��\"9f��j���F9�N�c�a%�)|Z,���Ԑ���qK!7Y�BXIū!׆I�&EQ�j\'n�X�+��\r-N�Wb�J!~j�����\r�%��R��\Z�w�+V:<7!��tf�\Z�G�a����i>�%X\n!AX� ,HVv��#,DX�����j����ƘCX�5�MDQt}}mc�a�!�N�sttdc>�����h4\Z��j�ae/����f�N����l�g�ae�w;K�B��<`��7��nv��[w�Vv�;����^���CX����>>>�Tf�aW��_c��a���~c)�ay_v�]��<h4\Z6p׆�\n��9GX��C{��p8�����9�ɻ�V�MWn����db󌰼��pK!$�	aA�� AX� ,H$��M��n�q˛�]�z�!,o���m���`�<��\rބaX*�ļJX>�˙K!$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA��|�_N��������l6��<�9�`ƂaA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,ll��˽78�\"\0\0\0\0IEND�B`�','0',NULL,NULL),(2,'test2@test.co.jp','1516112415@test1.png','�PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0�\0\0\0�\0\0\0\":9�\0\0\0sRGB\0���\0\0\0gAMA\0\0���a\0\0\0	pHYs\0\0�\0\0��o�d\0\0hIDATx^�ݡ[�P�q�	4֠iӦ\r��65I�/���6l�$ڤi�&\r\Z4�X��g\"ra��~½�E��9g;�m���s�����+aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX��oXOOO�z��jM��W�}�Q��P(L&��!���+C�oE�~ߎ����uxxh���{����uzzjN�r=c��e7pgZ�D����N�ONNl�j�]�n��������E6\Z��Ţ���;c9������n�\r9��+�a9�)<��_y�{�A�ˍ����fǱ���X�hؘIˣ���īa�ݶ��#,6�$���Ņ\rX\r}�%M_��a�Z��h4�	�`��R�Tj�����򂰦���p�]�J%�*|yy�ydƌ5�w�~1c}{}}=88p�b��N�]jv0c}s������a�n�� �!�8�������x���A�R�1�b���\\.�7Y����j�K�(��ժ[����9ޑG*�X�f7����l�����&��1c-����e�\r�lk1N���R��;yw����������#9f��f7���2 �����j�l�Br��_�d��Z������iq�L�����q�B�0��\"9f�e��`��6�R!���ʆ�p7W�7Y�Ԑ䘱V�;�l��V�v��z�\r��\"9f��j���F9�N�c�a%�)|Z,���Ԑ���qK!7Y�BXIū!׆I�&EQ�j\'n�X�+��\r-N�Wb�J!~j�����\r�%��R��\Z�w�+V:<7!��tf�\Z�G�a����i>�%X\n!AX� ,HVv��#,DX�����j����ƘCX�5�MDQt}}mc�a�!�N�sttdc>�����h4\Z��j�ae/����f�N����l�g�ae�w;K�B��<`��7��nv��[w�Vv�;����^���CX����>>>�Tf�aW��_c��a���~c)�ay_v�]��<h4\Z6p׆�\n��9GX��C{��p8�����9�ɻ�V�MWn����db󌰼��pK!$�	aA�� AX� ,H$��M��n�q˛�]�z�!,o���m���`�<��\rބaX*�ļJX>�˙K!$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA��|�_N��������l6��<�9�`ƂaA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,ll��˽78�\"\0\0\0\0IEND�B`�','0',NULL,NULL),(3,'test2@test.co.jp','1516112549@test1.png','�PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0�\0\0\0�\0\0\0\":9�\0\0\0sRGB\0���\0\0\0gAMA\0\0���a\0\0\0	pHYs\0\0�\0\0��o�d\0\0hIDATx^�ݡ[�P�q�	4֠iӦ\r��65I�/���6l�$ڤi�&\r\Z4�X��g\"ra��~½�E��9g;�m���s�����+aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX��oXOOO�z��jM��W�}�Q��P(L&��!���+C�oE�~ߎ����uxxh���{����uzzjN�r=c��e7pgZ�D����N�ONNl�j�]�n��������E6\Z��Ţ���;c9������n�\r9��+�a9�)<��_y�{�A�ˍ����fǱ���X�hؘIˣ���īa�ݶ��#,6�$���Ņ\rX\r}�%M_��a�Z��h4�	�`��R�Tj�����򂰦���p�]�J%�*|yy�ydƌ5�w�~1c}{}}=88p�b��N�]jv0c}s������a�n�� �!�8�������x���A�R�1�b���\\.�7Y����j�K�(��ժ[����9ޑG*�X�f7����l�����&��1c-����e�\r�lk1N���R��;yw����������#9f��f7���2 �����j�l�Br��_�d��Z������iq�L�����q�B�0��\"9f�e��`��6�R!���ʆ�p7W�7Y�Ԑ䘱V�;�l��V�v��z�\r��\"9f��j���F9�N�c�a%�)|Z,���Ԑ���qK!7Y�BXIū!׆I�&EQ�j\'n�X�+��\r-N�Wb�J!~j�����\r�%��R��\Z�w�+V:<7!��tf�\Z�G�a����i>�%X\n!AX� ,HVv��#,DX�����j����ƘCX�5�MDQt}}mc�a�!�N�sttdc>�����h4\Z��j�ae/����f�N����l�g�ae�w;K�B��<`��7��nv��[w�Vv�;����^���CX����>>>�Tf�aW��_c��a���~c)�ay_v�]��<h4\Z6p׆�\n��9GX��C{��p8�����9�ɻ�V�MWn����db󌰼��pK!$�	aA�� AX� ,H$��M��n�q˛�]�z�!,o���m���`�<��\rބaX*�ļJX>�˙K!$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA��|�_N��������l6��<�9�`ƂaA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,ll��˽78�\"\0\0\0\0IEND�B`�','0',NULL,NULL),(4,'test2@test.co.jp','1516112783@test1.png','�PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0�\0\0\0�\0\0\0\":9�\0\0\0sRGB\0���\0\0\0gAMA\0\0���a\0\0\0	pHYs\0\0�\0\0��o�d\0\0hIDATx^�ݡ[�P�q�	4֠iӦ\r��65I�/���6l�$ڤi�&\r\Z4�X��g\"ra��~½�E��9g;�m���s�����+aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX��oXOOO�z��jM��W�}�Q��P(L&��!���+C�oE�~ߎ����uxxh���{����uzzjN�r=c��e7pgZ�D����N�ONNl�j�]�n��������E6\Z��Ţ���;c9������n�\r9��+�a9�)<��_y�{�A�ˍ����fǱ���X�hؘIˣ���īa�ݶ��#,6�$���Ņ\rX\r}�%M_��a�Z��h4�	�`��R�Tj�����򂰦���p�]�J%�*|yy�ydƌ5�w�~1c}{}}=88p�b��N�]jv0c}s������a�n�� �!�8�������x���A�R�1�b���\\.�7Y����j�K�(��ժ[����9ޑG*�X�f7����l�����&��1c-����e�\r�lk1N���R��;yw����������#9f��f7���2 �����j�l�Br��_�d��Z������iq�L�����q�B�0��\"9f�e��`��6�R!���ʆ�p7W�7Y�Ԑ䘱V�;�l��V�v��z�\r��\"9f��j���F9�N�c�a%�)|Z,���Ԑ���qK!7Y�BXIū!׆I�&EQ�j\'n�X�+��\r-N�Wb�J!~j�����\r�%��R��\Z�w�+V:<7!��tf�\Z�G�a����i>�%X\n!AX� ,HVv��#,DX�����j����ƘCX�5�MDQt}}mc�a�!�N�sttdc>�����h4\Z��j�ae/����f�N����l�g�ae�w;K�B��<`��7��nv��[w�Vv�;����^���CX����>>>�Tf�aW��_c��a���~c)�ay_v�]��<h4\Z6p׆�\n��9GX��C{��p8�����9�ɻ�V�MWn����db󌰼��pK!$�	aA�� AX� ,H$��M��n�q˛�]�z�!,o���m���`�<��\rބaX*�ļJX>�˙K!$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA��|�_N��������l6��<�9�`ƂaA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,ll��˽78�\"\0\0\0\0IEND�B`�','0',NULL,NULL),(5,'test2@test.co.jp','1516113207@test1.png','�PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0�\0\0\0�\0\0\0\":9�\0\0\0sRGB\0���\0\0\0gAMA\0\0���a\0\0\0	pHYs\0\0�\0\0��o�d\0\0hIDATx^�ݡ[�P�q�	4֠iӦ\r��65I�/���6l�$ڤi�&\r\Z4�X��g\"ra��~½�E��9g;�m���s�����+aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX��oXOOO�z��jM��W�}�Q��P(L&��!���+C�oE�~ߎ����uxxh���{����uzzjN�r=c��e7pgZ�D����N�ONNl�j�]�n��������E6\Z��Ţ���;c9������n�\r9��+�a9�)<��_y�{�A�ˍ����fǱ���X�hؘIˣ���īa�ݶ��#,6�$���Ņ\rX\r}�%M_��a�Z��h4�	�`��R�Tj�����򂰦���p�]�J%�*|yy�ydƌ5�w�~1c}{}}=88p�b��N�]jv0c}s������a�n�� �!�8�������x���A�R�1�b���\\.�7Y����j�K�(��ժ[����9ޑG*�X�f7����l�����&��1c-����e�\r�lk1N���R��;yw����������#9f��f7���2 �����j�l�Br��_�d��Z������iq�L�����q�B�0��\"9f�e��`��6�R!���ʆ�p7W�7Y�Ԑ䘱V�;�l��V�v��z�\r��\"9f��j���F9�N�c�a%�)|Z,���Ԑ���qK!7Y�BXIū!׆I�&EQ�j\'n�X�+��\r-N�Wb�J!~j�����\r�%��R��\Z�w�+V:<7!��tf�\Z�G�a����i>�%X\n!AX� ,HVv��#,DX�����j����ƘCX�5�MDQt}}mc�a�!�N�sttdc>�����h4\Z��j�ae/����f�N����l�g�ae�w;K�B��<`��7��nv��[w�Vv�;����^���CX����>>>�Tf�aW��_c��a���~c)�ay_v�]��<h4\Z6p׆�\n��9GX��C{��p8�����9�ɻ�V�MWn����db󌰼��pK!$�	aA�� AX� ,H$��M��n�q˛�]�z�!,o���m���`�<��\rބaX*�ļJX>�˙K!$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA��|�_N��������l6��<�9�`ƂaA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,H$�	aA�� AX� ,ll��˽78�\"\0\0\0\0IEND�B`�','0',NULL,NULL),(6,'nj.takayuki+004@gmail.com','1516114071@sky_blue_yoshi_egg_by_dragonshadow3-d8pco22.png','����\0JFIF\0\0\0\0\0\0��\0C\0\n\n\n		\n\Z%\Z# , #&\')*)-0-(0%()(��\0C\n\n\n\n(\Z\Z((((((((((((((((((((((((((((((((((((((((((((((((((��\0^1\"\0��\0\0\0\0\0\0\0\0\0\0\0	\n��\0�\0\0\0}\0!1AQa\"q2���#B��R��$3br�	\n\Z%&\'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������\0\0\0\0\0\0\0\0	\n��\0�\0\0w\0!1AQaq\"2�B����	#3R�br�\n$4�%�\Z&\'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������\0\0\0?\0���(��(��(��(��(��(���X�5���u� k���{��[ip�8�j\0ۢ�b�\0����\0�S��\0���\0�(�\0����\0�S��\0���\0�(��+�/�k]?��;��\r_�\"��k]?��;��\r_�\"�>���b�\0����\0�S��\0���\0�(�\0����\0�S��\0���\0�(��+�/�k]?��;��\r_�\"��k]?��;��\r_�\"�>���b�\0����\0�S��\0���\0�)�i���\0\"�����\0@Of���_\rSF��V3\Z���p��ޡ��ƯPEPEPEPEPEPEPEPEPEPEPEPEPEP\\?��$>/�\0�t��\rw��u����)�W\n������\0�颊(\0��(\0��(\0��(\0��Z\0�7�����\0�u���Zܮ���?�|<�0e\Z|��#Pk���(��(��(��(��(��(��(��(��(��(��(��(�� ���S�\r3�&�k�뺭��GnV{�#E�(N:����G�Y�\0%�[�\0�V��!(��\0��ş�3��0��\0����v�����G���oX���.oc�k{���$RyX�A��5�������F�\n�>�_xL\0?����\"�\0�i����O����\0��5��@�� ��\0�cB�\0�|_�M���O����\0��5��@�� ��\0�cB�\0�|_�M���O����\0��5��@�� ��\0�cB�\0�|_�M���O����\0��5��@�� ��\0�cB�\0�|_�MGq�?	MF��T�c?���h�����:g�u�-?_��-�g�(a��d`\0�\0�e�\0�q������K�\0�T^<�\0���?���\0ѭXT�w��MsV��so��:����%q�Ԓ�a$x8bFy<�����\'�g�\0%f���S�ȫ�\0(��\0(��\0(��\0(��\0(��\0(��\0(��\0(��\0(��\0(��\0�y��7��[֖��B� @ϖ8�漷�\Z�?��Z�\0�U�\0��G���euC�\0O�\0�5k��\0��~��?��Z�\0�U�\0����&�7?�cy��\04i�^�i�>\\��*3�T��\rZ�g�����;�ޗ�\0F5ua(ƴ�e���s\Z�nV�k�-~g������\0���\0��I��᮵��h:���5���s�#rX�98�^��Q�\n��������c�G��\0�z��\'�_���\0����\0	���\0<���5忕�?��>b�\0\\s����Om�u�}j�I�V@���f���Y�\0 �����\0���kȯN����e8���t���KP��+�\n(��\n(��>1�?���Oĺ����?�uw4��`v��3�u����f�M�\0��\0�����-\0|w�_k\0|J<O�D����6%�I�����m޽G�\Z�_��Z�\0�U�\0��/�3��������\0�k�J\0���\Z�_��Z�\0�U�\0����!�+/�r�[������&]��H�d���\r~�~ο�E|+�\0^��\0��=�(��(��(��(��(��(��(��(=(\0�������?�_��o����P�b�B\"�\0d�k��\0���\'�������\0@S��_�EuO����\0ѫ_������u����j�D��Il�e��T�w��\'�\0@h?��\0\Zꡄ�x�E�g�X|���Z-������k<W�_?�i��K�\0�\Z��\0¹����\0���k�Ҵ�=\"�;-:��2J��@�����C	���I�!�E���(���-�E�QE\0zg���]�\0���Wk\\W���]�\0���Wk_9��4��8{�E�}?P��+��B�(�����\0t�Ey\r�����n/�TY(��}��Ju��I�/�W���W�>B�`�\'	i�O�3l��$ֿ���\0E�_Wڞ*f�f����۬�A0��� 1؟ι�W^�\0�,���\0�T�\0�jwD�5�$��>Z�����x[����\0F=x��+�	��\0 h��\0��<Q�3���|?�n[\rĈ��(�F�#,��$�k\n�Y�Iɞ�U���J���Ҿ��\03�:+����ğ�\Zn?��?�Ew��,���_�\r+Z����^A4-j;B��׵r���]Q@Q@Q@Q@Q@Q@Q@���\0�x���0�]���+^0�\0�����5�P��\r�\0�����K�\0���]��߁��?Z�\0�)�\Z�K�{yo��w\Z�\0�G�+�aEW�|xQE\0QE�?�w�\0]�\0�Q]�q_?�w�\0]�\0�Q]�|�/��?h������B�(�s�\n(��\nkt�S[�{��\0�F������j�Y��\0�#u�\0]_�\0B5Z��\n?��\0\Z~��\n\n�E|��k�J��\0]�\0A�(���-�@��\0��\0�\"����^��pO��O����+ӿf��.�\0���+�kӿf��.�\0���+�?K?A���\0(��\0(��\0(��\0(��\0(��\0(��\0�����\0%k����\0ц����3�\0�Z���.?�a�2�=�o��ֿ��_����_6|\r�\0�����K�\0���]�����O˸���?�_�\n(���){PQKG�@���A���\0e����A���\0e�W�b�\0�#���\0�mO�(���=���(\0��Ju5�P\'��:���n���\0�F�U�O�B7_���\0�#U��a��lO���\00�QEQ���Z���\0%W�\0���\0�����_-�Y�\0����\0�E�\0�Ey����O��������Q�ק~��\\</�\0]&�\0�W�W�~�8�\0�����7����c����JZ\0(��\0(��\0(��\0(��\0+��\0h�\0�Z�ÿ\riw��4�7~C��2�n�n\0#���������\0�@�\0���\0�O@Y�\0\rA�����+�\0�u��7㻈$���B�*Jڸ?�xu�G���c�>��U�	�/�=f��[N�y\0b\0*H\'�k�\0�/x�{k���Ez���$��\0�]����P�M�C¾_�MM�\";O:��<_�z��o���\0}?�y7j�2��|��x���?�_�QE�|�U�\Z�;�R��\\��EF���V����?��\0�e�u4�h��EON2WM���ǀ���\0-.������K����u���[����_�\0>c���o���\r�HU�y�rs�V�V2������х*tբ�AER4\n(��\nkt�S[�{��\0�F������j�Y��\0�#u�\0]_�\0B5Z��\n?��\0\Z~��\n(���\\��|4�u�V�P�7h��.P@8��ڊ�ӍEi+�X\\m|$��Ižǜ�\0�����\0���\0�i���\Z@�.��ڮ�7�._|yo��P?+��k�k����\0$�Y�\0�i�\0��sV�R�95����x���T�U����C�\Z�ǟ��D�\0�W�\0��?�<y�\0<tO��.�.�����+�~���\0�\0l�l�k�[�Eڡq�\'�MzUxw�u�\0$��\0�F��4\0QE\0QE\0QE\0W�����������z�2�s���\0�E�?�$�S���QE\0~�|�\0�K��\0���\0�]�q�?��?��v�\0�,We@�����ҤH�6��\'�y�u���\\�\0ߦ�\0\n�N��\n����|�o�t�Jʴ�㥴G��\0g^�\0ϥ���o��:��}.?���{�(�o��/�<�����r</�:��}.?���]�-���,渂h�IU��\0ܚ�|V7����$���5�:���\n\\!K��\Z��k��iu�;�:�����li���m�\0W�kè��̏����U�\0.���\0���;������\0��\Zw��\0[���\0\Z��(����\00���������������_��cN�\0��o����^GfG���x��\0>W��\0���;������\0�Mm}mt�-��]�v08���8���Y�\0I��O�k\Z�J��{�U�u1����M$���z.i�4�W�}��Z��xu�-.2�Dާګ�\0g^�\0ϥ���o�s�4��J9���)�58*�I��W����y�. ]�A,k�.�֡�O��\0�b�\0���\0��y�}k��Vu��Տ����嘟as+\'q(���<p�G�����g�������W#�k�I��\0\\��\0CZ��)z�Q��G�Q�ϖ�)i+�O�O��\0c��$��3�\0$�q����������ƀ\n(��\n(��\n(=+������c�;�~��������|��mȋ��H�\0觮[�\Z��\0��+_�o�\"�c�]~����wh4}9E����?s\0���\0|�E}i�\0�a�\0Cm��\0��\0K�\0�b?�m��\0��\0���>�%������\0�X�ʱ��/��-��9�[X턥v�ؠg��ؠ�(��(���]�\0\"��\0\\�l�7��\0�\\�?둫��S���S��G��(=h��?\n(��\n(��\n���Σ��3\\%w�\n���Q�\0q?��\\o�d{�1�\0#:_?ɞ�KIK_<~�QE\0q�\0���w_�k˫ڼM�\rn�m̦-�z?�s\'����7���^�N�>Y=O��<���{Z�l����Q��/�WI�\0A�\0�C�h�\0�t��o��?ƺ��G��������W��{��~-��\0\n�Y�\0q?�b׸ºO�7���Y>*�E�4�-�y K�\nd+��}�:��2��{��\rf41T��Q�oU���\0�J���.���۟�_�.��d��ŷ?���]x��G[��\0� ?���%{�|��9����$�lv)���/D�La�|�m���O�\0����)[�s������\0j+�kĺN����o��2�%�\\�g8�}E@Q@~Zj_���\0����~��妥�\0!����\0��j�7�$�\0��_�\0�h�\0ѩ_9Wѿ�\'��Z�\0��G��J\0��(��(��(��Bx����4	��X�/�\0�sP�\0�F�������Ō�u���֔�4r�d�����=h�=i+���B�(��(��υ_���\0����]����P�\"3\\������c�Ft��=\Z�������\0}�_=c�eܒ�E9�����(\0��(\0��(\0��A��?l_�+����7��q��䯏�A�޼:�:O���Q�+�\0a[O���a_��\0\r�xW�¶��9k�\n(��\n��Կ�#u�\0]_���K��MK�B7_���\0��\n��o�I�\0#ֿ�\0`��\0�R�r��bO���\0���\Z��=Q@Q@�(��~<����`;���Ez�y���i��\'��+�._�ױ�\\e)Goy~L�����F���`��I�Q^�*�~_�=���O<�QE30��(\0��(\0�#2��#�i�Q�㌜]�!�����3G�\'���5/j\\����;�O�=�D�I�\'����GC�\0�=��qO�*�|��&~��}�QEI�QE\0QE\0Ph��ß�/����\0`�?�ׇW��ؿ�W�����o^@\'�_�(��\0�����Z�0���\0���Q�+�\0a[O���a@Q@~Zj_���\0����~��妥�\0!����\0��j�7�$�\0��_�\0�h�\0ѩ_9Wѿ�\'��Z�\0��G��J\0��(��(��(�� ����7D�\0�Ez�y���i��\'��+������?��\0�~L稢����B�(��(��(��(���%/j�=�C�\0�=��qO�*�Q��\0�g�\0\\S�\n�_-?���a�\0�E�PjM��r����4�BkI-gv���R0k�5�>0�\0���\0��A]�*1�6�|��U��<jaݛv��e�\0��|�5�\0\Z?�a�ϝ���^iEz��{��f_̾�z_�,;/�����h�\0��e�\0>w?��\0�y�/�R���\\]�2��៵6���9n��Ccm|g ��ּz�+������\0^���y�xբ�RQ[&~��מ#	N�M�gI���J7��+i�\0���L+�?���o\n�\0�V��\0G-~�VGpQE\0W妥�\0!����\0���]~Zj_���\0����\0V��?bn<s��\0�;�\0j�|�^��6]�Y��T{Y����Q�H�8��i%���⣃�<D��UϼsFG�����?�!w�\0M\'�ީ�\0A���k��2̏��\0]����_������Q^!����B����?��O�]��G�d�\0����\0�r�o��.�V�s�x����2��w$+�3Ҹ��te���yVgΏ�����>�\0������_� ����7D�\0�Eue��~�����\0���QEퟖ�Q@Q@Q@Q@/jJ^�\rn{���\0 {?���U꣡�\0������z�Z?z��\0\n>���3\\��K��=\Z9-f�3�,�5�G\\���.��鮪9V�2v<Ӊh����۲zX��x������\0���\n��sT���u�\0MQ�Y\'����ݎK1�5�a0��\'&ϐ����iB4������Q]�ȅ/�RR�\0�Gο�wO��O�k�kҾ>�\0�����ך����/S�̗�E�¿#��k�\0%¿���\0��_������J7��+i�\0���L+�\n(��\n��Կ�#u�\0]_���K<\n�N��t��-��&�jU�f�t\'�@/^��;�{T�\0�Q�\0������G��?�6/�\r�GW�;<��������~�C\"�L�݌)$p5�\ZJ5b��gt�[V�5vֈ��JJ��kxO?��/������?��_���\0�^��i2?\'���?�̾�wTU}>�B���ՋA:	���U��4����.q��GG������\0����Ҽ_�i��7$��6H<���M�Q�Y�ٯJs�x��~��y��p�QE��ߡ�אx��F����\"���}o˟��k��t����ZlBKi0��0x?J�]�TV^f�K����cC�I];GWm{���\0���\0ϲ�Ũo<+���Kqq�Q��!���Ub)=�����NR�+/&aQF(�O8(��\0(��\0(��4�\"�Vi�0�0�u��)JJ*�z\ZQ�R��:J��F}/j����\0��?����\0f����O����Y}f��#�Y.>�\0���z���\0 {?���UꩥD�i���\0t�U�{�V������E�8����\0�\0��\0]��\Z��\0Z���\0������5����e�\0�����������EWq�EOYԭt}2{��1�Bv\nN2@�>��QWeӧ*�P��e�_�����\0��_���\0�@���C��_���\0�Y}f��#�Y.a�\0>e�3�>>�\0�����ך׻x����~,�/��mޖ��IfXN�䍬A�!Y��?�i�\0���xڕY5��w)�*X*P��QWG���J7��+i�\0���L+�o~��\04�h:��j��������2B$��p<_l�\'�QE\0b�(\0���\0m�<���\0A����e|��mȋ��H�\0觠�s@4�P־�\0�+C�\0�8��[���O��?���\0A�_QK����Na��W�O�Q�%g-��ֽo������\0���k��\Z�χ�+[�\0��\0��?2��>���\0ߥ�����ȹ��#[5����5��kǥ������S�/�<`��R�1_P~f%��\n�QK�1@XJ�����#���f�\\Wu��>u������\0G�pƙ�/���DR����x��AKE��\'�\0����ח�ר|O�\0�?����/��w/������c�\0n��J(����\n�-�;�?�O����#�k�I����Ŭ��\0\n^����\0�Q�\03��җ4�+�O�O��\0c�~������¼;�:�\0�@�#?�J�\Z\0(��\0(��\0(��\0+�?�o�D]��G�\0E=}_9���\"��?�)��zQIJ(�_ȕ��\0ל_�����\'��Z�y��\0��ݯ���G����\0ު�\0��aEU���׮|;�\0�Z����\0Ѝyc^����Ek���\0B5��_�^��p_�����\04t�Z��;�im�]�H6�f�����>QRN2ٜ��!:7��������\0N��\0<$�\0���5�Q[}b��3��#�\0>c�#��\0�\'F�\0����\0\Z?�	ѿ焟���ƺj(��_�a����\0�1����\0���	?���������O����]5}b��0����\0Ϙ����	ѿ焟���ƴ4}\n�GyZ�6S(�ź}~��EL�T����,�	Fjt��T���+3�(��\0��\'�\0����ח�ר|O�\0�?����/��w/������c�\0n��J(����\n�~-�<���k]ur?��k?��?�5����e�����n����d�����:�\0�@�#?�J�\Z�����I�\0���\0�+�h\0��(\0��(\0��(\0�\n���5�����-���]j3��H��*�[�l��Z1@��}�\0B���\0��K�\0\n�ǽ�%��\0�3W��6�>O��4�A���_Q���l�H.-�p��0�ñ��4����?��\0���\0%c��\0���\0ц��ס�qIY[�p��J��+��N�#�7Ě.�t-��N����Dq�	 u��W͟����\0�R�\0�5��zXZ������\0*���\Zm������׮|;�\0�Z����\0Ѝyc^����Ek���\0B5�e�%�z|��/��-Q^!��QE\0QE\0QE\0QE\0QE\0QE�|C���ѣ���������\ry����\0@����׵���C*1�H��ӆ�fU��I�얖<O�U�\0�}���k��|G�i\Z��:��kky	�$2���8#�k�R~z~�_�Z�U�\0_�\0�Ҷ�ҟdy��F�~K�=��O\r�n���\0\n��a��h���R�n�,�;I`�\0:�\n��5��\0�O����\0�I��D��\'8���7�p~Z5�9^->�>FG�*oУ��\0�3R��>�\0�GY�\0�f�Ѻ\\W�ǐ��z��߆�]�����t�y3�V�B��Ӄ^�E\0QE\0QE\0QE\0QE\0QE�?7�3�\0�Z���.?�a�2���G�����S�n�}f+�����\"x�+1�(N9���e/	�k^�\0���\0�t�����?딿�	������m#��n<_�^���ڲB�޲ȑ���Pxּ��f��\0@�;��*�<*�r�{�ę/1�*��Ij����J�����\0�^����\0Ѝ|Q�\0�Y�\0�v��?�\0]��Mx�H�KKmFxԓ�Ry9�����u��p�C�˱N�t��Z?4}�Fk�/�j��\0�A�\0�&�\0��|<���K�ohz-擣Eov�H�,��1�F\\���p}WEPEPEPEPE�\0Q_!�����N��SO�G�;K�`Ft�%Uʂp�x���j��\0�A�\0�&�\0��m��5o��	��\0���?�|[�\0@M����\0�Pٵ���E�\0�j�W�|/��J���|[$N�F��p#!f��\0ȕ��Sও�[D��u=F�P��$V��Z���z��>��>I�N����_��M�\0�$��?ᔼ%�\0A�{����\0����?g��7Ś~��ꚴ�VL̑�єm�W� =��h��(\0��(\0��(\0��(\0��(\0��(\0��(\0��(�k?�\"���|[�\0��_��ߵT2��\Z��\'�Cqo�E,�¾��Կ�y�\0~[�(�{�#R�\0�u���o��#R�\0�u���o�\n5�|�\0������\0�W+����:�����Wa����L���{��K��ᾉ��\"�\0y�����Κ����g���i���o�l�\0���\0�\0^���\0k����\0���4k����\0���4z������\0�F���\0/������\0�F���\0/���*�����\0A?����G����\0A?����@��?��o�l�\0���\0�Cy��v��3�ڲ��*����sǟ�<x���7�5�\n�i��^.�.-쮤�[��Ybb21�X��\Z���?���\0Q��dj_���\0�-�dj_���\0�-�F�CgO�\"��\0�v�\0я_\0�R\'�A����¿@g���߆\"�9݁W#���P�QE\0QE\0QE\0QE\0QE\0QE\0QE\0QE\0QE\0`QE\0QE\0W����Iⷒ5f�O��#�������\0�:o��?9)(��\n(��\n(��\n(��\n(���?��$^��ƁA���\0�c\\�AX^?�C�{����\0�)kv�\n(��QE\0QE\0QE\0QE\0QE\0QE\0QE\0QE\0QE\0QE\0QE\0QE\0V���G�5}.�_�=������3���u�E\0|��\0�s�\0C�?�.?�r��d���!�\0�q�\0����w�2M���\0��\0��?�n�p��\0��\0�W�4P����7?�8C�\0���\0�(�\0�I��\0����9_X�@\'�$��\0�����\0��&����\\��}cE\0|��\0�s�\0C�?�.?�r�~�7?�8C�\0���\0�+�\n(?��y�t=;O2	M��v����8�V�PEPEPEPEPEPEPEP��','0',NULL,NULL),(7,'manalangaoka@gmail.com','1516219648@s200_natalie.gold.jpg','����\0JFIF\0\0H\0H\0\0��\0C\0	\n\n			\n\n		\r\r\n��\0C	��\0\0�\0�\"\0��\0\0\0\0\0\0\0\0\0\0\0\0\0\0��\0?\0\0\0\0\0\0\0!\"6AQq1BRat������$2r�#bCSc����\0\0\0\0\0\0\0\0\0\0\0\0\0��\01\0\0\0\0\0\0\0\01A!34�\"2Qa#q���𑡱��\0\0\0?\0�\0�n\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0�]n��%��dt��&�{�D�N��!����ɝ��`�r��U����TM�4�ʪ�{�-g�=����1ʯ/Wܯ��k�����)�88�,v�LW���WJ�Gz����{5C�ܦ�^(�^�\Z�Kfc�ٞ���������WT$���D{�;�\0/��5����+�ʸ��\\���F��U;x/o���/�Bc�]�׺(�6���i�MZ�.�ܽ��R�U�ϣ�Ŏ�D�yi�ᗬ\0Dl\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0xow�~=k����H����r��z�����\nǛgl��U�X�cUJzd^lm���M�nYs�4��%��w>uM���];�H���>��q�{ǽ<����u9��؎P\0�@\0\0�����Ү��%,��QL�͑�gv)��Lu�Y��x�ki��d�[�]=��2IOP�W�����T]Ǹ�v�Ik�����-�\"��N��Oԉ�z!?.�I:<ӏ�8���r}�;@\0��\0\0\0\0\0\0\0\0\0\0\0\0�L������S��]��U��:{��/og�J��T����ֿ9�-;DʫWVMq����r�Z�]+�{\\����x��hQ�\0\0\0\0\0;�k&�V��ӹ[%4�����]~ſ��eu=t��&J��\"/ܧ%��^�0�#����~9�hi�_��	�)�g@.�\0\0\0\0\0\0\0\0\0\0\0\0\r������܉���Kw�U�5��b�И߹L��F�飚��N�C�r��0�o/�����ת�@�n�/9��k�4��r�>8�^R��f�5�\0ly\0\0\0\0r�:G$lM\\�F�v����B��%�ܩ���(��\Z��r�>0��/��#֖�R�uT��^k}��ܥ�9h3ůL1Ӿ}V\Z:m`\0s��\0\0\0\0\0\0\0\0\0\0\0\0\0\r_hxU>mbu�ed\Z�I*�/�Wо%�)X���Ul���;ਁ��#rh���5�g|�2_��#n�U1���^�R|к�|O����\"�4�\0i�W��b�0��͹���y�0��\'\'Wr�k�[�%2׵I��Y�� \0��z-��˭l6�};稝���bj��k�r|�f��o{`U�TʊȚ��}ɩ>��7���d_����%�{t_���S�n�����b\'{|�v�X-�~��aT�M��Z����%\\��?�OBx�ڦ��e�lל���V��V6�\0xd\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0Ú׵X����ʊ�����f�5��%^;L��_\n,J��~����5����\0�F��2l��]&��T��,_����x���m؟��D6��r\Z��ʝ������=%��i�#w��E�S�U;�x6�5[�C���t�(�9W���>�H�]u�kM��k��[3MkX�c\Z�kw\"\"h�ry��v��֒�M6����}��f&9�Gx\00\0\0\0\0\0\0\0\0\0\0\0\0\0��$�b���/IM�֦���5�֧�R״V���3�(j.���e]�WT��)t{�{|I�R�v���O���G[�˹!��=��nOrn�4S��p�-��H�e&����o��tv+e5}O���}�=�iW<�2���쎵�_!�,m�7D0\0�â���)��D�[ߜ���I���G=��W9U~gƇ ���9c�\Z�r�S�E3��,�*-�!������.�a��ԭ�kF���rI�m�eT*�]�in1��x<T����69�L:������ʗn�Uh�U�=7{�+h+s�}.nU������MNJu�s�H�|nG5ɪ9TT9*��������Z�-y��*�?ǭ��XL;7����\"�h�8�g�>%��b�޻�e�{��_�Q\\��[\0\0�o\0\0\0\0\0\0\0\0tWV�[h��VH��M�����MT�9�cp�/R\\j��ӱU��k�(���֤߶���9�ʜ��(���T�\0�\\����D��\n�fI߰\0�\0\0\0\0\0\0\0\0\0\02X�Ar�.�^-r�%�w�^l��k�QLh1j��kh�%�������dvZK��\0j�4~��j��}(���#��f�+i^�V�V�3ЎcU~d�|�\0Y�4��9D�q[�H�\0#=�\0\0\0\0\0#��t!����y,6޺�^��⼝�򞲬���\0�E\0\0\0\0\0\0\0\0\0\0\0\0N�]�z�m	X�|�;t����%c��r�\0ދ}?�\0\0�n\0\0\0\0\0\0Gz�C=z/���Xm�t!����y;.�=eY��\0p�\0\0\0\0\0\0\0\0\0\0\0\0���;t����%b)�z����[�hJ��|��\0��\n\0^�\0\0\0\0\0\0�6�Іz�_G���~S�U��\0�\0\0\0\0\0\0\0\0\0\0\0	��룷O]O�BV\0�x������O�@\0+ۀ\0��','0',NULL,NULL);
/*!40000 ALTER TABLE `image_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (83,'2014_10_12_000000_create_users_table',1),(84,'2014_10_12_100000_create_password_resets_table',1),(85,'2017_10_28_074325_create_books_table',1),(86,'2017_11_04_080615_create_tasks_table',1),(87,'2017_11_25_030531_create_posts_table',1),(88,'2017_11_25_083131_create_comments_table',1),(89,'2017_12_09_053338_create_mikujis_table',1),(90,'2017_12_09_090211_create_task2s_table',1),(91,'2017_12_09_090547_create_visions_table',1),(92,'2017_12_16_125200_create_personal_info_table',1),(93,'2017_12_16_135700_create_omikuji_data_table',1),(94,'2017_12_16_140300_create_bidder_data_table',1),(95,'2017_12_16_140900_create_bidder_result_data_table',1),(96,'2017_12_30_140000_create_image_data_table',1),(97,'2018_01_02_210800_create_vision_data_table',1),(98,'2018_01_05_232900_create_premier_data_table',1),(99,'2018_01_18_065903_create_npo_registers_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mikujis`
--

DROP TABLE IF EXISTS `mikujis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mikujis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `msg` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `return_big` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `return_small` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount_all` int(11) NOT NULL,
  `amount_big` int(11) NOT NULL,
  `amount_small` int(11) NOT NULL,
  `published` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `delete_flg` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mikujis`
--

LOCK TABLES `mikujis` WRITE;
/*!40000 ALTER TABLE `mikujis` DISABLE KEYS */;
/*!40000 ALTER TABLE `mikujis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `npo_registers`
--

DROP TABLE IF EXISTS `npo_registers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `npo_registers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `npo_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `embed_youtube` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `manager` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `member1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `member2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `member3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `member4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `follower` int(11) NOT NULL DEFAULT '0',
  `buyer` int(11) NOT NULL DEFAULT '0',
  `body` text COLLATE utf8_unicode_ci,
  `published` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `npo_registers`
--

LOCK TABLES `npo_registers` WRITE;
/*!40000 ALTER TABLE `npo_registers` DISABLE KEYS */;
INSERT INTO `npo_registers` VALUES (3,'teamFSHARP','FSHARP','もう、NPOは資金に困らない。','https://www.facebook.com/LiCleOrg/',NULL,NULL,NULL,NULL,'https://vote.fe-ver.jp/communities/90',NULL,'abc690e1a12d9e88','https://bitflyer.jp/easypayp/2zfFAopLd','qrtymyh43ec5jp4ysz63pez49vk6xn7ruq82y45nek','仲条高幸',NULL,NULL,NULL,NULL,0,0,'FSHARPを運営するチームです。\r\nご不明点などございましたら、お気軽にご相談ください。',NULL,NULL,NULL),(4,'nipponshotenkai','NPO法人日本商店会','共に学び共に成長し共に勝つ',NULL,NULL,NULL,NULL,NULL,'https://nipponshotenkai.com/',NULL,NULL,NULL,NULL,'NPO法人日本商店会',NULL,NULL,NULL,NULL,0,0,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `npo_registers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `omikuji_data`
--

DROP TABLE IF EXISTS `omikuji_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `omikuji_data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `omikuji_id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `omikuji_sub_id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `participants` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_dt` datetime NOT NULL,
  `end_dt` datetime NOT NULL,
  `bidder_price` int(10) unsigned NOT NULL,
  `max_price` int(10) unsigned NOT NULL,
  `min_price` int(10) unsigned NOT NULL,
  `max_bid_participants` int(10) unsigned NOT NULL,
  `min_bid_participants` int(10) unsigned NOT NULL,
  `omikuji_published` datetime NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `gazou_img` blob,
  `delflg` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `omikuji_data_user_id_omikuji_id_omikuji_sub_id_unique` (`user_id`,`omikuji_id`,`omikuji_sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `omikuji_data`
--

LOCK TABLES `omikuji_data` WRITE;
/*!40000 ALTER TABLE `omikuji_data` DISABLE KEYS */;
/*!40000 ALTER TABLE `omikuji_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_info`
--

DROP TABLE IF EXISTS `personal_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `user_name_sei_kanji` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `user_name_mei_kanji` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `user_name_sei_kana` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_name_mei_kana` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_name_sei_roma` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `user_name_mei_roma` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `user_name_nickname` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday_year` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `birthday_month` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `birthday_day` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `sex_type` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `post_up` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_low` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_1` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_2` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_3` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_4` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_5` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_type` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_year` int(10) unsigned DEFAULT NULL,
  `home_tel` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_mobile` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_fax` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_pc_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_mobile_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bank_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bank_branch` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bank_type_account` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bank_account_number` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bank_account_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `memorial_day` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `system_expiration_date_year` char(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `system_expiration_date_month` char(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `system_expiration_date_day` char(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `system_join_time_year` char(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `system_join_time_month` char(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `system_join_time_day` char(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `system_withdrawal_time_year` char(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `system_withdrawal_time_month` char(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `system_withdrawal_time_day` char(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `credit_card_sei` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `credit_card_mei` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `credit_card_post` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `credit_card_country` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `credit_card_birthday_year` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `credit_card_birthday_month` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `credit_card_birthday_day` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `credit_card_number_1` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `credit_card_number_2` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `credit_card_number_3` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `credit_card_number_4` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `credit_card_expiration_month` char(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `credit_card_expiration_year` char(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `credit_card_expiration_security_code` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_name` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_owner_name_sei_kanji` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_owner_name_mei_kanji` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_owner_name_sei_kana` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_owner_name_mei_kana` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_owner_name_sei_roma` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_owner_name_mei_roma` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_profile_address_1` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_profile_address_2` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_profile_address_3` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_profile_address_4` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_profile_tel` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_profile_fax` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_profile_dept` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_profile_title` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_profile_seniority` int(10) unsigned DEFAULT NULL,
  `delflg` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_info_user_id_unique` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_info`
--

LOCK TABLES `personal_info` WRITE;
/*!40000 ALTER TABLE `personal_info` DISABLE KEYS */;
INSERT INTO `personal_info` VALUES (2,'test2@test.co.jp','1516113207@test1.png',NULL,'テスト２','太郎',NULL,NULL,'tesutotsu-','tarou',NULL,'2000','10','10','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,NULL),(5,'nj.takayuki+004@gmail.com','1516114071@sky_blue_yoshi_egg_by_dragonshadow3-d8pco22.png',NULL,'a','a',NULL,NULL,'a','a',NULL,'1234','12','12','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,NULL);
/*!40000 ALTER TABLE `personal_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `premier_data`
--

DROP TABLE IF EXISTS `premier_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `premier_data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vision_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `premier_id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `image_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `published` datetime NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `description_detail` text COLLATE utf8_unicode_ci,
  `participants` int(10) unsigned DEFAULT NULL,
  `start_dt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `end_dt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bidder_price` int(10) unsigned DEFAULT NULL,
  `max_price` int(10) unsigned DEFAULT NULL,
  `min_price` int(10) unsigned DEFAULT NULL,
  `max_bid_participants` int(10) unsigned DEFAULT NULL,
  `min_bid_participants` int(10) unsigned DEFAULT NULL,
  `delflg` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `premier_data_user_id_vision_id_premier_id_unique` (`user_id`,`vision_id`,`premier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `premier_data`
--

LOCK TABLES `premier_data` WRITE;
/*!40000 ALTER TABLE `premier_data` DISABLE KEYS */;
INSERT INTO `premier_data` VALUES (1,'test@test.co.jp','1','1','タイトル',NULL,'open','2018-01-16 22:57:52','説明','説明詳細',0,'2015/6/5 10:6:10','2019/11/15 15:11:15',1000000,2000000,3000000,NULL,NULL,'0',NULL,NULL),(2,'manalangaoka@gmail.com','1','1','優待',NULL,'open','2018-01-18 14:28:42','優待','優待テスト',0,'2018/1/1 1:0:0','2023/8/2 1:8:2',101,2,1,NULL,NULL,'0',NULL,NULL);
/*!40000 ALTER TABLE `premier_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `task2s`
--

DROP TABLE IF EXISTS `task2s`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `task2s` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `published` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `task2s`
--

LOCK TABLES `task2s` WRITE;
/*!40000 ALTER TABLE `task2s` DISABLE KEYS */;
/*!40000 ALTER TABLE `task2s` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `published` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasks`
--

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `npo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'test','test@test.co.jp','$2y$10$VNnec6nTP0OpNeergjQfg.UT5ogBKWCky0W3bP3Yn1sQyswGbFD6q','zZJ3jE8vK5G5UWAVmJ09zTs4QotIgm9yhf998bNTmmnigX7xw1RwGLwM7G3y',NULL,'2018-01-16 22:54:55','2018-01-16 23:17:50'),(2,'nakajoTakayuki','nj.takayuki+004@gmail.com','$2y$10$MZw1zJkkvZ.h8xQ9PdvvheQ7l4KqW7goK1H8.cvujiFwkgCaWCFma','3S6a3OepKAxJIIasQ6XpJQzbLE4P4GfOoZw8AolVK3cos3h2WU0zrviuvLnn',NULL,'2018-01-16 23:16:48','2018-01-18 14:50:12'),(3,'test2','test2@test.co.jp','$2y$10$7B7lkagbi9UAXBEFteE.HeYZ9kinrYy.vrFPVAKaK5DRC3OXFuxIe','gXyRFBhf11w1z23Bhd3XiLhuNSLH2456KKfVjZQCO2taExhcuVmcavyx7AWN',NULL,'2018-01-16 23:18:13','2018-01-16 23:38:50'),(4,'ざきやま','yamazaki_daisuke@hotmail.co.jp','$2y$10$y0bvyoGR19MCAZczuGBpk.1HlW12ZcaNe4uliMWoW6wfkMnqgcEO6',NULL,NULL,'2018-01-17 23:14:30','2018-01-17 23:14:30'),(5,'kinokino','kino@gmail.com','$2y$10$Z4sVO3BZcRpqk3ZHSMm9XeZalcp4lJM542aNuTV6i0ZyboqZgqJUa',NULL,NULL,'2018-01-17 23:18:38','2018-01-17 23:18:38'),(6,'manalangaoka','manalangaoka@gmail.com','$2y$10$pNX4cs3ll6cK9lYTVd0G3e1NYjYJhFzieypAEbvIpAbXYR84NHU4W','WMR3wQxsBuWFcbO7H8phGImLXnQFj8eKWze9aHEMeR5rZH2wgvClw9CQfMFi','2hj','2018-01-18 05:02:29','2018-01-19 23:14:41'),(7,'nj','nj.takayuki+005@gmail.com','$2y$10$Z7PSG94DJ/z8ZxsrMsUlx.o0BWAbJuiXg6eNQpOW0oyhAP.QAufiO','hgHItEtLNoMMovsJTTmcQCHoKsi0ntwOQtH84Z1nuwUF6vl7gfq7G0Mp4cpq',NULL,'2018-01-18 14:51:01','2018-01-18 14:51:48'),(8,'nj','nj.takayuki+006@gmail.com','$2y$10$U.tnhx1HT/zqzCIbru7wTe/4LRZJs74or4Vp7ktsUZyRQrk4Neuru','BsZaFjP0w4UO53rscPTbrnIhyFPQ6rONzynDO1UcpHbCQ3WzDXWNcxv7nIDv',NULL,'2018-01-18 14:52:29','2018-01-19 05:41:33'),(9,'nj','nj.takayuki+007@gmail.com','$2y$10$36/cnBpxl7iQvmnhu5/riOFRmhC.6zhtOROCixCBIiHyBaj1mqdTu','5xFoBL9VslKSTd0c3BjKuK0UwenMa3qsYIHEWm50kQ2gGBromN6CwI3UCahk',NULL,'2018-01-18 14:57:08','2018-01-18 15:10:36'),(10,'manalang','manalang@gmail.com','$2y$10$VRtT6uZqSYLCf5oA4BQgxuZ7JyG93GWRg5yDjgdR/te2DwcUJedSu','rZkWQV5XXZs0BGP2rmswlnfyPje1zHELUpGbg9teJl7NbshDbpwNNasUOcre',NULL,'2018-01-18 15:11:46','2018-01-18 15:23:41'),(11,'寺田優也','unitednum@gmail.com','$2y$10$PHtRmzR1ui1ow59nxXZ0ZedM6Fm.ulxS/se5d5x8exgbOa2K9Ncxa','v0d04I1H4IzzW6tD2xNlSL8rEgQsumAZHJTA9TyibYfGL57UgKolCgxxxcsY',NULL,'2018-01-18 17:44:52','2018-01-18 17:47:30'),(12,'mana','mana@gmail.com','$2y$10$HY2WUPEdLFAfb.qXXhRdce2vDg7MTSfTAeQZX8G1uKrp1jom2BpZK','HDiR7mtTGq2BTqzpQRqatfqW52EkVufhOYpq29E5130a1FP0AFfcufOIPGW7',NULL,'2018-01-19 05:42:58','2018-01-19 05:58:39'),(13,'eh1255','eh1255@messiah.edu','$2y$10$pIx9JAwJrSR6WINHC7.6F.9Z.Trfp19eOJPhcziAJLt2j5WqRyJWC',NULL,NULL,'2018-01-20 10:45:01','2018-01-20 10:45:01'),(14,'pieces_test','pieces_test@gmail.com','$2y$10$Lg9gdiBkrG349ZyXgsZauOK4Gi1MOz4apesSIOsDVwGlSC3WThRjC','0dhEh6GfatOkse0CowzvzafBmZLIlSJxBTMyDHr5YQ1jR0GoZ64dvwNvN0l6','piecesTest','2018-01-25 23:17:19','2018-01-28 02:47:36'),(15,'nja','nj.takayuki+2@gmail.com','$2y$10$8y.k6tLCTR0Py2xmKJp31eCo5KQ47LH6./kKaAWKj3p.EfLuyCMwm',NULL,NULL,'2018-01-26 20:43:39','2018-01-26 20:43:39'),(16,'仲条高幸','nj.takayuki@gmail.com','$2y$10$cl6X/80zRUvM/Jt3sYPf3eudWHN12zbRD/OL4Mi8uxOYZvhcKpa0a','T78Hipn6HqA3vfKLwRswJWS5OQ5p4bmoOeSYYPjWipMySizWM8L54MM3jbxl','teamFSHARP','2018-01-28 01:31:50','2018-01-28 18:23:22'),(17,'NPO法人日本商店会','info@frontiergate.co.jp','$2y$10$bWZpHXnis6tM3h5552Sq7.2VJxBnBc5IclCbdaV0J7Yi1N2T4eh9y',NULL,'nipponshotenkai','2018-01-28 11:58:58','2018-01-28 11:58:58');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vision_data`
--

DROP TABLE IF EXISTS `vision_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vision_data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vision_id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `vision_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vision_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vision_published` datetime NOT NULL,
  `vision_description` text COLLATE utf8_unicode_ci NOT NULL,
  `first_commitment_stage` int(10) unsigned DEFAULT NULL,
  `second_commitment_stage` int(13) unsigned DEFAULT NULL,
  `delflg` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `vision_data_user_id_vision_id_unique` (`user_id`,`vision_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vision_data`
--

LOCK TABLES `vision_data` WRITE;
/*!40000 ALTER TABLE `vision_data` DISABLE KEYS */;
/*!40000 ALTER TABLE `vision_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visions`
--

DROP TABLE IF EXISTS `visions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `msg` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `published` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visions`
--

LOCK TABLES `visions` WRITE;
/*!40000 ALTER TABLE `visions` DISABLE KEYS */;
/*!40000 ALTER TABLE `visions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-28 16:35:57
