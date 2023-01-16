-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: optiko
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `optiko`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `optiko` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `optiko`;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(255) NOT NULL,
  `psw` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'optiko2022@gmail.com','$2y$10$/6jNk6xsn4MqX9CSGj0qZuJ01Jr102M96JD3dvRGRcI3JDuigHJmG','');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(555) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=157 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'chaine et cordons','Achaineetcordons.jpg'),(2,'chamoisine','Achamoisine.jpg'),(3,'Acuvue moist pac30','ACUVUEMOISTpac30.jpg'),(4,'Acuvue oasys','ACUVUEoasys.jpg'),(5,'Air optix aqua','airoptixaqua.jpg'),(6,'air optix','airoptix.jpg'),(7,'i wear','Aiwearlentilles.jpg'),(8,'alpha tokyo','alphatokyo.PNG'),(9,'Nettoyant','Anettoyant.jpg'),(10,'Spray anti buee','Asprayantibuee.jpg'),(11,'Bio finity multi focal','LBiofinitymultifocal.jpg'),(12,'Bio true one day lenses','LBioTrueONEdaylenses.jpg'),(13,'Dailie aqua Comfort plus','LdailieaquaComfortplus.jpg'),(14,'dailies aqua confort PLUS','LdailiesaquaConfortPLUS.jpg'),(15,'Dailies total','Ldailiestotal.jpeg'),(16,'daillies','Ldaillies.jpg'),(17,'fresh look one day color','Lfreshlookonedaycolor.png'),(18,'my day dailly disponible','Lmydaydaillydisponible.jpg'),(19,'pro clear toric','LproclearToric.jpg'),(20,'pure vision','LpureVision.jpg'),(21,'smylens monthly','Lsmylensmonthly.jpg'),(22,'softlens','Lsoftlens.jpg'),(23,'Cyrius','MCYRIUS.PNG'),(24,'Cyrius glory','MCYRIUSGLORY.PNG'),(25,'destiny','Mdestiny.PNG'),(26,'Eris','Meris.PNG'),(27,'jupiter otg','MjupiterOTG.PNG'),(28,'Quick shift','MQUICKSHIFT.PNG'),(29,'Session mtb','MsessionMTB.PNG'),(30,'berluti Acetal Sun glasses','SberlutiAcetalSunglasses.PNG'),(31,'berluti Lunette de Soleil enmétal scritto','SberlutiLunettede Soleilenmétalscritto.PNG'),(32,'berluti Lunettes De Soleil Glint En Métal Scritto','SberlutiLunettesDeSoleilGlintEnMétalScritto.PNG'),(33,'berluti Ronde Haloena cétate','SberlutiRondeHaloenacétate.PNG'),(34,'cazal 6004 3004','Scazal6004 3004.PNG'),(35,'cazal 905 8001','scazal9058001.PNG'),(36,'caza l908 1002','Scazal9081002.PNG'),(37,'cazal 6004 3002','Scazal60043002.PNG'),(38,'celine CL 40022 FA sian fit66p','ScelineCL40022FAsianfit66p.PNG'),(39,'celine Cl4 0059 u30e','ScelineCl40059u30e.PNG'),(40,'celine cl 40071f asian fit69f','Scelinecl40071fasianfit69f.PNG'),(41,'celine cl41452 sc9aqt','Scelinecl41452sc9aqt.PNG'),(42,'dior b241056IR','Sdiorb241056IR.PNG'),(43,'Dior ID108684','SDiorID108684.PNG'),(44,'dior Onde15fcqv','sdiorOnde15fcqv.PNG'),(45,'dior sos tellaire40971','Sdiorsostellaire40971.PNG'),(46,'DITA metamat DTS52603A','SDITAmetamatDTS52603A.PNG'),(47,'DIta moddict DTS144A03','SDItamoddictDTS144A03.PNG'),(48,'dita Night bird threeDTS520 62 03','SditaNightbird threeDTS520 62 03.PNG'),(49,'Dita night bird two DTS51958 01','SDitanightbirdtwoDTS51958 01.PNG'),(50,'fendi ff0259s20553','Sfendiff0259s20553.PNG'),(51,'fendi ff0291s807t4','Sfendiff0291s807t4.PNG'),(52,'fendi ff0374s80790','Sfendiff0374s80790.PNG'),(53,'fendi ff0430s9nir','Sfendiff0430s9nir.PNG'),(54,'gucci GG00085 Polarized','SgucciGG00085Polarized.PNG'),(55,'gucci GG0545S002','SgucciGG0545S002.PNG'),(56,'Gucci GG0854 sk Asian Fit 001','SGucciGG0854skAsianFit001.PNG'),(57,'gucci GG 0925S001','SgucciGG0925S001.PNG'),(58,'guess GF504490X','SguessGF504490X.PNG'),(59,'guess GU 303205B','SguessGU303205B.PNG'),(60,'guess Gu 761528u','SguessGu761528u.PNG'),(61,'guess GU6939020','SguessGU6939020.PNG'),(62,'john dalia Chad','SjohndaliaChad.PNG'),(63,'John Dalia ','SjohnDaliaJean.PNG'),(64,'John Dalia Naomi.PNG','SjohnDaliaNaomi.PNG'),(65,'Marc jacob marc 49Stnsgb','SMarcjacobsmarc49Stnsgb.PNG'),(66,'marc jacob marc 303s003ir','Smarcjacobsmarc303s003ir.PNG'),(67,'marc Jacob marc 317sj5gfq','SmarcJacobsmarc317sj5gfq.PNG'),(68,'marc jacob marc 527s80790','Smarcjacobsmarc527s80790.PNG'),(69,'paul & joe Lunette de Soleil \r\nEzctangulaires\r\n','Spaul&joeLunettedeSoleilEzctangulaires.PNG'),(70,'paul & joe Lunette de Soleil Retro','Spaul&joeLunettedeSoleilRetro.PNG'),(71,'paul & joe lunette de Soleil Rondes','Spaul&joelunettedeSoleilRondes.PNG'),(72,'paul & joe lunette papillon','Spaul&joelunettepapillon.PNG'),(73,'rayban RB2140 Original ','SraybanRB2140Originalwayfarer901.PNG'),(74,'rayban Rb 3016 club master polarized 99058','SraybanRb3016clubmasterpolarized99058.PNG'),(75,'rayban RB 3447 Round métal 001','SraybanRB3447Roundmétal 001.PNG'),(76,'Rayban RB 4259F Asian Fit60171','SraybanRB4259FAsianFit60171.PNG'),(77,'tom ford ft0248 henry 05n','Stomfordft0248henry05n.PNG'),(78,'tom Ford Ft 0752 james on52n','StomFordFt0752jameson52n.PNG'),(79,'tom Ford ft 0858 ','StomFordft0858nansel01a.PNG'),(80,'Versace VE 22271466G9','SversaceVE22271466G9.PNG'),(81,'versace Ve 2216100287','SversaceVe2216100287.PNG'),(82,'versace VE2228100287','SversaceVE2228100287.PNG'),(83,'Battatura Angelo','VbattaturaAngelo.PNG'),(84,'battatura Fenton','VbattaturaFenton.PNG'),(85,'battatura Salvatore','VbattaturaSalvatore.PNG'),(86,'battatura Vincenzo','VbattaturaVincenzo.PNG'),(87,'carrera 1103 slash V003','Vcarrera1103slashV003.PNG'),(88,'Carrera 1123 slash N086','Vcarrera1123slashN086.PNG'),(89,'Carrera 2020 Tspc 010','Vcarrera2020Tspc010.PNG'),(90,'Cazal 6004spc001','Vcazal6004spc001.PNG'),(91,'Cazal 7091 spc002','Vcazal7091spc002.PNG'),(92,'Cazal spc 607 spc065','VCazalspc607spc065.PNG'),(93,'Cazal spc 4283 spc001','Vcazalspc4283spc001.PNG'),(94,'Celine CL41380 joe Anw','VcelineCL41380joeAnw.PNG'),(95,'Celine CL 4140621H','VcelineCL4140621H.PNG'),(96,'Celine CL 41456807','VcelineCL41456807.PNG'),(97,'Celine cl 41457807','Vcelinecl41457807.PNG'),(98,'Dior CD 3283E59','VDiorCD3283E59.PNG'),(99,'Dior sight 01086','VDiorDioRsight01086.PNG'),(100,'Dior stellaireo 11j5g','VDiorstellaireo11j5g.PNG'),(101,'Dior technic city 05J5G','VDiortechnicity05J5G.PNG'),(102,'Fendi FF0393 PJP','VFendiFF0393PJP.PNG'),(103,'fendi FFm 0035j5G','VfendiFFm0035j5G.PNG'),(104,'Fendi FFM0106RHL','VFendiFFM0106RHL.PNG'),(105,'Fendi FFm0004807','VFendiFFm0004807.PNG'),(106,'Gucci GG02970K003','VGucciGG02970K003.PNG'),(107,'Gucci GG04450004','VGucciGG04450004.PNG'),(108,'Gucci GG9270001','VGucciGG9270001.PNG'),(109,'jack & francis jack yFR133','Vjack&francisjackyFR133.PNG'),(110,'jack & francis jack yFR136','Vjack&francisjackyFR136.PNG'),(111,'jean reno 501c244235 mixte','Vjeanreno501c244235mixte.PNG'),(112,'jean reno 2005c24324 mixte','Vjeanreno2005c24324mixt.PNG'),(113,'jean reno 2016C24323 mixte','Vjeanreno2016C24323mixt.PNG'),(114,'kenzo KZ50006F Asian FIT 001','VkenzoKZ50006FAsianFIT001.PNG'),(115,'kenzo KZ 50015U 052','VkenzoKZ50015U 052.PNG'),(116,'kenzo KZ 50020F Asian fit 053','VkenzoKZ50020FAsianfit053.PNG'),(117,'kenzo KZ 50084U097','VkenzoKZ50084U097.PNG'),(119,'marc jacob MMJ 524OISK00','VmarcjacobMMJ524OISK00.PNG'),(120,'marc jacob MMJ 633A75','VmarcjacobMMJ633A75.PNG'),(121,'VmarcjacobMMJ5690D2800.PNG','marc jacob MMJ 5690D2800'),(122,'opal ow II135c015215 noir','VopalowII135c015215noir.PNG'),(123,'opal OWII249C284719','VopalOWII249C284719.PNG'),(124,'Opal rectangulaire écailles','VOpalrectangulaiEecailles.PNG'),(125,'paul & joe DIVYA 03OR1052 20 FEMME','Vpaul&joeDIVYA03OR1052 20 FEMME.PNG'),(126,'paul & joe Gaby 06 or104818 enfant','Vpaul&joeGaby06or104818enfant.PNG'),(127,'paul & joe nepal i23GR675021 homme','Vpaul&joenepali23GR675021homme.PNG'),(128,'paul & joe shiva 01ka514722 homme','Vpaul&joeshiva01ka514722homme.PNG'),(129,'rayban RX 5121F Asian Fit 2000','VraybanRX5121F AsianFit2000.PNG'),(130,'rayban RX 5387F Asian FIT 2000','VraybanRX5387FAsianFIT 2000.PNG'),(131,'rayban RX 63752890','VraybanRX63752890.PNG'),(132,'rayban RX 64892500','VraybanRX64892500.PNG'),(133,'versace 22101252 V3','Vversace22101252V3.PNG'),(134,'versace Ve1 2571436','VversaceVe12571436.PNG'),(135,'versace VE 12681261','VversaceVE12681261.PNG'),(136,'versace VE 12691002','VversaceVE12691002.PNG'),(151,'approuvé','test.png');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorie`
--

LOCK TABLES `categorie` WRITE;
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
INSERT INTO `categorie` VALUES (1,'Lunettes de soleil'),(2,'Lunettes de vue'),(3,'Accessoires'),(4,'Lentilles de contact'),(5,'Masques');
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client` (
  `id` int(123) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES (1,'','','option1','zaka@gmail.com','6272386eb1047'),(2,'','','option1','zaki@gmail.com','$2y$10$wQeKAxi82/1PlRm1mVeZXO/hu1k0fNbXt1day/fNquWVJu4VKjk.2');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `homeactu`
--

DROP TABLE IF EXISTS `homeactu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `homeactu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `homeactu`
--

LOCK TABLES `homeactu` WRITE;
/*!40000 ALTER TABLE `homeactu` DISABLE KEYS */;
INSERT INTO `homeactu` VALUES (2,'Santé anti-lumière bleue','nous sommes constamment exposés à la lumière artificielle bleue-violette que ces écrans diffusent. Visionet vous propose une gamme complète de verres anti-lumière bleue avec ou sans correction. Fini la fatigue oculaire et les maux de tête en fin de journée avec vos nouvelles lunettes anti-lumière bleue. Faites votre choix de monture parmi plus de 6000 modèles de marque'),(3,'qui sommes nous','L\'opticien-lunetier est en charge de la conception, de l\'ajustement, du montage et de la vente d\'un éventail d\'appareils de correction de la vue, lunettes et lentilles particulièrement. Professionnel de la santé, son métier se situe à la jonction entre la profession de technicien et de conseiller commercial. Il travaille en complémentarité avec le médecin ophtalmologiste, qui est chargé de réaliser les prescriptions.'),(15,'bonjour ','ceci est un test');
/*!40000 ALTER TABLE `homeactu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `homecard`
--

DROP TABLE IF EXISTS `homecard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `homecard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(55) NOT NULL,
  `contenu` text NOT NULL,
  `picname` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `homecard`
--

LOCK TABLES `homecard` WRITE;
/*!40000 ALTER TABLE `homecard` DISABLE KEYS */;
INSERT INTO `homecard` VALUES (1,'100sante.jpg','Vous avez une mutuelle ne remboursant pas bien les lunettes ou vous êtes bénéficiaire de la CSS-CMU (Complémentaire Santé Solidaire) ? Profitez d’un reste à charge garantie à 0€ pour vos prochaines lunettes sur Visionet.',''),(2,'vital.png','Ne sortez pas votre CB et commandez vos lunettes sans payer. Vous avez une mutuelle ou êtes à la CSS-CMU, vous pouvez passer votre commande sur Visionet sans payer. Nous nous occupons de tout !',''),(3,'marques.jpg','Trouvez toutes les marques de lunettes pour vos montures (Guess, Ray-ban, Gucci...). Pour vos lunettes de vue, lunettes de soleil, lunettes percées et lunettes pour enfant, choisissez la marque de lunettes qui vous convient.','');
/*!40000 ALTER TABLE `homecard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `intermediaire`
--

DROP TABLE IF EXISTS `intermediaire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `intermediaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cat` int(11) NOT NULL,
  `id_artic` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `intermediaire`
--

LOCK TABLES `intermediaire` WRITE;
/*!40000 ALTER TABLE `intermediaire` DISABLE KEYS */;
INSERT INTO `intermediaire` VALUES (1,3,1,44),(2,3,2,44),(3,4,3,1),(4,4,4,1),(5,4,5,2),(6,4,6,2),(7,3,7,44),(8,5,8,9),(9,3,9,44),(10,3,10,44),(11,4,11,3),(12,4,12,4),(13,4,13,5),(14,4,14,5),(15,4,15,6),(16,4,16,5),(17,4,17,8),(18,4,18,11),(19,4,19,6),(20,4,20,12),(21,4,21,0),(22,4,22,0),(23,5,23,9),(24,5,24,9),(25,5,25,9),(26,5,26,0),(27,5,27,9),(28,5,28,9),(29,5,29,9),(30,1,30,13),(31,1,31,13),(32,1,32,13),(33,1,33,13),(34,1,34,14),(35,1,35,14),(36,1,36,14),(37,1,37,14),(38,1,38,15),(39,1,39,15),(40,1,40,15),(41,1,41,15),(42,1,42,16),(43,1,43,16),(44,1,44,16),(45,1,45,16),(46,1,46,17),(47,1,47,17),(48,1,48,17),(49,1,49,17),(50,1,50,18),(51,1,51,18),(52,1,52,18),(53,1,53,18),(54,1,54,19),(55,1,55,19),(56,1,56,19),(57,1,57,19),(58,1,58,0),(59,1,59,0),(60,1,60,0),(61,1,61,0),(62,1,61,0),(63,1,63,0),(64,1,64,0),(65,1,65,0),(66,1,66,0),(67,1,67,0),(68,1,68,0),(69,1,69,0),(70,1,70,0),(71,1,71,0),(72,1,72,0),(73,1,73,0),(74,1,74,26),(75,1,75,26),(76,1,76,26),(77,1,77,26),(78,1,78,27),(79,1,79,27),(80,1,80,27),(81,1,81,28),(82,1,82,28),(83,2,83,28),(84,2,84,29),(85,2,85,29),(86,2,86,29),(87,2,87,30),(88,2,88,30),(89,2,89,30),(90,2,90,14),(91,2,91,14),(92,2,92,14),(93,2,93,14),(94,2,94,15),(95,2,95,15),(96,2,96,15),(97,2,97,15),(98,2,98,16),(99,2,99,16),(100,2,100,16),(101,2,101,16),(102,2,102,18),(103,2,103,18),(104,2,104,18),(105,2,105,18),(106,2,106,19),(107,2,107,19),(108,2,108,19),(109,2,109,36),(110,2,110,36),(111,2,111,37),(112,2,112,37),(113,2,113,37),(114,2,114,45),(115,2,115,45),(116,2,116,45),(117,2,117,45),(118,2,118,22),(119,2,119,22),(120,2,120,22),(121,2,121,22),(122,2,122,22),(123,2,123,40),(124,2,124,40),(125,2,125,40),(126,2,126,25),(127,2,127,25),(128,2,128,25),(129,2,129,25),(130,2,130,26),(131,2,131,26),(132,2,132,26),(133,2,133,26),(134,2,134,28),(135,2,135,28),(136,2,136,28),(142,5,146,9),(143,1,147,18),(144,5,148,9),(145,3,149,18),(146,4,150,17),(147,5,151,9),(149,4,155,8),(150,4,156,17);
/*!40000 ALTER TABLE `intermediaire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marques`
--

DROP TABLE IF EXISTS `marques`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marques` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(50) NOT NULL,
  `brand` varchar(55) NOT NULL,
  `discription` text NOT NULL,
  `etoile` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marques`
--

LOCK TABLES `marques` WRITE;
/*!40000 ALTER TABLE `marques` DISABLE KEYS */;
INSERT INTO `marques` VALUES (1,'acuvue.jpg','Acuvue','Acuvue est une marque de lentilles de contact jetables fabriquée à Jacksonville en Floride et basée à Limerick Vistakon, une filiale de Johnson & Johnson. ',3),(2,'airoptique.jpg','Air optique','ir Optix Aqua sont des Lentilles de Contact mensuelles par Ciba Vision. Les lentilles Air Optix Aqua sont fabriquées à partir d\'un matériau breveté unique pour un port prolongé. Les Air Optix Aqua sont idéales pour les yeux secs et sensibles car les lentilles Air Optix Aqua permettent une forte oxygénation de votre oeil pendant toute la durée du port. Les lentilles Air Optix Aqua de Ciba Vision figurent parmi les lentilles les plus vendues en France.',3),(3,'biofinity.png','Biofinity','Les lentilles de contact Biofinity vous offrent plus de liberté, de flexibilité et d’indépendance - dans la vie de tous les jours comme en déplacement. Vous pouvez porter ces lentilles respirantes 30 jours durant, et même la nuit. Dans la boutique en ligne de Mister Spex, vous obtenez toutes les informations souhaitées sur l’innovation Aquaform® et la durée de port prolongée. Commandez vos nouvelles lentilles Biofinitiy en ligne, au meilleur prix !',3),(4,'biotrue.jpg','Biotrue','    LENTILLES\r\n    Lentilles de contact\r\n    Choisissez vos\r\n    PRODUITS D\'ENTRETIEN\r\n    Produits d\'entretien\r\n\r\n    Précédente Accueil Produits d\'entretien Biotrue \r\n\r\nLes solutions multifonctions Biotrue ont pour fonction d\'entretenir vos lentilles souples. Acheter Biotrue c\'est la garantie d\'un nettoyage remarquable de vos lentilles. Biotrue nettoie, décontamine, hydrate, lubrifie et conserve vos lentilles souples. Les solutions Biotrue doivent s\'utiliser tous les jours pour éliminer tous les dépôts de protéines sur vos lentilles souples. Utilisez le produit pour lentilles prescrit par ophtalmologue. Demandez à votre ophtalmologue, si les produits pour lentilles Biotrue sont une solution pour vous.\r\n\r\n Bausch & Lomb avec la marque Biotrue, a pensé à vous :\r\n- Pour réaliser des économies, la marque Biotrue propose le produit pour lentille Biotrue Multipack Eco en pack de 3\r\n- La marque Biotrue propose le format voyage idéal pour vos vacances : Biotrue Flight Pack 2x60ml. La solution Biotrue Flight Pack est acceptée dans l\'avion.\r\n\r\nVous retrouverez le meilleur des produits pour lentilles Biotrue aux meilleurs prix',3),(5,'dailiesaquaConfort.jpg','Aailies aqua confort','Lentilles souples à usage unique de Alcon.Port journalier. Boîte de 180 lentilles.',3),(6,'dailiestotal.jpg','Dailies total','Offrez-vous le nec plus ultra avec les lentilles journalières Dailies Total 1 de chez Alcon. Celles-ci procurent une hydratation inégalée dans le monde de la contactologie grâce à une technologie reproduisant la teneur en eau naturelle de l\'œil. Les bienfaits des lentilles journalières Alcon : - Les Dailies Total 1 procurent une hydratation exceptionnelle et sont près de 6 fois plus perméables à l\'oxygène qu\'une lentille lambda.',3),(8,'freshlook.png','Fresh look','Grâce aux lentilles colorées Freshlook One-Day Color de chez Ciba Vision : \r\n- Décidez de changer votre regard quand vous le souhaitez tout en corrigeant votre vue.\r\n- Protégez vos yeux des rayons nocifs du soleil grâce au filtre anti UVB et UVA. \r\n- Journalières, elles vous permettent de changer votre regard tous les jours parmi une large sélection de teintes, tout en conservant une hygiène inégalable.',3),(9,'julbo.JPEG','Julbo','Julbo est une marque de lunettes de sport fondée en 1888 à Morez dans le Jura. L\'entreprise a pris le nom de Julbo en 1954.',3),(10,'l\'amy.jpeg','l\'amy','Proposant une ligne de produits généraliste, L’amy Lunettes offre fonctionnalité et savoir-faire technologique aux hommes et femmes à la recherche d’authenticité et de simplicité. Fabriquées à partir de métal ou d’acétate, les montures ont des formes intemporelles qui conviennent à tous les visages. Les couleurs des modèles masculins sont sobres mais variés : noir, gris, bleu, bordeaux, beige ou écaille, tandis que celles pour femmes se permettent plus de fantaisie : rose, mauve ou orangé, avec des branches plus travaillées.\r\n\r\n',3),(11,'MyDay.jpg','My day','Vous exigez plus de vos lentilles de contact : Au-delà d’une vision claire et nette, vous attendez de vos lentilles de contact qu’elles soient très confortables pour vous aider à gérer votre mode de vie intense. Les lentilles de contact jetables journalières MyDay® de CooperVision sont nos lentilles en silicone hydrogel les plus souples.* Il s’agit également des premières lentilles de contact journalières au monde, fabriquées avec la technologie Aquaform® de CooperVision® pour maintenir vos yeux clairs et blancs et vous sentir à l’aise tout au long de la journée. Avec les lentilles jetables journalières MyDay®, vous êtes prêt(e) à affronter votre journée.',3),(12,'PureVision.png','Pure vision','Les lentilles de contact mensuelles PureVision sont les lentilles de la nouvelle génération de Bausch & Lomb. Quand Bausch & Lomb a sorti dans les années 1950 les lunettes de soleil cultes Ray-Ban Wayfarer sur le marché, il a révolutionné le marché des lunettes de soleil. Cinquante ans plus tard, Bausch & Lomb remet ça et propose sur le marché sa série pionnière de lentilles de contact PureVision. La gamme de lentilles PureVision est la première série de lentilles de contact mensuelles qui associe un taux de perméabilité élevé et une composition en eau faible, ce qui permet de les porter sur les yeux 24h/24 : 30 jours et 29 nuits sans interruption.',3),(13,'Sberluti.png','Berluti ','Berluti est une entreprise française fondée en 1895 par l\'Italien Alessandro Berluti qui fabrique des souliers et des articles de maroquinerie masculins. Berluti est aujourd\'hui la propriété du groupe LVMH.',3),(14,'Scazal.png','Cazal','\r\nLunettes de soleil Cazal\r\n\r\nLa marque Cazal est née dans l’esprit du créateur autrichien Cari Zalloni, elle apporte avec ses lunettes toute la culture hip hop des années 80. Depuis, les paires de lunettes Cazal ne cessent d’arborer le nez des stars, car elles ont été essentiellement conçues pour détrôner l’aspect pratique et protecteur des lunettes de soleil et faire apparaitre un aspect esthétique indispensable pour compléter un look comme le fait un sac ou une coupe de cheveux. La marque offre une collection de lunettes de stars pour franchir le tapis rouge, telles que les aviateurs dorées, ou les montures colorées cerclées, avec possibilité d’y mettre aussi des verres teintés.\r\n',3),(15,'SCéline.jpg','Céline','\r\n\r\nCELINE\r\n\r\nHAUTE MAROQUINERIE\r\n\r\n\r\nDANS LA LIGNÉE DE LA COUTURE ET DE LA HAUTE PARFUMERIE, CE PROJET RÉACTUALISE UNE EXCELLENCE ARTISANALE.\r\nAU CŒUR DE CE SERVICE EXCLUSIF ET SUR DEMANDE, DEUX SACS SIGNATURES DE LA MAISON, LE 16 ET LE TRIOMPHE.\r\n',4),(16,'SDior.jpg','Dior','Christian Dior SE est une holding cotée à la bourse de Paris, qui détient 41,23 % du capital et 56,54 % des droits de vote de la société LVMH SE',5),(17,'Sdita.png','Dita','Les lunettes Sunbird reflètent toute l\'exubérance de Brigitte Bardot dans un style qui s\'adapte sans effort à la ville comme à la plage. Les cercles de cette monture en acétate très léger sont entourés de titane, tandis que les plaquettes et le pont ont été obtenus par pressage à partir d\'une seule pièce de métal afin d\'assurer un maintien inégalable.',5),(18,'Sfendi.jpg','Fendi','\r\nDepuis 2008, le sac Peekaboo exprime la quintessence Fendi : tradition artisanale, expérimentation et créativité en parfait équilibre.\r\nPour fêter le sac emblématique, Fendi collabore avec le célèbre metteur en scène Luca Guadagnino pour sonder le sens de l’humour propre à la Marque et la féminité profonde de la Maison. Le court-métrage met en scène Adwoa Aboah, en suspens au-dessus d’une Rome onirique, avec une aisance libérée, surnaturellement douée du pouvoir du Peekaboo. \r\n',4),(19,'Sgucci.png','Gucci','Gucci est une maison italienne spécialisée dans la mode et le luxe dont le siège est situé à Florence en Italie. Gucci crée des collections de sacs-à-main, de prêt-à-porter, de chaussures, d\'accessoires, de produits cosmétiques, de parfums, et de produits de décoration d\'intérieur.',5),(20,'Sguess.jpg','Guess','Guess est une entreprise spécialisée dans la mode, fondée en 1981 par Georges Marciano et ses frères.',4),(21,'SjohnDalia.png','John Dalia','Lunettes de soleil Janis noires et dorées John Dalia avec modèle et logo en relief à l\'intérieur des branches, verres marrons certifiés Uva/Uvb et étui de protection. Matériau : métal, acétate ID du style du produit : Janis-0-C104 Cette description a été traduite automatiquement.',4),(22,'Smarc jacob.jpg','Marc jacob','The Marc Jacobs célèbre l\'éclectisme, la diversité et le style dans sa singularité. C\'est une collection composée de pièces pour un vestiaire de tous les jours mais également pour les moments extraordinaires.',4),(23,'Smylens.png','Smylens','NOUVELLES Lentilles mensuelles Smylens ! Lentilles de contact souples et mensuelles en hydrogel.',3),(24,'softlens.jpg','Softlens','Les lentilles de contact SofLens 59 par le populaire Bausch & Lomb, seront particulièrement appréciées pour les premères fois grâce à leur manipulation facile. Elles sont conçues pour un usage quotidien avec une période de remplacement mensuelle.\r\n\r\nSoflens 59 sont fabriqués à partir d\'un matériel résistant aux protéines qui allie haute performance, confort et acuité visuelle. Le matériel Hilafilcon B à haute teneur en eau améliore la résistance aux sédiments et assure un port confortable tous les jours.',3),(25,'Spaul&joe.jpg','Paul & joe','À l’origine du succès de la marque Paul & Joe, une créatrice très inspirée : Sophie Méchaly. Issue d’une famille dirigeant une entreprise de textile spécialisée dans la production de chemises, la jeune fille décroche un stage chez Azzedine Alaïa en 1987 avant de faire ses classes à l’Institut français de la mode. Après un passage par l’entreprise de ses parents, Le Garage, Sophie Méchaly crée en 1995 la marque Paul & Joe, des prénoms de ses deux garçons. Mais contrairement aux parcours classiques des créateurs de mode, son ambition première n’est pas de faire du prêt-à-porter féminin. Sa première collection, un vestiaire homme d’inspiration seventies chargé d’imprimés fleuris, s’éloigne résolument des canons de la mode masculine de cette époque. Saluée par la critique pour la fraîcheur de son style et ses imprimés gais et audacieux, la collection fait un tabac au Japon, aux USA puis dans l’hexagone.',3),(26,'Srayban.png','Rayban','Ray-Ban est un fabricant de lunettes de soleil et de lunettes de vue d\'origine américaine, fondé en 1937 par Bausch & Lomb et appartenant au franco-italien EssilorLuxottica. En 1999, Bausch & Lomb vend la marque au groupe Luxottica.',3),(27,'Stomford.png','Tomford','Tom Ford SA est une maison de couture de luxe fondée par le designer Tom Ford en 2005. Sa gamme de produits comprend des offres de prêt-à-porter et de sur-mesure, ainsi que des chaussures, des accessoires, des sacs à main, des cosmétiques et des parfums.',4),(28,'Sversace.jpg','Versace','Versace [ver?sa?t??e] est le nom d\'usage de l\'entreprise italienne de mode de luxe Gianni Versace S.r.l., fondée à Milan en 1978 par la fratrie Versace : Gianni Versace, Santo Versace et Donatella Versace.',4),(29,'Vbattatura.jpg','Battatura','Vous cherchez des lunettes élégantes aux inspirations vintage ? Découvrez la marque Battatura. Les montures sont fabriquées à la main avec des acétates de très grande qualité provenant d’Italie. Pas de fioritures, ni de chichis, la collection se veut sobre, aussi bien au niveau des formes que des couleurs. Des lunettes parfaites pour tous ceux qui souhaitent un look à la fois sophistiqué et décontracté.',3),(30,'Vcarrera.jpg','Carrera','Le GRAND PRIX 2 est une déclaration de mode. Il ne faut pas nécessairement que le soleil brille parce que ces lunettes de soleil vous donne une sensation que la nuit sera blanche. Le GRAND PRIX 2 est aussi disponible dans autres styles des collectionnes de la marque Carrera de 2021 et 2022 à la boutique d’Edel-Optics en ligne. ',3),(36,'Vjack&francis.jpg','Jack & francis ','Les lunettes de soleil Arise Collective Arise Collective Rhode Island Polarized OV5186S C1 avec leur monture en Acetate sont idéales pour vous protéger du soleil avec style! Découvrez plus de 180 marques de lunettes et plus de 80 000 lunettes de vue sur EasyLunettes ! De plus, profitez de la livraison gratuite, des verres 1.5 gratuits pour Arise Collective , d\'une garantie de 2 ans et du meilleur prix garanti lors de vos achats avec nous. ',4),(37,'Vjean-reno.jpg','Jean-reno','Juan Moreno y Herrera-Jiménez, dit Jean Reno1, né le 30 juillet 1948 à Casablanca (Maroc), est un acteur français d\'origine espagnole.\r\n\r\nDécouvert par Luc Besson qui lui permet d\'accéder à la célébrité en lui offrant des rôles principaux dans Le Grand Bleu (1988), Nikita (1990) et Léon (1994), il connaît également une grande popularité grâce à la comédie de Jean-Marie Poiré, Les Visiteurs (1993), et ses suites. ',3),(40,'V-opal.png','Opal',' Créée en 1995 par François Fort, la société lyonnaise OPAL DEMETZ est aujourd’hui leader européen de la monture pour enfant et adolescent, mais également leader français de la deuxième paire offerte par les opticiens. L’entreprise élargit son portefeuille de marques pour grandir en même temps que ses premiers clients et se développe logiquement sur l’adulte. ',3),(44,'hipster.jpg','Lunette et accessoire','Hipster désigne une personne ou une sous-culture définie par le stéréotype de jeunes adultes résidant principalement dans des quartiers gentrifiés.',3),(45,'kenzo.png','kenzo','Kenzo est une société française de conception, de fabrication et de vente de produits de luxe à un prix abordable, notamment dans les domaines du prêt-à-porter et de la parfumerie, créée par Kenzo Takada. Fondée à Paris en 1970 sous le nom de Jungle Jap, l’enseigne prend le prénom de son fondateur en 1980 : Kenzo.',5);
/*!40000 ALTER TABLE `marques` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rendez-vous`
--

DROP TABLE IF EXISTS `rendez-vous`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rendez-vous` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(55) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `motif` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `nb_rdv` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rendez-vous`
--

LOCK TABLES `rendez-vous` WRITE;
/*!40000 ALTER TABLE `rendez-vous` DISABLE KEYS */;
/*!40000 ALTER TABLE `rendez-vous` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rendezvous`
--

DROP TABLE IF EXISTS `rendezvous`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rendezvous` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motif` varchar(100) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `session` varchar(50) NOT NULL,
  `date` varchar(100) NOT NULL,
  `identifiant` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rendezvous`
--

LOCK TABLES `rendezvous` WRITE;
/*!40000 ALTER TABLE `rendezvous` DISABLE KEYS */;
/*!40000 ALTER TABLE `rendezvous` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service`
--

LOCK TABLES `service` WRITE;
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
INSERT INTO `service` VALUES (1,'Comment choisir ses verres','Il est difficile de s\'y retrouver parmi les nombreuses offres en matière de verres optiques. De plus, la gravité du problème oculaire peut influencer le choix. Le prix varie ainsi en fonction du type de verre choisi. À travers cet article, apprenez à déterminer les critères essentiels pour bien choisir vos verres de lunettes.'),(2,'Comment choisir sa monture\r\n','\r\nBien choisir sa monture relève avant tout d’une question esthétique. Il serait mieux de choisir un modèle qui mettra en valeur son visage. Parfois, le niveau de correction nécessaire pourra aussi influencer le choix. Découvrez ci-dessous des astuces pour trouver la monture idéale.\r\n'),(3,'Entretenir ses lunettes','Pour bénéficier à chaque instant d’un confort de vision personnalisé, vous avez pris le temps de choisir une paire de lunettes esthétique, pratique, confortable et dotée de verres correcteurs performants. Ne brisez pas cette belle harmonie d’un geste malencontreux ! Rayures, salissures et exposition à des températures inhabituelles peuvent altérer définitivement vos verres. '),(4,'Bénéficiez de toute l’expertise de l\'opticien Optico et ses services en quelques clics.\r\n','Manipulez toujours vos lunettes avec vos 2 mains : le bon entretien de vos lunettes commence dès leur prise en main : soyez attentifs dans vos moindres manipulations. Utilisez vos deux mains pour mettre et retirer vos montures.');
/*!40000 ALTER TABLE `service` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-05  9:12:26
