/*
SQLyog Enterprise - MySQL GUI v8.12 
MySQL - 5.5.27 : Database - faculdade
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`faculdade` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `faculdade`;

/*Table structure for table `alunos` */

DROP TABLE IF EXISTS `alunos`;

CREATE TABLE `alunos` (
  `id_aluno` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `sexo` enum('F','M') DEFAULT NULL,
  `datan` date NOT NULL,
  `uf` char(2) NOT NULL,
  `id_curso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_aluno`),
  KEY `id_curso` (`id_curso`),
  CONSTRAINT `alunos_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `alunos` */

insert  into `alunos`(`id_aluno`,`nome`,`sexo`,`datan`,`uf`,`id_curso`) values (1,'Jose Oliveira','M','1999-01-01','RJ',1),(2,'Tonho','M','1997-02-01','RJ',2),(3,'Tião','M','1996-10-01','RS',2),(4,'Maura','F','1995-03-10','SP',1),(5,'Ciclana','F','2001-10-01','SP',2),(6,'Paula','F','2000-01-01','SP',3),(7,'Lucas','M','1994-02-07','SP',1),(8,'Gabriel','M','1995-10-10','SP',3),(10,'Lucas','M','1980-01-01','SP',6),(11,'Luciana','F','1981-11-25','SP',1),(12,'Gilson','M','1994-10-01','SP',7),(13,'Thiago','M','1996-01-01','SP',7),(14,'Luciana','F','2000-03-05','SP',7),(15,'Rodrigo','M','1997-08-05','SP',1),(16,'Vinicius','M','1996-04-01','SP',9),(17,'Carla ','F','1995-10-10','SP',9),(18,'Leornardo','M','1992-01-10','SP',9),(19,'Camila ','F','2001-01-01','SP',6),(20,'Adriana Silva','F','2000-10-10','SP',6);

/*Table structure for table `alunos_disciplinas` */

DROP TABLE IF EXISTS `alunos_disciplinas`;

CREATE TABLE `alunos_disciplinas` (
  `id_aluno_disc` int(11) NOT NULL AUTO_INCREMENT,
  `id_aluno` int(11) NOT NULL,
  `id_disciplina` int(11) NOT NULL,
  `datam` date NOT NULL,
  `nota` decimal(4,2) NOT NULL,
  PRIMARY KEY (`id_aluno_disc`),
  KEY `id_aluno` (`id_aluno`),
  KEY `id_disciplina` (`id_disciplina`),
  CONSTRAINT `alunos_disciplinas_ibfk_1` FOREIGN KEY (`id_aluno`) REFERENCES `alunos` (`id_aluno`),
  CONSTRAINT `alunos_disciplinas_ibfk_2` FOREIGN KEY (`id_disciplina`) REFERENCES `disciplinas` (`id_disciplina`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `alunos_disciplinas` */

insert  into `alunos_disciplinas`(`id_aluno_disc`,`id_aluno`,`id_disciplina`,`datam`,`nota`) values (1,1,1,'2019-08-06','2.50'),(2,1,2,'2019-08-06','5.00'),(3,2,2,'2019-08-20','6.00'),(4,2,3,'2019-08-20','7.50'),(5,2,1,'2019-08-25','8.00'),(6,1,3,'2020-01-01','10.00'),(7,3,1,'2020-07-03','7.50'),(8,3,2,'2020-07-03','3.50'),(9,4,4,'2020-07-03','8.50'),(10,4,1,'2021-09-14','5.50'),(11,7,1,'2021-09-14','6.50'),(12,7,4,'2021-09-14','8.00'),(13,7,2,'2021-09-14','2.50'),(14,8,4,'2021-08-01','8.00'),(15,1,4,'2021-09-01','7.00'),(16,14,1,'2022-09-01','2.00'),(17,14,2,'2022-09-10','2.00'),(18,11,1,'2023-11-17','0.00');

/*Table structure for table `cursos` */

DROP TABLE IF EXISTS `cursos`;

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `descritivo` varchar(40) NOT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `cursos` */

insert  into `cursos`(`id_curso`,`descritivo`) values (1,'Sistemas para Internet'),(2,'Gestão de TI'),(3,'Gastronomia'),(5,'Modas'),(6,'Sistema de Navegação'),(7,'Segurança da informação'),(8,'Nutrição'),(9,'Engenharia Civil'),(11,'Culinaria'),(12,'Engenharia de produção');

/*Table structure for table `disciplinas` */

DROP TABLE IF EXISTS `disciplinas`;

CREATE TABLE `disciplinas` (
  `id_disciplina` int(11) NOT NULL AUTO_INCREMENT,
  `descritivo` varchar(40) NOT NULL,
  `valor` decimal(6,2) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `id_professor` int(11) NOT NULL,
  `cargah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_disciplina`),
  KEY `id_curso` (`id_curso`),
  KEY `id_professor` (`id_professor`),
  CONSTRAINT `disciplinas_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`),
  CONSTRAINT `disciplinas_ibfk_2` FOREIGN KEY (`id_professor`) REFERENCES `professores` (`id_professor`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `disciplinas` */

insert  into `disciplinas`(`id_disciplina`,`descritivo`,`valor`,`id_curso`,`id_professor`,`cargah`) values (1,'banco de dados I','100.00',1,1,4),(2,'estrutura de dados','200.00',1,1,4),(3,'Ingles','300.00',2,3,2),(4,'Projeto de Graduação','400.00',3,2,2),(5,'Banco de Dados II','300.00',1,1,4),(6,'Topicos em SI - III','200.00',1,2,4),(7,'Cozinha Italiana','250.00',8,9,2),(8,'Calculo I','200.00',9,4,4),(10,'Calculo II','250.00',9,8,4);

/*Table structure for table `professores` */

DROP TABLE IF EXISTS `professores`;

CREATE TABLE `professores` (
  `id_professor` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `sexo` enum('F','M') DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `id_curso` int(11) NOT NULL,
  PRIMARY KEY (`id_professor`),
  KEY `id_curso` (`id_curso`),
  CONSTRAINT `professores_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `professores` */

