/*
SQLyog Enterprise - MySQL GUI v8.12 
MySQL - 5.5.27 : Database - rh_empresa
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`rh_empresa` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `rh_empresa`;

/*Table structure for table `cargos` */

DROP TABLE IF EXISTS `cargos`;

CREATE TABLE `cargos` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT,
  `descritivo` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_cargo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `cargos` */

insert  into `cargos`(`id_cargo`,`descritivo`) values (1,'Vendedor'),(2,'Diretor'),(3,'Motorista'),(4,'Atendente'),(5,'Auxiliar administrativo'),(6,'Faxineira'),(7,'Vigia');

/*Table structure for table `departamentos` */

DROP TABLE IF EXISTS `departamentos`;

CREATE TABLE `departamentos` (
  `id_departamento` int(11) NOT NULL AUTO_INCREMENT,
  `descritivo` varchar(40) NOT NULL,
  PRIMARY KEY (`id_departamento`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `departamentos` */

insert  into `departamentos`(`id_departamento`,`descritivo`) values (1,'Vendas'),(2,'Compras'),(3,'Diretoria'),(4,'Financeiro'),(5,'Marketing');

/*Table structure for table `dependentes` */

DROP TABLE IF EXISTS `dependentes`;

CREATE TABLE `dependentes` (
  `id_dependente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `SEXO` enum('F','M') DEFAULT NULL,
  `DATAN` date NOT NULL,
  `id_funcionario` int(11) NOT NULL,
  PRIMARY KEY (`id_dependente`),
  KEY `id_funcionario` (`id_funcionario`),
  CONSTRAINT `dependentes_ibfk_1` FOREIGN KEY (`id_funcionario`) REFERENCES `funcionarios` (`id_funcionario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `dependentes` */

insert  into `dependentes`(`id_dependente`,`nome`,`SEXO`,`DATAN`,`id_funcionario`) values (1,'Emilio','M','2007-01-10',1),(2,'Carlos','M','2004-01-07',1),(3,'Pedro','M','2007-03-05',2),(4,'Daniela','F','2006-10-10',2),(5,'Roberta','F','2020-11-07',2),(6,'Lucas','M','2007-10-10',4),(7,'Carla','F','2009-03-11',5),(8,'Camila','F','2021-10-12',6);

/*Table structure for table `empresas` */

DROP TABLE IF EXISTS `empresas`;

CREATE TABLE `empresas` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `descritivo` varchar(40) NOT NULL,
  `contato` varchar(40) NOT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `empresas` */

insert  into `empresas`(`id_empresa`,`descritivo`,`contato`) values (1,'Unidade São Carlos','José'),(2,'Unidade Jau','Maria'),(3,'Unidade Araraquara','João'),(4,'Unidade Matão','Paulo'),(5,'teste','x');

/*Table structure for table `funcionarios` */

DROP TABLE IF EXISTS `funcionarios`;

CREATE TABLE `funcionarios` (
  `id_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cpf` char(11) NOT NULL,
  `salario` decimal(8,2) NOT NULL,
  `logradouro` varchar(40) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `uf` char(2) NOT NULL,
  `sexo` enum('F','M') NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `admissao` date NOT NULL,
  PRIMARY KEY (`id_funcionario`),
  UNIQUE KEY `cpf` (`cpf`),
  KEY `id_empresa` (`id_empresa`),
  KEY `id_cargo` (`id_cargo`),
  KEY `id_departamento` (`id_departamento`),
  CONSTRAINT `funcionarios_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id_empresa`),
  CONSTRAINT `funcionarios_ibfk_2` FOREIGN KEY (`id_cargo`) REFERENCES `cargos` (`id_cargo`),
  CONSTRAINT `funcionarios_ibfk_3` FOREIGN KEY (`id_departamento`) REFERENCES `departamentos` (`id_departamento`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `funcionarios` */

insert  into `funcionarios`(`id_funcionario`,`nome`,`cpf`,`salario`,`logradouro`,`bairro`,`cidade`,`uf`,`sexo`,`id_empresa`,`id_cargo`,`id_departamento`,`admissao`) values (1,'Wdson','08151988871','2200.00','Rua do sucesso 10','Personalidades','São Carlos','SP','M',2,7,1,'2022-03-17'),(2,'Gilmar','08151977771','3726.80','Rua das Flores 49','centro','Jau','SP','M',1,1,1,'2020-03-17'),(3,'Vera','98765456543','2000.00','Av dos Bandeirantes 45','Jd das rosas','Jau','SP','F',2,4,4,'2018-03-17'),(4,'José','98675675434','2000.00','Av dos Inconfidentes 450','Jd Militar','Jau','SP','M',3,4,5,'2018-03-10'),(5,'Maria','11175675434','3800.00','Av sem saida 450','centro','Araraquara','SP','F',3,5,5,'2023-03-17'),(6,'Adriana','28828282889','2500.00','Av dos crisantemos','centro','São Carlos','SP','F',4,3,3,'2019-03-09'),(7,'Roberta','84846592628','3500.00','Rua dos Milagres 230','centro','Araraquara','SP','F',1,5,3,'2017-03-03'),(8,'Vinicius','88876636366','2800.00','Rua dos professores 20','Jd das flores','Jau','SP','M',4,1,1,'2021-03-08'),(9,'Rafael','18374646478','7000.00','Av dos Inconfidentes','centro','Matão','SP','M',1,2,2,'2000-01-01');

/*Table structure for table `funcionarios_projetos` */

DROP TABLE IF EXISTS `funcionarios_projetos`;

CREATE TABLE `funcionarios_projetos` (
  `id_func_proj` int(11) NOT NULL AUTO_INCREMENT,
  `horast` int(11) NOT NULL,
  `datai` date NOT NULL,
  `id_funcionario` int(11) NOT NULL,
  `id_projeto` int(11) NOT NULL,
  PRIMARY KEY (`id_func_proj`),
  KEY `id_funcionario` (`id_funcionario`),
  KEY `id_projeto` (`id_projeto`),
  CONSTRAINT `funcionarios_projetos_ibfk_1` FOREIGN KEY (`id_funcionario`) REFERENCES `funcionarios` (`id_funcionario`),
  CONSTRAINT `funcionarios_projetos_ibfk_2` FOREIGN KEY (`id_projeto`) REFERENCES `projetos` (`id_projeto`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `funcionarios_projetos` */

insert  into `funcionarios_projetos`(`id_func_proj`,`horast`,`datai`,`id_funcionario`,`id_projeto`) values (1,1,'2024-01-10',1,1),(2,2,'2024-01-20',1,3),(3,1,'2024-02-10',2,1),(4,1,'2024-03-10',2,3),(5,2,'2024-03-11',8,2),(6,1,'2024-02-15',4,3),(7,1,'2024-04-01',5,4),(8,1,'2024-03-02',6,4);

/*Table structure for table `projetos` */

DROP TABLE IF EXISTS `projetos`;

CREATE TABLE `projetos` (
  `id_projeto` int(11) NOT NULL AUTO_INCREMENT,
  `descritivo` varchar(40) NOT NULL,
  `bonus` decimal(4,2) NOT NULL,
  PRIMARY KEY (`id_projeto`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `projetos` */

insert  into `projetos`(`id_projeto`,`descritivo`,`bonus`) values (1,'Restruturação da rede','20.00'),(2,'Elaboração da PSI','15.00'),(3,'Construção de um novo site','25.00'),(4,'Otimização de custos','10.00'),(5,'Elaboração do plano de contingência','20.00');

/*Table structure for table `telefones` */

DROP TABLE IF EXISTS `telefones`;

CREATE TABLE `telefones` (
  `id_telefone` int(11) NOT NULL AUTO_INCREMENT,
  `numero` char(11) NOT NULL,
  `id_funcionario` int(11) NOT NULL,
  PRIMARY KEY (`id_telefone`),
  KEY `id_funcionario` (`id_funcionario`),
  CONSTRAINT `telefones_ibfk_1` FOREIGN KEY (`id_funcionario`) REFERENCES `funcionarios` (`id_funcionario`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `telefones` */

insert  into `telefones`(`id_telefone`,`numero`,`id_funcionario`) values (1,'16992279865',1),(2,'16996759865',1),(3,'14987654321',2),(4,'14987654346',2),(5,'14987654333',3),(6,'16987656353',4),(7,'14987655555',5),(8,'14987665553',6),(9,'14987634555',7),(10,'16967535675',8);

/* Procedure structure for procedure `proc_apaga_funcionario` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_apaga_funcionario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_apaga_funcionario`(in codf int)
begin
  ## Corpo da Procedure
  if (codf in (select id_funcionario from funcionarios)) then # verifico cadastro
   if (codf not in (select id_funcionario from dependentes)) then # verifico se tem filhos
    if (codf not in (select id_funcionario from funcionarios_projetos)) then # verifico se participa de projetos
     if (codf not in (select id_funcionario from telefones)) then # verifico se tem telefones
      delete from funcionarios where codf = id_funconario;
     else
      select "Funcionario possui telefones" as msg;
     end if;
    else
     select "Funcionario participa de projetos" as msg;
    end if;
   else
    select "Funcionario possui filhos" as msg;
   end if;
  else
   select "Funcionario não cadastrado" as msg;
  end if;
end */$$
DELIMITER ;

/* Procedure structure for procedure `proc_boleto_mensalidade` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_boleto_mensalidade` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_boleto_mensalidade`(in coda int, out nomea varchar(100),out mensalidade decimal(8,2))
begin
 if (coda in (select id_aluno from alunos)) then # verifica o cadastro do aluno
   if (coda in (select id_aluno from alunos_disciplinas)) then # verifica se ele tem disciplinas
    select a.nome,sum(d.valor) into nomea, mensalidade
    from alunos a inner join alunos_disciplinas ad
    on (a.id_aluno=ad.id_aluno) inner join disciplinas d
    on (ad.id_disciplina=d.id_disciplina)
    where coda = a.id_aluno;
   else
    select "Aluno não possui disciplinas " as msg;
   end if;
 else
  select "Aluno não cadastrado " as msg;
 end if;
end */$$
DELIMITER ;

/* Procedure structure for procedure `proc_calculafp_unidade` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_calculafp_unidade` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_calculafp_unidade`(IN codu INT, OUT nomeu VARCHAR(100), 
                OUT folhau DECIMAL(8,2))
BEGIN
  ### Corpo da Procedure ##
  IF (codu IN (SELECT id_empresa FROM empresas)) THEN
   IF (codu IN (SELECT  DISTINCT(id_empresa) FROM funcionarios)) THEN
     SELECT e.descritivo,SUM(f.salario) 
           INTO nomeu, folhau 
     FROM empresas e INNER JOIN funcionarios f
     ON (e.id_empresa=f.id_empresa)
     WHERE codu = e.id_empresa;
   ELSE
    SELECT "Unidade não possui funcionarios" AS msg;
   END IF;  
  ELSE
   SELECT "Unidade não cadastrada" AS msg;
  END IF;
END */$$
DELIMITER ;

/* Procedure structure for procedure `proc_folha_nfunc` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_folha_nfunc` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_folha_nfunc`(OUT nrof INT, 
                 OUT folha DECIMAL(8,2) )
BEGIN
   ## Corpo da Procedure ## 
   SELECT COUNT(id_funcionario), SUM(salario) 
          INTO nrof,folha 
   FROM funcionarios;
END */$$
DELIMITER ;

/* Procedure structure for procedure `proc_lista_filhos` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_lista_filhos` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_lista_filhos`(in codf int)
begin
   ## Corpo da procedure
   if (codf in (select id_funcionario from funcionarios)) then
    if (codf in (SELECT id_funcionario FROM dependentes) ) then
      select f.id_funcionario "Codigo",
             f.nome "NomeFuncionario",
             d.nome "NomeFilho" 
      from funcionarios f inner join dependentes d
      on (f.id_funcionario=d.id_funcionario) 
      where codf = f.id_funcionario;
    else
     select "Funcionário não possui filhos" as msg;
    end if;
   else
    select "Funcionário não cadastrado" as msg;
   end if;
end */$$
DELIMITER ;


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
