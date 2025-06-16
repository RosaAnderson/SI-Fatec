/*
SQLyog Enterprise - MySQL GUI v8.12 
MySQL - 5.5.27 : Database - animal_play
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`fatec_play` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `fatec_play`;

/*Table structure for table `avaliacao` */

DROP TABLE IF EXISTS `avaliacao`;

CREATE TABLE `avaliacao` (
  `id_avaliacao` int(11) NOT NULL AUTO_INCREMENT,
  `gostou` enum('S','N') NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_filme` int(11) NOT NULL,
  PRIMARY KEY (`id_avaliacao`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_filme` (`id_filme`),
  CONSTRAINT `avaliacao_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  CONSTRAINT `avaliacao_ibfk_2` FOREIGN KEY (`id_filme`) REFERENCES `filmes` (`id_filme`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `avaliacao` */

insert  into `avaliacao`(`id_avaliacao`,`gostou`,`id_usuario`,`id_filme`) values (1,'S',1,1),(2,'S',1,2),(3,'N',2,1),(4,'S',2,3),(5,'N',3,4),(6,'S',3,2),(7,'S',4,5);

/*Table structure for table `filmes` */

DROP TABLE IF EXISTS `filmes`;

CREATE TABLE `filmes` (
  `id_filme` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `valor` decimal(5,2) NOT NULL,
  `id_genero` int(11) NOT NULL,
  PRIMARY KEY (`id_filme`),
  KEY `id_genero` (`id_genero`),
  CONSTRAINT `filmes_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `generos` (`id_genero`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `filmes` */

insert  into `filmes`(`id_filme`,`titulo`,`valor`,`id_genero`) values (1,'Titanic','11.00',3),(2,'Wandinha','22.00',5),(3,'Todo mundo em Pânico','3.30',5),(4,'Invocação do mal','18.15',2),(5,'Aranhaverso','16.50',1),(7,'Rei Pele','11.00',4),(8,'teste','10.00',1);

/*Table structure for table `generos` */

DROP TABLE IF EXISTS `generos`;

CREATE TABLE `generos` (
  `id_genero` int(11) NOT NULL AUTO_INCREMENT,
  `descritivo` varchar(40) NOT NULL,
  PRIMARY KEY (`id_genero`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `generos` */

insert  into `generos`(`id_genero`,`descritivo`) values (1,'Aventura'),(2,'Terror'),(3,'Romance'),(4,'Documentário'),(5,'Comédia'),(6,'Suspense');

/*Table structure for table `locacao` */

DROP TABLE IF EXISTS `locacao`;

CREATE TABLE `locacao` (
  `id_locacao` int(11) NOT NULL AUTO_INCREMENT,
  `datal` date NOT NULL,
  `horal` time NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_filme` int(11) NOT NULL,
  PRIMARY KEY (`id_locacao`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_filme` (`id_filme`),
  CONSTRAINT `locacao_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  CONSTRAINT `locacao_ibfk_2` FOREIGN KEY (`id_filme`) REFERENCES `filmes` (`id_filme`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `locacao` */

insert  into `locacao`(`id_locacao`,`datal`,`horal`,`id_usuario`,`id_filme`) values (1,'2023-02-01','10:00:00',1,1),(2,'2023-02-10','20:00:00',1,2),(3,'2023-03-01','18:30:30',2,1),(4,'2023-03-20','15:00:00',2,3),(5,'2023-04-12','16:00:00',3,4),(6,'2023-04-21','15:00:00',3,2),(7,'2023-04-20','18:00:00',4,5);

/*Table structure for table `telefones` */

DROP TABLE IF EXISTS `telefones`;

CREATE TABLE `telefones` (
  `id_telefone` int(11) NOT NULL AUTO_INCREMENT,
  `numero` char(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_telefone`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `telefones_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `telefones` */

insert  into `telefones`(`id_telefone`,`numero`,`id_usuario`) values (1,'16992279864',1),(2,'16992348722',1),(3,'16998762266',2),(4,'16987654333',3),(5,'16987644422',3),(6,'14987652445',4),(7,'14986254422',5);

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sexo` enum('F','M') NOT NULL,
  `datan` date NOT NULL,
  `logradouro` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `uf` char(2) NOT NULL,
  `CEP` varchar(8) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id_usuario`,`nome`,`sexo`,`datan`,`logradouro`,`bairro`,`cidade`,`uf`,`CEP`) values (1,'Wdson Oliveira','M','1992-03-01','Av. bandeirantes','centro','Araraquara','SP','14810310'),(2,'Cação Ribeiro','M','1966-06-06','Av. Abrahao João 350','Jd bandeirantes','São Carlos','SP','13561003'),(3,'Maria Oliveira Souza','F','1990-06-10','Rua das Flores 45','Jd Paulistano','Araraquara','SP','14810336'),(4,'Oliveira Madalena','F','1985-04-01','Rua sem saida 67','centro','Jahu','SP','12034095'),(5,'José','M','1989-10-02','Av das Nações 100','Vila Falcão','Bauru','SP','15003887');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