insert  into `professores`(`id_professor`,`nome`,`sexo`,`email`,`id_curso`) values (1,'wdson','M','wdson.oliveira@unar.edu.br',1),(2,'Cação','M','gcacao@hotmail.com',1),(3,'Vera','F','veramerlini@hotmail.com',3),(4,'Renato','M','renato@hotmail.com',2),(5,'Helio','M','helio@hotmail.com',5),(6,'Valeria','F','valeria@hotmail.com',6),(8,'Fernando','M','fernando@gmail.com',2),(9,'Danilo','M','danilo@gmail.com',8),(10,'Daniel','M','daniel@gmail.com',12);

/* Procedure structure for procedure `listar_alunos` */

/*!50003 DROP PROCEDURE IF EXISTS  `listar_alunos` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_alunos`(IN cod INT)
BEGIN
	IF(cod IN(SELECT id_aluno FROM alunos))THEN
		IF(cod IN(SELECT id_curso FROM alunos))THEN
			SELECT c.id_curso "Código", c.descritivo "Nome", AVG(da.nota) "Média geral do Aluno"
			FROM alunos a INNER JOIN cursos c ON (a.id_curso = c.id_curso)
			INNER JOIN alunos_disciplinas da ON (a.id_aluno = da.id_aluno)
			WHERE cod = a.id_curso;
	ELSE
		SELECT "Curso nao cadastrado" AS msg;
	END IF;
	ELSE
		SELECT "Não há alunos associados ao curso" AS msg;
	END IF;
END */$$
DELIMITER ;

/* Procedure structure for procedure `mensalidade_aluno` */

/*!50003 DROP PROCEDURE IF EXISTS  `mensalidade_aluno` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `mensalidade_aluno`(in cod int,out boleto DECIMAL(8,2), out nomea varchar(40))
begin
  select sum(d.valor),a.nome into  boleto,nomea 
  from alunos a inner join alunos_disciplinas ad
  on (a.id_aluno=ad.id_aluno) inner join
  disciplinas d on (ad.id_disciplina=d.id_disciplina)
  where a.id_aluno = cod;
  if (boleto is null) then
    select "não existe disciplinas para o aluno" as msg;
  end if;
end */$$
DELIMITER ;

