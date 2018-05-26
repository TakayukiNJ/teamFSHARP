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
INSERT INTO `image_data` VALUES (1,'test2@test.co.jp','1516112386@test1.png','‰PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0È\0\0\0È\0\0\0\":9É\0\0\0sRGB\0®Îé\0\0\0gAMA\0\0±üa\0\0\0	pHYs\0\0Ã\0\0ÃÇo¨d\0\0hIDATx^íİ¡[êP‡q½	4Ö iÓ¦\rš“65Iõ/ğ±ÙÌ6l˜$Ú¤i“&\r\Z4×Xóïg\"raç›ö~Â½ÇE÷9g;°móóósğíÏôÀ+Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AXÈoXOOOõz½ÕjMÿ†Wù}ŒQãñ¸P(L&“é!ø“ß+C÷oEı~ßÀ£ü†uxxhƒûû{À£ü†uzzjN³r=c•Ëe7pgZîDŞÂ—ü†åNÛONNlÌjè]®nÛëõöööÜÀE6\ZŠÅ¢Çúò;c9»»»ûûûnà®\r9Óò+×a9ñ)<«¡_yÎ{†A¸ËßŞŞÜfÇ±¦¼ÏXî¼ªÑhØ˜IË£¼‡åÄ«a»İ¶©ë#,6´$ëËÅÅ…\rX\r}á%M_†ÃaµZµñh4²	ë`ÆúR©TjµšÙĞò‚°¦ØĞò‹¥pÊ]–J%»*|yy±ydÆŒ5ÅwÒ~1c}{}}=88pƒb±èNá]jv0c}sËßöö¶„aØn·í ²!¬8…÷…¥ğ‡ñxƒA¥R±1ÒbÆú¡\\.Ç7Y°¡µÂšÇjèKá¼(ŠªÕª[İøùù9Ş‘G*ÌXóf7´îîîl€´˜±à&‹õ1c-°û¸e‘\r­lk1Ná×ÄR¸˜;yw§ğöôûû»íÈ#9f¬Åf7´˜´2 ¬ÿŠ¯ÜjµlêBr„õ_Üd±ÂZæììÌ¬†iqò¾L¿ßßÙÙqƒB¡0¸É\"9f¬eÜÅ`üÔ6´R!¬ØĞÊ†¥p7WÅ7YğÔä˜±Và;él˜±Vëv»õzİ\r¸É\"9f¬ÕjµšıF9ÃN§c±a%Â)|Z,…‰ğÔ´˜±qK!7Y¤BXIÅ«!×†I°&EQöj\'n²X‰+©Ù\r-NáWbÆJ!~jˆ‹ìããƒ\r­%˜±RˆŸ\ZÂwÒ+V:<7!–ÂtfŸ\ZÂG·a¥¶¹¹i>º%X\n!AX ,HVvö¨#,DX©Åû¢ÕjõææÆÆ˜CX©5›MDQt}}mcÌa»!‹N§sttdc>À…˜±²h4\Zñ‚Èj¸ae/ˆ¬†±fäN°¶¶¶lÌgøaeÇw;K°B‚°<`§ô7ÂÊnv§”[wæVv³;¥ççç½^Ïş„CXÙİŞŞ>>>ÆTfßaW…ëŠ_cáğaÆËö~c)„ay_v»]€°<h4\Z6p×†î\nÑÆ9GX¸ËC{õÜp8¼¼¼´ƒ9ÇÉ»­VËMWnà–ÅÉdbóŒ°¼áÚpK!$„	Â‚aA‚° AX ,H$„åMüãnÚqË›ø]¼zÎ!,omğğğ`ƒ<ã×\rŞ„aX*•lÌ§JX>ñË™K!$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚°|Š_NÂòéêêÊıÛl6íÏ<ã9ï`Æ‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,llüÊË½78£\"\0\0\0\0IEND®B`‚','0',NULL,NULL),(2,'test2@test.co.jp','1516112415@test1.png','‰PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0È\0\0\0È\0\0\0\":9É\0\0\0sRGB\0®Îé\0\0\0gAMA\0\0±üa\0\0\0	pHYs\0\0Ã\0\0ÃÇo¨d\0\0hIDATx^íİ¡[êP‡q½	4Ö iÓ¦\rš“65Iõ/ğ±ÙÌ6l˜$Ú¤i“&\r\Z4×Xóïg\"raç›ö~Â½ÇE÷9g;°móóósğíÏôÀ+Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AXÈoXOOOõz½ÕjMÿ†Wù}ŒQãñ¸P(L&“é!ø“ß+C÷oEı~ßÀ£ü†uxxhƒûû{À£ü†uzzjN³r=c•Ëe7pgZîDŞÂ—ü†åNÛONNlÌjè]®nÛëõöööÜÀE6\ZŠÅ¢Çúò;c9»»»ûûûnà®\r9Óò+×a9ñ)<«¡_yÎ{†A¸ËßŞŞÜfÇ±¦¼ÏXî¼ªÑhØ˜IË£¼‡åÄ«a»İ¶©ë#,6´$ëËÅÅ…\rX\r}á%M_†ÃaµZµñh4²	ë`ÆúR©TjµšÙĞò‚°¦ØĞò‹¥pÊ]–J%»*|yy±ydÆŒ5ÅwÒ~1c}{}}=88pƒb±èNá]jv0c}sËßöö¶„aØn·í ²!¬8…÷…¥ğ‡ñxƒA¥R±1ÒbÆú¡\\.Ç7Y°¡µÂšÇjèKá¼(ŠªÕª[İøùù9Ş‘G*ÌXóf7´îîîl€´˜±à&‹õ1c-°û¸e‘\r­lk1Ná×ÄR¸˜;yw§ğöôûû»íÈ#9f¬Åf7´˜´2 ¬ÿŠ¯ÜjµlêBr„õ_Üd±ÂZæììÌ¬†iqò¾L¿ßßÙÙqƒB¡0¸É\"9f¬eÜÅ`üÔ6´R!¬ØĞÊ†¥p7WÅ7YğÔä˜±Và;él˜±Vëv»õzİ\r¸É\"9f¬ÕjµšıF9ÃN§c±a%Â)|Z,…‰ğÔ´˜±qK!7Y¤BXIÅ«!×†I°&EQöj\'n²X‰+©Ù\r-NáWbÆJ!~jˆ‹ìããƒ\r­%˜±RˆŸ\ZÂwÒ+V:<7!–ÂtfŸ\ZÂG·a¥¶¹¹i>º%X\n!AX ,HVvö¨#,DX©Åû¢ÕjõææÆÆ˜CX©5›MDQt}}mcÌa»!‹N§sttdc>À…˜±²h4\Zñ‚Èj¸ae/ˆ¬†±fäN°¶¶¶lÌgøaeÇw;K°B‚°<`§ô7ÂÊnv§”[wæVv³;¥ççç½^Ïş„CXÙİŞŞ>>>ÆTfßaW…ëŠ_cáğaÆËö~c)„ay_v»]€°<h4\Z6p×†î\nÑÆ9GX¸ËC{õÜp8¼¼¼´ƒ9ÇÉ»­VËMWnà–ÅÉdbóŒ°¼áÚpK!$„	Â‚aA‚° AX ,H$„åMüãnÚqË›ø]¼zÎ!,omğğğ`ƒ<ã×\rŞ„aX*•lÌ§JX>ñË™K!$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚°|Š_NÂòéêêÊıÛl6íÏ<ã9ï`Æ‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,llüÊË½78£\"\0\0\0\0IEND®B`‚','0',NULL,NULL),(3,'test2@test.co.jp','1516112549@test1.png','‰PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0È\0\0\0È\0\0\0\":9É\0\0\0sRGB\0®Îé\0\0\0gAMA\0\0±üa\0\0\0	pHYs\0\0Ã\0\0ÃÇo¨d\0\0hIDATx^íİ¡[êP‡q½	4Ö iÓ¦\rš“65Iõ/ğ±ÙÌ6l˜$Ú¤i“&\r\Z4×Xóïg\"raç›ö~Â½ÇE÷9g;°móóósğíÏôÀ+Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AXÈoXOOOõz½ÕjMÿ†Wù}ŒQãñ¸P(L&“é!ø“ß+C÷oEı~ßÀ£ü†uxxhƒûû{À£ü†uzzjN³r=c•Ëe7pgZîDŞÂ—ü†åNÛONNlÌjè]®nÛëõöööÜÀE6\ZŠÅ¢Çúò;c9»»»ûûûnà®\r9Óò+×a9ñ)<«¡_yÎ{†A¸ËßŞŞÜfÇ±¦¼ÏXî¼ªÑhØ˜IË£¼‡åÄ«a»İ¶©ë#,6´$ëËÅÅ…\rX\r}á%M_†ÃaµZµñh4²	ë`ÆúR©TjµšÙĞò‚°¦ØĞò‹¥pÊ]–J%»*|yy±ydÆŒ5ÅwÒ~1c}{}}=88pƒb±èNá]jv0c}sËßöö¶„aØn·í ²!¬8…÷…¥ğ‡ñxƒA¥R±1ÒbÆú¡\\.Ç7Y°¡µÂšÇjèKá¼(ŠªÕª[İøùù9Ş‘G*ÌXóf7´îîîl€´˜±à&‹õ1c-°û¸e‘\r­lk1Ná×ÄR¸˜;yw§ğöôûû»íÈ#9f¬Åf7´˜´2 ¬ÿŠ¯ÜjµlêBr„õ_Üd±ÂZæììÌ¬†iqò¾L¿ßßÙÙqƒB¡0¸É\"9f¬eÜÅ`üÔ6´R!¬ØĞÊ†¥p7WÅ7YğÔä˜±Và;él˜±Vëv»õzİ\r¸É\"9f¬ÕjµšıF9ÃN§c±a%Â)|Z,…‰ğÔ´˜±qK!7Y¤BXIÅ«!×†I°&EQöj\'n²X‰+©Ù\r-NáWbÆJ!~jˆ‹ìããƒ\r­%˜±RˆŸ\ZÂwÒ+V:<7!–ÂtfŸ\ZÂG·a¥¶¹¹i>º%X\n!AX ,HVvö¨#,DX©Åû¢ÕjõææÆÆ˜CX©5›MDQt}}mcÌa»!‹N§sttdc>À…˜±²h4\Zñ‚Èj¸ae/ˆ¬†±fäN°¶¶¶lÌgøaeÇw;K°B‚°<`§ô7ÂÊnv§”[wæVv³;¥ççç½^Ïş„CXÙİŞŞ>>>ÆTfßaW…ëŠ_cáğaÆËö~c)„ay_v»]€°<h4\Z6p×†î\nÑÆ9GX¸ËC{õÜp8¼¼¼´ƒ9ÇÉ»­VËMWnà–ÅÉdbóŒ°¼áÚpK!$„	Â‚aA‚° AX ,H$„åMüãnÚqË›ø]¼zÎ!,omğğğ`ƒ<ã×\rŞ„aX*•lÌ§JX>ñË™K!$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚°|Š_NÂòéêêÊıÛl6íÏ<ã9ï`Æ‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,llüÊË½78£\"\0\0\0\0IEND®B`‚','0',NULL,NULL),(4,'test2@test.co.jp','1516112783@test1.png','‰PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0È\0\0\0È\0\0\0\":9É\0\0\0sRGB\0®Îé\0\0\0gAMA\0\0±üa\0\0\0	pHYs\0\0Ã\0\0ÃÇo¨d\0\0hIDATx^íİ¡[êP‡q½	4Ö iÓ¦\rš“65Iõ/ğ±ÙÌ6l˜$Ú¤i“&\r\Z4×Xóïg\"raç›ö~Â½ÇE÷9g;°móóósğíÏôÀ+Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AXÈoXOOOõz½ÕjMÿ†Wù}ŒQãñ¸P(L&“é!ø“ß+C÷oEı~ßÀ£ü†uxxhƒûû{À£ü†uzzjN³r=c•Ëe7pgZîDŞÂ—ü†åNÛONNlÌjè]®nÛëõöööÜÀE6\ZŠÅ¢Çúò;c9»»»ûûûnà®\r9Óò+×a9ñ)<«¡_yÎ{†A¸ËßŞŞÜfÇ±¦¼ÏXî¼ªÑhØ˜IË£¼‡åÄ«a»İ¶©ë#,6´$ëËÅÅ…\rX\r}á%M_†ÃaµZµñh4²	ë`ÆúR©TjµšÙĞò‚°¦ØĞò‹¥pÊ]–J%»*|yy±ydÆŒ5ÅwÒ~1c}{}}=88pƒb±èNá]jv0c}sËßöö¶„aØn·í ²!¬8…÷…¥ğ‡ñxƒA¥R±1ÒbÆú¡\\.Ç7Y°¡µÂšÇjèKá¼(ŠªÕª[İøùù9Ş‘G*ÌXóf7´îîîl€´˜±à&‹õ1c-°û¸e‘\r­lk1Ná×ÄR¸˜;yw§ğöôûû»íÈ#9f¬Åf7´˜´2 ¬ÿŠ¯ÜjµlêBr„õ_Üd±ÂZæììÌ¬†iqò¾L¿ßßÙÙqƒB¡0¸É\"9f¬eÜÅ`üÔ6´R!¬ØĞÊ†¥p7WÅ7YğÔä˜±Và;él˜±Vëv»õzİ\r¸É\"9f¬ÕjµšıF9ÃN§c±a%Â)|Z,…‰ğÔ´˜±qK!7Y¤BXIÅ«!×†I°&EQöj\'n²X‰+©Ù\r-NáWbÆJ!~jˆ‹ìããƒ\r­%˜±RˆŸ\ZÂwÒ+V:<7!–ÂtfŸ\ZÂG·a¥¶¹¹i>º%X\n!AX ,HVvö¨#,DX©Åû¢ÕjõææÆÆ˜CX©5›MDQt}}mcÌa»!‹N§sttdc>À…˜±²h4\Zñ‚Èj¸ae/ˆ¬†±fäN°¶¶¶lÌgøaeÇw;K°B‚°<`§ô7ÂÊnv§”[wæVv³;¥ççç½^Ïş„CXÙİŞŞ>>>ÆTfßaW…ëŠ_cáğaÆËö~c)„ay_v»]€°<h4\Z6p×†î\nÑÆ9GX¸ËC{õÜp8¼¼¼´ƒ9ÇÉ»­VËMWnà–ÅÉdbóŒ°¼áÚpK!$„	Â‚aA‚° AX ,H$„åMüãnÚqË›ø]¼zÎ!,omğğğ`ƒ<ã×\rŞ„aX*•lÌ§JX>ñË™K!$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚°|Š_NÂòéêêÊıÛl6íÏ<ã9ï`Æ‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,llüÊË½78£\"\0\0\0\0IEND®B`‚','0',NULL,NULL),(5,'test2@test.co.jp','1516113207@test1.png','‰PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0È\0\0\0È\0\0\0\":9É\0\0\0sRGB\0®Îé\0\0\0gAMA\0\0±üa\0\0\0	pHYs\0\0Ã\0\0ÃÇo¨d\0\0hIDATx^íİ¡[êP‡q½	4Ö iÓ¦\rš“65Iõ/ğ±ÙÌ6l˜$Ú¤i“&\r\Z4×Xóïg\"raç›ö~Â½ÇE÷9g;°móóósğíÏôÀ+Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AXÈoXOOOõz½ÕjMÿ†Wù}ŒQãñ¸P(L&“é!ø“ß+C÷oEı~ßÀ£ü†uxxhƒûû{À£ü†uzzjN³r=c•Ëe7pgZîDŞÂ—ü†åNÛONNlÌjè]®nÛëõöööÜÀE6\ZŠÅ¢Çúò;c9»»»ûûûnà®\r9Óò+×a9ñ)<«¡_yÎ{†A¸ËßŞŞÜfÇ±¦¼ÏXî¼ªÑhØ˜IË£¼‡åÄ«a»İ¶©ë#,6´$ëËÅÅ…\rX\r}á%M_†ÃaµZµñh4²	ë`ÆúR©TjµšÙĞò‚°¦ØĞò‹¥pÊ]–J%»*|yy±ydÆŒ5ÅwÒ~1c}{}}=88pƒb±èNá]jv0c}sËßöö¶„aØn·í ²!¬8…÷…¥ğ‡ñxƒA¥R±1ÒbÆú¡\\.Ç7Y°¡µÂšÇjèKá¼(ŠªÕª[İøùù9Ş‘G*ÌXóf7´îîîl€´˜±à&‹õ1c-°û¸e‘\r­lk1Ná×ÄR¸˜;yw§ğöôûû»íÈ#9f¬Åf7´˜´2 ¬ÿŠ¯ÜjµlêBr„õ_Üd±ÂZæììÌ¬†iqò¾L¿ßßÙÙqƒB¡0¸É\"9f¬eÜÅ`üÔ6´R!¬ØĞÊ†¥p7WÅ7YğÔä˜±Và;él˜±Vëv»õzİ\r¸É\"9f¬ÕjµšıF9ÃN§c±a%Â)|Z,…‰ğÔ´˜±qK!7Y¤BXIÅ«!×†I°&EQöj\'n²X‰+©Ù\r-NáWbÆJ!~jˆ‹ìããƒ\r­%˜±RˆŸ\ZÂwÒ+V:<7!–ÂtfŸ\ZÂG·a¥¶¹¹i>º%X\n!AX ,HVvö¨#,DX©Åû¢ÕjõææÆÆ˜CX©5›MDQt}}mcÌa»!‹N§sttdc>À…˜±²h4\Zñ‚Èj¸ae/ˆ¬†±fäN°¶¶¶lÌgøaeÇw;K°B‚°<`§ô7ÂÊnv§”[wæVv³;¥ççç½^Ïş„CXÙİŞŞ>>>ÆTfßaW…ëŠ_cáğaÆËö~c)„ay_v»]€°<h4\Z6p×†î\nÑÆ9GX¸ËC{õÜp8¼¼¼´ƒ9ÇÉ»­VËMWnà–ÅÉdbóŒ°¼áÚpK!$„	Â‚aA‚° AX ,H$„åMüãnÚqË›ø]¼zÎ!,omğğğ`ƒ<ã×\rŞ„aX*•lÌ§JX>ñË™K!$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚°|Š_NÂòéêêÊıÛl6íÏ<ã9ï`Æ‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,H$„	Â‚aA‚° AX ,llüÊË½78£\"\0\0\0\0IEND®B`‚','0',NULL,NULL),(6,'nj.takayuki+004@gmail.com','1516114071@sky_blue_yoshi_egg_by_dragonshadow3-d8pco22.png','ÿØÿà\0JFIF\0\0\0\0\0\0ÿÛ\0C\0\n\n\n		\n\Z%\Z# , #&\')*)-0-(0%()(ÿÛ\0C\n\n\n\n(\Z\Z((((((((((((((((((((((((((((((((((((((((((((((((((ÿÀ\0^1\"\0ÿÄ\0\0\0\0\0\0\0\0\0\0\0	\nÿÄ\0µ\0\0\0}\0!1AQa\"q2‘¡#B±ÁRÑğ$3br‚	\n\Z%&\'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyzƒ„…†‡ˆ‰Š’“”•–—˜™š¢£¤¥¦§¨©ª²³´µ¶·¸¹ºÂÃÄÅÆÇÈÉÊÒÓÔÕÖ×ØÙÚáâãäåæçèéêñòóôõö÷øùúÿÄ\0\0\0\0\0\0\0\0	\nÿÄ\0µ\0\0w\0!1AQaq\"2B‘¡±Á	#3RğbrÑ\n$4á%ñ\Z&\'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz‚ƒ„…†‡ˆ‰Š’“”•–—˜™š¢£¤¥¦§¨©ª²³´µ¶·¸¹ºÂÃÄÅÆÇÈÉÊÒÓÔÕÖ×ØÙÚâãäåæçèéêòóôõö÷øùúÿÚ\0\0\0?\0ú¦Š( Š( Š( Š( Š( Š( ŒÑX5×ÃÕuÉ k„°·{†…[ip£8Ïj\0Û¢¾bÿ\0†µÓÿ\0èS»ÿ\0ÀÕÿ\0â(ÿ\0†µÓÿ\0èS»ÿ\0ÀÕÿ\0â(éÚ+æ/øk]?ş…;¿ü\r_ş\"øk]?ş…;¿ü\r_ş\"€>¢¾bÿ\0†µÓÿ\0èS»ÿ\0ÀÕÿ\0â(ÿ\0†µÓÿ\0èS»ÿ\0ÀÕÿ\0â(éÚ+æ/øk]?ş…;¿ü\r_ş\"øk]?ş…;¿ü\r_ş\"€>¢¾bÿ\0†µÓÿ\0èS»ÿ\0ÀÕÿ\0â)íi§‘ÿ\0\"ßş¯ÿ\0@OfŠ£¡_\rSF°ÔV3\ZİÛÇpœ•Ş¡±ŸÆ¯PEPEPEPEPEPEPEPEPEPEPEPEPEP\\?Çù$>/ÿ\0°tßú\rwÀüu¹Š„Ş)W\nòéóøÚ\0üé¢Š(\0¢Š(\0¢Š(\0¢Š(\0¢ŠZ\0ı7ğüˆşÿ\0°u¿şŠZÜ®áìÉ?|<Ñ0e\Z|‘ê#Pk  Š( Š( Š( Š( Š( Š( Š( Š( Š( Š( Š( Š( ¾ ı¦üSâ\r3ã&±k¦ëº­¥ªGnV{¹#EÌ(N:×ÛõğGíYÿ\0%¿[ÿ\0®Vßú!(„ÿ\0„ãÅŸô3ë¿ø0—ÿ\0Š®£áv»¬øƒâG†´ÍoXÔïì.ocŠk{›§•$RyXAô¯5®ãàü•ïØFı\n€>ù_xL\0?áĞøì\"ÿ\0âißğƒøOş…ÿ\0ññ5ĞÑ@÷ü şÿ\0¡cBÿ\0Á|_üMğƒøOş…ÿ\0ññ5ĞÑ@÷ü şÿ\0¡cBÿ\0Á|_üMğƒøOş…ÿ\0ññ5ĞÑ@÷ü şÿ\0¡cBÿ\0Á|_üMğƒøOş…ÿ\0ññ5ĞÑ@÷ü şÿ\0¡cBÿ\0Á|_üMGqà?	MFŞÑTéc?Úéh Îø«Ä:gŠu›-?_Õí­-ïgŠ(a½‘d`\0°\0¥eÿ\0ÂqâÏúõßüKÿ\0ÅT^<ÿ\0‘ãÄ?ö¸ÿ\0Ñ­XTôwìâMsVø¡soªë:õ¸Ó%qÍÔ’¨a$x8bFy<û×ØÕñ\'ìgÿ\0%fëşÁSèÈ«íº\0(¢Š\0(¢Š\0(¢Š\0(¢Š\0(¢Š\0(¢Š\0(¢Š\0(¢Š\0(¢Š\0(¢Š\0ç¼yâí7ÁŸ[Ö–àÙBèŒ @Ï–8æ¼·ş\ZÀ?óËZÿ\0ÀUÿ\0âëGö³ñeuCÿ\0Oÿ\0ú5kàê\0û€~ÓŞ?òËZÿ\0ÀUÿ\0âëÄş&è7?ücyâÿ\04i¥^¬i»>\\™*3T÷¯\rZúgàÁÏÃÍ;§Ş—ÿ\0F5ua(Æ´ùeµˆs\ZÙnV£kİ-~g—Âšñüõ°ÿ\0¿­ÿ\0Ä×Iğßá®µáÏh:ÍûÚ5­ÜsÈ#rX¨98ë^ËùQø\nô¿³¨ùŸş¹cûGîÿ\0‚z—ü\'Ú_üó¹ÿ\0¾øÑÿ\0	ö—ÿ\0<îïş5å¿••?ìú>bÿ\0\\sîıßğOmĞu›}jŞI­V@¨Ûñƒœf´ëŠøYÿ\0 ›Ïúïÿ\0²ŠíkÈ¯N£ŠÙ¢e8©âğtëÔŞKP¢Š+Ñ\n(¢€\n(¢€>1ñ?ìİãOÄºµı´š?‘uw4ñî¹`v³’3òuÁ¬ßøfÏMÿ\0›ÿ\0ˆ¯·ÀÅ-\0|wà_k\0|J<OãD…ô©¡6%¬I™·»£¤mŞ½Gş\ZÀ_óËZÿ\0ÀUÿ\0âê/Û3„ö§ş¢°ÿ\0è¹kâJ\0ûƒş\ZÀ_óËZÿ\0ÀUÿ\0âëÖü!â+/ørÇ[ÒÄÂÊñÆ&]¯€Häd÷ùˆ\r~†~Î¿òE|+ÿ\0^íÿ\0£€=Š( Š( Š( Š( Š( Š( Š( Š(=(\0¢¾ø¡ñÇÚ?Ä_éÚoˆç‚Î×PšbÄB\"¹\0d®k—ÿ\0…éñ\'ş†›ûñÿ\0@SşÖ_òEuOúø·ÿ\0Ñ«_Šöø÷Äßu˜ôêÒjšDÊÒIlñ¢e”åT­wßğ®¼\'ÿ\0@h?ï·ÿ\0\Zê¡„xóEgÄX|²ª£Z-¶¯¥¿Ìùk<WÓ_?äißïKÿ\0£\Z­ÿ\0Â¹ğ—ı¡ÿ\0¾ßük¡Ò´Û=\"Æ;-:‚Ú2J¢’@ÉÉëõ¯C	„óIŸ!ÄE†Ìğª(´î¶óó-ÑEèŸQE\0zgÂÏù]ÿ\0×ı”Wk\\WÂÏù]ÿ\0×ı”Wk_9‹ş4Ú8{şE´}?P¢Š+œöBŠ( ’–˜ÿ\0tâ€Ey\r÷‰µ˜ïn/äTY(Àà}ªøJu¿úIù/øW¡º£Wº>B§`á\'	i§Oó3lÏù$Ö¿ö‡ÿ\0EË_WÚ*fñf˜ºˆÛ¬ÖA0‰øÀ 1ØŸÎ¹øW^ÿ\0 ,÷Ûÿ\0ñTÿ\0³jwD®5Á$¿ó>Zšııä‹x[ş½Ûÿ\0F=x×ü+Ÿ	“ÿ\0 hï·ÿ\0â«Î<Qñ3ÆÖî|?án[\rÄˆíí’(ØF¤#,¤õ$òk\nøYÑIÉ¦UŸáóJ´Ò¾¶ÿ\03ï:+óÛş§ÄŸú\Zn?ïÄ?üEwßş,øßÄ_´\r+Z×æ»Óî^A4-j;BƒÔ×µréö]Q@Q@Q@Q@Q@Q@Q@›ßÿ\0ä­xÃşÂ—ú0×]ŸÆù+^0ÿ\0°¥ÇşŒ5ÆP ü\rÿ\0‘ú×ş¹Kÿ\0 ×Ò]«æß¿ò?Zÿ\0×)ô\ZúKµ{yoğŸ©ùw\Zÿ\0¿Gü+óaEW |xQE\0QEéŸ?äwÿ\0]ÿ\0öQ]­q_?äwÿ\0]ÿ\0öQ]­|æ/øÒ?háïùÑôıBŠ(®sÙ\n(¢€\nkt§S[¥{©ÿ\0ÈFëşº¿ş„jµYÔÿ\0ä#uÿ\0]_ÿ\0B5Z¾¦\n?Äÿ\0\Z~¯ó\n\n£E|µñkşJ¯ÿ\0]ÿ\0Aõ(¯–¾-É@Õÿ\0ë¢ÿ\0è\"¼ÜËà^§ÛpOûÕOğş¨ä+Ó¿fù.ÿ\0®“è‰+ÌkÓ¿fù.ÿ\0®“è‰+Æ?K?A¨¢Š\0(¢Š\0(¢Š\0(¢Š\0(¢Š\0(¢Š\0(¢Š\0üŞøÏÿ\0%kÆö¸ÿ\0Ñ†¸Êìş3ÿ\0ÉZñ‡ı….?ôa®2€=àoüÖ¿õÊ_ı¾“í_6|\rÿ\0‘ú×ş¹Kÿ\0 ×Ò]«ÛË„ıOË¸×ıú?á_›\n(¢½ãÂŠ){PQKGá@—ğ³şAõßÿ\0eÚ×ğ³şAõßÿ\0eÚWÎbÿ\0#öÿ\0‘mOÔ(¢Šç=¢Š(\0¦·Ju5ºP\'±á:Ÿü„n¿ë«ÿ\0èF«UOşB7_õÕÿ\0ô#U«êağ£ğlOñ§êÿ\00 QEQ€¢¾Zøµÿ\0%Wÿ\0®‹ÿ\0 Šú—é_-üYÿ\0’«ÿ\0×Eÿ\0ĞEy¹—À½O¶à÷ªŸáıQÇ×§~Íò\\</ÿ\0]&ÿ\0ÑW™W§~Í8ÿ\0…İáúé7şˆ’¼cô³ôŠJZ\0(¢Š\0(¢Š\0(¢Š\0(¢Š\0+Èÿ\0hÿ\0ˆZÏÃ¿\riwúÚ4×7~Cı¦2ãnÆn\0#œŠõÊùÏöÛÿ\0‘@ÿ\0°‘ÿ\0ÑO@Yÿ\0\rAãßùã¢à+ÿ\0ñuÇí7ã»ˆ$‰âÑB¸*JÚ¸?úxuöG„¾øcÇ>ÓüUâ	õ/í=f¿œ[N©y\0b\0*H\'½kÿ\0Ã/xş{køŸüEzÁù$¾ÿ\0°]¿ş‹ÙPƒMğCÂ¾_í­MM¯\";O:²á¸<_µzÏÄoùåÿ\0}?y7j÷2ïá|ÏËxÓıú?á_¨QEŞ|€Uİ\ZÚ;ÍRÖŞ\\„–EFÁç©VŸ†¿ä?§ÿ\0×eşu4ƒhêÁEON2WM¯ÌïÇ€´£ÿ\0-.¿ï±şÂ¥ÏK¯ûì…uã¥óË[ù™ûö_ÿ\0>c÷šo¢ÛÉ\r£HUßyŞrsŒVV2““»Üô¨Ñ…*tÕ¢¶AER4\n(¢€\nkt§S[¥{©ÿ\0ÈFëşº¿ş„jµYÔÿ\0ä#uÿ\0]_ÿ\0B5Z¾¦\n?Äÿ\0\Z~¯ó\n(¢¨À\\×¯|4ĞuÍVãP½7hœî.P@8ö®ÚŠ‰ÓEi+X\\m|$œèIÅ¾Çœÿ\0ÂğÏ÷¯ÿ\0ïğÿ\0âi—Óş\Z@ş.ğïœÚ®˜7À._|yoîP?+ıkÒk‘øµÿ\0$óYÿ\0®iÿ\0¡­sVÃR95‡·–çxú¸ºTçU´ä“ûÎCş\ZƒÇŸóÇDÿ\0ÀWÿ\0âé?á¨<yÿ\0<tOüş.¼.’¼õÃô+ö~ñ®©ãï\0ÿ\0lë‹l·k’[¡EÚ¡qÁ\'MzUxwìuÿ\0$€ÿ\0ØFä•î4\0QE\0QE\0QE\0WÎ¶ßüˆºı„şŠzú2¾sı¶ÿ\0äEĞ?ì$ôSĞÆôQE\0~‘|ÿ\0’Kàÿ\0ûÛÿ\0è±]•q¿?ä’ø?şÁvÿ\0ú,We@ÏÄ¤›ÃÒ¤HÒ6ôá\'­yöuïüú\\ÿ\0ß¦ÿ\0\n÷N¤æŒ\nìÃãò¤|ÖoÃtóJÊ´æã¥´G…ÿ\0g^ÿ\0Ï¥Çıúoğ£û:÷ş}.?ïÓ…{¦(Åoı§/å<¯õüır</û:÷ş}.?ïÓ…]Ñ-§µÖ,æ¸‚hâIU™\0Üšö|V7‹Ñá¿$ˆ¥5˜:ãú\n\\!K¾±\Z¸k²é©iu;ı:Ûşşñ§lißóımÿ\0WükÃ¨â´şÌóŸëÅUÿ\0.—Şÿ\0È÷í;ş­¿ïêÿ\0Û\Zwüÿ\0[ßÕÿ\0\Zğî(âìÈÿ\00¯çÒûßùãı±§Ïõ·ıı_ñ£ûcNÿ\0Ÿëoûú¿ã^GfGùƒıx«ÿ\0>WŞÿ\0È÷í;ş­¿ïêÿ\0Mm}mtÌ-§Š]½v08ü«Â8®ëáYÿ\0IÔÜOæk\ZøJ›š{UÅu1ø¨áåM$ï­ü®z.i§4î´Wš}¡âZ–Ÿxu’-.2¹DŞ§Ú«ÿ\0g^ÿ\0Ï¥Çıúoğ¯sÇ4¸¯J9”’·)ñ58*I¹ûW«¾Èğy­. ]ÓA,kÓ.„Ö¡¯Oøš\0Ğbÿ\0®ëÿ\0 µy†}kÑÃVu¡ÌÕÎòØå˜Ÿas+\'q(¢Šè<p®Gâ×ü“Ígş¹§ş†µ×W#ñkşIæ³ÿ\0\\Óÿ\0CZËü)z†QşıGüQüÏ–é)i+æOÜO¸ÿ\0c¯ù$şÂ3ÿ\0$¯q¯ı¿äûÏü’½Æ€\n(¢€\n(¢€\n(=+äëŸÚÂú™c¶;®~ÚÜàãû”õ|çûmÈ‹ ØHÿ\0è§®[ş\ZÖÿ\0ş…+_üoş\"›c­]~Òú›èwh4}9EöøŸí?s\0¿ŞÍ\0|ÇE}iÿ\0•aÿ\0Cm×ş\0¯ÿ\0Kÿ\0•b?æm¹ÿ\0Àÿ\0âèÛ>É%ğ‡ı‚íÿ\0ôX®Ê±ü¢/†¼-¤è©9¸[Xí„¥v—Ø g³ŠØ Š( Š( ±¼]ÿ\0\"æ¡ÿ\0\\lÖ7‹ÿ\0ä\\Ô?ë‘«¥ñ¯S—şïSÑşG‹š(=h¯¨?\n(¢€\n(¢€\nîşÇÎ£şâ3\\%wŸ\n¿ãçQÿ\0q?™®\\oğd{ü1ÿ\0#:_?É‰KIK_<~ÄQE\0qÿ\0¿äıw_äkË«Ú¼M£\rnÅmÌ¦-²z?­s\'áÚùˆ7ıúã^®N•>Y=O€â<‹Æ{Z¼l–èóÌQŠô/øWIÿ\0Aÿ\0¿Cühÿ\0…tŸôoûô?Æº¾¿G¹àª™ŸüûüWù{Šä~-ƒÿ\0\nïYÿ\0q?ôb×¸ÂºOú7ıúãY>*øEˆ4½-õy K…\nd+†¦}«:ØÚ2ƒŠ{™\rf41TêÎQ’oUÑúŸ\0ãŠJú×ş.Çş†ÛŸü_ş.ød»ÓÅ·?ø¿ü]x‡êG[ûÿ\0É ?öŸù%{|ş9½ı¯$ğlv)­ÄÊ/DÒLaÁ|Œm¿»ëOÿ\0†µ¾ó)[àsñõ­òï…ÿ\0j+İkÄºN”ş¶…o®áµ2Æ%¸\\ãg8Í}E@Q@~Zj_òºÿ\0®¯üÍ~¥×å¦¥ÿ\0!¯úêÿ\0ÌĞjú7ö$ÿ\0‘ë_ÿ\0°hÿ\0Ñ©_9WÑ¿±\'üZÿ\0ıƒGşJ\0ûŠ( Š( Š( ŠBx¦ï‚Ã4	´·XŞ/ÿ\0‘sPÿ\0®Fµ¼ÅşğüëÅŒ‡u‘ş¨Ö”¾4rãd§£ü=h¥=i+éÏÂBŠ( Š( »Ï…_ñó¨ÿ\0¸ŸÌ×]×ÂÂãPÏ\"3\\¸ßàÈ÷øcşFt¾“=\Z–£óûÃó£Ì\0}á_=cöeÜ’ŠE9¥  ¢Š(\0¢Š(\0¢Š(\0 ÑA ‡?l_ù+ãşÁĞ7¯¯qı±ä¯ûAüŞ¼:€:O†¿òQ¼+ÿ\0a[Oıµúa_™ÿ\0\rä£xWşÂ¶Ÿú9kôÂ€\n(¢€\nü´Ô¿ä#uÿ\0]_ùšıK¯ËMKşB7_õÕÿ\0™ \nÕôoìIÿ\0#Ö¿ÿ\0`Ñÿ\0£R¾r¯£bOùµÿ\0ûı\Z”ö=Q@Q@Š(µä~<‘×Ä÷`;„àöEzíy¿äi»ú\'ş‚+¿._½×±ò\\e)Goy~LÂó¤şûßFÊä`³èI¦Q^ß*ì~_íª=äşñO<ÒQE30¢Š(\0¢Š(\0§#2ıÖ#èi´Q¾ãŒœ]Ñ!•óş±¿3G›\'÷Ûó5/j\\«±¢­;üOï=ËDçI³\'“ä§ò«ÕGCÿ\0=ŸıqOä*õ|¼¾&~í‡ş}äQEI°QE\0QE\0Ph ĞÃŸ¶/ü•ñÿ\0`è?›×‡W¸şØ¿òWÇıƒ şo^@\'Ã_ù(Şÿ\0°­§şZı0¯Ìÿ\0†¿òQ¼+ÿ\0a[Oıµúa@Q@~Zj_òºÿ\0®¯üÍ~¥×å¦¥ÿ\0!¯úêÿ\0ÌĞjú7ö$ÿ\0‘ë_ÿ\0°hÿ\0Ñ©_9WÑ¿±\'üZÿ\0ıƒGşJ\0ûŠ( Š( Š( ¯ ñ÷ü7Dÿ\0ĞEzıy¿äi»ú\'ş‚+ĞËŠıã?÷ÿ\0‰~Lç¨¢ŠöÏËBŠ( Š( Š( Š( —µ%/j·=ËCÿ\0=ŸıqOä*õQĞÿ\0ägÿ\0\\Sù\n½_-?‰Ÿ½aÿ\0…EùPjM„Írš§­4íBkI-gv‰¶–R0kª5ã>0ÿ\0‘–ÿ\0şºA]˜*1­6¦|ßæUòì<jaİ›vÚçeÿ\0Ëş|î5ÿ\0\Z?áaÙÏÏæ¿ã^iEzÙô{ş·f_Ì¾äz_ü,;/ùó¹ü×ühÿ\0……eÿ\0>w?šÿ\0y¥/øRú…Ã\\]™2û‘áŸµ6«³ñ9náãCcm|g ·§Ö¼z½+ãïüéÿ\0^©üÍy­xÕ¢¡RQ[&~™–×#	NµMä“gIğ×şJ7…ì+iÿ\0£–¿L+ó?á¯ü”o\nÿ\0ØVÓÿ\0G-~˜VGpQE\0Wå¦¥ÿ\0!¯úêÿ\0Ì×ê]~Zj_òºÿ\0®¯üÍ\0V¯£?bn<s¯ÿ\0Ø;ÿ\0j¥|ç^Åû6]ÜYø‹T{Y¤…šÔQ°HŞ8«§i%ÔåÆâ£ƒ¡<D•ÔUÏ¼sFG¨¯şÜÕ?è!wÿ\0M\'öŞ©ÿ\0A¯ûúk¿û2Ì“ÿ\0]ğßóî_íù¢ŒQ^!ı·ªĞBëşşš?¶õOú]ßÓGödÿ\0™úï†ÿ\0ŸrüoÍ¯.ğV«sâx§¼¸’2­•w$+Ô3Ò¸ëÑteÊÙôyVgÎ¶§•í¨µä>ÿ\0‘¦ïèŸú¯_¯ ñ÷ü7Dÿ\0ĞEue¿Å~‡‡Æîÿ\0ü™ÏQEíŸ–…Q@Q@Q@Q@/jJ^Ô\rn{–‡ÿ\0 {?úâŸÈUê£¡ÿ\0ÈÏş¸§òz¾Z?zÃÿ\0\n>‹òš3\\·ÄK«‹=\Z9-f’3¨,‡5çG\\ÕüÄ.¿ïé®ª9V2v<Ó‰håµı„àÛ²zXöÒx¯ñüŒ—ÿ\0õÓú\n‡ûsTéı¡uÿ\0MQY\'•¤™ÙİK1É5èa0’¡\'&ÏÏø†iB4©Á¦õ±Q]çÈ…/øRRÿ\0…GÎ¿äwOúõOækÍkÒ¾>ÿ\0ÈîŸõêŸÌ×š×Íâ‹/SöÌ—şEôÂ¿#¤økÿ\0%Â¿ö´ÿ\0ÑË_¦ùŸğ×şJ7…ì+iÿ\0£–¿L+Ô\n(¢€\nü´Ô¿ä#uÿ\0]_ùšıK<\nøN÷ötø‹-äò&—jU¤fé±t\'ë@/^·û;È{Tÿ\0¯Qÿ\0¡ŠŸşÃâGı­?ğ6/ñ­\røGWø;<ºŸàÎÎõ~ÍC\"ÌL™İŒ)$p5¾\ZJ5bÙågt§[V5vÖˆõ¯JJáákxO?ñı/ıøğ£ş¯…?çú_ûğÿ\0á^÷Öi2?\'şÄÌ?çÌ¾æwTU}>òBÆŞòÕ‹A:	‘Œ©UŠÙ4ÕÑæÊ.q’³GGàù­¾ÿ\0 šõÑÒ¼_Â—ğiºÜ7$ˆ6H<ŠôøMôQÒYïÙ¯Js©x«è~Ây†‚p­QEİèß¡Ó×xûşF›¿¢è\"»ƒã}oËŸúæk“Õt«ïêêZlBKi0‹è0x?Jœ]óTV^fœKˆ§˜ácCÕI];GWm{•Ñÿ\0Â­ÿ\0Ï²ßÅ¨o<+ªÙÛKqq¬Q®æ!ÁÀ¯Ub)=‘ğ’ÉñÑNR£+/&aQF(­O8(¢Š\0(¢Š\0(¢´4\"óViÆ0æ0Àuúı)JJ*òz\ZQ£R¼Õ:JíôF}/jè¿áÖÿ\0çÙ?ïâÑÿ\0f·øöOûø¿ãY}f—ó#ĞY.>ÿ\0Á—Üz†‡ÿ\0 {?úâŸÈUê©¥DğiöĞÊ\0tU†{VëæäîÙûEÕ8§ÙÄÿ\0ù\0Ãÿ\0]×ù\Zòÿ\0Zõ‰ÿ\0ò‡ş»¯ò5åşµîeÿ\0ÁùŸ–ñüŒíÕú‰EWqò¡EOYÔ­t}2{û÷1ÛBv\nN2@è>´›QWeÓ§*’P‚»eÊ_ğ®ş¯„ÿ\0çú_ûğÿ\0á@ø«áCÒú_ûğÿ\0áY}f—ó#ÑY.aÿ\0>e÷3Ì>>ÿ\0ÈîŸõêŸÌ×š×»x‡á÷ˆ~,Ş/ˆ¼mŞ–ìÆIfXNõä¬Aş!YğÎ?èiÿ\0±xÚ•Y5Üıw)§*X*Pš³QWGğ×şJ7…ì+iÿ\0£–¿L+âo~Ïÿ\04¯h:…î™j–¶—öóÊÂò2B$ŠÌp<_lÖ\' QE\0bŠ(\0¯œÿ\0m< ‘ÿ\0Aı¤õôe|çûmÈ‹ ØHÿ\0è§ s@4”PÖ¾ÿ\0‘+Cÿ\0¯8¿ô[µ…àOùô?úó‹ÿ\0A»_QKà¡øNaşõWüOóQÅ%g-ÅãÖ½oáïüŠöÿ\0ï¿ş„kÈû\ZõÏ‡ò+[ÿ\0¾ÿ\0ú¯?2şõ>¿‚ÿ\0ß¥şù£¤¬È¹¨×#[5âïù5úäkÇ¥ñÇÔışíSü/ò<`œÒRš1_P~f%¸£\nÂQKŠ1@XJîşàÜê#ı„şf¸\\Wuğ¯ş>u÷ùšåÆÿ\0GĞpÆ™/ŸäÏDRô¢–¾xı€AKEãş\'ÿ\0Èúî¿È×—ú×¨|Oÿ\0?õİ‘¯/õ¯w/şÌü£Œäcÿ\0n¯ÔJ(¢»•\nä¾-É;Ö?ÜOıµÖ×#ñkşIæ³şâèÅ¬«ÿ\0\n^‡¡”ÿ\0¿Qÿ\03åÁÒ—4Ú+æOÜO¸ÿ\0cÎ~ŸûÏü’½Â¼;ö:ÿ\0’@ì#?òJ÷\Z\0(¢Š\0(¢Š\0(¢Š\0+ç?ÛoşD]şÂGÿ\0E=}_9şÛò\"èö?ú)èãzQIJ(ë_È•¡ÿ\0×œ_ú­ÚÂğ\'ü‰ZıyÅÿ\0 Šİ¯¨¥ğGÑ„ãÿ\0Şªÿ\0‰şaEUœØ×®|;ÿ\0‘Zßı÷ÿ\0Ğyc^¹ğïşEk÷ßÿ\0B5çæ_Â^§Øp_ûô¿Âÿ\04tµZúÒ;Ûimç]ÑH6°fŠñ¶¨ı>QRN2ÙœÏü!:7üğ“şş·øÑÿ\0Nÿ\0<$ÿ\0¿­ş5ÓQ[}b¯ó3ƒû#ÿ\0>c÷#™ÿ\0„\'Fÿ\0ßÖÿ\0\Z?á	Ñ¿ç„Ÿ÷õ¿Æºj(úÅ_æaı‘ÿ\0Ÿ1û‘Ìÿ\0Â£Ï	?ïëğ„èßóÂOûúßã]5}b¯ó0şÈÀÿ\0Ï˜ıÈæá	Ñ¿ç„Ÿ÷õ¿Æ´4}\nËGyZÆ6S(²Åº}~µ­EL«T’´™¥,»	Fjté¤×T„–Š+3´(¢Š\0ãş\'ÿ\0Èúî¿È×—ú×¨|Oÿ\0?õİ‘¯/õ¯w/şÌü£Œäcÿ\0n¯ÔJ(¢»•\nä~-É<Öëšèk]ur?¿äk?õÍ?ô5¬±Â—¡èeïÔÅÌùn’–’¾dıÄûö:ÿ\0’@ì#?òJ÷\ZğïØëşIÿ\0°Œÿ\0É+Üh\0¢Š(\0¢Š(\0¢Š(\0¯\nı­¼5¬ø›Áú-¶¦]j3ÅæH–ñ—*¾[Ÿlš÷Z1@œğ©¼}ÿ\0B³ÿ\0€ÍKÿ\0\n›Ç½ü%¬ÿ\0à3Wèİ6€>Oğïˆ4AÓô½_Q¶³ÔlàH.-æp¯Š0ÊÃ±´á4ğ×ıì?ïğ¯\0øÍÿ\0%cÅÿ\0ö¸ÿ\0Ñ†¸Ì×¡ÆqIY[ƒpµªJ£©+¶ßN¿#ë½7Äš.§t-´ıNÒâà‚DqÈ	 u­ŒWÍŸ¿ä´ÿ\0®Rÿ\0è5ôzXZî´¥Üø¼ÿ\0*§•â\Zm´Õõù‰Ø×®|;ÿ\0‘Zßı÷ÿ\0Ğyc^¹ğïşEk÷ßÿ\0B5†eü%êz|şı/ğ¿Í-Q^!úˆQE\0QE\0QE\0QE\0QE\0QEË|C´¸¼Ñ£Ö™ÄÁ¶ ÉÆ\ryßö­ÿ\0@ûŸûà×µ‘ÍÙC*1äHù¼Ó†¨fUı½I´ì––<OûUÿ\0 }Ïığk—Õ|G£i\Z„Ö:¥kky	Û$2Èã8#èkéR~z~Ñ_òZ¼Uÿ\0_ÿ\0¢Ò¶şÒŸdyßêFş~Kğ=¯şO\rĞnÃşÿ\0\nÅñ©aâ¯ßh¾»‡RÕn,¶Í¾I`Ä\0:à\nùŸ5éÿ\0³Oü–ïÿ\0×I¿ôD•Ì\'8¸´µ7Ãp~Z5£9^->>FGü*oĞ£¬ÿ\0à3R„Ş>ÿ\0¡GYÿ\0Àf¯Ñº\\WõÇşËz«áß†Ç]°¸°»ût²y3¡VÚBàãÓƒ^½E\0QE\0QE\0QE\0QE\0QE€?7¾3ÿ\0ÉZñı….?ôa®2¾áñGìÙáŸøSÖnõ}f+‹û‡¹‘\"x¶+1É(N9¬Ïøe/	Ğk^ÿ\0¾áÿ\0ãtó—Àïùí?ë”¿ú	¯¤ë—ñïÂm#àç†n<_¡^ßŞŞÚ²B°Ş²È‘‚œíPxÖ¼¯şf³ÿ\0@í;òş*½<*rË{ŸÄ™/1Å*´²IjíÜ÷ÏJõ¿‡™ÿ\0„^ßı÷ÿ\0Ğ|Qÿ\0³Yÿ\0 vù?ÿ\0]ûMxŸH°KKmFxÔ“™Ry9ìô±˜ªu £pæC‹Ë±N­t¬ÓZ?4}µFkã/øjßÿ\0ĞAÿ\0¾&ÿ\0ã•Ñ|<ı£üKâohz-æ“£EovHñ,»Ô1ÆF\\ŒşæŸp}WEPEPEPEPE”\0Q_!ø“öñN•âSOƒGÑ;K©`Ft—%UÊ‚pıx¬ïøjßÿ\0ĞAÿ\0¾&ÿ\0ã”ömñ—ü5o‹è	 ÿ\0ßñÊ?á«|[ÿ\0@Mşø›ÿ\0PÙµùåûEÿ\0ÉjñWı|/ş‹Jï¥ıª|[$N‡FĞ×p#!fÈÿ\0È•ØøSà¦“ñ[D·ñ¿ˆu=FßPÖ$VŒZàìãz“ü>¦€>I¯Nıšä·ø_şºMÿ\0¢$¯ ?á”¼%ÿ\0A­{şû‡ÿ\0Ö÷?g¯ø7Åš~¿§êš´÷VLÌ‘ÎÑ”mÈWœ =÷ h¢Š(\0¢Š(\0¢Š(\0¢Š(\0¢Š(\0¢Š(\0¢Š(\0¢Š(Çk?ù\"š§ı|[ÿ\0èÁ_×ŞßµT2Üü\ZÔâ‚\'–Cqo…E,ÖÂ¾şÈÔ¿èyÿ\0~[ü(…{û#Rÿ\0 uçıùoğ£û#Rÿ\0 uçıùoğ \n5Ü|ÿ\0’½áûÃÿ\0¡W+ı‘©Ğ:óşü·øWağŠÚçLøŸá{ËÛK˜­á¾‰İŞ\" \0yäĞèµšÎšÊö…˜g™—üißÚúoılÿ\0ïòÿ\0\0^¢¨ÿ\0ké¿ô³ÿ\0¿Ëş4ké¿ô³ÿ\0¿Ëş4zŠ£ı¯¦ÿ\0ĞFÏşÿ\0/øÑı¯¦ÿ\0ĞFÏşÿ\0/øĞê*ö¾›ÿ\0A?ûü¿ãGö¾›ÿ\0A?ûü¿ã@¨ª?Úúoılÿ\0ïòÿ\0Cy¯év¶Ï3ßÚ² É*“üèósÇŸò<x‡şÂ7ú5«\nºi÷·^.×.-ì®¤Š[ùİYbb21XßÙ\Z—ı¯?ïË…\0Q¢¯dj_ô¼ÿ\0¿-şdj_ô¼ÿ\0¿-şF¿CgOù\"¾ÿ\0¯vÿ\0Ñ_\0R\'şA÷Ÿ÷å¿Â¿@g¨ä‡àß†\"™9İW#÷ÔP¢QE\0QE\0QE\0QE\0QE\0QE\0QE\0QE\0QE\0`QE\0QE\0WñÒ¥øIâ·’5fO˜¡#î½«¼®ãü’ÿ\0Ø:oı€?9)(¢€\n(¢€\n(¢€\n(¢€\n(¥ Ó?‡ñ$^ğòÆAÓíÎ\0îc\\×AX^?ñCø{şÁÖÿ\0ú)kv€\n(¢€QE\0QE\0QE\0QE\0QE\0QE\0QE\0QE\0QE\0QE\0QE\0QE\0V´ñG„5}.³_Û=¸˜¦ı›†3ŒŒşu½E\0|ÿ\0“sÿ\0C„?ø.?ürød›Ÿú!ÿ\0Áqÿ\0ã•õòwü2MÏıÿ\0à¸ÿ\0ñÊ?á’nèp‡ÿ\0Çÿ\0WÖ4PÉßğÉ7?ô8Cÿ\0‚ãÿ\0Ç(ÿ\0†I¹ÿ\0¡Âüş9_XÑ@\'Ã$Üÿ\0Ğáşÿ\0£ş&çş‡ğ\\øå}cE\0|ÿ\0“sÿ\0C„?ø.?ür”~É7?ô8Cÿ\0‚ãÿ\0Ç+ë\n(?ÃúyÒt=;O2	M¥´våÀÆíŠ8íœV…PEPEPEPEPEPEPEPÿÙ','0',NULL,NULL),(7,'manalangaoka@gmail.com','1516219648@s200_natalie.gold.jpg','ÿØÿà\0JFIF\0\0H\0H\0\0ÿÛ\0C\0	\n\n			\n\n		\r\r\nÿÛ\0C	ÿÀ\0\0È\0È\"\0ÿÄ\0\0\0\0\0\0\0\0\0\0\0\0\0\0ÿÄ\0?\0\0\0\0\0\0\0!\"6AQq1BRat‘’¡±Á$2r³#bCSc“¢ÿÄ\0\0\0\0\0\0\0\0\0\0\0\0\0ÿÄ\01\0\0\0\0\0\0\0\01A!34\"2Qa#qÁÑáğ‘¡±ÿÚ\0\0\0?\0µ\0ën\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0ò]nÖë%—­dtÔñ&®{×DîNÕô!˜‰´íÉ¹½`„r­¾UÊ÷ÒâTM†4İÊªÂ{½-g‰=º‘ÅÏ1Ê¯/WÜ¯õÓkäñÊÖü)¢88£,v²LWş¢ßWJ÷GzÙñ‘ë§İ{5Cè¦Ü¦§^(—^Ş\Z™Kfc”Ù¶ßë¡ÓÉã•ÍøWT$ÛÙëD{¹;ÿ\0/åâ5±ÖÔ+·Ê¸Ê\\¶‰³F»¹U;x/o¥Ìñ/³Bcµ]­×º(î6ªÈêiåMZö.©Ü½‹èRŸU¡Ï£ŸÅïŸDœyi—á—¬\0Dl\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0xow«~=k¨»ÜæHééÛÂrõ¹zšª«¹\nÇ›glÚäµU¯XécUJzd^lmû»µM³nYsî—¶ã4²¯%¶ï•w>uMúş”];ÕHÀëø>‚¸qÆ{Ç½<¾‘ü«u9¦ÓØP\0´@\0\0Øğœâí„ÜÒ®ë%,Š‰QL«Í‘¿gv)®ÆLuËY¥ãx–ki¬ïd½[ò]=ŞÙ2IOPŞW­«ÖÕìT]Ç¸€v—Ik½»ª—ğ·-ñ\"®æN‰»OÔ‰§z!?.¿I:<Ó§8ü–ør}­;@\0„Ú\0\0\0\0\0\0\0\0\0\0\0\0ÕL¡¢¨­“òSÄù]ÜÔUûæ:{£Ã/ogæJ´øT÷Š½»Ö¿9†-;DÊ«WVMq­¨¯¨rºZ™]+Õ{\\º©Ğôx£hQ€\0\0\0\0\0;èk&·VÓ×Ó¹[%4­•Š­]~Å¿¡ªeu=t’¢&JŞç\"/Ü§%°Á^ù0Ë#ßù–†~9ßhiŠ_®ó	º)ï˜g@.°\0\0\0\0\0\0\0\0\0\0\0\0\rö‡ø’¾Ü‰ªÔÓKw«U÷5´ÖbÑĞ˜ß¹LÜÇFåé£šªÕNÅCƒrÚÆ0üo/ªâãàÒ×ªÕ@ºnç/9¾Çkò4Óè¸r×>8É^R¤µf“5\0ly\0\0\0\0rÖ:G$lM\\åF¢vª–úÅB¶Ë%¾Ü©¾šš(—½\Zˆ¥rÙ>0ü“/¥ã#Ö–RªuTİÍ^k}®ÓÜ¥›9h3Å¯L1Ó¾}V\Z:m`\0s© \0\0\0\0\0\0\0\0\0\0\0\0\0\r_hxU>mbu­ed\ZÉI*ù/óWĞ¾%ö)X®úËUlÖû…;à¨ÊÉ#rh¨¥Å5ïg|Ş2_ÂÜ#n‘U1»ôó^R|Ğºá|OîŸ…—áŸõü\"ê4ÿ\0iïWš°bÊ0Ÿ™Í¹ÛŞèyµ0¢¾\'\'Wrèk§[%2×µIŞ³Y¬í \0öÀz-öúË­l6û};ç¨ÈÈãbjª¦kÀr|¶f¶Ùo{`UçTÊŠÈšı}É©>à›7³áüd_Š¸Èİ%ª{t_ÒÄòSæ¥n»‰âÑÖb\'{|¿vüX-–~íaTøM‰´Zµõ³é%\\©å?ÍOBx“Ú¦ĞÅeËl×œ—æVµ¬V6€\0xd\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0Ãš×µXö£šíÊŠš¢šÕÓf˜5İë%^;LÙ½_\n,J¿†~¢¾†‘5ª­‚ÿ\0’F·ê¦2l×§]&ÉíTêå,_¹¿ç¤ï‹xü·ımØŸ‰®D6Ãár\Z¿ÓÊ¡—µìÓ´=%¤Çi#w£æE•SâU;¨x6º5[îCºãt‹(¶9W«”µ>ªH¾]u£kM¶õkŠâ[3MkXÔc\Zkw\"\"hˆry©®vÚÄÖ’áM6¿íÌ×}ôf&9·Gx\00\0\0\0\0\0\0\0\0\0\0\0\0\0¼‹$´bÖ×İ/IMÜÖ¦÷Èï5©Ö§ªR×´V±¼É3Ë(j.Ôğüe]÷WTßô)t{‘{|IíRÍv·åO’’G[­Ë¹!‰Ú=éşnOrnï4S¢Òpâ-¨ŸHıe&³¥¥ïo÷ê¥tv+e5}O—û²}‘=ÊiW<÷2»ªòìµÍ_!’,m÷7D0\0¼Ã¢Óàø)¯ùD¶[ßœ¾¤–Iœ¯–G=ËãW9U~gÆ‡ ”Ö€9cİ\Zğ£rµS­E3ÜÓ,´*-¿!®‰Éã•Í÷.¨aæÔ­ãkFìÄÌrI–m½eT*Ö]©in1§x<Töîù69¶L:ü¬‚¢¥ÖÊ—nàUhUô=7{ô+h+sğ}.nUìÏÓöäßMNJuİsöHÔ|nG5Éª9TT9*Ş´Œ“•¬¤ªZŠ-yô“*«?Ç­«ÜXL;7²æ´®Ù\"²hÑ8úg¯>%û§bœŞ»†eÑ{Óß_Ÿî‹Q\\½İ[\0\0­o\0\0\0\0\0\0\0\0tWVÓ[h§¸VH‘ÁM¥‘ËÔÔMT«9¾cpÍ/R\\jœæÓ±U´Ğkº(ú½«Ö¤ß¶úé¨ğ9ã…Êœª¢(©æê®Tÿ\0É\\§€é«Dóå\nıfIß°\0…\0\0\0\0\0\0\0\0\0\02XîArÆ.Ğ^-r«%…w·^lëk»QLh1jÅâkhŞ%˜™‰Şó½ÒdvZKÕÿ\0jª4~‹ãjõµ}(º¡‘#ú¹fÅ+i^åVÓVª3ĞcU~d|ÿ\0Y†4ùíŠ9D®q[·H°\0#=€\0\0\0\0\0#½t!½ÑÅy,6ŞºÏ^‹èâ¼—ò²¬Õø€\0¸E\0\0\0\0\0\0\0\0\0\0\0\0Nş]ºzëm	XŠ|º;tõÔı´%c…â¾rÿ\0Ş‹}?…\0\0¯n\0\0\0\0\0\0GzèC=z/£ŠòXm½t!½ÑÅy;.å=eY«ñ\0pŠ\0\0\0\0\0\0\0\0\0\0\0\0üº;tõÔı´%b)ğzèíÓ×[ûhJÇÅ|åÿ\0½ú\n\0^Ü\0\0\0\0\0\06õĞ†zô_Gä²à~SÖUš¿\0 \0\0\0\0\0\0\0\0\0\0\0	ßÁë£·O]OÛBV\0áx¯œ¿÷¢ßOá@\0+Û€\0ÿÙ','0',NULL,NULL);
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
INSERT INTO `npo_registers` VALUES (3,'teamFSHARP','FSHARP','ã‚‚ã†ã€NPOã¯è³‡é‡‘ã«å›°ã‚‰ãªã„ã€‚','https://www.facebook.com/LiCleOrg/',NULL,NULL,NULL,NULL,'https://vote.fe-ver.jp/communities/90',NULL,'abc690e1a12d9e88','https://bitflyer.jp/easypayp/2zfFAopLd','qrtymyh43ec5jp4ysz63pez49vk6xn7ruq82y45nek','ä»²æ¡é«˜å¹¸',NULL,NULL,NULL,NULL,0,0,'FSHARPã‚’é‹å–¶ã™ã‚‹ãƒãƒ¼ãƒ ã§ã™ã€‚\r\nã”ä¸æ˜ç‚¹ãªã©ã”ã–ã„ã¾ã—ãŸã‚‰ã€ãŠæ°—è»½ã«ã”ç›¸è«‡ãã ã•ã„ã€‚',NULL,NULL,NULL),(4,'nipponshotenkai','NPOæ³•äººæ—¥æœ¬å•†åº—ä¼š','å…±ã«å­¦ã³å…±ã«æˆé•·ã—å…±ã«å‹ã¤',NULL,NULL,NULL,NULL,NULL,'https://nipponshotenkai.com/',NULL,NULL,NULL,NULL,'NPOæ³•äººæ—¥æœ¬å•†åº—ä¼š',NULL,NULL,NULL,NULL,0,0,NULL,NULL,NULL,NULL);
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
INSERT INTO `personal_info` VALUES (2,'test2@test.co.jp','1516113207@test1.png',NULL,'ãƒ†ã‚¹ãƒˆï¼’','å¤ªéƒ',NULL,NULL,'tesutotsu-','tarou',NULL,'2000','10','10','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,NULL),(5,'nj.takayuki+004@gmail.com','1516114071@sky_blue_yoshi_egg_by_dragonshadow3-d8pco22.png',NULL,'a','a',NULL,NULL,'a','a',NULL,'1234','12','12','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,NULL);
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
INSERT INTO `premier_data` VALUES (1,'test@test.co.jp','1','1','ã‚¿ã‚¤ãƒˆãƒ«',NULL,'open','2018-01-16 22:57:52','èª¬æ˜','èª¬æ˜è©³ç´°',0,'2015/6/5 10:6:10','2019/11/15 15:11:15',1000000,2000000,3000000,NULL,NULL,'0',NULL,NULL),(2,'manalangaoka@gmail.com','1','1','å„ªå¾…',NULL,'open','2018-01-18 14:28:42','å„ªå¾…','å„ªå¾…ãƒ†ã‚¹ãƒˆ',0,'2018/1/1 1:0:0','2023/8/2 1:8:2',101,2,1,NULL,NULL,'0',NULL,NULL);
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
INSERT INTO `users` VALUES (1,'test','test@test.co.jp','$2y$10$VNnec6nTP0OpNeergjQfg.UT5ogBKWCky0W3bP3Yn1sQyswGbFD6q','zZJ3jE8vK5G5UWAVmJ09zTs4QotIgm9yhf998bNTmmnigX7xw1RwGLwM7G3y',NULL,'2018-01-16 22:54:55','2018-01-16 23:17:50'),(2,'nakajoTakayuki','nj.takayuki+004@gmail.com','$2y$10$MZw1zJkkvZ.h8xQ9PdvvheQ7l4KqW7goK1H8.cvujiFwkgCaWCFma','3S6a3OepKAxJIIasQ6XpJQzbLE4P4GfOoZw8AolVK3cos3h2WU0zrviuvLnn',NULL,'2018-01-16 23:16:48','2018-01-18 14:50:12'),(3,'test2','test2@test.co.jp','$2y$10$7B7lkagbi9UAXBEFteE.HeYZ9kinrYy.vrFPVAKaK5DRC3OXFuxIe','gXyRFBhf11w1z23Bhd3XiLhuNSLH2456KKfVjZQCO2taExhcuVmcavyx7AWN',NULL,'2018-01-16 23:18:13','2018-01-16 23:38:50'),(4,'ã–ãã‚„ã¾','yamazaki_daisuke@hotmail.co.jp','$2y$10$y0bvyoGR19MCAZczuGBpk.1HlW12ZcaNe4uliMWoW6wfkMnqgcEO6',NULL,NULL,'2018-01-17 23:14:30','2018-01-17 23:14:30'),(5,'kinokino','kino@gmail.com','$2y$10$Z4sVO3BZcRpqk3ZHSMm9XeZalcp4lJM542aNuTV6i0ZyboqZgqJUa',NULL,NULL,'2018-01-17 23:18:38','2018-01-17 23:18:38'),(6,'manalangaoka','manalangaoka@gmail.com','$2y$10$pNX4cs3ll6cK9lYTVd0G3e1NYjYJhFzieypAEbvIpAbXYR84NHU4W','WMR3wQxsBuWFcbO7H8phGImLXnQFj8eKWze9aHEMeR5rZH2wgvClw9CQfMFi','2hj','2018-01-18 05:02:29','2018-01-19 23:14:41'),(7,'nj','nj.takayuki+005@gmail.com','$2y$10$Z7PSG94DJ/z8ZxsrMsUlx.o0BWAbJuiXg6eNQpOW0oyhAP.QAufiO','hgHItEtLNoMMovsJTTmcQCHoKsi0ntwOQtH84Z1nuwUF6vl7gfq7G0Mp4cpq',NULL,'2018-01-18 14:51:01','2018-01-18 14:51:48'),(8,'nj','nj.takayuki+006@gmail.com','$2y$10$U.tnhx1HT/zqzCIbru7wTe/4LRZJs74or4Vp7ktsUZyRQrk4Neuru','BsZaFjP0w4UO53rscPTbrnIhyFPQ6rONzynDO1UcpHbCQ3WzDXWNcxv7nIDv',NULL,'2018-01-18 14:52:29','2018-01-19 05:41:33'),(9,'nj','nj.takayuki+007@gmail.com','$2y$10$36/cnBpxl7iQvmnhu5/riOFRmhC.6zhtOROCixCBIiHyBaj1mqdTu','5xFoBL9VslKSTd0c3BjKuK0UwenMa3qsYIHEWm50kQ2gGBromN6CwI3UCahk',NULL,'2018-01-18 14:57:08','2018-01-18 15:10:36'),(10,'manalang','manalang@gmail.com','$2y$10$VRtT6uZqSYLCf5oA4BQgxuZ7JyG93GWRg5yDjgdR/te2DwcUJedSu','rZkWQV5XXZs0BGP2rmswlnfyPje1zHELUpGbg9teJl7NbshDbpwNNasUOcre',NULL,'2018-01-18 15:11:46','2018-01-18 15:23:41'),(11,'å¯ºç”°å„ªä¹Ÿ','unitednum@gmail.com','$2y$10$PHtRmzR1ui1ow59nxXZ0ZedM6Fm.ulxS/se5d5x8exgbOa2K9Ncxa','v0d04I1H4IzzW6tD2xNlSL8rEgQsumAZHJTA9TyibYfGL57UgKolCgxxxcsY',NULL,'2018-01-18 17:44:52','2018-01-18 17:47:30'),(12,'mana','mana@gmail.com','$2y$10$HY2WUPEdLFAfb.qXXhRdce2vDg7MTSfTAeQZX8G1uKrp1jom2BpZK','HDiR7mtTGq2BTqzpQRqatfqW52EkVufhOYpq29E5130a1FP0AFfcufOIPGW7',NULL,'2018-01-19 05:42:58','2018-01-19 05:58:39'),(13,'eh1255','eh1255@messiah.edu','$2y$10$pIx9JAwJrSR6WINHC7.6F.9Z.Trfp19eOJPhcziAJLt2j5WqRyJWC',NULL,NULL,'2018-01-20 10:45:01','2018-01-20 10:45:01'),(14,'pieces_test','pieces_test@gmail.com','$2y$10$Lg9gdiBkrG349ZyXgsZauOK4Gi1MOz4apesSIOsDVwGlSC3WThRjC','0dhEh6GfatOkse0CowzvzafBmZLIlSJxBTMyDHr5YQ1jR0GoZ64dvwNvN0l6','piecesTest','2018-01-25 23:17:19','2018-01-28 02:47:36'),(15,'nja','nj.takayuki+2@gmail.com','$2y$10$8y.k6tLCTR0Py2xmKJp31eCo5KQ47LH6./kKaAWKj3p.EfLuyCMwm',NULL,NULL,'2018-01-26 20:43:39','2018-01-26 20:43:39'),(16,'ä»²æ¡é«˜å¹¸','nj.takayuki@gmail.com','$2y$10$cl6X/80zRUvM/Jt3sYPf3eudWHN12zbRD/OL4Mi8uxOYZvhcKpa0a','T78Hipn6HqA3vfKLwRswJWS5OQ5p4bmoOeSYYPjWipMySizWM8L54MM3jbxl','teamFSHARP','2018-01-28 01:31:50','2018-01-28 18:23:22'),(17,'NPOæ³•äººæ—¥æœ¬å•†åº—ä¼š','info@frontiergate.co.jp','$2y$10$bWZpHXnis6tM3h5552Sq7.2VJxBnBc5IclCbdaV0J7Yi1N2T4eh9y',NULL,'nipponshotenkai','2018-01-28 11:58:58','2018-01-28 11:58:58');
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
