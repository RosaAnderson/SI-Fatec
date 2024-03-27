/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.21-MariaDB : Database - arclinic
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`arclinic` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `arclinic`;

/*Table structure for table `especializacoes` */

DROP TABLE IF EXISTS `especializacoes`;

CREATE TABLE `especializacoes` (
  `ESP_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ESP_DESCRICAO` varchar(40) NOT NULL,
  PRIMARY KEY (`ESP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `especializacoes` */

insert  into `especializacoes`(`ESP_ID`,`ESP_DESCRICAO`) values 
(1,'ORTOPEDISTA'),
(2,'OPTOMETRISTA'),
(3,'OFTALMOLOGISTA'),
(4,'OBSTETRA'),
(5,'PEDIATRA'),
(6,'CARDIOLOGISTA'),
(7,'GERIATRA'),
(8,'OTORRINOLARINGOLOGISTA'),
(9,'UNCOLOGISTA');

/*Table structure for table `exames` */

DROP TABLE IF EXISTS `exames`;

CREATE TABLE `exames` (
  `EXA_ID` int(11) NOT NULL AUTO_INCREMENT,
  `EXA_DESCRICAO` varchar(40) NOT NULL,
  `EXA_VALOR` decimal(6,2) NOT NULL,
  PRIMARY KEY (`EXA_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `exames` */

/*Table structure for table `medicos` */

DROP TABLE IF EXISTS `medicos`;

CREATE TABLE `medicos` (
  `MED_ID` int(11) NOT NULL AUTO_INCREMENT,
  `MED_CRM` int(11) NOT NULL,
  `MED_NOME` varchar(100) NOT NULL,
  `MED_ESP` int(11) NOT NULL,
  PRIMARY KEY (`MED_ID`),
  UNIQUE KEY `MED_CRM` (`MED_CRM`),
  KEY `MED_ESP` (`MED_ESP`),
  CONSTRAINT `medicos_ibfk_1` FOREIGN KEY (`MED_ESP`) REFERENCES `especializacoes` (`ESP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

/*Data for the table `medicos` */

insert  into `medicos`(`MED_ID`,`MED_CRM`,`MED_NOME`,`MED_ESP`) values 
(19,1593151,'ROGER HOUSE',9),
(20,2593251,'WILL ROSE',8),
(21,3593351,'MARK SPILBERG',7),
(22,4593451,'BILL CAMARGO',3),
(23,5593551,'JOTA GELLER',6),
(24,6593651,'KANYE GOMES',5),
(25,7593751,'STEVE WEST',2),
(26,8593851,'JOHN DOE',1),
(27,9593951,'JANY DOE',4);

/*Table structure for table `pacientes` */

DROP TABLE IF EXISTS `pacientes`;

CREATE TABLE `pacientes` (
  `PAC_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PAC_NOME` varchar(100) NOT NULL,
  `PAC_NASCIMENTO` date NOT NULL,
  `PAC_SEXO` enum('F','M') NOT NULL,
  `PAC_CPF` varchar(11) NOT NULL,
  `PAC_LOGRADOURO` varchar(100) NOT NULL,
  `PAC_BAIRRO` varchar(100) NOT NULL,
  `PAC_CEP` varchar(10) NOT NULL,
  `PAC_CIDADE` varchar(100) NOT NULL,
  PRIMARY KEY (`PAC_ID`),
  UNIQUE KEY `PAC_CPF` (`PAC_CPF`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pacientes` */

insert  into `pacientes`(`PAC_ID`,`PAC_NOME`,`PAC_NASCIMENTO`,`PAC_SEXO`,`PAC_CPF`,`PAC_LOGRADOURO`,`PAC_BAIRRO`,`PAC_CEP`,`PAC_CIDADE`) values 
(1,'AMERICO JOAO','0000-00-00','M','123456789','RUA NORBERTO, 21','CENTRO','17240000','BARRETOS');

/*Table structure for table `rel_medpac` */

DROP TABLE IF EXISTS `rel_medpac`;

CREATE TABLE `rel_medpac` (
  `RMP_ID` int(11) NOT NULL AUTO_INCREMENT,
  `RMP_MED` int(11) NOT NULL,
  `RMP_PAC` int(11) NOT NULL,
  `RMP_DATA` date NOT NULL,
  `RMP_HORA` time NOT NULL,
  PRIMARY KEY (`RMP_ID`),
  KEY `RMP_MED` (`RMP_MED`),
  KEY `RMP_PAC` (`RMP_PAC`),
  CONSTRAINT `rel_medpac_ibfk_1` FOREIGN KEY (`RMP_MED`) REFERENCES `medicos` (`MED_ID`),
  CONSTRAINT `rel_medpac_ibfk_2` FOREIGN KEY (`RMP_PAC`) REFERENCES `pacientes` (`PAC_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `rel_medpac` */

/*Table structure for table `rel_pacexa` */

DROP TABLE IF EXISTS `rel_pacexa`;

CREATE TABLE `rel_pacexa` (
  `RPE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `RPE_PAC` int(11) NOT NULL,
  `RPE_EXA` int(11) NOT NULL,
  `RPE_DATA` date NOT NULL,
  `RPE_HORA` time NOT NULL,
  PRIMARY KEY (`RPE_ID`),
  KEY `RPE_PAC` (`RPE_PAC`),
  KEY `RPE_EXA` (`RPE_EXA`),
  CONSTRAINT `rel_pacexa_ibfk_1` FOREIGN KEY (`RPE_PAC`) REFERENCES `pacientes` (`PAC_ID`),
  CONSTRAINT `rel_pacexa_ibfk_2` FOREIGN KEY (`RPE_EXA`) REFERENCES `exames` (`EXA_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `rel_pacexa` */

/*Table structure for table `telefones` */

DROP TABLE IF EXISTS `telefones`;

CREATE TABLE `telefones` (
  `TEL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TEL_MED` int(11) NOT NULL,
  `TEL_DDD` char(2) NOT NULL,
  `TEL_NUMERO` varchar(14) NOT NULL,
  PRIMARY KEY (`TEL_ID`),
  UNIQUE KEY `TEL_MED` (`TEL_MED`),
  CONSTRAINT `telefones_ibfk_1` FOREIGN KEY (`TEL_MED`) REFERENCES `medicos` (`MED_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `telefones` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