/* Procedure structure for procedure `proc_apaga_curso` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_apaga_curso` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_apaga_curso`(in codc int)
begin
  if (EXISTS(select * from cursos
             where codc=id_curso)) then # verifica o cadastro do curso
    if (not EXISTS(select * from alunos
                   where codc=id_curso)) then # verifica se tem vinculo com alunos
      if (not EXISTS(select * from disciplinas
                     where codc=id_curso)) then # verifica se tem vinculo com disciplinas
       if (not EXISTS(select * from professores
                      where codc=id_curso)) then # verifica se tem vinculo com prof
          DELETE from cursos where codc=id_curso;
       else # tem vinculo com professores
        SELECT "tem vinculo com professores" as msg;
       end if;
      else # tem vinculo com disciplinas
       select "tem vinculo com disciplinas" as msg;
      end if;
    else # tem vinculos com alunos
     SELECT "tem vinculos com alunos" as msg;
    end if;
  else # curso não cadastrado
   select "curso não cadastrado" as msg;   
  end if;
end */$$
DELIMITER ;

/* Procedure structure for procedure `proc_boleto_aluno` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_boleto_aluno` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_boleto_aluno`(IN coda INT,OUT boleto DECIMAL(6,2),OUT anome VARCHAR(40))
BEGIN
   IF (EXISTS(SELECT * FROM alunos
              WHERE coda=id_aluno )) THEN
     IF (EXISTS(SELECT * FROM alunos_disciplinas
                WHERE coda=id_aluno)) THEN 
      SELECT SUM(d.valor),a.nome INTO boleto,anome
      FROM alunos a INNER JOIN alunos_disciplinas ad
      ON (a.id_aluno=ad.id_aluno) INNER JOIN disciplinas d
      ON (d.id_disciplina=ad.id_disciplina)
      WHERE coda=a.id_aluno;
     ELSE
      SELECT "Aluno não possui disciplinas" AS msg;
     END IF;
   ELSE
    SELECT "Aluno não cadastrado " AS msg;
   END IF;
END */$$
DELIMITER ;

/* Procedure structure for procedure `proc_calcula_mensalidade` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_calcula_mensalidade` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_calcula_mensalidade`(in aluno int, out nomea varchar(40), out mensalidade decimal(8,2))
begin
   if (aluno in (select id_aluno from alunos)) then
    if (aluno in (SELECT id_aluno from alunos_disciplinas)) then
      select a.nome, sum(d.valor) into nomea,mensalidade
      from alunos a inner join alunos_disciplinas ad on
      (a.id_aluno=ad.id_aluno) inner JOIN disciplinas d
      on (d.id_disciplina=ad.id_disciplina)
      where a.id_aluno = aluno;
    else
      select "Aluno não possui disciplinas" as msg;
    end if;  
   else
     select "Aluno não cadastrado !!" as msg;
   end if;
end */$$
DELIMITER ;

/* Procedure structure for procedure `proc_conta_func` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_conta_func` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_conta_func`(out N int)
begin
   select count(id_func) into N
   from funcionarios;
end */$$
DELIMITER ;

/* Procedure structure for procedure `proc_ex4` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_ex4` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_ex4`(IN cod INT)
BEGIN
	IF(cod IN(SELECT id_aluno FROM alunos))THEN
		IF(cod IN(SELECT id_curso FROM alunos))THEN
			SELECT c.id_curso "Codigo", c.descritivo "Nome", AVG(da.nota) "Media geral do Aluno"
			FROM alunos a INNER JOIN cursos c ON (a.id_curso = c.id_curso)
			INNER JOIN alunos_disciplinas da ON (a.id_aluno = da.id_aluno)
			WHERE cod = a.id_curso;
	ELSE
		SELECT "O curso não tem alunos associados a ele" AS msg;
	END IF;
	ELSE
		SELECT "Curso não cadastrado" AS msg;
	END IF;
END */$$
DELIMITER ;

