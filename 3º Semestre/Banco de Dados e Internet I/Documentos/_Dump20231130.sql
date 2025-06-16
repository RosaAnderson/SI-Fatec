-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: localhost    Database: gfacil
-- ------------------------------------------------------
-- Server version	8.0.29

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
-- Table structure for table `agendamento`
--

DROP TABLE IF EXISTS `agendamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `agendamento` (
  `AGE_ID_________` int NOT NULL,
  `AGE_USU_ID_____` int NOT NULL,
  `AGE_EVENTO_____` varchar(45) DEFAULT NULL,
  `AGE_LOCAL______` varchar(100) DEFAULT NULL,
  `AGE_DIA_TODO___` char(1) DEFAULT NULL,
  `AGE_DAT_INI____` datetime DEFAULT NULL,
  `AGE_HOR_INI____` datetime DEFAULT NULL,
  `AGE_DAT_FIM____` datetime DEFAULT NULL,
  `AGE_HOR_FIM____` datetime DEFAULT NULL,
  `AGE_REP________` varchar(45) DEFAULT NULL,
  `AGE_ALERT_1____` varchar(5) DEFAULT NULL,
  `AGE_ALERT_2____` varchar(5) DEFAULT NULL,
  `AGE_LINK_______` varchar(5000) DEFAULT NULL,
  `AGE_DIVERSOS___` blob,
  PRIMARY KEY (`AGE_ID_________`),
  KEY `fk_AGENDAMENTO_USUARIOS1_idx` (`AGE_USU_ID_____`),
  CONSTRAINT `fk_AGENDAMENTO_USUARIOS1` FOREIGN KEY (`AGE_USU_ID_____`) REFERENCES `usuarios` (`USU_ID_________`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agendamento`
--