/* Procedure structure for procedure `proc_listaluno` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_listaluno` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_listaluno`(IN cod INT)
BEGIN
	IF (cod IN(SELECT id_curso FROM cursos)) THEN
		IF(cod IN(SELECT id_curso FROM alunos)) THEN
			SELECT id_aluno'Código',nome'Nome',(
				SELECT FORMAT(AVG(nota),2) 
				FROM alunos_disciplinas da
				INNER JOIN alunos aa 
				ON (da.id_aluno=aa.id_aluno)
				WHERE aa.id_aluno=a.id_aluno 
				GROUP BY aa.id_aluno
			)'Média geral do aluno' 
			FROM alunos a 
			WHERE id_curso = cod;
		ELSE
			SELECT "Não a alunos cadastrado nesse curso" AS msg;
		END IF;
	ELSE
		SELECT "Curso não encontrado" AS msg;		
		
	END IF; 
END */$$
DELIMITER ;

/* Procedure structure for procedure `proc_lista_clientes` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_lista_clientes` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_lista_clientes`(in cod int)
begin
  ## corpo da procedure ##
  if (cod is null) then
     #ação
     select * from clientes;
  else
   if (cod in (select id_cliente from clientes)) then
     #ação
     select * from clientes where id_cliente=cod;
   else
     #ação
     select concat("Cliente ",cod," não está cadastrado") as msg; 
   end if;    
  end if;  
end */$$
DELIMITER ;

/* Procedure structure for procedure `proc_lista_disciplinas` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_lista_disciplinas` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_lista_disciplinas`(in codc int)
begin
   if (EXISTS(select * from cursos 
              where codc=id_curso)) then # curso cadastrado
     if (EXISTS(select * from disciplinas
                where codc=id_curso)) then # curso tem disciplinas
       SELECT d.id_disciplina "Codigo", d.descritivo,
          d.cargah "Carga Horaria", 
          concat("R$ ",format(d.valor,2,"de_DE")) "Valor",
          c.descritivo "Curso"
       from disciplinas d inner join cursos c
       on (d.id_curso=c.id_curso) 
       where codc = c.id_curso;
     else # não existe disciplinas para o curso
      select "não existe disciplinas para o curso" as msg;
     end if;
   else # não cadastrada - retorno false do exists
    select "Curso não cadastrado" as msg;
   end if;
end */$$
DELIMITER ;

/* Procedure structure for procedure `pr_calcula_mensalidade_aluno` */

/*!50003 DROP PROCEDURE IF EXISTS  `pr_calcula_mensalidade_aluno` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `pr_calcula_mensalidade_aluno`(IN coda INT,OUT xnome VARCHAR(40), OUT mensa DECIMAL(8,2))
BEGIN
  IF (coda IN (SELECT id_aluno FROM alunos)) THEN
    IF (coda IN (SELECT DISTINCT(id_aluno) FROM alunos_disciplinas)) THEN
      SELECT a.nome,SUM(d.valor) INTO xnome, mensa
      FROM alunos a INNER JOIN alunos_disciplinas ad 
      ON (a.id_aluno=ad.id_aluno) INNER JOIN disciplinas d
      ON (d.id_disciplina=ad.id_disciplina)
      WHERE coda = a.id_aluno;
    ELSE
     SELECT CONCAT("Não existe disciplinas para o aluno ", coda) AS msg;
    END IF;
  ELSE
   SELECT CONCAT(" Aluno ", coda , " não cadastrado") AS msg;
  END IF;
END */$$
DELIMITER ;

/* Procedure structure for procedure `pr_lista_disciplinas` */

/*!50003 DROP PROCEDURE IF EXISTS  `pr_lista_disciplinas` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `pr_lista_disciplinas`(in cod int)
begin
  if (cod in (select id_curso from cursos)) then
    if (cod in (select distinct(id_curso) from disciplinas)) then
     select d.id_disciplina "Codigo", d.descritivo,
     d.cargah "CargaHoraria",  
     concat("R$ ",d.valor) "Valor",
     c.descritivo "Curso"
     from disciplinas d inner join cursos c
     on (d.id_curso=c.id_curso)
     where cod = c.id_curso;
    else
      SELECT CONCAT("Curso ", cod, " ", descritivo,
          " não possui disciplinas") AS msg
      FROM cursos WHERE cod = id_curso;
    end if;
  else
   select concat("Curso ", cod," não cadastrado") as msg;
  end if;
end */$$
DELIMITER ;

/* Procedure structure for procedure `teste` */

/*!50003 DROP PROCEDURE IF EXISTS  `teste` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `teste`(IN cod int)
BEGIN
   #*** corpo da PROCEDURE ***;
   #... querys.. ;
END */$$
DELIMITER ;

/*Table structure for table `teste` */

DROP TABLE IF EXISTS `teste`;

/*!50001 DROP VIEW IF EXISTS `teste` */;
/*!50001 DROP TABLE IF EXISTS `teste` */;

/*!50001 CREATE TABLE `teste` (
  `Curso` int(11) NOT NULL DEFAULT '0',
  `descritivo` varchar(40) NOT NULL,
  `Valor_receita` decimal(28,2) DEFAULT NULL,
  `Nroalunos` bigint(21) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `vw_exerc3` */

DROP TABLE IF EXISTS `vw_exerc3`;

/*!50001 DROP VIEW IF EXISTS `vw_exerc3` */;
/*!50001 DROP TABLE IF EXISTS `vw_exerc3` */;

/*!50001 CREATE TABLE `vw_exerc3` (
  `Código` int(11) NOT NULL DEFAULT '0',
  `Descritivo` varchar(40) NOT NULL,
  `Valor_Receita` decimal(28,2) DEFAULT NULL,
  `Nro_Alunos` bigint(21) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `vw_listaalunomensalidade` */

DROP TABLE IF EXISTS `vw_listaalunomensalidade`;

/*!50001 DROP VIEW IF EXISTS `vw_listaalunomensalidade` */;
/*!50001 DROP TABLE IF EXISTS `vw_listaalunomensalidade` */;

/*!50001 CREATE TABLE `vw_listaalunomensalidade` (
  `codigo` int(11) NOT NULL DEFAULT '0',
  `nome` varchar(40) NOT NULL,
  `curso` varchar(40) NOT NULL,
  `mensalidade` decimal(28,2) DEFAULT NULL,
  `NroDisciplinas` bigint(21) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `vw_listaalunos` */

DROP TABLE IF EXISTS `vw_listaalunos`;

/*!50001 DROP VIEW IF EXISTS `vw_listaalunos` */;
/*!50001 DROP TABLE IF EXISTS `vw_listaalunos` */;

/*!50001 CREATE TABLE `vw_listaalunos` (
  `Codigo` int(11) NOT NULL DEFAULT '0',
  `Nome` varchar(40) NOT NULL,
  `Curso` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `vw_listagem_alunos_sexo` */

DROP TABLE IF EXISTS `vw_listagem_alunos_sexo`;

/*!50001 DROP VIEW IF EXISTS `vw_listagem_alunos_sexo` */;
/*!50001 DROP TABLE IF EXISTS `vw_listagem_alunos_sexo` */;

/*!50001 CREATE TABLE `vw_listagem_alunos_sexo` (
  `Codigo` int(11) NOT NULL DEFAULT '0',
  `descritivo` varchar(40) NOT NULL DEFAULT '',
  `NroHomens` bigint(21) NOT NULL DEFAULT '0',
  `NroMulheres` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `vw_tabelamensalidades` */

DROP TABLE IF EXISTS `vw_tabelamensalidades`;

/*!50001 DROP VIEW IF EXISTS `vw_tabelamensalidades` */;
/*!50001 DROP TABLE IF EXISTS `vw_tabelamensalidades` */;

/*!50001 CREATE TABLE `vw_tabelamensalidades` (
  `codigo` int(11) NOT NULL DEFAULT '0',
  `nome` varchar(40) NOT NULL,
  `curso` varchar(40) NOT NULL,
  `Mensalidade` decimal(28,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*View structure for view teste */

/*!50001 DROP TABLE IF EXISTS `teste` */;
/*!50001 DROP VIEW IF EXISTS `teste` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `teste` AS select `c`.`id_curso` AS `Curso`,`c`.`descritivo` AS `descritivo`,sum(`d`.`valor`) AS `Valor_receita`,(select count(`ax`.`id_curso`) from `alunos` `ax` where (`c`.`id_curso` = `ax`.`id_curso`)) AS `Nroalunos` from (((`cursos` `c` join `alunos` `a` on((`c`.`id_curso` = `a`.`id_curso`))) join `alunos_disciplinas` `ad` on((`a`.`id_aluno` = `ad`.`id_aluno`))) join `disciplinas` `d` on((`ad`.`id_disciplina` = `d`.`id_disciplina`))) group by `c`.`id_curso` */;