LOCK TABLES `agendamento` WRITE;
/*!40000 ALTER TABLE `agendamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `agendamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `convidados`
--

DROP TABLE IF EXISTS `convidados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `convidados` (
  `CON_ID_________` int NOT NULL,
  `CON_AGE_ID_____` int NOT NULL,
  `CON_TIPO_______` varchar(5) DEFAULT NULL,
  `CON_NOME_______` varchar(45) DEFAULT NULL,
  `CON_TEL________` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`CON_ID_________`),
  KEY `fk_CONVIDADOS_AGENDAMENTO1_idx` (`CON_AGE_ID_____`),
  CONSTRAINT `fk_CONVIDADOS_AGENDAMENTO1` FOREIGN KEY (`CON_AGE_ID_____`) REFERENCES `agendamento` (`AGE_ID_________`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `convidados`
--

LOCK TABLES `convidados` WRITE;
/*!40000 ALTER TABLE `convidados` DISABLE KEYS */;
/*!40000 ALTER TABLE `convidados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enderecos`
--

DROP TABLE IF EXISTS `enderecos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `enderecos` (
  `END_ID_________` int NOT NULL,
  `END_PES_ID_____` int NOT NULL,
  `END_TIPO_______` varchar(20) DEFAULT NULL,
  `END_CEP________` varchar(200) DEFAULT NULL,
  `END_LOGRADOURO_` varchar(10) DEFAULT NULL,
  `END_NUMERO_____` varchar(45) DEFAULT NULL,
  `END_COMPLEMENTO` varchar(35) DEFAULT NULL,
  `END_BAIRRO_____` varchar(100) DEFAULT NULL,
  `END_LOCALIDADE_` varchar(100) DEFAULT NULL,
  `END_UF_________` char(2) DEFAULT NULL,
  `END_IBGE_______` varchar(15) DEFAULT NULL,
  `ENG_GIA________` varchar(10) DEFAULT NULL,
  `END_SIAFI______` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`END_ID_________`),
  KEY `fk_ENDERECOS_PESSOAS_idx` (`END_PES_ID_____`),
  CONSTRAINT `fk_ENDERECOS_PESSOAS` FOREIGN KEY (`END_PES_ID_____`) REFERENCES `pessoas` (`PES_ID_________`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enderecos`
--

LOCK TABLES `enderecos` WRITE;
/*!40000 ALTER TABLE `enderecos` DISABLE KEYS */;
/*!40000 ALTER TABLE `enderecos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `identidade_visual`
--

DROP TABLE IF EXISTS `identidade_visual`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `identidade_visual` (
  `IDV_ID_________` int NOT NULL,
  `IDV_PES_ID_____` int DEFAULT NULL,
  PRIMARY KEY (`IDV_ID_________`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `identidade_visual`
--

LOCK TABLES `identidade_visual` WRITE;
/*!40000 ALTER TABLE `identidade_visual` DISABLE KEYS */;
/*!40000 ALTER TABLE `identidade_visual` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pessoas`
--

DROP TABLE IF EXISTS `pessoas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pessoas` (
  `PES_ID_________` int NOT NULL,
  `PES_STATUS_____` varchar(15) DEFAULT 'Inativo',
  `PES_DATA_INC___` date DEFAULT NULL,
  `PES_F_NOM_FAN__` varchar(200) DEFAULT NULL,
  `PES_L_NOM_RAZ__` varchar(200) DEFAULT NULL,
  `PES_PASTA______` varchar(100) DEFAULT NULL,
  `PES_PESSOA_____` varchar(5) DEFAULT NULL,
  `PES_CPF_CNPJ___` varchar(14) DEFAULT NULL,
  `PES_RG_IE______` varchar(20) DEFAULT NULL,
  `PES_IM_________` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`PES_ID_________`),
  UNIQUE KEY `PES_PASTA______UNIQUE` (`PES_PASTA______`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pessoas`
--

LOCK TABLES `pessoas` WRITE;
/*!40000 ALTER TABLE `pessoas` DISABLE KEYS */;
INSERT INTO `pessoas` VALUES (15,'Ativo','2020-04-01','Anderson Rosa - Fotógrafo','Anderson Luiz dos Santos Rosa - 265.194.348-76','Anderson Rosa','PJ','41735280000163',NULL,NULL),(16,'Ativo','2020-04-01','Anderson','Rosa',NULL,'PF','26519434876','322786526',NULL),(17,'Ativo','2019-03-04','WA Têxtil','WA Faustino Confecções EIRELI',NULL,'PJ','24408074000120','289031542118',NULL);
/*!40000 ALTER TABLE `pessoas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `socios`
--

DROP TABLE IF EXISTS `socios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `socios` (
  `SOC_ID_________` int NOT NULL,
  `SOC_SOCIO______` int NOT NULL,
  `SOC_PES_ID_____` int NOT NULL,
  PRIMARY KEY (`SOC_ID_________`),
  UNIQUE KEY `SOC_ID__________UNIQUE` (`SOC_ID_________`),
  UNIQUE KEY `SOC_SOCIO_______UNIQUE` (`SOC_SOCIO______`),
  KEY `fk_SOCIOS_PESSOAS1_idx` (`SOC_PES_ID_____`),
  CONSTRAINT `fk_SOCIOS_PESSOAS1` FOREIGN KEY (`SOC_PES_ID_____`) REFERENCES `pessoas` (`PES_ID_________`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `socios`
--

LOCK TABLES `socios` WRITE;
/*!40000 ALTER TABLE `socios` DISABLE KEYS */;
INSERT INTO `socios` VALUES (1,16,15);
/*!40000 ALTER TABLE `socios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telefones`
--

DROP TABLE IF EXISTS `telefones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `telefones` (
  `TEL_ID_________` int NOT NULL,
  `TEL_PES_ID_____` int NOT NULL,
  `TEL_PAIS_______` varchar(45) DEFAULT NULL,
  `TEL_DDD________` varchar(2) DEFAULT NULL,
  `TEL_NUMERO_____` varchar(15) DEFAULT NULL,
  `TEL_TIPO_______` varchar(25) DEFAULT NULL,
  `TEL_CONTATO____` varchar(45) DEFAULT NULL,
  `TEL_WHATSAPP___` char(1) DEFAULT NULL,
  PRIMARY KEY (`TEL_ID_________`),
  KEY `fk_TELEFONES_PESSOAS1_idx` (`TEL_PES_ID_____`),
  CONSTRAINT `fk_TELEFONES_PESSOAS1` FOREIGN KEY (`TEL_PES_ID_____`) REFERENCES `pessoas` (`PES_ID_________`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='										';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telefones`
--

LOCK TABLES `telefones` WRITE;
/*!40000 ALTER TABLE `telefones` DISABLE KEYS */;
/*!40000 ALTER TABLE `telefones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `USU_ID_________` int NOT NULL,
  `USU_PES_ID_____` int NOT NULL,
  `USU_USER_______` varchar(45) DEFAULT NULL,
  `USU_SENHA______` varchar(45) DEFAULT NULL,
  `USU_TIPO_______` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`USU_ID_________`),
  KEY `fk_USUARIOS_PESSOAS1_idx` (`USU_PES_ID_____`),
  CONSTRAINT `fk_USUARIOS_PESSOAS1` FOREIGN KEY (`USU_PES_ID_____`) REFERENCES `pessoas` (`PES_ID_________`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (0,0,NULL,NULL,NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'gfacil'
--

--
-- Dumping routines for database 'gfacil'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-30 16:24:22