/*View structure for view vw_exerc3 */

/*!50001 DROP TABLE IF EXISTS `vw_exerc3` */;
/*!50001 DROP VIEW IF EXISTS `vw_exerc3` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_exerc3` AS select `c`.`id_curso` AS `Código`,`c`.`descritivo` AS `Descritivo`,sum(`d`.`valor`) AS `Valor_Receita`,(select count(`a1`.`id_curso`) from `alunos` `a1` where (`a1`.`id_curso` = `a`.`id_curso`)) AS `Nro_Alunos` from (((`alunos` `a` join `cursos` `c` on((`a`.`id_curso` = `c`.`id_curso`))) join `alunos_disciplinas` `ad` on((`a`.`id_aluno` = `ad`.`id_aluno`))) join `disciplinas` `d` on((`d`.`id_disciplina` = `ad`.`id_disciplina`))) group by `c`.`id_curso` */;

/*View structure for view vw_listaalunomensalidade */

/*!50001 DROP TABLE IF EXISTS `vw_listaalunomensalidade` */;
/*!50001 DROP VIEW IF EXISTS `vw_listaalunomensalidade` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_listaalunomensalidade` AS select `vw`.`codigo` AS `codigo`,`vw`.`nome` AS `nome`,`vw`.`curso` AS `curso`,`vw`.`Mensalidade` AS `mensalidade`,count(`ad`.`id_aluno`) AS `NroDisciplinas` from (`vw_tabelamensalidades` `vw` join `alunos_disciplinas` `ad` on((`ad`.`id_aluno` = `vw`.`codigo`))) group by `vw`.`codigo` order by `vw`.`nome` */;

/*View structure for view vw_listaalunos */

/*!50001 DROP TABLE IF EXISTS `vw_listaalunos` */;
/*!50001 DROP VIEW IF EXISTS `vw_listaalunos` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_listaalunos` AS select `a`.`id_aluno` AS `Codigo`,`a`.`nome` AS `Nome`,`c`.`descritivo` AS `Curso` from (`alunos` `a` join `cursos` `c` on((`a`.`id_curso` = `c`.`id_curso`))) order by `a`.`nome` */;

/*View structure for view vw_listagem_alunos_sexo */

/*!50001 DROP TABLE IF EXISTS `vw_listagem_alunos_sexo` */;
/*!50001 DROP VIEW IF EXISTS `vw_listagem_alunos_sexo` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_listagem_alunos_sexo` AS select `c`.`id_curso` AS `Codigo`,`c`.`descritivo` AS `descritivo`,count(`a`.`id_curso`) AS `NroHomens`,0 AS `NroMulheres` from (`alunos` `a` join `cursos` `c` on((`a`.`id_curso` = `c`.`id_curso`))) where (`a`.`sexo` = 'M') group by `c`.`id_curso` union select `c`.`id_curso` AS `Codigo`,`c`.`descritivo` AS `descritivo`,0 AS `NroHomens`,count(`a`.`id_curso`) AS `NroMulheres` from (`alunos` `a` join `cursos` `c` on((`a`.`id_curso` = `c`.`id_curso`))) where (`a`.`sexo` = 'F') group by `c`.`id_curso` */;

/*View structure for view vw_tabelamensalidades */

/*!50001 DROP TABLE IF EXISTS `vw_tabelamensalidades` */;
/*!50001 DROP VIEW IF EXISTS `vw_tabelamensalidades` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_tabelamensalidades` AS select `vw`.`Codigo` AS `codigo`,`vw`.`Nome` AS `nome`,`vw`.`Curso` AS `curso`,sum(`d`.`valor`) AS `Mensalidade` from ((`vw_listaalunos` `vw` join `alunos_disciplinas` `ad` on((`vw`.`Codigo` = `ad`.`id_aluno`))) join `disciplinas` `d` on((`d`.`id_disciplina` = `ad`.`id_disciplina`))) group by `vw`.`Codigo` order by `vw`.`Nome` */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
